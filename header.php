<?php include_once("m.php"); ?>
<!doctype html>
<html><head>
<?php if(!m) {?>
<title>iamcheyan.com</title>
<?php } else {?>
<title>Iamcheyan</title>
<?php }?>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<meta name="robots" content="index,follow" />
<meta name="author" content="iamcheyan" />
<meta name="copyright" content="Copyright © 2010-2012 iamcheyan. All rights reserved." />
<meta name="description" content="iamcheyan.com是设计师郭澈言的个人站点。" />
<link rel="alternate" type="application/rss+xml" title="iamcheyan.com站点推送 RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="iamcheyan.com站点推送 RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="iamcheyan.com站点推送 Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/style.css" />
<?php if(!$m){ /* 非移动设备 */ ?>
<link rel="shortcut icon" href="http://works.iamcheyan.com/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jq.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/c.min.js"  type="text/javascript"></script>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/ie.css" />
	<script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
<![endif]-->
<?php } else { /* 移动设备 */ ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0;" /> 
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="email=no" />
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/app-ico.gif" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<?php } ?>
<?php /* 暂时不知道这一段是做什么的 */ ?>
<?php /*?><?php
	if(is_singular() && get_option('thread_comments'))
		wp_enqueue_script('comment-reply');
	wp_head();
?><?php */?>
</head>
<body>
	<div class="ui-y"></div>
<section class="page">
	<che>
		<section>
			<nav>
				<ul>
					<li class="link"><a href="<?php bloginfo('url'); ?>/aboutme/#aboutMe" title="关于我" target="_blank">关于我</a></li>
					<li class="search">
						<a href="javascript:void(0)" title="点击开始搜索">搜索</a>
						<form class="fn-hide" method="get" action="/searchpage">
							<input type="text" name="q" value="Search" >
							<button title="搜索" type="button">搜 索</button>
						</form>
					</li>
					<li class="rss"><a href="<?php bloginfo('url')?>/feed" target="_blank" title="订阅本站">RSS订阅</a></li>
				</ul>
			</nav>
			<header>
				<a href="<?php bloginfo('url'); ?>"><img id="img" class="cheyan" width="130" height="130" src="<?php bloginfo('template_url'); ?>/img/cheyan.gif" alt="<?php bloginfo('url'); ?>"></a>
				<h5>郭澈言&nbsp;/&nbsp;cheyan&nbsp;Guo<br />
					<span>iamcheyan.com</span>
				</h5>
				<a href="<?php bloginfo('url'); ?>/aboutme/#aboutMe" class="about-me"><span>aboute&nbsp;me<em>&gt;&gt;</em></span></a>
			</header>
			<?php if(!$m){ ?>
			<footer>
				<p>
					<span>©&nbsp;2009-2012&nbsp;</span>
					<a href="http://iamcheyan.com">Iamcheyan.com</a><br />
					<a href="<?php bloginfo('url'); ?>/wp-admin/" target="_blank">Admin Login</a>
					<a href="http://iamcheyan.com/wp-admin/admin.php?page=statpresscn/statpresscn.php" target="_blank" title="访问统计" class="time">访问统计</a>
				</p>
			</footer>
			<?php } ?>
		</section>
	</che>
	<section class="content">
	
