<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 19:20:20
  from 'E:\www\4um\server_global\public_html\admin\templates\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24abf427c861_71515360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21d398b92bf5573abcf511a1446d328ddd08c264' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\header.tpl',
      1 => 1579314760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e24abf427c861_71515360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '15117384225e24abf4213b57_54856031';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $_smarty_tpl->tpl_vars['engine']->value->sitename;?>
 | <?php echo $_smarty_tpl->tpl_vars['engine']->value->title;?>
</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/fontawesome/css/all.min.css">

  <?php if ($_smarty_tpl->tpl_vars['user']->value->admin) {?>
  <!-- CSS Libraries For Logged Admin -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <?php }?>

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/css/components.css">
</head>

<body><?php }
}
