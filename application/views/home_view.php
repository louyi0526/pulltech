<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no">
    <title>浙江布偶信息科技股份有限公司</title>
    <!--<link rel="stylesheet" href="css/bgstretcher.css"/>-->
    <link rel="stylesheet" href="/asset/home/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/asset/home/css/css.css"/>
    <link rel="stylesheet" href="/asset/home/css/jquery.fullPage.css"/>
    <style>
        #fullPage-nav{display: none;}
        #fullPage-nav span,.fullPage-slidesNav span{border-color:#AAA}
        #fullPage-nav li .active span,.fullPage-slidesNav .active span{background:#AAA}
        #mu .active a{border-bottom: 3px solid #0099cb;}
    </style>
    <script type="text/javascript" src="/asset/home/js/jquery-1.8.3.min.js"></script>
    <!--<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>-->
    <script src="/asset/home/js/jquery-ui-1.10.3.min.js"></script>
    <script src="/asset/home/js/jquery.fullPage.min.js"></script>
    <script type="text/javascript" src="/asset/home/js/bgstretcher.js"></script>
    <script type="text/javascript" src="/asset/home/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/asset/home/js/js.js"></script>
    <script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js?8a9aee5ca2ff11e0706d37eb04283e1f";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $.fn.fullpage({
                'anchors': ['page1', 'page2', 'page3', 'page4','page5'],
                'navigation': true,
                menu: '#mu',
//                'navigationTooltips': ['首页', '项目服务', '案例展示', '关于我们','联系我们'],
                //切屏效果
                'afterLoad': function(anchorLink, index){
                    if(index == 1){
                        $(window).resize(function(){
                            window.location.reload();
                        });
                        $(".cover,.cover-2,.cover-con,.cover-2-con,.cover-1,.cover-1-con").remove();
//                        $('#head a img').attr('src','img/logowht.png');
//                        $("#mu a").css({color:"#ffffff"});

                        $("#mu a").hover(
                            function(){
                                $(this).css({color:"#0099cb"});
                            },
                            function(){
                                $(this).css({color:"#000000"});
                            }
                        );
                    }else if(index == 2){
                        $(".cover,.cover-con,.cover-1,.cover-1-con").remove();
//                        $('#head a img').attr('src','img/logo.png');
//                        $("#mu a").css({color:"#000000"});

                        $("#mu a").hover(
                            function(){
                                $(this).css({color:"#0099cb"});
                            },
                            function(){
                                $(this).css({color:"#000000"});
                            }
                        );
                    }else if(index == 3){
                        $(".cover-2,.cover-2-con,.cover-1,.cover-1-con").remove();
//                        $('#head a img').attr('src','img/logowht.png');
//                        $("#mu a").css({color:"#ffffff"});

                        $("#mu a").hover(
                            function(){
                                $(this).css({color:"#0099cb"});
                            },
                            function(){
                                $(this).css({color:"#000000"});
                            }
                        );
                    }else if(index == 4){
                        $(".cover,.cover-con,.cover-2,.cover-2-con").remove();

                        //page4设置3~4个模块div长度  修改**
                        var aboutdiv = $('.about-con').find("div");
                        if(aboutdiv.length == 5){
                            $('.about-con').css({width:'1070px'});
                        }else if(aboutdiv.length == 4){
                            $('.about-con').css({width:'810px'});
                        }
//                        $('#head a img').attr('src','img/logo.png');
//                        $('#mu a').css({color:'#000000'});
                        $("#mu a").hover(
                            function(){
                                $(this).css({color:"#0099cb"});
                            },
                            function(){
                                $(this).css({color:"#000000"});
                            }
                        );
                    }else if(index == 5){
                        $(".cover,.cover-2,.cover-con,.cover-2-con,.cover-1,.cover-1-con").remove();
//                        $('#head a img').attr('src','img/logowht.png');
//                        $("#mu a").css({color:"#ffffff"});

                        $("#mu a").hover(
                            function(){
                                $(this).css({color:"#0099cb"});
                            },
                            function(){
                                $(this).css({color:"#000000"});
                            }
                        );
                    }
                }
            });
        });
    </script>
</head>
<body>

