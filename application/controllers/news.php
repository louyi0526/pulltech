<?php
class News extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('crud_model');
	}
	
	function details(){
		$table=$this->uri->segment("3");
		$id=$this->uri->segment("4");
		$_tpl=array();
		$_tpl['info']=$this->crud_model->sel_info('',array('id'=>$id),$table);
		$this->load->view('wapnews_view',$_tpl);
	}
	
	
}