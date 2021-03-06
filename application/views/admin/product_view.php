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
      后台管理系统-新闻
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link href="/asset/admin/icomoon/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/asset/admin/js/uppic/control/css/zyUpload.css" type="text/css">
    <!--[if lte IE 7]>
    <script src="icomoon/lte-ie7.js">
    </script>
    <![endif]-->
    <script type="text/javascript" charset="utf-8" src="/asset/admin/js/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/asset/admin/js/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/asset/admin/js/ueditor/zh-cn.js"></script>
    <link href="/asset/admin/css/main.css" rel="stylesheet"> <!-- Important. For Theming change primary-color variable in main.css  -->

  </head>
  <body>
    <?=$header; ?>
        <div class="dashboard-wrapper">
          <div class="left-sidebar">
          	<?php if (!empty($product)){?>
            <div class="row-fluid news" id="news" >
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      <a>产品编辑</a>
                    </div>
                  </div>
                  <div class="widget-body">
                    <div id="dt_example" class="example_alt_pagination">
                      <table class="table table-striped table-hover table-bordered pull-left" id="data-table">
                        <thead>
                          <tr>
                            <th style="width:5%">序号</th>
                            <th style="width:12%">标题</th>
                            <th style="width:12%">发布日期</th>
                            <th style="width:16%">编辑</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($product as $rows){?>
                        <tr class="gradeX success">
                          <td><?=$rows['id']; ?></td>
                          <td><?=$rows['title']; ?></td>
                          <td class="hidden-phone"><?=date("Y-m-d H:i:s",$rows['create_time']); ?></td>
                          <td>
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-primary">操作</button>
                              <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <li><a href="#add_new" onclick="edit_product(<?=$rows['id']; ?>)">修改</a></li>
                                <!-- <li><a href="#">删除</a></li>-->
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <?php }?>
                        </tbody>
                      </table>
                      <div class="clearfix"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
            <div class="row-fluid add_new" id="add_new" >
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      <a id="addnew">编辑产品</a>
                    </div>
                  </div>
                  <div class="widget-body">
                    <!--公司介绍-->
                    <div class="company">
                      <form class="form-horizontal no-margin" action="#">
                      	<input type="hidden" id="key" />
                        <div class="control-group">
                          <label class="control-label">标题：</label>
                          <div class="controls input-icon">
                            <input type="text" name="hezuo_name" id="title"/>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">列表图片：</label>
                          <div class="controls input-icon">
                          		<input type="hidden" id="titleimg" name="titleimg" value="">
                          		<img src="" style="background:url(/asset/img/add_img.png) no-repeat scroll center center;width:200px;height:200px;cursor:pointer;" class="upimg" id="upimg">
                          </div>
                        </div>
                      <div>
                        <script id="editor" type="text/plain" style="width:100%;height:300px;"></script>
                      </div>
                      <hr/>
                      <div class="next-prev-btn-container pull-right">
                        <a href="javascript:true_edit()" class="button" data-original-title="">确认编辑</a>
                      </div>
                      <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
			<div style="display:none;">
				<iframe id="img_frame" name="img_frame" style="display: none; "></iframe>
				<form id="img_form" action="/admin/upload_titleimg" method="post" target="img_frame" enctype="multipart/form-data">
					<input type="text" name="img" id="img">
					<input type="file" name="imgFile" value="上传图片" id="upload">
				</form>
			</div>
          <div class="right-sidebar">
            <!--右边的内容-->
            <!--<hr class="hr-stylish-1">分割线-->
          </div>
        </div>
      </div>
    </div>
    <footer>
      <p>
        &copy;
      </p>
    </footer>
    
    <script type="text/javascript" charset="utf-8" src="/asset/admin/js/ueditor/main.js"></script>
    <script src="/asset/admin/js/wysiwyg/wysihtml5-0.3.0.js"></script>
    <script src="/asset/admin/js/bootstrap.js"></script>
    <script src="/asset/admin/js/wysiwyg/bootstrap-wysihtml5.js"></script>
    <script src="/asset/admin/js/jquery.scrollUp.js"></script>
    <script src="/asset/admin/js/jquery.dataTables.js"></script>
    <!-- 引用核心层插件 -->
    <script type="text/javascript" src="/asset/admin/js/uppic/core/zyFile.js"></script>
    <!-- 引用控制层插件 -->
    <script type="text/javascript" src="/asset/admin/js/uppic/control/js/zyUpload.js"></script>
    <!-- 引用初始化JS -->
    <script type="text/javascript" src="/asset/admin/js/uppic/uppic.js"></script>
    <script type="text/javascript">
		//创建编辑框
    	var ue = UE.getEditor('editor');
      //edit_new()
      function edit_product(id){
          $.post('/admin/edit_product',{id:id},function (data){
        	if (data == 'no_login'){
        		location.href='/admin';
        	}else {
            	if (typeof data === 'object'){
					var json=data;
            	}else {
        			var json=eval(data);
            	}
        		$("#key").val(json[0].id);
        		$("#title").val(json[0].title);
        		$("#upimg").attr('src',json[0].titleimg);
        		ue.setContent(json[0].content);
        	}
        });
      }

      function true_edit(){
			var productid=$("#key").val();
			var title=$("#title").val();
			if (title == ''){
				alert('请填写标题！');
				return;
			}
			var titleimg=$("#upimg").attr("src");
			if (titleimg == ''){
				alert('请选择图片！');
				return;
			}
			var content=ue.getContent();
			$.post('/admin/insproduct',{productid:productid,title:title,titleimg:titleimg,content:content},function (data){
	        	if (data == 'no_login'){
	        		location.href='/admin';
	        	}else {
		        	if (data == 1){
		        		alert("添加成功");
		        		location.reload();
		        	}else if (data == -1){
		        		alert("添加失败");
		        	}else if (data == 2){
		        		alert("修改成功");
		        		location.reload();
		        	}else if (data == -2){
		        		alert("修改失败");
		        	}else {
		        		alert(data);
		        	}
	        	}
			});
      }

      function qk_product(){
			$("#key").val('');
			$("#title").val('');
			$("#titleimg").val('');
			$("#upimg").attr('src','');
			ue.setContent('');
      }

      $(function (){
  		$(".upimg").live('click',function (){
              var img=$(this).attr("data");
              $("#img").val(img);
      		$("#upload").click();
      	});

  		$("#upload").bind("change", function(){
              $("#img_form").submit();
          });
  	  })

      //ScrollUp 置顶
      $(function () {
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

      //Data Tables
      $(document).ready(function () {
          $("#data-table").dataTable( {
        	"sPaginationType": "full_numbers",
            "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,1,3 ] }],
            "aaSorting": [[ 2, "desc" ]]
          });
      });

      jQuery('.delete-row').click(function () {
        var conf = confirm('Continue delete?');
        if (conf) jQuery(this).parents('tr').fadeOut(function () {
          jQuery(this).remove();
        });
          return false;
        });
      </script>

</body>
</html>