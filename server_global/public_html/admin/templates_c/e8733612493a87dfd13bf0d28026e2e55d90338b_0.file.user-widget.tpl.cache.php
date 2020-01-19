<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 20:20:59
  from 'E:\www\4um\server_global\public_html\admin\templates\default\user-widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24ba2bac3f21_26712023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8733612493a87dfd13bf0d28026e2e55d90338b' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\user-widget.tpl',
      1 => 1579309833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e24ba2bac3f21_26712023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12444483725e24ba2ba662e0_96100396';
?>
<div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
        <div class="card-chart"><canvas id="users-chart" height="80"></canvas></div>
        <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-users"></i>
        </div>
        <div class="card-wrap">
            <div class="card-header">
                <h4>Zarejestrowanych użytkowników</h4>
            </div>
            <div class="card-body">
                    <?php echo $_smarty_tpl->tpl_vars['user']->value->allUsers;?>

            </div>
        </div>
    </div>
</div><?php }
}
