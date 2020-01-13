<?php
namespace {
    class Engine 
    {   
        /* Name of Engine */
        public $name;

        /* Version */
        public $version;

        /* Version Code */
        public $ver_code;

        /* License */
        protected $license;

        /* Latest Version */
        public $latest;

        /* Latest Version Code */
        public $latest_ver_code;

        // Load Smarty
        public $smarty;

        public $countDisplay = 0;

        public $templateName = array();

        // Domain
        public $domain;

        /* Location */
        public $location;
        
        /* MySQL Connections */
        public $mysql;

        public $prefix = "";

        /* Styles in HTML */
        public $style;

        /* Title Page */
        public $title;

        public $sitename;

        /* Time on Server */
        public $time;

        public $error = array();

        /* Informations of rank */
        public $rank = array();

        // Construct class
        public function __construct() {
            global $config;

            // zbieramy informacje o szablonie z konfiguracji
            $this->name = "4umEngine";       
            $this->sitename = $config->sitename;
            $this->time = time();
            $this->domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'];
            $this->location = (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "");

            // Połączenie z bazą danych
            require_once('MysqliDb.php');
            $this->mysql = new MysqliDb($config->DBhost, $config->DBuser, $config->DBpass, $config->DBname);
            $this->prefix = "4um_";
            
            // System of errors
            if (!isset($this->error["value"]))
                $this->error['is'] = false;

            if (true == array_key_exists("error", $_COOKIE)) {
                $this->error = unserialize($_COOKIE['error'], ["allowed_classes" => false]);
                $this->clearError();
            }


            // Rank data
            $ranks = $this->mysql->get($this->prefix."ranks");
            foreach ($ranks as $rank) {
                $this->rank[$rank["id"]] = $rank;
                $this->rank[$rank["id"]]["admin"] = $rank["addUser"];
            }


            // Ładujemy system szablonów
            require 'files/smarty/Smarty.class.php';
            $this->smarty = new Smarty;
            $this->smarty->setTemplateDir('./templates/'.$config->template)
                ->setCompileDir('./templates_c')
                ->setCacheDir('./cache');

            $this->smarty->assign("template", $this->domain.'/templates/'.$config->template);
            
            
            if (!$this->mysql) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }
            
            // Rozruch funkcji
            if (strpos($this->location, 'admin/') == false) 
                $this->getTemplateStyle();

            // Przenoszenie danych do szablonu
            $this->smarty->assign("engine", $this);
            
            return true;
        }

        public function getTemplateStyle() {
            global $config;
            $this->style = file_get_contents('./templates/'.$config->template.'/css/global.style.css');
        }

        public function syntax_error($error) {
            $this->smarty->assign("error", $error);
            $this->smarty->display("error.tpl");
            return false;
        }

        public function addDisplay($template) {
            $this->countDisplay++;
            $this->templateName[$this->countDisplay] = $template;
        }

        public function display() {
            $this->smarty->display("header.tpl");
            foreach ($this->templateName as $template) {
                $this->smarty->display($template);
            }
            $this->smarty->display("footer.tpl");
        }

        /* Function Display Error */
        public function error($type, $value) {
            $err = array(
                "is" => 1,
                "type" => $type,
                "value" => $value
            );
            setcookie("error", serialize($err), time()+(60*5), "/");
        }

        /* Function Clear Error for Displayed Error */
        public function clearError() {
            unset($_COOKIE['error']);
            setcookie("error", "", time()-3600, "/");
        }
    }
}