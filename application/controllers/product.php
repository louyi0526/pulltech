<?php
class Product extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('crud_model');
		$this->load->library('ismobile');
	}
	
	function index(){
		$_tpl=array();
		$_tpl['product']=$this->crud_model->sel_info('','','product','create_time desc');
		$this->_out('product_view', $_tpl);
	}
	
	function prod(){
		$_tpl=array();
		$id=$this->uri->segment("3");
		$_tpl['product']=$this->crud_model->queryRow('select * from product where id="'.$id.'"');
		$this->_out('wapprod_view', $_tpl);
	}
	
	function _out($_view, $_tpl = null){
		if (!$this->ismobile->isMobile()){
			$_tpl['header'] = $this->load->view("header_view", $_tpl, true);
			$_tpl['footer'] = $this->load->view("footer_view", $_tpl, true);
			$this->load->view($_view, $_tpl);
		}else {
			$_tpl['footer'] = $this->load->view("wapfooter_view", $_tpl, true);
			$this->load->view('wap'.$_view, $_tpl);
		}
	}
}