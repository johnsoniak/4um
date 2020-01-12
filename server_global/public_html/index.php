<?php
require("global/config.php");
require("global/functions.php");
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
    case "activate":
        /* Page for Activation user Profile */
        $username = checkInput($_GET["username"]);
        $code = checkInput($_GET["code"]);

        $engine->mysql->where("username", $username);
        $engine->mysql->where("SecretCode", $code);
        $engine->mysql->update($engine->prefix."accounts", array("active" => 1));
        if ($engine->mysql->count == 1) {
            $engine->error("success", "Twoje konto zostało aktywowane. Teraz możesz się zalogować.");
            header("Location: ".$engine->domain."/");
        } else {
            $engine->error("danger", "Podano złe dane do aktywowania konta.");
            header("Location: ".$engine->domain."/");
        }
        
        break;
    case "register":
        if (!isset($user->id) || $user->id == 0) {
            $engine->title = "Rejestracja";
            $engine->addDisplay("register.tpl");
            $engine->display();
        } else {
            
        }
        break;
    case "logout":
        $user->logoutUser();
    default:
        $engine->addDisplay("portal.tpl");
        $engine->display();
        break;
}

