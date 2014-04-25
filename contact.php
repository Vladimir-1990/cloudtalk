<?php

require ("include/config.php");
require ("include/auto_login.php");

$page_title = "Contact us";
STemplate::assign('page_title',$page_title);

$name = $_POST['name'];
$message = $_POST['message'];
$name = prep_input($name);
$message = prep_input($message);

if($name == '' OR $message == '')
{
    $error = 'Please enter both fields';
}

if($error == '')
{
    $sql_insert = "INSERT INTO feedback SET name = '$name', message = '$message'";
    mysqli_query($link,$sql_insert);
    $message = 'Thank you';
}

STemplate::assign("message",$message);
STemplate::assign("error",$error);

$templateselect = 'contact.tpl';
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>