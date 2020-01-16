<?php
require("global/config.php");
require("global/functions.php");
require("global/engine.class.php");
require("global/users.class.php");

$engine = new Engine();
$user = new Users();



if (isset($_GET["action"]))
    $action = checkInput($_GET["action"]);
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
            header("Location: ".$engine->domain."/");
        }
        break;
    case "profile":
        $username = checkInput($_GET["username"]);
        $engine->mysql->where("username", $username);
        $profile = $engine->mysql->getOne($engine->prefix."accounts");
        if (isset($profile["id"]) || $profile["id"] > 0) {
            $engine->title = "Profil ".$profile["username"];
            $engine->smarty->assign("profile", $profile);
            $engine->addDisplay("profile.tpl");
            $engine->display();
        } else {
            header("Location: ".$engine->domain."/404");
        }
        break;
    case "404":
        $engine->title = "Nie znaleziono";
        $engine->addDisplay("404.tpl");
        $engine->display();
        break;
    case "logout":
        $user->logoutUser();
        break;
    case "settings":
        $engine->addDisplay("settings.tpl");
        $engine->display();
        break;
    default:
        $engine->addDisplay("portal.tpl");
        $engine->display();
        break;
}

