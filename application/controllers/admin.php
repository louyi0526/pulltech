<?php

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
		$this->load->model('crud_model');
		$this->load->library('check_login');
		date_default_timezone_set("PRC");
    }
    
    //管理台登录
    function index()
    {
    	$_tpl = array();
    	$this->load->view('admin/login_view', $_tpl);
    }
    
    function action (){
    	$admin_name=$this->input->post('admin_name');
    	$admin_pwd=$this->input->post('admin_pwd');
    	$where=array('admin_name'=>$admin_name,'password'=>md5($admin_pwd),'is_del'=>0);
    	$admin=$this->crud_model->sel_info(array('id','role'),$where,'admin_user');
    	if (!empty($admin)){
    		$_SESSION['admin_id']=$admin[0]['id'];
    		$_SESSION['admin_name']=$admin_name;
    		$_SESSION['admin_role']=$admin[0]['role'];
    		$data=array(
    				'admin_id'=>$admin[0]['id'],
    				'admin_name'=>$admin_name,
    				'log_status'=>1,
    				'log_time'=>time()
    		);
    		$id = $this->crud_model->ins_info($data,'admin_log');
    		if ($id > 0){
    			echo 1;
    		}else {
    			echo "系统超时，请稍候";
    		}
    	}else {
    		echo "用户名或密码错误";
    	}
    }

    //管理台首页
    function home()
    {
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
			redirect(base_url('/admin'));
    	}
		$_tpl = array();
		$_tpl['info']=$this->crud_model->sel_info('',array('is_del'=>0),'admin_user');
		$_tpl['module']=$this->crud_model->sel_info(array('id','name'),array('parent_id'=>0,'is_del'=>0),'module');
		$this->_out('admin/admin_view', $_tpl);
    }
    
    //添加管理员 
