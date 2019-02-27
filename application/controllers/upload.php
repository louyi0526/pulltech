<?php
class Upload extends CI_Controller
{

    function index(){
    	$folder=$_GET['folder'];
    	$this->server_url = '/uploads/'.$folder; //文件服务器url
    	$this->server_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/'.$folder; //文件保存目录路径
        $ext_arr = array(
            'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
            'flash' => array('swf', 'flv'),
            'media' => array('swf', 'flv', 'mp3', 'wav', 'wma', 'wmv', 'mid', 'avi', 'mpg', 'asf', 'rm', 'rmvb'),
            'file' => array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2'),
        );
//最大文件大小
        $max_size = 1 * 1024 * 1024;
//PHP上传失败
        if (!empty($_FILES['imgFile']['error'])) {
            switch ($_FILES['imgFile']['error']) {
                case '1':
                    $error = '超过php.ini允许的大小。';
                    break;
                case '2':
                    $error = '超过表单允许的大小。';
                    break;
                case '3':
                    $error = '图片只有部分被上传。';
                    break;
                case '4':
                    $error = '请选择图片。';
                    break;
                case '6':
                    $error = '找不到临时目录。';
                    break;
                case '7':
                    $error = '写文件到硬盘出错。';
                    break;
                case '8':
                    $error = 'File upload stopped by extension。';
                    break;
                case '999':
                default:
                    $error = '未知错误。';
            }
            $this->alert($error);
        }

//有上传文件时
        if (empty($_FILES) === false) {
            //原文件名
            $file_name = $_FILES['imgFile']['name'];
            //服务器上临时文件名
            $tmp_name = $_FILES['imgFile']['tmp_name'];
            //文件大小
            $file_size = $_FILES['imgFile']['size'];
            //检查文件名
            if (!$file_name) {
                $this->alert("请选择文件。");
            }
            //检查目录
            if (@is_dir($this->server_path) === false) {
                $this->alert("上传目录不存在。");
            }
            //检查目录写权限
            if (@is_writable($this->server_path) === false) {
                $this->alert("上传目录没有写权限。");
            }
            //检查是否已上传
            if (@is_uploaded_file($tmp_name) === false) {
                $this->alert("上传失败。");
            }
            //检查文件大小
            if ($file_size > $max_size) {
                $this->alert("上传文件大小超过限制。");
            }
            //检查目录名
            $dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
            if (empty($ext_arr[$dir_name])) {
                $this->alert("目录名不正确。");
            }
            //获得文件扩展名
            $temp_arr = explode(".", $file_name);
            $file_ext = array_pop($temp_arr);
            $file_ext = trim($file_ext);
            $file_ext = strtolower($file_ext);
            //检查扩展名
            if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
                $this->alert("上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。");
            }
            //创建文件夹

            //新文件名
            $new_file_name = date("YmdHis") . rand(10000, 99999) . '.' . $file_ext;
            //移动文件
            $file_path = $this->server_path;
            $this->create_folder($file_path);
            if (move_uploaded_file($tmp_name, $file_path . '/' . $new_file_name) === false) {
                $this->alert("上传文件失败。");
            }
            $file_url = $this->server_url . '/' . $new_file_name;

            $this->alert('', 0, $file_url);
        }
    }

    private function create_folder($_path)
    {
        if (!file_exists($_path)) {
            $this->create_folder(dirname($_path));
            mkdir($_path, 0777);
        }
    }

    private function alert($_msg, $_error = 1, $_url = '')
    {
        header('Content-type: text/html; charset=UTF-8');
        $result = array(
            'error' => $_error,
            'message' => $_msg
        );
        if (!empty($_url)) {
            $result['url'] = $_url;
        }
        echo json_encode($result);
        exit;
    }

}