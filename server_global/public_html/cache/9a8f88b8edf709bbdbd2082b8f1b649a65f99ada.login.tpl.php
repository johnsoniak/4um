<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-19 20:18:37
  from 'E:\www\4um\server_global\public_html\templates\default\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e24b99d914039_48489608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7390af29a31ae7e790445bc5a9998b8f6652ea6' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\login.tpl',
      1 => 1578680909,
      2 => 'file',
    ),
    'e3e2e9f89fa0b4138bf8d4131fe2bc825842b04c' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\error.tpl',
      1 => 1578626868,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5e24b99d914039_48489608 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="span12">
		<div style="background: #31353d; padding: 9px 10px 1px 10px; margin: 15px 0px;" class="caption caption__portfolio"> 
			<h3 class="title">Logowanie</h3>
			<form action="http://4um.pl/login.php" method="post"  id="login" class="pr30">
					<input type="hidden" name="login" value="true">
					
					
					<div class="form-group"> 
						<label for="exampleInputEmail1">Nazwa uzytkownika</label>
						<input type="text" class="form-control input-txt" id="username" name="username" style="width:100%;" placeholder="Nazwa uzytkownika">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Haslo do konta</label>
						<input type="password" class="form-control input-txt" id="password" name="password" style="width:100%;" placeholder="Haslo">
					</div>
					<button style="margin-top: 10px;" type="submit" id="login-button" class="btn btn-primary">Zaloguj sie</button>
					
					<div class="hr-top" style="margin-top:20px;">
						Zapomniales hasla? <a href="#">Przypomnij</a><br>
						Nie masz jeszcze konta? <a href="http://4um.pl/action/register/">Zarejestruj sie</a>
					</div>
			</form>
			
		</div>
	</div>
</div><?php }
}
