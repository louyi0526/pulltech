<?php
class CI_Uploadimg {
	
	function upload($imgFile,$server_url,$server_path){ //文件服务器url,文件保存目录路径
		$ext_arr = array(
				'image' => array('gif', 'jpg', 'jpeg', 'png', 'bmp'),
		);
		//最大文件大小
		$max_size = 5 * 1024 * 1024;
		$arr=array(
			'error'=>'',
			'status'=>0
		);
		//PHP上传失败
		if (!empty($imgFile['error'])) {
			switch ($imgFile['error']) {
				case '1':
					$arr['error'] = '超过php.ini允许的大小。';
					break;
				case '2':
					$arr['error'] = '超过表单允许的大小。';
					break;
				case '3':
					$arr['error'] = '图片只有部分被上传。';
					break;
				case '4':
					$arr['error'] = '请选择图片。';
					break;
				case '6':
					$arr['error'] = '找不到临时目录。';
					break;
				case '7':
					$arr['error'] = '写文件到硬盘出错。';
					break;
				case '8':
					$arr['error'] = 'File upload stopped by extension。';
					break;
				case '999':
				default:
					$arr['error'] = '未知错误。';
			}
			return $arr['error'];
		}
		
		//有上传文件时
		if (empty($_FILES) === false) {
			//原文件名
			$file_name = $imgFile['name'];
			//服务器上临时文件名
			$tmp_name = $imgFile['tmp_name'];
			//文件大小
			$file_size = $imgFile['size'];
			//检查文件名
			if (!$file_name) {
				$arr['error']="请选择文件。";
				return $arr;
			}
			//检查目录
			if (@is_dir($server_path) === false) {
				$arr['error']="上传目录不存在。";
				return $arr;
			}
			//检查目录写权限
			if (@is_writable($server_path) === false) {
				$arr['error']="上传目录没有写权限。";
				return $arr;
			}
			//检查是否已上传
			if (@is_uploaded_file($tmp_name) === false) {
				$arr['error']="上传失败。";
				return $arr;
			}
			//检查文件大小
			if ($file_size > $max_size) {
				$arr['error']="上传文件大小超过限制。";
				return $arr;
			}
	
			//检查目录名
			$dir_name = empty($_GET['dir']) ? 'image' : trim($_GET['dir']);
			if (empty($ext_arr[$dir_name])) {
				$arr['error']="目录名不正确。";
				return $arr;
			}
			//获得文件扩展名
			$temp_arr = explode(".", $file_name);
			$file_ext = array_pop($temp_arr);
			$file_ext = trim($file_ext);
			$file_ext = strtolower($file_ext);
			//检查扩展名
			if (in_array($file_ext, $ext_arr[$dir_name]) === false) {
				$arr['error']="上传文件扩展名是不允许的扩展名。\n只允许" . implode(",", $ext_arr[$dir_name]) . "格式。";
				return $arr;
			}
			//创建文件夹
	
			//新文件名
			$new_file_name = date("YmdHis") . rand(10000, 99999) . '.' . $file_ext;
			//移动文件
			if (move_uploaded_file($tmp_name, $server_path . '/' . $new_file_name) === false) {
				$arr['error']="上传文件失败。";
				return $arr;
			}
			$file_url = $server_url . '/' . $new_file_name;
			$arr=array(
				'error'=>$file_url,
				'status'=>1
			);
			return $arr;
		}
	}
	
}