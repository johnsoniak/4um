<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 19:47:43
  from 'E:\www\4um\server_global\public_html\templates\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24b25f1458a1_60600807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af5633bcfc3d7fe069ad2d8a922e8009575acfa' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\header.tpl',
      1 => 1579135944,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_5e24b25f1458a1_60600807 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5044644075e24b25f08f688_79788497';
?>
<!DOCTYPE html>

<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $_smarty_tpl->tpl_vars['engine']->value->sitename;?>
 - <?php echo $_smarty_tpl->tpl_vars['engine']->value->title;?>
</title>
<meta name="description" content=""/>



<style type="text/css">
			<?php echo $_smarty_tpl->tpl_vars['engine']->value->style;?>

</style> 

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/style.css"/>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/forum.min.css"/>

<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
<meta name="generator" content="Net4Engine 1.0 Alfa"/>
<link rel='canonical' href='<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
'/>
<link rel='shortlink' href='<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
'/>


<style type="text/css">h1{font:normal 40px/35px Open Sans;color:#272a31;}h2{font:normal 40px/38px Open Sans;color:#272a31;}h3{font:normal 20px/24px Open Sans;color:#3e454c;}h4{font:normal 14px/20px Arial,Helvetica,sans-serif;color:#333333;}h5{font:normal 12px/18px Arial,Helvetica,sans-serif;color:#333333;}h6{font:normal 12px/18px Arial,Helvetica,sans-serif;color:#333333;}body{font-weight:normal;}.logo_h__txt,.logo_link{font:normal 50px/50px Open Sans;color:#3498db;}.sf-menu>li>a{font:normal 14px/22px Open Sans;color:#FFFFFF;}.nav.footer-nav a{font:normal 15px/20px Open Sans;color:#515765;}</style>
<!--[if lt IE 8]>
		<div id="ie7-alert" style="width: 100%; text-align:center;">
			<img src="http://tmbhtest.com/images/ie7.jpg" alt="Upgrade IE 7" width="640" height="344" border="0" usemap="#Map" />
			<map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" /><area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
			</map>
		</div>
	<![endif]-->

<!--[if gte IE 9]>
<?php echo '<script'; ?>
 type="text/javascript">
	jQuery(function(){
		jQuery('.sf-menu').mobileMenu({defaultText: "Nawiguj do..."});
	});
<?php echo '</script'; ?>
>
<!--<![endif]-->

</head>
<body class="home page page-id-203 page-template page-template-page-home page-template-page-home-php">

<?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
