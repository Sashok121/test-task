<?php
session_start();
if (isset($_POST['language']))
{
    $lang = $_POST['language'];
    $cookie_set = setcookie ("lan", $lang, time()+60*60*24*30);
    $_SESSION["lang"] = $lang;
    header("Location: ".$_SERVER['HTTP_REFERER'].$_SERVER['QUERY_STRING']);
}
else
{
    header("Location: index.php");
}
?>