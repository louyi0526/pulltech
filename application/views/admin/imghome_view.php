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
      后台管理系统-图片
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link href="/admin/asset/icomoon/style.css" rel="stylesheet">
    <!--[if lte IE 7]>
    <script src="icomoon/lte-ie7.js"></script>
    <![endif]-->
    <link href="/asset/admin/css/main.css" rel="stylesheet"> <!-- Important. For Theming change primary-color variable in main.css  -->
    <link rel="stylesheet" href="/asset/admin/js/uppic/control/css/zyUpload.css" type="text/css">
  </head>
  <body>
  	<?=$header; ?>
        <div class="dashboard-wrapper">
          <div class="left-sidebar">
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      <a>封面图片</a>
                    </div>
                  </div>
                  <div style="display:none;">
					<iframe id="img_frame" name="img_frame" style="display: none; "></iframe>
					<form id="img_form" action="/admin/upload_img" method="post" target="img_frame" enctype="multipart/form-data">
						<input type="text" name="img" id="img">
						<input type="file" name="imgFile" value="上传图片" id="upload">
					</form>
				  </div>
                  <div class="widget-body">
                  	<h4>添加图片：</h4>
                    <div>
						<div>
							<a data-original-title="" href="javascript:;" id="addupload">
								<div class="filePicker" style="text-align: center;width:220px;">添加图片</div>
							</a>
						</div>
					</div>
                    <?php foreach ($home_img as $key => $rows){?>
                    <ul class="thumbnails" style="float:left;" id="ul<?=$key+1; ?>">
                      <li>
                        <a href="javascript:;" class="thumbnail" data-original-title="">
                          <img alt="260x180" style="width: 260px; height: 180px;" src="<?=$rows; ?>" class="upimg" data="<?=$key+1; ?>">
                          <i class="icon-trash del_img" data-original-title="Delete" data="<?=$key+1; ?>"></i>
                        </a>
                      </li>
                    </ul>
                    <?php }?>
                    <div style="clear:both;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-sidebar">
            <!--<div class="wrapper"></div>-->
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
    <script src="/asset/admin/js/load-image.min.js"></script>
    <script src="/asset/admin/js/bootstrap-image-gallery.js"></script>
    <script src="/asset/admin/js/bootstrap-image-gallery-main.js"></script>
    <script type="text/javascript">
      //ScrollUp
      $(function () {
    	  $(".upimg").live('click',function (){
              var img=$(this).attr("data");
              $("#img").val(img);
      		  $("#upload").click();
      	  });

  		  $("#upload").bind("change", function(){
              $("#img_form").submit();
          });

          $("#addupload").click(function (){
              var img=0;
              $("#img").val(img);
      		$("#upload").click();
          });

          $(".del_img").click(function (){
				var id = $(this).attr("data");
				if(confirm('确认删除')){
					$.post('/admin/del_img',{id:id},function (data){
			        	if (data == 'no_login'){
			        		location.href='/admin';
			        	}else if (data == 1) {
				        	$("#ul"+id).fadeOut(500);
			        	}else {
			        		alert(data);
			        	}
					});
				}
          });
          
          
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