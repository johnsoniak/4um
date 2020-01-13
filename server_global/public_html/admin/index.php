<?php
require("../global/config.php");
require("../global/engine.class.php");
require("../global/users.class.php");

$engine = new Engine();
$user = new Users();

if ($engine->rank[$user->rank]["admin"] == 0)
    header("location:".$engine->domain);

$engine->smarty->clearCache('index.tpl');

$engine->addDisplay("login.tpl");
$engine->display();

?>