//     function add(){
//     	$admin_id=$this->check_login->get_session('admin_id',FALSE);
//     	if (!$admin_id){
// 			redirect(base_url('/admin'));
//     	}
//     	$_tpl = array();
// 		$this->_out('admin/admin_add_view', $_tpl);
//     }
    
    function ins(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
			echo 'no_login';
			exit;
    	}
    	$admin_role=$_SESSION['admin_role'];
    	if ($admin_role != 'all'){
    		echo '没有权限添加管理员！';
    		exit;
    	}
    	$admin_name=$this->input->post('admin_name');
		$rel=$this->checkname($admin_name);
		if ($rel != 1){
			echo $rel;
    		exit;
		}
		$admin_pwd=$this->input->post('admin_pwd');
		if ($admin_pwd == ''){
			echo '请输入密码';
			exit;
		}
		$admin_pwd_qr=$this->input->post('admin_pwd_qr');
		if ($admin_pwd != $admin_pwd_qr){
			echo '二次密码不相同，请重新输入';
			exit;
		}
		$role=$this->input->post('role');
		if (empty($role)){
			echo '请选择至少一个权限';
			exit;
		}
		$data=array(
			'admin_name'=>$admin_name,
			'password'=>md5($admin_pwd),
			'role'=>$role,
			'create_time'=>time()
		);
		$id=$this->crud_model->ins_info($data,'admin_user');
		if ($id > 0){
			echo 1;
		}
    }
    
    //修改管理员权限
    function sub_alter(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
			echo 'no_login';
			exit;
    	}
    	$admin_role=$_SESSION['admin_role'];
    	if ($admin_role != 'all'){
    		echo '没有权限修改其他管理员管理权限！';
    		exit;
    	}
    	$admin_name=$this->input->post('xg_name');
    	$rel=$this->crud_model->sel_info(array('role'),array('admin_name'=>$admin_name,'is_del'=>0),'admin_user');
    	if ($rel[0]['role'] == 'all'){
    		echo '不能修改最高权限管理账号';
    		exit;
    	}
    	$role=$this->input->post('role');
    	if (empty($role)){
    		echo '请选择至少一个权限';
    		exit;
    	}
    	$upd=$this->crud_model->upd_info(array('role'=>$role,'alter_time'=>time()),array('admin_name'=>$admin_name),'admin_user');
    	if ($upd){
    		echo 1;
    	}else {
    		echo '权限修改失败';
    	}
    }
    
    //验证管理用户名
    function check(){
    	$admin_name=$this->input->post('admin_name');
    	echo $this->checkname($admin_name);
    }
    
    function checkname($admin_name){
    	$query=$this->crud_model->sel_info(array('admin_name'),array('admin_name'=>$admin_name,'is_del'=>0),'admin_user');
    	if (!empty($query) && $query[0]['admin_name'] == $admin_name){
    		return '管理员名存在';
    	}
    	return 1;
    }
    
    //注销管理员
    function is_del(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
			echo 'no_login';
			exit;
    	}
    	$admin_role=$_SESSION['admin_role'];
    	if ($admin_role != 'all'){
    		echo '没有权限注销管理员！';
    		exit;
    	}
    	$id=$this->input->post('id');
    	$rel=$this->crud_model->sel_info(array('role'),array('id'=>$id,'is_del'=>0),'admin_user');
    	if ($rel[0]['role'] == 'all'){
    		echo '不能删除最高权限管理账号';
    		exit;
    	}
    	$upd=$this->crud_model->upd_info(array('is_del'=>1,'cancel_time'=>time()),array('id'=>$id),'admin_user');
    	if ($upd){
    		echo 1;
    	}else {
    		echo '注销失败';
    	}
    }
    
    //修改密码
    function alter_pwd(){
    	$admin_name=$this->check_login->get_session('admin_name',FALSE);
    	if (!$admin_name){
    		echo 'no_login';
    		exit;
    	}
    	$old_pwd=$this->input->post('old_pwd');
    	if ($old_pwd == ''){
    		echo '请输入原密码';
    		exit;
    	}
    	$rel=$this->crud_model->sel_info(array('id'),array('admin_name'=>$admin_name,'password'=>md5($old_pwd)),'admin_user');
    	if (!$rel){
    		echo '原密码错误';
    	}
    	$new_pwd=$this->input->post('new_pwd');
    	if ($new_pwd == ''){
			echo '新密码不能为空';
			exit;
		}
    	$qr_pwd=$this->input->post('qr_pwd');
    	if ($qr_pwd != $new_pwd){
    		echo '二次密码不同，请重新输入';
    		exit;
    	}
    	if ($old_pwd == $new_pwd){
    		echo '新密码和原密码相同，请重新输入';
    		exit;
    	}
    	$upd=$this->crud_model->upd_info(array('password'=>md5($new_pwd)),array('admin_name'=>$admin_name),'admin_user');
    	if ($upd){
    		echo 1;
    	}else {
    		echo '密码修改失败';
    	}
    }
    
    //新闻列表
    function news(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		redirect(site_url('/login'));
    	}
    	$_tpl = array();
    
    	$_tpl['news']=$this->crud_model->sel_info(array('id','title','class','create_time','subhead'),array('status'=>1),'news','create_time desc');
    	$this->_out('admin/news_view', $_tpl);
    }
    
    //编辑时获取原内容
    function editor(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		echo 'no_login';
    		exit;
    	}
    	$id=$this->input->post('id');
    	$info=$this->crud_model->sel_info(array('id','title','class','subhead','content','create_time'),array('id'=>$id),'news');
    	foreach ($info as $k => $rows){
    		$info[$k]['create_time']=date("Y-m-d H:i:s",$rows['create_time']);
    	}
    	echo json_encode($info);
    }
    
    //添加新闻
    function addnews(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		redirect(site_url('/home'));
    	}
    	$_tpl=array();
    	$_tpl['info']=array(
    			'id'=>'',
    			'title'=>'',
    			'class'=>'',
    			'content'=>'',
    			'subhead'=>''
    	);
    	if (isset($_GET['id']) && is_numeric($_GET['id'])){
    		$id=$_GET['id'];
    		$info=$this->crud_model->sel_info(array('id','title','class','content','subhead'),array('id'=>$id),'news');
    		$_tpl['info']=$info[0];
    	}
    
    	$this->_out('admin/news_add_view', $_tpl);
    }
    //插入数据
    function insnews(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		echo "no_login";
    		exit;
    	}
    	 
    	$title=$this->input->post('title');
    	if ($title == ''){
    		echo '标题不能为空';
    		exit;
    	}
    	
    	$subhead=$this->input->post('subhead');
    	if ($subhead == ''){
    		echo "标题不能为空";
    		exit;
    	}
    	 
    	$_class=$this->input->post('_class');
    	$create_time=$this->input->post('create_time');
    	if (empty($_class)){
    		echo "请选择类型";
    		exit;
    	}
    
     	$contents = $this->input->post('content');						//详情说明
