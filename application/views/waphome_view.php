<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>浙江布偶信息科技股份有限公司</title>
<link href="/asset/css/wapstyle.css" rel="stylesheet" type="text/css">
<link href="/asset/css/framework.css" rel="stylesheet" type="text/css">
<link href="/asset/css/menu.css" rel="stylesheet" type="text/css">
<link href="/asset/css/owl.theme.css" rel="stylesheet" type="text/css">
<link href="/asset/css/swipebox.css" rel="stylesheet" type="text/css">
<link href="/asset/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="/asset/css/animate.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/asset/js/jquery.js"></script>
<script type="text/javascript" src="/asset/js/jqueryui.js"></script>
<script type="text/javascript" src="/asset/js/framework.plugins.js"></script>
<script type="text/javascript" src="/asset/js/custom.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?8a9aee5ca2ff11e0706d37eb04283e1f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body>
<div class="all-elements">
<div id="perspective" class="perspective effect-airbnb">
    <!--this houses the entire page, and creates the effect-->
    <div class="header">
        <a href="#" id="showMenu"></a>
        <a href="#" id="pageLogo"><img src="/asset/img/waplogo.png" alt="img"></a>
    </div> 	
    <div class="perspective_container" id="top"><!--the "moving to the left" content box-->
        <div class="wrapper"><!-- wrapper needed for scroll -->
         	<div class="header-clear"><i class="fa fa-times"></i></div>
         	<!-- 轮播 -->
            <div class="slider-container full-bottom">
                <div class="homepage-slider" data-snap-ignore="true">
                	<?php $img=json_decode($img);
                		foreach ($img as $rows){
                	?>
                    <div>
                        <div class="overlay"></div>
                        <img src="<?=$rows; ?>" class="responsive-image" alt="img">
                    </div>
                    <?php }?>
                </div>
            </div>
            <!-- 轮播结束 -->
            <div class="content">
            	<div class="page-heading container">
                    <p>
						欢迎来到浙江布偶信息科技股份有限公司！
                    </p>
                </div>    
                <div class="decoration"></div>        
            </div>
            <div class="content-strip">
                <h4>案列展示</h4>
                <p>Case Shows</p>
                <i class="fa fa-cogs"></i>
                <div class="overlay"></div>
                <img src="/asset/img/5w.jpg" alt="img">
            </div>
            <div class="content">
            	<div class="decoration"></div>
                <div class="container no-bottom">
                	<?php 
		        		foreach ($product as $key => $rows){
		        	?>
                    <a href="/news/details/product/<?=$rows['id']; ?>">
                    <div class="one-half-responsive">
                        <p class="thumb-left no-bottom">
                            <img src="<?=$rows['titleimg']; ?>" alt="img">
                            <strong><?=$rows['title']; ?></strong>
                            <em><br><?=mb_substr(preg_replace("/<[^>]+>/", '', $rows['content']),0,66); ?>...</em>
                        </p>
                        <div class="thumb-clear"></div>
                    </div>
                    </a>
                    <div class="decoration hide-if-responsive"></div>
                    <?php }?>
                </div>
			</div>
            <div class="content-strip">
                <h4 id="news">公司新闻</h4>
                <p>Company News</p>
                <i class="fa fa-list-alt"></i>
                <div class="overlay"></div>
                <img src="/asset/img/6w.jpg" alt="img">
            </div>
            <div class="content">
                <div class="decoration"></div>
                <div class="container no-bottom">
                	<?php foreach ($news as $k => $rows){?>
                	<a href="/news/details/news/<?=$rows['id']; ?>">
                    <div class="one-half-responsive">
                        <p class="thumb-left no-bottom">
                            <img src="/asset/img/news<?=($k+1)%2 == 1 ? 1:2; ?>.png" alt="img">
                            <strong><?=$rows['title']; ?></strong>
                            <em><br><?=mb_substr(preg_replace("/<[^>]+>/", '', $rows['content']),0,48); ?>...</em>
                        </p>
                        <div class="thumb-clear"></div>
                    </div></a>
                    <div class="decoration hide-if-responsive"></div>
                    <?php }?>
                </div>
            </div>
            <div class="content-strip">
                <h4>关于公司</h4>
                <p>About Us</p>
                <i class="fa fa-star-o"></i>
                <div class="overlay"></div>
                <img src="/asset/img/7w.jpg" alt="img">
            </div>
            
            <div class="content">
                <div class="decoration"></div>
                    <div class="container">
                        <div class="one-half-responsive">
                            <img src="/asset/img/p001.jpg" alt="img" class="responsive-image">
                        </div>
                        <div class="one-half-responsive last-column">
                            <h3 class="center-if-mobile">公司介绍</h3>
                            <em class="center-if-mobile small-text">Company Profile</em>
                            <p class="center-if-mobile no-bottom">
                                本公司在2010年8月10日成立于杭州滨江高新技术开发区东部软件园，历经五年磨砺，
                                于2015年搬迁至拱墅区祥园路99号运河广告大厦2号楼603，注册资本：壹千伍佰万元，是
                                一家有自主开发、运营手机APP应用，网站和微信营销能力的科技型产业服务公司。公
                                司经营范围主要包括：网络信息技术、计算机软硬件、数码产品、网络工程、通信产品
                                的技术开发；计算机系统集成；数码产品、计算机软硬件、通信产品的批发、零售；广
                                告的设计、制作、代理、发布等。
                            </p>
                        </div>
                    </div>
                <div class="decoration"></div>
            </div>

            <div class="content">

                    <div class="container">
                        <div class="one-half-responsive">
                            <img src="/asset/img/p002.jpg" alt="img" class="responsive-image">
                        </div>
                        <div class="one-half-responsive last-column">
                            <h3 class="center-if-mobile">发展历史</h3>
                            <em class="center-if-mobile small-text">Development History</em>
                            <p class="center-if-mobile no-bottom">
                                公司自2010年成立以来致力于建设网站，APP定制开发，策划实现智慧园区一卡通项目，
                                运营商通信业务代理，软硬件结合安卓系统手机与PAD定制商务专用机。布偶公司开发实
                                力雄厚，售后维护用心负责，多年来产品畅销省内，远销海外。 2013年底，公司高层决
                                定大胆创新，打入手机O2O市场，现已逐步成型，步入正轨。自2014年底公司增资搬迁至
                                拱墅区之后，半年来主营业务收入逾千万，是一家拥有活力、朝气的创业型公司。公司近
                                年来营业额及利润增长迅速，已经吸引多家风投机构及优秀的天使投资人关注。2015年公
                                司也预期启动新三版挂牌计划帮助引入更多的资金，更好的发展公司。
                            </p>
                        </div>
                    </div>
                <div class="decoration"></div>
            </div>
            <div class="content-strip">
                <h4>联系我们</h4>
                <p>Contact Us</p>
                <i class="fa fa-comments-o"></i>
                <div class="overlay"></div>
                <img src="/asset/img/5w.jpg" alt="img">
            </div>
            
            <div class="content">
                <div class="decoration"></div>
                <div class="container">
                    <ul class="font-icon-list">
                        <li><a href="javascript:void(0);"><i class="fa fa-globe"></i>杭州市拱墅区祥园路99号运河广告产业大厦2号楼603室</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-envelope"></i>310005</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-phone"></i>0571-87825163</a></li>
                       <!--  <li><a href="javascript:void(0);"><i class="fa fa-qq"></i></a></li>-->
                    </ul>
                </div>         

                <div class="decoration"></div>        
            </div>
            <div class="footer-section">
                <p class="footer-text">
                    Copyright &copy; 2016.<br>
                    浙江布偶信息科技股份有限公司 All rights reserved.<br>浙ICP备15029636号
                </p>
                <div class="footer-icons">
                    <a href="#" class="footer-facebook-icon"><i class="fa fa-tencent-weibo"></i></a>
                    <a href="#" class="footer-google-icon"><i class="fa fa-weibo"></i></a>
                    <a href="#" class="footer-twitter-icon"><i class="fa fa-wechat"></i></a>
                    <a href="#" class="footer-up-icon"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        
        </div><!-- wrapper -->
    </div><!-- /perspective container -->
</div><!-- /perspective -->
</div>
<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>
