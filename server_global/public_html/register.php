<?php
session_start();
/* Load Global functions */
require("global/config.php");
require("global/functions.php");
require("global/engine.class.php");
require("global/users.class.php");

$engine = new Engine();
$user = new Users();

$err = 0;
/* Register user */
if (isset($_POST["register"])) {
    // Check Variable data
    $username = checkInput($_POST["username"]);
    $password = checkInput($_POST["password"]);
    $password2 = checkInput($_POST["password2"]);
    $email = checkInput($_POST["email"]);
    $email2 = checkInput($_POST["email2"]);
    $captcha = checkInput($_POST["captcha"]);


    // Verify
    if (strlen($username) == 0 || strlen($username) > 10) { 
        $err++;
        $engine->error("danger", "Proszę wpisać nazwę użytkownika");
    } elseif (!preg_match('/^[a-zA-Z0-9-_]{5,}$/', $username)) { // for english chars + numbers only
        // valid username, alphanumeric & longer than or equals 5 chars
        $err++;
        $engine->error("danger", "Nazwa użytkownika może zawierać duże litery, małe litery, cyfry oraz - i _.");
    } elseif (!isset($password) || strlen($password) == 0) {
        $err++;
        $engine->error("danger", "Proszę usupełnić pole z hasłem.");
    }  elseif (strlen($password) < 6) {
        $err++;
        $engine->error("danger", "Hasło musi zawierać minimalnie 6 znaków");
    }  elseif ($password !== $password2) {
        $err++;
        $engine->error("danger", "Wpisane hasła różnią się od siebie.");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err++;
        $engine->error("danger", "Proszę wpisać poprawnie adres email");
    } elseif ($email !== $email2) {
        $err++;
        $engine->error("danger", "Wpisany adresy email różnią się od siebie.");
    } elseif(strtolower($captcha) !== strtolower($_SESSION['captcha_text'])) {
        $err++;
        $engine->error("danger", "Proszę poprawnie wpisać kod z obrazka");
    } 

    if ($err == 1) {
        header("Location: ".$engine->domain."/action/register/");
    } else {
        $register = $user->createUser($username, $email, $password);
        if ($register["error"] == false) {
            $err++;
            $engine->error("success", "Konto zostało poprawnie zarejestrowane, lecz aby dokończyć rejestrację musisz kliknąć w link aktywujący, który został wysłany na Twój adres email.");
            header("Location: ".$engine->domain."/action/register/");
        } else {
            $engine->error("danger", $register["value"]);
            header("Location: ".$engine->domain."/action/register/");
        }
    }
}
?>