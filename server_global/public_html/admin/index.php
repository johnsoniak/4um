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

function get_url_photo($url) {
    $re = '/(alt|href|src)=("[^"]*")/'; 
    $html = file_get_contents($url);
    preg_match_all($re, $html, $matches); 
    return $matches;
}

function getPhoto($url) {
    $html = file_get_contents($url);
    preg_match('/< *img[^>]*src *= *["\']?([^"\']*)/i', $html, $matches);
    return $matches;
}


$keywords = array("London", "Malta", "Afryka", "Dubaj", "Cat", "Psy", "Miasto", "Cars", "People", "Mallorca");
$photo["category"] = $keywords[rand(0,9)];
function imageSearch ($world="", $category="") {
    if (strlen($world) > 0) {
        $number = 84;
        $link = $world."/";
    } else {
        $number = 72;
        $link = "";
    }
    if (strlen($category) > 0) {
        $link2 = "?cat=".$category;
    } else {
        $link2 = "";
    }

    $url = "http://pixabay.com/photos/search/".$link."".$link2;
    $url = get_url_photo($url);
   
    return substr($url[0][$number], 6, -1);;
}

//$url = "http://pixabay.com/photos/search/london/?cat=people";
$url = imageSearch($photo["category"]);
//print_r($url);
//$url = substr($url[0][72], 6, -1); 
$photo['image'] = get_url_photo("http://pixabay.com".$url);
$photo["image"] = substr($photo["image"][0][57], 5, -1);
if (!isset($user->id) || $user->id == 0) 
    header("Location: ".$engine->domain);
elseif ($engine->rank[$user->rank]["admin"] == 0)
    header("Location: ".$engine->domain);


    
$engine->title = "Logowanie";
$engine->smarty->assign("photo", $photo);
$engine->addDisplay("login.tpl");
$engine->display();

?>