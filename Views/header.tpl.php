<!DOCTYPE html>
<html lang="zh">
<head>
  <meta charset="utf-8">
  <title><?php if(isset($html_title))echo $html_title;else echo 'workerman 一个高性能的php socket 服务器框架';?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="keywords" content="<?php if(isset($html_keywords))echo $html_keywords;?>"/>
  <meta name="description" content="<?php if(isset($html_desc))echo $html_desc;?>"/>
  <meta name="author" content=""/>
  <meta name="baidu_union_verify" content="e47ae1f37ead6981de7a997096347250"/>
  <meta name="baidu-site-verification" content="9J9K0y1Cxv" />
  <meta name="baidu-site-verification" content="jLodbXMgwV" />
  <meta name="baidu-site-verification" content="NXCSEiOPBB" />
	<!--link rel="stylesheet/less" href="/less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="/less/responsive.less" type="text/css" /-->
	<!--script src="/js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/img/favicon.png">
  
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  </button>
					  <a href="/"><img src="/img/workerman_logo.png" alt="workerman.net logo" width="50px"/></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li<?php if($html_nav == 'about')echo ' class="active" ';?>>
							<a href="/workerman">关于</a>
						</li>
						<li<?php if($html_nav == 'applications')echo ' class="active" ';?>>
							<a href="/applications">相关应用</a>
						</li>
						<li<?php if($html_nav == 'bench')echo ' class="active" ';?>>
							<a href="bench">压力测试</a>
						</li>
						<li<?php if($html_nav == 'download')echo ' class="active" ';?>>
							<a href="/download">下载</a>
						</li>
						<li<?php if($html_nav == 'install')echo ' class="active" ';?>>
							<a href="/install">安装</a>
						</li>
						<li<?php if($html_nav == 'doc')echo ' class="active" ';?>>
							<a href="/doc">手册</a>
						</li>
						<li<?php if($html_nav == 'group')echo ' class="active" ';?>>
							<a href="http://wenda.workerman.net" target="_blank">问答</a>
						</li>
						<li<?php if($html_nav == 'update')echo ' class="active" ';?>>
							<a href="https://github.com/walkor/workerman/releases" target="_blank">历史版本</a>
						</li>
						<li<?php if($html_nav == 'windows')echo ' class="active" ';?>>
							<a href="/windows" >Windows版本</a>
						</li>
						<li<?php if($html_nav == 'donate')echo ' class="active" ';?>>
							<a href="/donate" >捐赠</a>
						</li>
						<li<?php if($html_nav == 'jobs')echo ' class="active" ';?>>
							<a href="/jobs" >招聘</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">language<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="/">中文</a>
								</li>
								<li>
									<a href="/en/">English</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
