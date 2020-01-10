<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-10 00:45:52
  from 'E:\www\4um\server_global\public_html\templates\default\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e17c940600159_09364916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18b1304b7f97f602b562e1b04a7c193127531451' => 
    array (
      0 => 'E:\\www\\4um\\server_global\\public_html\\templates\\default\\register.tpl',
      1 => 1578617146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_5e17c940600159_09364916 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="span12">
		<div style="background: #31353d; padding: 9px 10px 1px 10px; margin: 15px 0px;" class="caption caption__portfolio"> 
			<h3 class="title">Rejestracja</h3>
			<form action="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/register.php" method="post" id="register" class="p30">
				<?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<input type="hidden" name="register" value="true">
				
				<div class="form-group"> 
						<label for="exampleInputEmail1">Nazwa uzytkownika</label>
						<input type="text" class="form-control input-txt" name="username" id="usernamer" placeholder="Nazwa uzytkownika">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Haslo do konta</label>
						<input type="password" class="form-control input-txt" name="password" id="password" placeholder="Haslo">
					</div>
					
					<div class="form-group">
						<label for="exampleInputPassword1">Powtórz haslo</label>
						<input type="password" class="form-control input-txt" name="password2" id="password2" placeholder="Powtórz haslo">
					</div>
					
					<div class="form-group">
						<label for="exampleInputPassword1">E-mail kontaktowy</label>
						<input type="text" class="form-control input-txt" name="email" id="email" placeholder="E-mail">
					</div>
					
					<div class="form-group">
						<label for="exampleInputPassword1">Powtórz E-mail</label>
						<input type="text" class="form-control input-txt" name="email2" id="email2" placeholder="Powtórz E-mail">
					</div>
					<div class="form-group">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/captcha.php" style="margin-top: 10px;" alt="CAPTCHA" class="captcha-image">
                        <button style="margin-top: 10px;" id="captcha" class="btn btn-primary refresh-captcha">Odśwież</button><br>
                        <input style="margin-top: 10px;" type="text" class="form-control input-txt" name="captcha" id="email2" placeholder="Kod z obrazka">
                    </div>

				<button style="margin-top: 10px;" type="submit" id="register-button" class="btn btn-primary">Zarejestruj sie</button>
			</form>
		</div>
	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = '<?php echo $_smarty_tpl->tpl_vars['engine']->value->domain;?>
/captcha.php?' + Date.now();
  return false;
}
$('input[type=text]').on('keydown', function(e) {
    if (e.which == 13) {
        document.getElementById("register-button").click();
        return false;
    }
});
<?php echo '</script'; ?>
><?php }
}
