<?php
session_start();
if (!isset($_SESSION["lang"]))
{
    if (!isset($_COOKIE["lan"])) // Проверяем язык браузера, объявляем языковые переменные.
    {
       $langs=explode('-',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
       $lang=preg_replace('/;.*$/','',$langs[0]);
       $lang=preg_replace('/[^a-zA-Z_\-]/','',$lang);

       $cookie_set = setcookie ("lan", $lang, time()+60*60*24*30);
       $_SESSION["lang"] = $lang;
    }
    else
    {
       $_SESSION["lang"] = $_COOKIE["lan"];
    }
}

// Подключаем словарь для PHP-скриптов
if ($_SESSION["lang"] == 'ru')
{
    require_once('languages/ru/dict.php');
    $js_dict = 'ru';
}
else
{
    require_once('languages/en/dict.php');
    $js_dict = 'en';
}
?>

























<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $dict['title']?></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
		

	</head>
	<body>			
		<div class="content">		
			<!--Start botton-->
			<a href="#modalRegistry" class="btn btn-registry" name="registry"><?php ?><?=$dict['btn_registry']?></a>
        	<a  href="#modalLogin" class="btn btn-login" name="login"><?=$dict['btn_login']?></a>
        	<!--End botton-->
        	<!-- форма для смены языка -->
    		<form action="change_language.php" method="post" name="change_lang" id='change_lang_form'>
       			<?php echo $d[1]; ?>
       			<select name="language" id="change_lang" onChange="javascript:submit();">
          		<!-- список доступных языков -->
         			 <option value="en" <?php if ($_SESSION["lang"] != 'ru') { echo 'selected="selected"';}?>>English</option>
          			<option value="ru" <?php if ($_SESSION["lang"] == 'ru') { echo 'selected="selected"';}?>>Русский</option>
       			</select>
    		</form>
		</div>	
    <!--Start modal Registry-->
    <div id="modalRegistry" class ="modal">
      <h2><?=$dict['btn_registry']?></h2>
      <form method="post" name="registerForm">
        
      </form>
      <a href="#close" class="btn-close">×</a> 
    </div>
    <!--End modal-->

		<!--Start modal Log in-->
    <div id="modalLogin" class ="modal">
      <h2><?=$dict['btn_login']?></h2>  
      <form method="post" name="loginForm">
        
      </form>
       <a href="#close" class="btn-close">×</a> 
    </div>
    <!--End modal-->
    
		
	</body>
</html>