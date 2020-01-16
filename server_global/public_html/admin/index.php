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

function get_url_contents($url) {

    $html = file_get_contents($url);
    preg_match_all( '/< *img[^>]*src *= *["\']?([^"\']*)/i',$html, $matches ); 
    return $matches;
}

$photo = get_url_contents('http://pixabay.com/images/search/%C5%9Bwiat/');


/*
foreach ($data->responseData->results as $result) {
    $results[] = array('url' => $result->url, 'alt' => $result->title);
}

print_r($results);
*/
$engine->smarty->assign("photo", $photo[1][0]);
$engine->addDisplay("login.tpl");
$engine->display();

?>