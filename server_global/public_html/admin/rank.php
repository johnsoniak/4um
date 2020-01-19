<?php
require("../global/config.php");
require("../global/functions.php");
require("../global/engine.class.php");
require("../global/users.class.php");

$engine = new Engine();
$user = new Users();


if (isset($_POST["name"])) {
    $name = checkInput($_POST['name']);
    $color = checkInput($_POST['color']);

    if (strlen($name) == 0){
        $engine->error("danger", "Proszę wpisać nazwę rangi");
    } elseif (strlen($color) == 0) {
        $engine->error("danger", "Proszę podać kolor dla rangi");
    } else {
        $z = 0;
        foreach ($_POST["access"] as $data) {
            $z++;
            if ($z == 1)
                $access = checkInput($data);
            else
                $access .= ",".checkInput($data);
        }
        
        if ($engine->addRank($name, $color, $access)) {
            $engine->error("success", 'Ranga o nazwie <span style="color:'.$color.';"><b>'.$name.'</b></span> została poprawnie utworzona.');
        } else {
            $engine->error("danger", "Błąd podczas dodawania do bazy danych.");
        }
    }
    header("Location: ".$engine->domain."/admin/add-rank");
}
