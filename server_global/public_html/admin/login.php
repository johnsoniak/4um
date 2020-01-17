<?php
require("../global/config.php");
require("../global/functions.php");
require("../global/engine.class.php");
require("../global/users.class.php");

$engine = new Engine();
$user = new Users();

/* User isn't admin rank */
if ($engine->rank[$user->rank]["admin"] == 0)
	header("Location:".$engine->domain);
	

/* Login Admin */
if (isset($_POST['password'])) {
	if ($user->admin == 0) {
		$password = checkInput($_POST['password']);
		
		if ($user->loginAdmin($password)){
			header("Location: ".$engine->domain."/admin");
		} else {
            //$engine->error("danger", "Podano zły login lub hasło.");
			header("Location: ".$engine->domain."/admin");
		}
	} else {
		header("Location: ".$engine->domain."/admin");
	}
}