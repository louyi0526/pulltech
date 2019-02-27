<?php
class Error404 extends CI_Controller{
	
	function index(){
		$_tpl=array();
		$_tpl['header'] = $this->load->view("header_view", $_tpl, true);
		$_tpl['footer'] = $this->load->view("footer_view", $_tpl, true);
		$this->load->view('error404_view',$_tpl);
	}
	
}