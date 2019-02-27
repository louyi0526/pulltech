<?php $r=$this->uri->segment(2);?>
<script src="/asset/admin/js/jquery.min.js"></script>
<header>
    <a href="#" class="logo">
        <img src="/asset/admin/img/logo.png" alt="logo"/>
    </a>

    <div class="btn-group">
        <button class="btn btn-primary">
            <?=isset($_SESSION['admin_name'])?$_SESSION['admin_name']:''?>
        </button>
        <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
          <span class="caret">
          </span>
        </button>
        <ul class="dropdown-menu pull-right">
            <li>
                <a href="#">
                    账号设置
                </a>
            </li>
            <li>
                <a href="#">
                    注销
                </a>
            </li>
        </ul>
    </div>
</header>
<div class="container-fluid">
    <div class="dashboard-container">
        <div class="top-nav">
            <ul>
            	<li>
                    <a href="/admin/home" <?=$r == 'home' ? 'class="selected"' : ''; ?>>
                        <div class="fs1" aria-hidden="true" data-icon="&#xe074;"></div>
						个人信息
                    </a>
                </li>
                <!--  <li>
                    <a href="/admin/home" <?//=$r == 'home' ? 'class="selected"' : ''; ?>>
                        <div class="fs1" aria-hidden="true" data-icon="&#xe0a0;"></div>
						关于公司
                    </a>
                </li>-->
                <li>
                    <a href="/admin/news" <?=$r == 'news' ? 'class="selected"' : ''; ?> >
                        <div class="fs1" aria-hidden="true" data-icon="&#xe14a;"></div>
						新闻管理
                    </a>
                </li>
                <li>
                    <a href="/admin/product" <?=$r == 'product' ? 'class="selected"' : ''; ?>>
                        <div class="fs1" aria-hidden="true" data-icon="&#xe1c6;"></div>
						产品管理
                    </a>
                </li>
                <li>
                    <a href="/admin/img" <?=$r == 'img' ? 'class="selected"' : ''; ?>>
                        <div class="fs1" aria-hidden="true" data-icon="&#xe00d;"></div>
						图片管理
                    </a>
                </li>
                <li>
                    <a href="/admin/contact" <?=$r == 'contact' ? 'class="selected"' : ''; ?>>
                        <div class="fs1" aria-hidden="true" data-icon="&#xe160;"></div>
						留言管理
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="sub-nav">
        	<?php if ($r == 'home'){ ?>
            <ul>
	            <li><a href="" class="heading">管理员</a></li>
	            <li>
	              <a href="#editpwd">修改密码</a>
	            </li>
	            <?php if ($_SESSION['admin_role'] == 'all'){?>
	            <li>
	              <a href="#addadmin" onclick="addmes()">添加管理员</a>
	            </li>
	            <?php }?>
          	</ul>
            <?php }else if ($r == 'news'){?>
            <ul>
	            <li><a href="" class="heading">新闻</a></li>
	            <li><a href="#add_new" onclick="qk_new();">新闻添加</a></li>
			</ul>
			<?php }else if ($r == 'product'){?>
			<ul>
	            <li><a href="" class="heading">产品</a></li>
	            <li><a href="#add_new" onclick="qk_product();">产品添加</a></li>
			</ul>
			<?php }else if ($r == 'img'){?>
			<ul>
	            <li><a href="" class="heading">图片</a></li>
			</ul>
			<?php }else if ($r == 'contact'){?>
			<ul>
	            <li><a href="/admin/contact" class="heading">留言</a></li>
	            <li><a href="?read=1&del=0">已阅</a></li>
	            <li><a href="?read=0&del=1">已删除</a></li>
			</ul>
			<?php }?>
            <div class="btn-group pull-right">
                <button class="btn btn-primary">主菜单</button>
                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right">
                    <li><a href="index.html" data-original-title="">关于公司</a></li>
                    <li><a href="news.html" data-original-title="">新闻管理</a></li>
                    <li><a href="media.html" data-original-title="">图片管理</a></li>
                    <li><a href="calendar.html" data-original-title="">个人信息</a></li>
                </ul>
            </div>
        </div>
