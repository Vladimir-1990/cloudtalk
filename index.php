<?php

require ("include/config.php");
require ("include/auto_login.php");
$thebaseurl = $config['baseurl'];
$page_title = "CloudTalk";
STemplate::assign('page_title',$page_title);
if($_SESSION['USERID'] != '')
{
    header("location:home.php");
}

$templateselect = "index.tpl";
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END

?>