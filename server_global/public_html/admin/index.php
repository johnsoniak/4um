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

$keywords["en"] = array("London", "Malta", "Asia", "Dubaj", "Europe", "Dog", "City", "Cars", "Music", "Mallorca", "Russia", "Ukraine", "design", "indonesia", "games", "USA", "New+York", "Canada");
$keywords["pl"] = array("Londyn", "Malta", "Azja", "Dubaj", "Europa", "Pieski", "Miasto", "Samochody", "Muzyka", "Majorka", "Rosja", "Ukraina", "Design", "Indonezja", "Gry", "Ameryka", "Nowy York", "Kanada");

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
    case "add-rank":
        $engine->title = "Dodawanie rangi";
        $engine->addDisplay("add-rank.tpl");
        $engine->display();
        break;
    case "ranks-list":
        $engine->title = "Lista rang";
        $engine->addDisplay("ranks-list.tpl");
        $engine->display();
        break;
    case "users-list":
        $engine->title = "Lista użytkowników";
        if (isset($_GET["order-by"])) {
                // All good
            $order = explode(":", $_GET["order-by"]);
            if ($order[1] == "desc")
                $how = "desc";
            else    
                $how = "asc";
            $engine->mysql->orderBy($order[0], $how);
        } else {
            $engine->mysql->orderBy("id", "asc");
        }
        if (isset($_GET["q"])) {
            $query = $_GET["q"];
            $engine->mysql->where ("id", $query, 'like');
            $engine->mysql->orWhere("username", '%'.$query.'%', 'like');
            $engine->mysql->orWhere("email", '%'.$query.'%', 'like');
        }
        if (isset($_GET["page"]))
            $page = (int)$_GET["page"];
        else 
            $page = 1; 
        $engine->mysql->pageLimit = 5;
        $location = explode("&page", $engine->location);
        $engine->location = $location[0];
        $users = $engine->mysql->arraybuilder()->paginate($engine->prefix."accounts", $page);
        $engine->smarty->assign("users", $users);
        $pg["thisPage"] = $page;
        $pg["totalPages"] = $engine->mysql->totalPages;
        $engine->smarty->assign("page", $pg);
        $engine->addDisplay("users-list.tpl");
        $engine->display();
        break;
    case "logout":
        $user->logoutAdmin();
        break;    
    default:
        if ($user->admin == 0){
            $rand = rand(0,17);
            $photo["category"] = $keywords["pl"][$rand];
            $photo["image"] = randomImage($keywords["en"][$rand]);
            $engine->title = "Logowanie";
            $engine->smarty->assign("photo", $photo);
            $engine->addDisplay("login.tpl");
            $engine->display();
        } else {
            $engine->title = "Strona główna";
            $engine->addDisplay("dashboard.tpl");
            $engine->display();
        }
    break;
        
}
    
?>