//     	if (get_magic_quotes_gpc()) {
//     		$contents = stripslashes($this->input->post('editor_contents'));
//     	} else {
//     		$contents = $this->input->post('editor_contents');
//     	}
    
    	$data=array(
    			'title'=>$title,
    			'subhead'=>$subhead,
    			'class'=>$_class,
    			'content'=>$contents
    	);
    	if (empty($create_time)){
    		$data['create_time']=time();
    	}else {
    		$data['create_time']=strtotime($create_time);
    	}
    	$newsid=$this->input->post('newsid');
    	if (empty($newsid)){
    		$id=$this->crud_model->ins_info($data,'news');
    		if ($id > 0){
    			echo "1";
    		}else {
    			echo "-1";
    		}
    	}else {
    		$upd=$this->crud_model->upd_info($data,array('id'=>$newsid),'news');
    		if ($upd){
    			echo "2";
    		}else {
    			echo "-2";
    		}
    	}
    }
    
    //首页滚动图片
    function img(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		redirect(site_url('/admin'));
    	}
    	$_tpl=array();
    	$sql="SELECT value FROM `asset` WHERE `key` = 'home_img'";
    	$home_img=$this->crud_model->queryRow($sql);
    	$_tpl['home_img']=explode(",", $home_img['value']);
    	$this->_out('admin/imghome_view', $_tpl);
    }
    //首页滚动图片上传
    function upload_img(){
    	$admin_role=$this->check_login->get_session('admin_role',FALSE);
    	if ($admin_role != 'all'){
    		echo '<script>parent.alert("权限不够，不能修改图片");</script>';
    		exit;
    	}
    	$img=$_POST['img'];
    	$server_url = '/uploads/homeimg'; //文件服务器url
    	$server_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/homeimg'; //文件保存目录路径
    	$imgFile=$_FILES['imgFile'];
    	$this->load->library('uploadimg');
    	$rel=$this->uploadimg->upload($imgFile,$server_url,$server_path);
    	if ($rel['status'] == 0){
    		echo '<script>parent.alert("'.$rel['error'].'");</script>';
    	}else {
    		$sql="SELECT value FROM `asset` WHERE `key` = 'home_img'";
    		$home_img=$this->crud_model->queryRow($sql);
    		$home_img=explode(",", $home_img['value']);
    		$arr=array();
    		foreach ($home_img as $key => $rows){
    			if ($img == ($key+1)){
    				unlink($_SERVER['DOCUMENT_ROOT'].$rows);
    				$rows=$rel['error'];
    			}
    			$arr[$key]=$rows;
    		}
    		if ($img == 0){
    			$arr[]=$rel['error'];
    		}
    		$home_img = implode(",", $arr);
    		$this->crud_model->upd_info(array('value'=>$home_img),array('key'=>'home_img'),'asset');
    		echo '<script>parent.location.reload();</script>';
    	}
    }
    
    //产品列表
    function product(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		redirect(site_url('/admin'));
    	}
    	$_tpl = array();
    	$_tpl['product']=$this->crud_model->sel_info(array('id','title','create_time'),'','product','create_time desc');
    	$this->_out('admin/product_view', $_tpl);
    }
    
    //产品编辑
    function edit_product(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		echo 'no_login';
    		exit;
    	}
    	$id=$this->input->post('id');
    	$info=$this->crud_model->sel_info(array('id','title','titleimg','content'),array('id'=>$id),'product');
    	echo json_encode($info);
    }
    
    //添加产品
//     function addproduct(){
//     	$admin_id=$this->check_login->get_session('admin_id',FALSE);
//     	if (!$admin_id){
//     		redirect(site_url('/home'));
//     	}
//     	$_tpl=array();
//     	$_tpl['info']=array(
//     			'id'=>'',
//     			'title'=>'',
//     			'titleimg'=>'',
//     			'content'=>'',
//     	);
//     	if (isset($_GET['id']) && is_numeric($_GET['id'])){
//     		$id=$_GET['id'];
//     		$info=$this->crud_model->sel_info(array('id','title','content','titleimg'),array('id'=>$id),'product');
//     		$_tpl['info']=$info[0];
//     	}
    
