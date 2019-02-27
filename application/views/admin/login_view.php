<!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>后台管理--布偶</title>

<link rel="stylesheet" type="text/css" href="/asset/admin/css/login-styles.css">
<style type="text/css">
body,td,th { font-family: "Source Sans Pro", sans-serif; }
body { background-color: #2B2B2B; }
</style>
</head>
<body>


<div class="wrapper">

	<div class="container">
		<h1>欢迎</h1>
		<form class="form">
			<input type="text" placeholder="Username" id="admin_name">
			<input type="password" placeholder="Password" id="admin_pwd">
			<button type="button" id="login-button">登　　录</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	
</div>
<script type="text/javascript" src="/asset/admin/js/jquery.min.js"></script>

<script type="text/javascript">
$('#login-button').click(function(event){
 	var admin_name=$("#admin_name").val();
 	var admin_pwd=$("#admin_pwd").val();
	$.post('/admin/action',{admin_name:admin_name,admin_pwd:admin_pwd},function (data){
		if (data == 1){
			location.href='/admin/home';
		}else {
			alert(data);
		}
	});
});
$("input#admin_pwd").keydown(function (evt) {
    var evt = (evt) ? evt : ((window.event) ? window.event : "")
    var keyCode = evt.keyCode ? evt.keyCode : (evt.which ? evt.which : evt.charCode);
    if (keyCode == 13) {
        $('#login-button').click();
        return false;
    }
});
</script>

</body>
</html>

<!--<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <!--<html lang="en"> <!--<![endif]-->
<!--<head>
   <meta charset="utf-8" />
   <title>登录页面 - 布偶科技</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <link href="/asset/admin/css/bootstrap.min.css" rel="stylesheet" />
   <link href="/asset/admin/css/font-awesome.css" rel="stylesheet" />
   <link href="/asset/admin/css/style.css" rel="stylesheet" />
   <script type="text/javascript" src="/asset/js/jquery-1.8.0.min.js"></script>
</head>
<script>
$(function (){
	$("#login_btn").click(function (){
		var admin_name=$("#admin_name").val();
		var admin_pwd=$("#admin_pwd").val();
		$.post('/admin/action',{admin_name:admin_name,admin_pwd:admin_pwd},function (data){
			if (data == 1){
				location.href='/admin/home';
			}else {
				alert(data);
			}
		});
	})
	$("input#admin_pwd").keydown(function (evt) {
        var evt = (evt) ? evt : ((window.event) ? window.event : "")
        var keyCode = evt.keyCode ? evt.keyCode : (evt.which ? evt.which : evt.charCode);
        if (keyCode == 13) {
            $('#login_btn').click();
            return false;
        }
    });
})
</script>
<body class="lock">
    <div class="lock-header">
        <a class="center" id="logo" href="/">
            <img class="center" alt="logo" src="/asset/admin/images/logo.png">
        </a>
    </div>
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>登录</span>
            </div>
        </div>
        <div class="metro double-size green">
			<div class="input-append lock-input">
        		<input type="text" name="admin_name" id="admin_name" placeholder="用户名">
        	</div>
        </div>
        <div class="metro double-size yellow">
        	<div class="input-append lock-input">
        		<input type="password" name="admin_pwd" id="admin_pwd" placeholder="密码">
        	</div>
        </div>
        <div class="metro single-size terques login">
        	<button type="button" id="login_btn" class="btn login-btn"> 登录<i class=" icon-long-arrow-right"></i></button>
        </div>
    </div>
</body>
</html>-->