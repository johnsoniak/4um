<?php
/* Load Global functions */
require("global/config.php");
require("global/functions.php");
require("global/engine.class.php");
require("global/users.class.php");

$engine = new Engine();
$user = new Users();

/* Login user */
if (isset($_POST['login'])) {
	if ($user->id == 0) {
		$username =  checkInput($_POST['username']);
		$password = checkInput($_POST['password']);
		
		if ($user->loginUser($username, $password)){
			header("Location: index.php");
		} else {
            $engine->error("danger", "Podano zły login lub hasło.");
			header("Location: ".$engine->domain."/action/login/");
		}
	} else {
		header("Location:".$engine->domain);
	}
}

?>