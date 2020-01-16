<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-16 03:14:50
  from 'E:\www\4um\server_global\public_html\admin\templates\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e1fd52a0abf26_01760150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c674adee62da10c1a8d0fd21219d0869cd3a7f5' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\admin\\templates\\default\\login.tpl',
      1 => 1579130238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1fd52a0abf26_01760150 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-group">
        <div class="card p-4">
          <div class="card-body">
            <h1>Panel Administratora</h1>
            <p class="text-muted">Wymagane jest ponowne logowanie</p>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"> 
                    <i class="icofont-ui-user"></i>
                </span>
              </div>
              <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" disabled>
            </div>
            <div class="input-group mb-4">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="icofont-ui-password"></i>
                </span>
              </div>
              <input class="form-control" type="password" placeholder="Password">
            </div>
            <div class="row">
              <div class="col-6">
                <button class="btn btn-primary px-4" type="button">Zaloguj</button>
              </div>
              <div class="col-6 text-right">
                <button class="btn btn-link px-0" type="button">Powrót na stronę</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card text-white bg-primary py-5 d-md-down-none" style="width: 44%; background: url(http://4um.pl/images/avatar.png);
    background-position: center top;
    background-size: 100% 100%;">
          <div class="card-body text-center">
            <div>
              <h2 style="text-shadow: 1px 1px 0 #000, -1px 1px 0 #000, 1px -1px 0 #000, -1px -1px 0 #000, 0px 1px 0 #000, 0px -1px 0 #000, -1px 0px 0 #000, 1px 0px 0 #000;
    color: #fff;font-size: 35px;"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><?php }
}
