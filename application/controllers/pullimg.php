<?php
class Pullimg extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('crud_model');
	}
	
	function index(){
		$info=$this->crud_model->sel_info(array('title','titleimg'),array('id'=>'1'),'product');
		return json_encode($info);
	}
	
	
}