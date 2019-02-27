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
          	<?php if (!empty($contact)){?>
            <div class="row-fluid news" id="contact" >
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      <a>留言管理</a>
                    </div>
                  </div>
                  <div class="widget-body">
                    <div id="dt_example" class="example_alt_pagination">
                      <table class="table table-striped table-hover table-bordered pull-left" id="data-table">
                        <thead>
                          <tr>
                            <th style="width:5%">序号</th>
                            <th style="width:12%">姓名</th>
                            <th style="width:12%">联系方式</th>
                            <th style="width:12%">联系内容</th>
                            <th style="width:12%">发布日期</th>
                            <th style="width:16%">编辑</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($contact as $rows){?>
                        <tr class="gradeX success" id="tr<?=$rows['id']; ?>">
                          <td><?=$rows['id']; ?></td>
                          <td><?=$rows['name']; ?></td>
                          <td><?=$rows['tel']; ?></td>
                          <td><?=$rows['content']; ?></td>
                          <td class="hidden-phone"><?=date("Y-m-d H:i:s",$rows['create_time']); ?></td>
                          <td>
                            <div class="btn-group">
                              <button data-toggle="dropdown" class="btn btn-primary">操作</button>
                              <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <!--<li><a href="#add_new">修改</a></li>-->
                                 <li><a href="javascript:;" onclick="read(<?=$rows['id']; ?>)">查阅</a></li>
                                 <li><a href="javascript:;" onclick="del(<?=$rows['id']; ?>)">删除</a></li>
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
    <script type="text/javascript">
		function del(id){
			if(confirm('确认删除')){
				$.post('/admin/del_contact',{id:id},function (data){
		        	if (data == 'no_login'){
		        		location.href='/admin';
		        	}else {
			        	if (data == 1){
			        		$("#tr"+id).fadeOut(500);
			        	}else {
			        		alert(data);
			        	}
		        	}
				});
			}
		}

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
            "aoColumnDefs": [ { "bSortable": false, "aTargets": [ 0,1,2,3,5 ] }],
            "aaSorting": [[ 4, "desc" ]]
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