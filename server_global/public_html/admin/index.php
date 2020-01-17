<?php
require("../global/config.php");
require("../global/functions.php");
require("../global/engine.class.php");
require("../global/users.class.php");

$engine = new Engine();
$user = new Users();

if ($engine->rank[$user->rank]["admin"] == 0)
    header("Location:".$engine->domain);

$engine->smarty->clearCache("header.tpl");

$profile = $user->getUserData($user->id);
$engine->smarty->assign("profile", $profile);

$keywords["en"] = array("London", "Malta", "Asia", "Dubaj", "Europe", "Dog", "City", "Cars", "Music", "Mallorca", "Russia", "Ukraine");
$keywords["pl"] = array("Londyn", "Malta", "Azja", "Dubaj", "Europa", "Pieski", "Miasto", "Samochody", "Muzyka", "Majorka", "Rosja", "Ukraina");

if (!isset($user->id) || $user->id == 0) 
    header("Location: ".$engine->domain);
elseif ($engine->rank[$user->rank]["admin"] == 0)
    header("Location: ".$engine->domain);

if (isset($_GET["action"]))
    $action = $_GET["action"];
else 
    $action = "";
switch ($action) {
    case "user":
        break;

    case "logout":
    
        break;    
    default:
        if ($user->admin == 0){
            $rand = rand(0,11);
            $photo["category"] = $keywords["pl"][$rand];
            $photo["image"] = randomImage($keywords["en"][$rand]);
            $engine->title = "Logowanie";
            $engine->smarty->assign("photo", $photo);
            $engine->addDisplay("login.tpl");
            $engine->display();
        } else {
            $engine->addDisplay("dashboard.tpl");
            $engine->display();
        }
        


}
    
?>