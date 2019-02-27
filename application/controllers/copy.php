<?php
class Copy extends CI_Controller{
	
	function index(){
		$this->load->view('copy_view');
	}
	
	function copynews(){
		//$url=$this->input->post('url');
		$url = 'http://zj.qq.com/a/20160203/019524.htm?qqcom_pgv_from=tips'; //这儿填页面地址
		$info=file_get_contents($url);
		//$info=iconv("gb2312","utf-8",$info);
		
		//preg_replace(preg_match_all('/<img[^>]*>/i', $info));
		
// 		foreach ($match[0] as $val){
// 			$this->insertToStr($val, 9, $url);
// 			echo $newStr;
// 		}
		//$this->crud_model->ins_info(array('news'=>$info,'create_time'=>time()),'copy');
		
		//$aaa=$this->grabImage('http://mmbiz.qpic.cn/mmbiz/4qjBWmyuZ2hA499JwI75zYcdTcZW2kznAicfPO62yc7iaEgpuUd7OAy98YIWmFLGaCgLj4I83lK8oNBg9TDQBuhQ/0?wx_fmt=gif');
		//print_r($aaa);
		//echo $aaa;
		echo $info;
	}
	
	function insertToStr($str, $i, $substr){
		//指定插入位置前的字符串
		$startstr="";
		for($j=0; $j<$i; $j++){
			$startstr .= $str[$j];
		}
	
		//指定插入位置后的字符串
		$laststr="";
		for ($j=$i; $j<strlen($str); $j++){
			$laststr .= $str[$j];
		}
	
		//将插入位置前，要插入的，插入位置后三个字符串拼接起来
		$str = $startstr . $substr . $laststr;
	
		//返回结果
		return $str;
	}
	
	function grabImage($url=""){
		//$url 为空则返回 false;
		if($url == ""){return false;}
	
		$a=getimagesize($url);
		$ext = explode("/",$a['mime']);
		
		if($ext[1] == "gif" || $ext[1] == "jpg"){
			$filename = time().".".$ext[1];//以时间戳另起名
				
			//开始捕捉
			ob_start();
			readfile($url);
			$img = ob_get_contents();
			ob_end_clean();
			$size = strlen($img);
			$fp2 = fopen($_SERVER['DOCUMENT_ROOT']."/uploads/".$filename , "a");
			fwrite($fp2, $img);
			fclose($fp2);
				
			return "/uploads/".$filename;
		}else {
			return false;
		}
	}
	
	function news(){
		$info=$this->crud_model->sel_info('',array('id'=>3),'copy');
		echo $info[0]['news'];
	}
	
	function aaa(){
		$info='<img src="/uploads/homeimg/2015072708305387549.jpg">';
		$url="http://www.pulltech.cn";
		echo str_replace('<img src="','<img src="'.$url,$info);
	}
	
}