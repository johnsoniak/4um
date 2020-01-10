<div class="row">
	<div class="span12">
		<div style="background: #31353d; padding: 9px 10px 1px 10px; margin: 15px 0px;" class="caption caption__portfolio"> 
			<h3 class="title">Rejestracja</h3>
			<form action="{$engine->domain}/register.php" method="post" id="register" class="p30">
				{include file="error.tpl"}
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
                        <img src="{$engine->domain}/captcha.php" style="margin-top: 10px;" alt="CAPTCHA" class="captcha-image">
                        <button style="margin-top: 10px;" id="captcha" class="btn btn-primary refresh-captcha">Odśwież</button><br>
                        <input style="margin-top: 10px;" type="text" class="form-control input-txt" name="captcha" id="email2" placeholder="Kod z obrazka">
                    </div>

				<button style="margin-top: 10px;" type="submit" id="register-button" class="btn btn-primary">Zarejestruj sie</button>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
var refreshButton = document.querySelector(".refresh-captcha");
refreshButton.onclick = function() {
  document.querySelector(".captcha-image").src = '{$engine->domain}/captcha.php?' + Date.now();
  return false;
}
$('input[type=text]').on('keydown', function(e) {
    if (e.which == 13) {
        document.getElementById("register-button").click();
        return false;
    }
});
</script>