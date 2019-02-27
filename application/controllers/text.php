<?php
class Text extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('ismobile');
		date_default_timezone_set("PRC");
	}

	function index(){
		$news=$this->crud_model->sel_info(array('title','create_time'),'','news','create_time desc');
		$info=json_encode($news);
		print_r($info);
		return json_encode($news);
	}
	
	function info(){
		$news=$this->crud_model->sel_info(array('title','create_time'),'','product','create_time desc');
		$info=json_encode($news);
		print_r($info);
		return json_encode($news);
	}
	
	function upload(){
		$name=$_POST['name'];
		$pwd=$_POST['pwd'];
		$id=$this->crud_model->ins_info(array('title'=>$name,'subhead'=>$pwd),'news');
		if ($id > 0){
			return 1;
		}
	}
	
}