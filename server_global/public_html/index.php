<?php
require("global/config.php");
require("global/engine.class.php");
require("global/users.class.php");

$engine = new Engine();
$user = new Users();



if (isset($_GET["action"]))
    $action = $_GET["action"];
else
    $action = false;

switch ($action) {
    case "login":
        if (!isset($user->id) || $user->id == 0) {
            $engine->title = "Zaloguj";
            $engine->addDisplay("login.tpl");
            $engine->display();
        } else {
            header("Location: ".$engine->domain."/");
        }
        
        break;

    case "register":
        if (!isset($user->id) || $user->id == 0) {
            $engine->title = "Rejestracja";
            $engine->addDisplay("register.tpl");
            $engine->display();
        } else {
            header("Location: ".$engine->domain."/");
        }
        break;
    default:
        //$engine->addDisplay("portal.tpl");
        $engine->display();
        break;
}

