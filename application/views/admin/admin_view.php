<!DOCTYPE html>
<!--[if lt IE 7]>

<html class="lt-ie9 lt-ie8 lt-ie7" lang="en">

<![endif]-->
<!--[if IE 7]>

<html class="lt-ie9 lt-ie8" lang="en">

<![endif]-->
<!--[if IE 8]>

<html class="lt-ie9" lang="en">

<![endif]-->
<!--[if gt IE 8]>
<!-->

<html lang="en">
  
  <!--
<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>
      后台管理系统-用户
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link href="/asset/admin/icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="icomoon/lte-ie7.js">
    </script>
    <![endif]-->
    <link href="/asset/admin/css/bootstrap-editable.css" rel="stylesheet">
    <link href="/asset/admin/css/select2.css" rel="stylesheet">
    <link href="/asset/admin/css/main.css" rel="stylesheet"> <!-- Important. For Theming change primary-color variable in main.css  -->
  </head>
  <body>
	<?=$header; ?>
  		<div class="dashboard-wrapper">
          <div class="left-sidebar">
          	<?php if ($_SESSION['admin_role'] == 'all'){?>
            <div class="row-fluid adminlist" id="adminlist" style="display: block">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      <a>管理员列表</a>
                    </div>
                  </div>
                  <div class="widget-body">
                    <div id="dt_example" class="example_alt_pagination">
                      <table class="table table-striped table-hover table-bordered pull-left quanxian" id="data-table">
                        <thead>
                        <tr>
                          <th style="width:12%">用户名</th>
                          <th style="width:50%" >权限</th>
                          <th style="width:16%">编辑</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($info as $rows){
                        	$role=explode(",",$rows['role']);
                        ?>
                        <tr class="gradeC info" id="tr_<?=$rows['id']; ?>">
                          <td>
                            <?=$rows['admin_name']; ?>
                          </td>
                          <td>
                          	<?php foreach ($module as $val){?>
                            <?php if (in_array('all',$role) || in_array($val['id'],$role)){ ?><input type="checkbox" checked disabled="true" /> <label class="label label-info chk" for="news"><?=$val['name'] ?></label><?php }?>
                            <?php }?>
                          </td>
                          <td>
                          	<?php if ($rows['role'] != 'all'){?>
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-info">操作</button>
                              <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">
                                <span class="caret">
                                </span>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#editmes" onclick="editmes('<?=$rows['admin_name']; ?>','<?=$rows['role']; ?>')">修改权限</a>
                                </li>
                                <li>
                                  <a href="#" onclick="is_del('<?=$rows['id']; ?>')">删除</a>
                                </li>
                              </ul>
                            </div>
                            <?php }?>
                          </td>
                        </tr>
                        <?php }?>
                        </tbody>
                      </table>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
            <div class="row-fluid editadmin" id="editadmin" style="display: none" >
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      <a id="editmes">修改管理员</a>
                    </div>
                  </div>
                  <div class="widget-body">
                    <div class="company">
                      <form class="form-horizontal no-margin" action="#">
                        <hr/>
                        <div class="control-group">
                          <label class="control-label">管理员名：</label>
                          <div class="controls input-icon">
                            <input type="text" name="a_name" id="xg_name" disabled="true" />
                          </div>
                        </div>
                        <!--  <div class="control-group">
                          <label class="control-label">修改密码：</label>
                          <div class="controls input-icon">
                            <input type="text" name="a_pwd" />
                          </div>
                        </div>-->
                        <div class="control-group">
                          <label class="control-label">权限：</label>
                          <div class="controls input-icon">
                          	<?php foreach ($module as $val){?>
                            <input type="checkbox" id="edit_<?=$val['id']; ?>" class="edit_role" name="edit_role" value="<?=$val['id']; ?>"/> <label class="label label-info chk" for="edit_<?=$val['id']; ?>"><?=$val['name'] ?></label>
                            <?php }?>
                          </div>
                        </div>
                        <hr/>
                        <div class="next-prev-btn-container pagination-centered">
                          <a href="javascript:sub_alter();" class="button" >确认修改</a>
                        </div>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row-fluid addadmin" id="addadmin" style="display: none" >
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      <a id="addmes">添加管理员</a>
                    </div>
                  </div>
                  <div class="widget-body">
                    <div class="company">
                      <form class="form-horizontal no-margin" action="#">
                        <hr/>
                        <div class="control-group">
                          <label class="control-label">管理员名：</label>
                          <div class="controls input-icon">
                            <input type="text" name="a_name" placeholder="请输入管理员名" id="add_name"/>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">密码：</label>
                          <div class="controls input-icon">
                            <input type="password" name="a_pwd" placeholder="请输入密码" id="add_pwd"/>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">确认密码：</label>
                          <div class="controls input-icon">
                            <input type="password" name="a_pwd_qr" placeholder="再次输入确认密码" id="add_pwd_qr"/>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">权限：</label>
                          <div class="controls input-icon">
                            <?php foreach ($module as $val){?>
                            <input type="checkbox" id="add_<?=$val['id']; ?>" class="add_role" name="add_role" value="<?=$val['id']; ?>"/> <label class="label label-info chk" for="edit_<?=$val['id']; ?>"><?=$val['name'] ?></label>
                            <?php }?>
                          </div>
                        </div>
                        <hr/>
                        <div class="next-prev-btn-container pagination-centered">
                          <a href="javascript:add_admin();" class="button" >添加管理员</a>
                        </div>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row-fluid">
              <div class="span12">
                <div class="widget no-margin">
                  <div class="widget-header">
                    <div class="title">
                      <a id="editpwd">修改密码</a>
                    </div>
                  </div>
                  <div class="widget-body">
                    <div class="container-fluid">
                      <div class="row-fluid">
                        <div class="span12">
                          <form class="form-horizontal" action="#">
                            <hr>
                            <div class="control-group">
                              <label class="control-label">用户名</label>
                              <div class="controls">
                                <input type="text" id="admin_name" disabled="true" value="<?=$_SESSION['admin_name']; ?>" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">原密码</label>
                              <div class="controls">
                                <input type="password" id="old_pwd" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">新密码</label>
                              <div class="controls">
                              	<input type="password" id="new_pwd" >
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">确认密码</label>
                              <div class="controls">
                              	<input type="password" id="qr_pwd" >
                              </div>
                            </div>
                            <div class="form-actions">
                              <button type="button" id="alter_pwd" class="btn btn-info">保存修改</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-sidebar">

            <!--<hr class="hr-stylish-1">-->

          </div>
        </div>
      </div>
      <!--/.fluid-container-->
    </div>
    <footer>
      <p>
        &copy;
      </p>
    </footer>
    
    <script src="/asset/admin/js/bootstrap.js"></script>
    <script src="/asset/admin/js/jquery.scrollUp.js"></script>
    <script src="/asset/admin/js/bootstrap-editable.min.js"></script>
    <script src="/asset/admin/js/select2.js"></script>

    <script type="text/javascript">
      function addmes(){
        document.getElementById('addadmin').style.display = "block";
        document.getElementById('editadmin').style.display = "none";

      }
		//修改权限
      function editmes(name,role){
        document.getElementById('addadmin').style.display = "none";
        document.getElementById('editadmin').style.display = "block";
        $(".edit_role").removeAttr("checked");
        $("#xg_name").val(name);
        var str=role.split(",");
        for (var i=0;i<str.length;i++){
			$("#edit_"+str[i]).attr("checked",true);
        }
      }
		//删除管理员
      function is_del(id){
    	if(confirm('确认删除')){
    		$.post('/admin/is_del',{id:id},function (data){
	        	if (data == 'no_login'){
	        		location.href='/admin';
	        	}else if (data == 1){
					$("#tr_"+id).remove();
		        }else {
		        	alert(data);
	        	}
			});
    	}
      }

      //修改提交
      function sub_alter(){
          
			var xg_name=$("#xg_name").val();
			if (xg_name == ''){
				alert('管理员不能为空');
				return;
			}

			var role=check('edit_role');
			if (role == ''){
				alert('请选择至少一个权限！');
				return;
			}
			$.post('/admin/sub_alter',{xg_name:xg_name,role:role},function (data){
	        	if (data == 'no_login'){
	        		location.href='/admin';
	        	}else if (data == 1){
	        		alert('修改成功');
	        		document.getElementById('editadmin').style.display = "none";
	        		location.reload();
		        }else {
		        	alert(data);
	        	}
			});
      }

      function check(name){
    	  	var obj = $("input[name='"+name+"']");//获取多选框选中脚本
			var role='';
			for (var i = 0; i < obj.length; i++) {
				if (obj[i].checked == true) {
					if (role == '') {
						role += obj[i].value;
					} else {
						role += ',' + obj[i].value;
					}
				}
			}
			return role;
      }

      //添加用户
      function add_admin(){
			var add_name=$("#add_name").val();
			if (add_name == ''){
				alert('请输入管理员名');
				return;
			}
			
			var add_pwd=$("#add_pwd").val();
			if (add_pwd == ''){
				alert('请输入密码');
				return;
			}
			
			var add_pwd_qr=$("#add_pwd_qr").val();
			
			if (add_pwd != add_pwd_qr){
				alert('二次密码不相同，请重新输入!');
				return;
			}
			var role=check('add_role');
			if (role == ''){
				alert('请选择至少一个权限！');
				return;
			}
			$.post('/admin/ins',{admin_name:add_name,admin_pwd:add_pwd,admin_pwd_qr:add_pwd_qr,role:role},function (data){
	        	if (data == 'no_login'){
	        		location.href='/admin';
	        	}else if (data == 1){
	        		alert('添加成功');
	        		document.getElementById('addadmin').style.display = "none";
	        		location.reload();
		        }else {
		        	alert(data);
	        	}
			});
      }

      
      $(function () {
          $("#alter_pwd").click(function (){
				var old_pwd=$("#old_pwd").val();
				if (old_pwd == ''){
					alert('原密码不能为空！');
					return;
				}
				var new_pwd=$("#new_pwd").val();
				if (new_pwd == ''){
					alert('新密码不能为空！');
					return;
				}
				var qr_pwd=$("#qr_pwd").val();
				if (new_pwd != qr_pwd){
					alert('二次密码不同，请重新输入！');
					return;
				}
				if (old_pwd == new_pwd){
					alert('新密码和原密码相同，请重新输入');
		    		return;
		    	}
				$.post('/admin/alter_pwd',{old_pwd:old_pwd,new_pwd:new_pwd,qr_pwd:qr_pwd},function (data){
		        	if (data == 'no_login'){
			        	alert('请重新登录！');
		        		location.href='/admin';
		        	}else if (data == 1){
		        		alert('密码修改成功');
		        		location.reload();
			        }else {
			        	alert(data);
		        	}
				});
          })
          
          //ScrollUp
        $.scrollUp({
          scrollName: 'scrollUp', // Element ID
          topDistance: '300', // Distance from top before showing element (px)
          topSpeed: 300, // Speed back to top (ms)
          animation: 'fade', // Fade, slide, none
          animationInSpeed: 400, // Animation in speed (ms)
          animationOutSpeed: 400, // Animation out speed (ms)
          scrollText: '返回顶部', // Text for element
          activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
      });

      //Tooltip
      $('a').tooltip('hide');

    </script>

</body>
</html>