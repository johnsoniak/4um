<?php
require("../global/config.php");
require("../global/engine.class.php");
require("../global/users.class.php");

$engine = new Engine();
$user = new Users();

echo $user->username;

?>