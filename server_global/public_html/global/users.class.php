<?php
namespace {
    class Users 
    {   
        /* Session ID */
        public $sid;

        /* User ID */
        public $id;

        /* webSocket Session ID */
        public $wsid;

        /* Information of rank */
        public $rank;

        public $username;


        public $allUsers;
        public $lastUser;

        /* User Browser */
        protected $browser;

        public function __construct() {
            global $engine;
            // useragent
            $this->browser = $this->getUserBrowser($_SERVER['HTTP_USER_AGENT']);
            
            // COOOKIE
            if (false == array_key_exists($engine->name, $_COOKIE)) {
                $this->sid = sha1(rand(0,9999)+time());
                setcookie($engine->name, $this->sid, time()+(60*60)); // godzina
            } else {
                $this->sid = $_COOKIE[$engine->name];
            }
            $engine->mysql->get($engine->prefix."accounts", "username, count(*) as cnt");
            $stats = $engine->mysql->getLastQuery();
            $this->allUsers = $stats["cnt"];
            $this->lastUser = $stats["username"];
            
            $engine->smarty->assign("user", $this);
            $this->createSession();
            if ($this->id > 0) {
                $engine->mysql->where("id", $this->id);
                $data = $engine->mysql->getOne($engine->prefix."accounts");
                $this->username = $data["username"];
                $this->rank = $data["rank"];
            } else {
                $this->id = 0;
                $this->username = "Guest";
                $this->rank = 0;
            }  
            return true;
        }

        // Funkcja wylogowywania 
        function logoutUser() {
            global $engine;
            $engine->mysql->where("sid", $this->sid);
            $engine->mysql->update($engine->prefix."sessions", array("uid" => 0));
            header("Location: ".$engine->domain);
            return true;
        }

