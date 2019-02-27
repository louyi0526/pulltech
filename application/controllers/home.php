<?php
class Home extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library('ismobile');
		date_default_timezone_set("PRC");
	}
	
	function index(){
		$_tpl=array();
		$img=$this->crud_model->queryRow("SELECT value FROM `asset` WHERE `key` = 'home_img'");
		$img=explode(",",$img['value']);
		$_tpl['img']=json_encode($img);
		$_tpl['news']=$this->crud_model->sel_info('','','news','create_time desc');
		$_tpl['product']=$this->crud_model->sel_info('','','product','create_time desc',1,8);
		if (!$this->ismobile->isMobile()){
			$this->load->view('home_view',$_tpl);
 		}else {
 			$this->load->view('waphome_view',$_tpl);
 		}
	}
	
	function us_send(){
		$name=$this->input->post('name');
		$tel=$this->input->post('tel');
		$info=$this->input->post('info');
		if ($name == '' || $tel == '' || $info == ''){
			echo '请填写完整，谢谢！';
			exit;
		}
		$arr=array(
			'name'=>$name,
			'tel'=>$tel,
			'content'=>$info,
			'create_time'=>time()
		);
		$rel=$this->crud_model->ins_info($arr,'contact');
		if ($rel > 0){
			echo '1';
		}else {
			echo 'Failed to send';
		}
	}
	
	function case_list(){
		$info=$this->crud_model->sel_info(array('id','title','titleimg'),'','product');
		echo json_encode($info);
	}
	
	function case_one(){
		$where=array();
		$id=$this->input->post('id');
		if (!empty($id)){
			$where['id']=$id;
		}
		$rel=$this->crud_model->sel_info('',$where,'product','create_time desc');
		$rel[0]['create_time']=date("Y-m-d H:i:s",$rel[0]['create_time']);
		if (empty($rel)){
			echo '没有找到相关产品！';
		}else {
			echo json_encode($rel);
		}
	}
	
	function news_list(){
		$data=$this->input->post('data');
		if($data=="abnews"){
			$database='news';
	    }else {
			$database='recruit';
	    }
    	$info=$this->crud_model->sel_info(array('id','title','subhead','create_time'),array('status'=>1),$database,'create_time desc');
	    if (!empty($info)){
	    	foreach ($info as $key => $rows){
	    		$info[$key]['y']=date("Y",$rows['create_time']);
	    		$info[$key]['m']=date("m-d",$rows['create_time']);
	    		unset($info[$key]['create_time']);
	    	}
	    }
		echo json_encode($info);
	}
	
	function news_one(){
		$where=array();
		$id=$this->input->post('id');
		$data=$this->input->post('data');
		if($data=="abnews"){
			$database='news';
		}else {
			$database='recruit';
		}
		if (!empty($id)){
			$where['id']=$id;
		}
		$info=$this->crud_model->sel_info('',$where,$database,'create_time desc');
		$info[0]['create']=date("Y-m-d H:i:s",$info[0]['create_time']);
		if (empty($info)){
			echo '没有找到相关产品！';
		}else {
			echo json_encode($info);
		}
	}
	
}