<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 19:16:37
  from 'E:\www\4um\server_global\public_html\admin\templates\default\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24ab152753e5_50700063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6809b616d1503d393eeb72105aa24011ecd3abc0' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\error.tpl',
      1 => 1579295760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e24ab152753e5_50700063 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['engine']->value->error['is']) {?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['engine']->value->error['type'];?>
 alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert"><span>×</span></button>
        <?php echo $_smarty_tpl->tpl_vars['engine']->value->error['value'];?>

    </div>
</div>
<?php }
}
}