        // Funkcja logowania użytkownika (zwraca True lub False)
        function loginUser($username, $password) {
            global $engine;
            
            // Hashowanie hasła
            $engine->mysql->where ("username", $username);
            $data = $engine->mysql->getOne ($engine->prefix.'accounts');
            
            $pass = $this->hashPassword($password, $data['usercode']);
            
            if (isset($data['password']) && $data["password"] == $pass){
                if ($this->updateDataUser($data))
                {
                    $this->updateSessionUid($data["id"]); 
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        function updateDataUser($data) {
            global $engine;
            
            // Pobieramy datę ostatniej wizyty
            $lastLogin = $data['lastLogDat'];
            $lastVisit = $data['lastVisDat'];
            
            
            $dataUp = Array (
                'lastLogDat' => $engine->time,
                'lastVisDat' => $lastLogin,
                'online' => 1
            );
            $engine->mysql->where ('id', $data["id"]);
            if ($engine->mysql->update ($engine->prefix.'accounts', $dataUp))
                return true;
            else
                return false;
        }

        function updateSessionUid($id) {
            global $engine;
    
            $engine->mysql->where("sid", $this->sid);
            $engine->mysql->update($engine->prefix."sessions", array("uid" => $id));
            return true;
        }


        public function createSession() {
            global $engine;
            $engine->mysql->where("sid", $this->sid);
            $s = $engine->mysql->get($engine->prefix.'sessions');
            if (isset($s[0]["uid"]) && $s[0]["uid"] > 0)
               $this->id = $s[0]["uid"];
            if ($engine->mysql->count == 0) {
                // tworzenie sesji
                $data = array(
                    "uid" => 0,
                    "sid" => $this->sid,
                    "wsid" => 0,
                    "useragent" => $this->browser,
                    "ip" => "192.168.1.1",
                    "login_time" => 0,
                    "last_active" => $engine->time,
                );

                if (!$engine->mysql->insert($engine->prefix."sessions", $data)) 
                    $engine->syntex_error();
                else
                    return true;
            } else {
                // Aktualizacja sesji
                $data = array("last_active" => $engine->time);
                $engine->mysql->where("sid", $_COOKIE[$engine->name]);
                $engine->mysql->update($engine->prefix."sessions", $data);
            }
        }


        function checkUsername($username) {
            global $engine;
            $engine->mysql->where ("username", $username);
            $data = $engine->mysql->getOne($engine->prefix."accounts");
            return $data['id'];
        }

        function checkEmail($email) {
            global $engine;
            $engine->mysql->where ("email", $email);
            $data = $engine->mysql->getOne($engine->prefix."accounts");
            return $data['id'];
        }

        public function createUser($username, $email, $password) {
            global $engine;
            if ($this->checkUsername($username) > 0) {
                return array("error" => true, "value" => "Użytkownik o loginie <span>$username</span> jest już zarejestrowany. Użyj innej nazwy użytkownika.");
            } elseif ($this->checkEmail($email) > 0) {
                return array("error" => true, "value" => "Użytkownik o podanym adresie <span>$email</span> jest już zarejestrowany. Użyj innej nazwy użytkownika.");
            } else {
                $sc = $this->createSecretCode();
                $salt = $this->createSalt();
                $pass = $this->hashPassword($password, $salt);
            
                $data = array(
                    'username' => $username,
                    'password' => $pass,
                    'SecretCode' => $sc,
                    'email' => $email,
                    "usercode" => $salt,
                    "regDat" => $engine->time,
                    "rank" => 1
                );
                
                $id = $engine->mysql->insert($engine->prefix.'accounts', $data);
                if($id)
                    if ($this->sendCodeActivation($email, $username, $sc) == true)
                        return array("error" => false, "value" => $id);
                    else
                        return array("error" => true, "value" => "Błąd podczas wysyłania emaila.");
                else 
                    return array("error" => true, "value" => $data /*"Nie utworzono konta użytkownika o następujących danych:<br> <span>Nazwa użytkownika:</span> <b>$username</b><br> <span>E-mail:</span> <b>$email</b><br>"*/);
            }
        }

        //Funkcja zabezpieczania hasła przed odkryciem
        public function hashPassword($password, $salt) {
            return sha1(md5($password).sha1('$Ȅ®V4Ȗ').md5($salt));
        }
        
        //Funkcja tworząca unikalny sekretny kod (potrzebny do aktywacji konta)
        function createSecretCode()	{
            return sha1(sha1(time()).md5(time()));
        }
        
        //Funkcja tworząca zabezpieczanie odczytania hasła
        function createSalt() {
            global $engine; 
            return substr(sha1($engine->time), 0, 8);;
        }

        function sendCodeActivation($email, $login, $code) {
            global $config, $engine;
            require 'global/files/phpmailer/PHPMailerAutoload.php';
    
            $html_code = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
            <html>
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>Twój kod aktywacyjny na '.$engine->sitename.'</title>
            </head>
            <body>
            <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
            <p>Witaj <b>'.$login.'</b></p>
            <div align="center">
            Aby aktywować swój profil musisz kliknąć na <a href="'.$engine->domain.'/activate/'.$login.'/'.$code.'">ten link</a>.
            </div>
            Pozdrawiamy, administracja '.$engine->sitename.'
            </div>
            </body>
            </html>';
            
            //Create a new PHPMailer instance
            $mail = new PHPMailer;
            $mail->CharSet = "UTF-8";
            //Set who the message is to be sent from
            $mail->setFrom($config->ReplyMail, 'Robot '.$engine->sitename);
            //Set an alternative reply-to address
            $mail->addReplyTo($config->ReplyMail, 'Robot '.$engine->sitename);
            //Set who the message is to be sent to
            $mail->addAddress($email, $login);
            //Set the subject line
            $mail->Subject = 'Weryfikacja na '.$engine->sitename;
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->msgHTML($html_code);
            //Replace the plain text body with one created manually
            $mail->AltBody = 'Witaj '.$login.'!
            
            Aby aktywować swój profil musisz wejść na stronę '.$engine->domain.'/activate/'.$login.'/'.$code.'
            
            Pozdrawiamy, administracja '.$engine->sitename;
            //Attach an image file
            //$mail->addAttachment('images/phpmailer_mini.png');
    
            //send the message, check for errors
            if (!$mail->send()) {
                return false;
            } else {
                return true;
            }
        }

        protected function getUserBrowser($user_agent) {
            if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
            elseif (strpos($user_agent, 'Edge')) return 'Edge';
            elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
            elseif (strpos($user_agent, 'Safari')) return 'Safari';
            elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
            elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
        
            return 'Other';
        }

    }
}
