<?php
session_start();
if (!isset($_SESSION["lang"])) {
  if (!isset($_COOKIE["lan"])) {
    $langs=explode('-',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $lang=preg_replace('/;.*$/','',$langs[0]);
    $lang=preg_replace('/[^a-zA-Z_\-]/','',$lang);
    $cookie_set = setcookie ("lan", $lang, time()+60*60*24*30);
    $_SESSION["lang"] = $lang;
  } else {
    $_SESSION["lang"] = $_COOKIE["lan"];
  }
}

if ($_SESSION["lang"] == 'ru') {  
    $js_dict = 'ru';
} else {  
    $js_dict = 'en';
}
require_once('languages/'.$js_dict.'/dict.php');
require_once('models/head.php');
require_once('models/content.php');
if (!$_SESSION['login']) {
  require_once('models/RegistryForm.php');
  require_once('models/LoginForm.php');
}

require_once('models/footer.php');
?>