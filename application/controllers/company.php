<?php
class Company extends CI_Controller{
	
	function index(){
		$_tpl=array();
		$this->load->library('ismobile');
		if (!$this->ismobile->isMobile()){
			$_tpl['header'] = $this->load->view("header_view", $_tpl, true);
			$_tpl['footer'] = $this->load->view("footer_view", $_tpl, true);
			$this->load->view('company_view', $_tpl);
		}else {
			$_tpl['footer'] = $this->load->view("wapfooter_view", $_tpl, true);
			$this->load->view('wapcompany_view', $_tpl);
		}
	}
	
}