//     	$this->_out('admin/product_add_view', $_tpl);
//     }
    //插入产品数据
    function insproduct(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		redirect(site_url('/login'));
    	}
    
    	$title=$this->input->post('title');
    	if ($title == ''){
    		echo '<script>alert("请填写标题");</script>';
    		exit;
    	}
    	
    	$titleimg=$this->input->post('titleimg');
    	if ($titleimg == ''){
    		echo '<script>alert("请选择图片");</script>';
    		exit;
    	}
    	 
//     	$contents = '';						//详情说明
//     	if (get_magic_quotes_gpc()) {
//     		$contents = stripslashes($this->input->post('editor_contents'));
//     	} else {
//     		$contents = $this->input->post('editor_contents');
//     	}
    	$contents = $this->input->post('content');
    	$data=array(
    			'title'=>$title,
    			'titleimg'=>$titleimg,
    			'content'=>$contents,
    	);
    
    	$productid=$this->input->post('productid');
    	if (empty($productid)){
    		$data['create_time']=time();
    		$id=$this->crud_model->ins_info($data,'product');
    		if ($id > 0){
    			echo '1';
    		}else {
    			echo '-1';
    		}
    	}else {
    		$upd=$this->crud_model->upd_info($data,array('id'=>$productid),'product');
    		if ($upd){
    			echo '2';
    		}else {
    			echo '-2';
    		}
    	}
    }
    
    //产品列表图片上传
    function upload_titleimg(){
    	$admin_role=$this->check_login->get_session('admin_role',FALSE);
    	if ($admin_role != 'all'){
    		echo '<script>parent.alert("权限不够，不能修改图片");</script>';
    		exit;
    	}
    	$server_url = '/uploads/product'; //文件服务器url
    	$server_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/product'; //文件保存目录路径
    	$imgFile=$_FILES['imgFile'];
    	$this->load->library('uploadimg');
    	$rel=$this->uploadimg->upload($imgFile,$server_url,$server_path);
    	if ($rel['status'] == 0){
    		echo '<script>parent.alert("'.$rel['error'].'");</script>';
    	}else {
    		echo '<script>parent.$("#titleimg").val("'.$rel['error'].'");parent.$("#upimg").attr("src","'.$rel['error'].'");</script>';
    	}
    }
    
    //联系我们
    function contact(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		redirect(site_url('/admin'));
    	}
    	$where=array(
    		'is_del'=>0,
    		'is_read'=>0,
    	);
    	$read=$this->input->get('read');
    	$del=$this->input->get('del');
    	if (isset($read) || isset($del)){
    		$where['is_read']=$read;
    		$where['is_del']=$del;
    	}
    	$_tpl['contact']=$this->crud_model->sel_info('',$where,'contact');
    	$this->_out('admin/contact_view', $_tpl);
    }
    
    //删除留言
    function del_contact(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		echo 'no_login';
    		exit;
    	}
    	$id=$this->input->post('id');
    	$rel=$this->crud_model->upd_info(array('is_del'=>1),array('id'=>$id),'contact');
    	if ($rel){
    		echo 1;
    	}else {
    		echo '系统超时';
    	}
    }
    //删除封面图片
    function del_img(){
    	$admin_id=$this->check_login->get_session('admin_id',FALSE);
    	if (!$admin_id){
    		echo 'no_login';
    		exit;
    	}
    	$id=$this->input->post('id');
    	$sql="SELECT value FROM `asset` WHERE `key` = 'home_img'";
    	$home_img=$this->crud_model->queryRow($sql);
    	$home_img=explode(",", $home_img['value']);
    	unset($home_img[($id-1)]);
    	$home_img=implode(",",$home_img);
    	$rel=$this->crud_model->upd_info(array('value'=>$home_img),array('key'=>'home_img'),'asset');
    	if ($rel){
    		echo 1;
    	}else {
    		echo '系统超时';
    	}
    }

	function _out($_view, $_tpl = null){
		$_tpl['header'] = $this->load->view("admin/header_view", $_tpl, true);
		$_tpl['footer'] = $this->load->view("admin/footer_view", $_tpl, true);
        $this->load->view($_view, $_tpl);
    }
}

?>