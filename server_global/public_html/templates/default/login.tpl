<div class="row">
	<div class="span12">
		<div style="background: #31353d; padding: 9px 10px 1px 10px; margin: 15px 0px;" class="caption caption__portfolio"> 
			<h3 class="title">Logowanie</h3>
			<form action="{$engine->domain}/login.php" method="post"  id="login" class="pr30">
					<input type="hidden" name="login" value="true">
					
					{include file="error.tpl"}

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
						Nie masz jeszcze konta? <a href="{$engine->domain}/action/register/">Zarejestruj sie</a>
					</div>
			</form>
			
		</div>
	</div>
</div>