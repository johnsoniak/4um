<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-13 01:47:04
  from 'E:\www\4um\server_global\public_html\admin\templates\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1bcc18b757d5_66578565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c674adee62da10c1a8d0fd21219d0869cd3a7f5' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\login.tpl',
      1 => 1578880015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1bcc18b757d5_66578565 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login-box">
  <div class="login-logo">
    <a href="#"><b><?php echo $_smarty_tpl->tpl_vars['engine']->value->sitename;?>
</b> Panel Zarządzania</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Logowanie do panelu Zarządzania</p>

    <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" class="form-control" disabled>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Hasło">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Zaloguj</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box --><?php }
}