<div class="html">
    <div class="section" id="page_1">
        <header class="head container" id="head">
            <div class="head-navcon">
                <a class="navbar-brand" href="javascript:void(0);"><img src="/asset/home/img/logo.png" alt=""/></a>
                <nav class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right" id="mu">
                    <li data-menuanchor="page1" class="active" >
                        <a class="menu homepage" href="#page1">
                            <span class="line line-bottom"></span>
                            首页
                        </a>
                    </li>
                    <li data-menuanchor="page2" class="serviceli">
                        <a class="menu service" href="#page2">
                            <span class="line line-bottom"></span>
                            项目服务
                        </a>
                    </li>
                    <li data-menuanchor="page3" class="caseshowli">
                        <a class="menu caseshow" href="#page3">
                            <span class="line line-bottom"></span>
                            案列展示
                        </a>
                    </li>
                    <li data-menuanchor="page4" class="aboutmeli">
                        <a class="menu aboutme" href="#page4">
                            <span class="line line-bottom"></span>
                            关于我们
                        </a>
                    </li>
                    <li data-menuanchor="page5" class="contectusli">
                        <a class="menu contectus" href="#page5">
                            <span class="line line-bottom"></span>
                            联系方式
                        </a>
                    </li>
                </ul>
            </nav>
            </div>
        </header>
        <!--修改 添加DIV head css中添加Z-index-->
        <!--<div id="p1-bg" style="height:91%;margin-top: 100px;"></div>-->
        <script type="text/javascript">
            //背景切换
            $(document).ready(function(){
                $('#page_1').bgStretcher({
                    images: <?=$img; ?>,
                    imageWidth: 800,
                    imageHeight: 400,
                    slideDirection: 'N',
                    nextSlideDelay: 4000,
                    slideShowSpeed: 1500,
                    transitionEffect: 'fade',
                    sequenceMode: 'normal',
                    anchoring: 'left center',
                    anchoringImg: 'left center'
                });
            });
        </script>
    </div>

    <div class="section" id="page_2">
        <div class="service-head">
            <h2>服务项目</h2>
        </div>
        <div class="navbar-collapse collapse service-con">
            <ul class="nav navbar-nav">
                <li><a class="service-bg1 service-btn" href="javascript:;" onclick="ser(this)"><h4>网站建设</h4></a></li>
                <li><a class="service-bg2 service-btn" href="javascript:;" onclick="ser(this)"><h4>APP应用</h4></a></li>
                <li><a class="service-bg3 service-btn" href="javascript:;" onclick="ser(this)"><h4>微商城</h4></a></li>
                <li><a class="service-bg4 service-btn" href="javascript:;" onclick="ser(this)"><h4>一卡通</h4></a></li>
                <li><a class="service-bg5 service-btn" href="javascript:;" onclick="ser(this)"><h4>朋友圈推广</h4></a></li>
            </ul>
        </div>
    </div>

    <div class="section" id="page_3">
        <div class="case-head">
            <h2>案例展示</h2>
        </div>
        <div class="case-con container">
            <?php 
        		foreach ($product as $key => $rows){
        	?>
            <div class="case-one cased" data="<?=$rows['id']; ?>" data-q="1"><a href="javascript:;"><img src="<?=$rows['titleimg']; ?>" alt=""/><h4><?=$rows['title']; ?></h4></a></div>
            <?php }?>
            <div class="clearfix"></div>
        </div>
        <a class="case-btn" href="javascript:;" data="1" ></a>
    </div>

    <div class="section" id="page_4">
        <div class="about-head">
            <h2>关于我们</h2>
        </div>
        <input type="hidden" value="1" id="hidc">
        <div class="about-con container">
            <div class="about-one ab" data="abprofile">
                <h3 class="about-profile">公 司 介 绍</h3>
            </div>
            <div class="about-two ab" data="abnews">
                <h3 class="about-news">公 司 新 闻</h3>
            </div>
            <div class="about-one ab" data="abprocess">
                <h3 class="about-process">成 长 历 程</h3>
            </div>
            <div class="about-two ab" data="abjob">
                <h3 class="about-job">企 业 招 聘</h3>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <footer class="section" id="page_5">
        <div class="contact-head">
            <h2>联系方式</h2>
        </div>
        <div class="contact-con">
            <address class="contact-left pull-left">
                <h3>浙江布偶信息科技股份有限公司</h3>
                地址：<span>杭州市拱墅区祥园路99号运河广告产业大厦2号楼603</span> <br/>
                邮编：<span>310005</span> <br/>
                电话：<span>0571-87825163</span><br/>
                Q Q：<span>1106174984</span><br/>
                <span>浙ICP备15029636号</span>
                <span>
                	<div style="width:300px;padding:6px 0;	">
				 		<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=33010502003355" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/asset/home/gapatp.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#fff;">浙公网安备 33010502003355号</p></a>
				 	</div>
				</span>
                <div class="contact-gzh"></div>
            </address>
            <address class="contact-right pull-right">
                姓名NAME <br/><input class="contact-text" type="text" id="name" /><br/>
                电话TEL <br/><input class="contact-text" type="text" id="tel" /><br/>
                信息INFORMATION <br/><input class="contact-text" type="text" id="info" /><br/>
                <a class="contact-send" id="send"></a>
            </address>
            <div class="clearfix"></div>
        </div>
    </footer>
</div>
<script>
    function getInfo()
    {
        var s = "";
        s += " 网页可见区域宽："+ document.body.clientWidth;
        s += " 网页可见区域高："+ document.body.clientHeight;
        s += " 网页可见区域宽："+ document.body.offsetWidth + " (包括边线和滚动条的宽)";
        s += " 网页可见区域高："+ document.body.offsetHeight + " (包括边线的宽)";
        s += " 网页正文全文宽："+ document.body.scrollWidth;
        s += " 网页正文全文高："+ document.body.scrollHeight;
        s += " 网页被卷去的高(ff)："+ document.body.scrollTop;
        s += " 网页被卷去的高(ie)："+ document.documentElement.scrollTop;
        s += " 网页被卷去的左："+ document.body.scrollLeft;
        s += " 网页正文部分上："+ window.screenTop;
        s += " 网页正文部分左："+ window.screenLeft;
        s += " 屏幕分辨率的高："+ window.screen.height;
        s += " 屏幕分辨率的宽："+ window.screen.width;
        s += " 屏幕可用工作区高度："+ window.screen.availHeight;
        s += " 屏幕可用工作区宽度："+ window.screen.availWidth;
        s += " 你的屏幕设置是 "+ window.screen.colorDepth +" 位彩色";
        s += " 你的屏幕设置 "+ window.screen.deviceXDPI +" 像素/英寸";
        alert (s);
    }
</script>
</body>
</html>