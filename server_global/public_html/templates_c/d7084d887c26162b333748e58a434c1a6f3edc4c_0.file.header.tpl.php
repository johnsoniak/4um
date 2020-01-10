<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-05 22:42:40
  from 'E:\www\4um\server_global\public_html\templates\def\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1266604ec149_76361193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7084d887c26162b333748e58a434c1a6f3edc4c' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\def\\header.tpl',
      1 => 1578264157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5e1266604ec149_76361193 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['engine']->value->name;?>
">
    <meta name="description" content="Concept Magazine News Blogs">
    <title><?php echo $_smarty_tpl->tpl_vars['engine']->value->title;?>
</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/bootstrap/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/swiper/package/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/icofont/icofont.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/owl.theme.default.min.css" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/animate.min.css" type="text/css">
    <!-- NProgress -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/nprogress.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/style.css" type="text/css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php echo '<script'; ?>
 async src="https://www.googletagmanager.com/gtag/js?id=UA-154444946-1"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- Section Navbar V1 -->
    <header class="header-01">
    	<div class="topbar-01">
    		<div class="container">
    			<div class="row">
    				<div class="left col-6">
		    			<div class="today">
		    				<p>Today</p>
		    			</div>
		    			<div class="searchbar">
		    				<form action="#" method="post">
			                    <input type="text" name="search" placeholder="I'm searching for .." required>
			                    <button type="submit">
			                    	<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/svg/050-magnifying-glass.svg" alt="Zola">
			                    </button>
			                </form>
		    			</div>
		    		</div>
		    		<div class="right col-6">
		    			<div class="notification">
		    				<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/svg/161-alarm.svg" alt="Zola">
		    				<span>11</span>
		    				<div class="content-notification">
		    					<div class="header">
		    						<h6>NOTIFICATIONS</h6>
		    						<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/svg/more-1.svg" alt="Zola">
		    					</div>
		    					<div class="content">
		    						<!-- Item -->
		    						<div class="item">
		    							<div class="image">
		    								<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/user_notification1.jpg" alt="Zola">
		    							</div>
		    							<div class="message">
		    								<div class="time">
		    									2 min ago in <span>Life & Arts</span>
		    								</div>
		    								<div class="title">
		    									<a href="#">The canadian model has started its own</a>
		    								</div>
		    								<div class="desc">
		    									Lorem ipsum viverra molestie at hac...
		    								</div>
		    							</div>
		    							<div class="options">
		    								<div class="close">
												<svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.442 490.442" style="enable-background:new 0 0 490.442 490.442;" xml:space="preserve"><path d="M270.421,245.342l42-42c7.3-7.1,7.3-18.5,0.2-25.5c-7-7-18.4-7-25.5,0l-42,42l-42-42c-7-7-18.4-7-25.5,0
																c-7,7-7,18.4,0,25.5l42,42l-42,42c-7,7-7,18.4,0,25.5c3.5,3.5,8.1,5.3,12.7,5.3c4.6,0,9.2-1.8,12.7-5.3l42-42l42,42
																c3.5,3.5,8.1,5.3,12.7,5.3c4.6,0,9.2-1.8,12.7-5.3c7-7,7-18.4,0-25.5L270.421,245.342z"/><path d="M418.621,71.842c-7-7-18.4-7-25.4,0l-56,55.9c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l42.7-42.7
																	c69.2,82.1,65.1,205.3-12.2,282.6c-39.5,39.5-92.1,61.3-148,61.3c-55.9,0-108.4-21.7-148-61.2c-81.6-81.6-81.6-214.3,0-295.9
																	c50.1-50.1,121.6-71.4,191.1-56.8c9.7,2,19.3-4.2,21.3-13.9c2-9.7-4.2-19.3-13.9-21.3c-81.4-17.2-165.1,7.7-223.9,66.5
																	c-46.3,46.3-71.8,107.9-71.8,173.4s25.5,127.1,71.8,173.4c46.3,46.3,107.9,71.8,173.4,71.8s127.1-25.5,173.4-71.8
																	s71.8-107.9,71.8-173.4S464.921,118.142,418.621,71.842z"/>
												</svg>
		    								</div>
		    								<div class="like active">
		    									<svg fill="#a0a0a0" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 481.567 481.567" style="enable-background:new 0 0 481.567 481.567;" xml:space="preserve"> <path d="M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1C482.9,128.041,462.2,84.641,424.7,55.841z"/></svg>
		    								</div>
		    							</div>
		    						</div>
		    						<!-- /.Item -->
		    						<!-- Item -->
		    						<div class="item">
		    							<div class="image">
		    								<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/user_notification2.jpg" alt="Zola">
		    							</div>
		    							<div class="message">
		    								<div class="time">
		    									9 min ago in <span>Sports</span>
		    								</div>
		    								<div class="title">
		    									<a href="#">The canadian model has started its own</a>
		    								</div>
		    								<div class="desc">
		    									Lorem ipsum viverra molestie at hac...
		    								</div>
		    							</div>
		    							<div class="options">
		    								<div class="close">
												<svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.442 490.442" style="enable-background:new 0 0 490.442 490.442;" xml:space="preserve"><path d="M270.421,245.342l42-42c7.3-7.1,7.3-18.5,0.2-25.5c-7-7-18.4-7-25.5,0l-42,42l-42-42c-7-7-18.4-7-25.5,0
																c-7,7-7,18.4,0,25.5l42,42l-42,42c-7,7-7,18.4,0,25.5c3.5,3.5,8.1,5.3,12.7,5.3c4.6,0,9.2-1.8,12.7-5.3l42-42l42,42
																c3.5,3.5,8.1,5.3,12.7,5.3c4.6,0,9.2-1.8,12.7-5.3c7-7,7-18.4,0-25.5L270.421,245.342z"/><path d="M418.621,71.842c-7-7-18.4-7-25.4,0l-56,55.9c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l42.7-42.7
																	c69.2,82.1,65.1,205.3-12.2,282.6c-39.5,39.5-92.1,61.3-148,61.3c-55.9,0-108.4-21.7-148-61.2c-81.6-81.6-81.6-214.3,0-295.9
																	c50.1-50.1,121.6-71.4,191.1-56.8c9.7,2,19.3-4.2,21.3-13.9c2-9.7-4.2-19.3-13.9-21.3c-81.4-17.2-165.1,7.7-223.9,66.5
																	c-46.3,46.3-71.8,107.9-71.8,173.4s25.5,127.1,71.8,173.4c46.3,46.3,107.9,71.8,173.4,71.8s127.1-25.5,173.4-71.8
																	s71.8-107.9,71.8-173.4S464.921,118.142,418.621,71.842z"/>
												</svg>
		    								</div>
		    								<div class="like">
		    									<svg fill="#a0a0a0" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 481.567 481.567" style="enable-background:new 0 0 481.567 481.567;" xml:space="preserve"> <path d="M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1C482.9,128.041,462.2,84.641,424.7,55.841z"/></svg>
		    								</div>
		    							</div>
		    						</div>
		    						<!-- /.Item -->
		    						<!-- Item -->
		    						<div class="item read">
		    							<div class="image">
		    								<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/user_notification3.jpg" alt="Zola">
		    							</div>
		    							<div class="message">
		    								<div class="time">
		    									37 min ago in Business
		    								</div>
		    								<div class="title">
		    									<a href="#">The canadian model has started its own</a>
		    								</div>
		    								<div class="desc">
		    									Lorem ipsum viverra molestie at hac...
		    								</div>
		    							</div>
		    							<div class="options">
		    								<div class="close">
												<svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.442 490.442" style="enable-background:new 0 0 490.442 490.442;" xml:space="preserve"><path d="M270.421,245.342l42-42c7.3-7.1,7.3-18.5,0.2-25.5c-7-7-18.4-7-25.5,0l-42,42l-42-42c-7-7-18.4-7-25.5,0
																c-7,7-7,18.4,0,25.5l42,42l-42,42c-7,7-7,18.4,0,25.5c3.5,3.5,8.1,5.3,12.7,5.3c4.6,0,9.2-1.8,12.7-5.3l42-42l42,42
																c3.5,3.5,8.1,5.3,12.7,5.3c4.6,0,9.2-1.8,12.7-5.3c7-7,7-18.4,0-25.5L270.421,245.342z"/><path d="M418.621,71.842c-7-7-18.4-7-25.4,0l-56,55.9c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l42.7-42.7
																	c69.2,82.1,65.1,205.3-12.2,282.6c-39.5,39.5-92.1,61.3-148,61.3c-55.9,0-108.4-21.7-148-61.2c-81.6-81.6-81.6-214.3,0-295.9
																	c50.1-50.1,121.6-71.4,191.1-56.8c9.7,2,19.3-4.2,21.3-13.9c2-9.7-4.2-19.3-13.9-21.3c-81.4-17.2-165.1,7.7-223.9,66.5
																	c-46.3,46.3-71.8,107.9-71.8,173.4s25.5,127.1,71.8,173.4c46.3,46.3,107.9,71.8,173.4,71.8s127.1-25.5,173.4-71.8
																	s71.8-107.9,71.8-173.4S464.921,118.142,418.621,71.842z"/>
												</svg>
		    								</div>
		    								<div class="like active">
		    									<svg fill="#a0a0a0" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 481.567 481.567" style="enable-background:new 0 0 481.567 481.567;" xml:space="preserve"> <path d="M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1C482.9,128.041,462.2,84.641,424.7,55.841z"/></svg>
		    								</div>
		    							</div>
		    						</div>
		    						<!-- /.Item -->
		    						<!-- Item -->
		    						<div class="item">
		    							<div class="image">
		    								<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/user_notification1.jpg" alt="Zola">
		    							</div>
		    							<div class="message">
		    								<div class="time">
		    									4 hours ago in <span>Politics</span>
		    								</div>
		    								<div class="title">
		    									<a href="#">The canadian model has started its own</a>
		    								</div>
		    								<div class="desc">
		    									Lorem ipsum viverra molestie at hac...
		    								</div>
		    							</div>
		    							<div class="options">
		    								<div class="close">
												<svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.442 490.442" style="enable-background:new 0 0 490.442 490.442;" xml:space="preserve"><path d="M270.421,245.342l42-42c7.3-7.1,7.3-18.5,0.2-25.5c-7-7-18.4-7-25.5,0l-42,42l-42-42c-7-7-18.4-7-25.5,0
																c-7,7-7,18.4,0,25.5l42,42l-42,42c-7,7-7,18.4,0,25.5c3.5,3.5,8.1,5.3,12.7,5.3c4.6,0,9.2-1.8,12.7-5.3l42-42l42,42
																c3.5,3.5,8.1,5.3,12.7,5.3c4.6,0,9.2-1.8,12.7-5.3c7-7,7-18.4,0-25.5L270.421,245.342z"/><path d="M418.621,71.842c-7-7-18.4-7-25.4,0l-56,55.9c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l42.7-42.7
																	c69.2,82.1,65.1,205.3-12.2,282.6c-39.5,39.5-92.1,61.3-148,61.3c-55.9,0-108.4-21.7-148-61.2c-81.6-81.6-81.6-214.3,0-295.9
																	c50.1-50.1,121.6-71.4,191.1-56.8c9.7,2,19.3-4.2,21.3-13.9c2-9.7-4.2-19.3-13.9-21.3c-81.4-17.2-165.1,7.7-223.9,66.5
																	c-46.3,46.3-71.8,107.9-71.8,173.4s25.5,127.1,71.8,173.4c46.3,46.3,107.9,71.8,173.4,71.8s127.1-25.5,173.4-71.8
																	s71.8-107.9,71.8-173.4S464.921,118.142,418.621,71.842z"/>
												</svg>
		    								</div>
		    								<div class="like">
		    									<svg fill="#a0a0a0" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 481.567 481.567" style="enable-background:new 0 0 481.567 481.567;" xml:space="preserve"> <path d="M424.7,55.841c-19.8-15.2-43.3-25-68.1-28.2c-42.6-5.6-84.3,7.4-115.8,35.6c-31.5-28.5-73.4-41.5-116.2-35.8c-24.8,3.3-48.4,13.2-68.3,28.6c-35.8,27.9-56.4,69.6-56.3,114.6c0,38.5,15.1,74.8,42.4,102.1l172.9,172.9c6.6,6.6,15.2,9.8,23.8,9.8c8.6,0,17.2-3.3,23.8-9.8l26.8-26.8c7-7,7-18.4,0-25.5c-7-7-18.4-7-25.5,0l-25.1,25.1l-171.2-171.3c-20.5-20.5-31.8-47.7-31.9-76.7c0-33.7,15.4-65.1,42.4-86.1c14.8-11.5,32.4-18.9,50.9-21.3c34.2-4.5,67.6,6.7,91.7,30.9l19.8,19.8l19.6-19.6c24-24.1,57.4-35.3,91.5-30.8c18.5,2.4,36,9.7,50.8,21c28.2,21.7,43.8,54.4,42.8,89.6c-0.8,27.7-12.9,54.6-33.9,75.7l-91.2,91.1c-7,7-7,18.4,0,25.5c7,7,18.4,7,25.5,0l91.2-91.2c27.6-27.6,43.4-63.1,44.4-100.1C482.9,128.041,462.2,84.641,424.7,55.841z"/></svg>
		    								</div>
		    							</div>
		    						</div>
		    						<!-- /.Item -->
		    					</div>
		    					<div class="footer">
		    						<a href="#">See All Notifications</a>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="user-profile">
		    				<img src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/images/user1.jpg" alt="Zola">
		    				<p>Fred Barry <i class="icofont-simple-down"></i></p>
		    				<div class="user-menu">
		    					<ul>
		    						<li><a href="#">Profile</a></li>
		    						<li><a href="#">Activity Register</a></li>
		    						<li><a href="#">Settings</a></li>
		    						<li><a href="#">Help</a></li>
		    						<li><a href="#">Sign Off</a></li>
		    					</ul>
		    				</div>
		    			</div>
		    		</div>
    			</div>
    		</div>
    	</div>
<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
