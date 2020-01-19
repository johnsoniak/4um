<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 20:19:15
  from 'E:\www\4um\server_global\public_html\templates\default\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24b9c303de15_90958903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '187a36ebe860b32aed182ac6c8266bffac7120c0' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\breadcrumb.tpl',
      1 => 1578870891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e24b9c303de15_90958903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3566962875e24b9c3007bb2_66702313';
?>
<section class="title-section">
    <h1 class="title-header"><?php echo $_smarty_tpl->tpl_vars['engine']->value->title;?>
</h1>
	<!-- BEGIN BREADCRUMBS-->
	<ul class="breadcrumb breadcrumb__t"><li><a href="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
">Start</a></li>
    
    <li class="divider"></li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['engine']->value->title;?>
</li></ul>			<!-- END BREADCRUMBS -->
</section><?php }
}
