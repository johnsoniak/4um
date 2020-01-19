<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 19:47:43
  from 'E:\www\4um\server_global\public_html\templates\default\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24b25f94a531_42318025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e2e9f89fa0b4138bf8d4131fe2bc825842b04c' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\error.tpl',
      1 => 1578626868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e24b25f94a531_42318025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8919173905e24b25f903822_13423474';
if ($_smarty_tpl->tpl_vars['engine']->value->error['is']) {?>
<div class="messageis">
	<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['engine']->value->error['type'];?>
" role="alert">
		<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<?php echo $_smarty_tpl->tpl_vars['engine']->value->error['value'];?>

	</div>
</div>
<?php }
}
}
