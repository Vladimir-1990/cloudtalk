<?php

require ("include/config.php");
require ("include/auto_login.php");

$page_title = "About us";
STemplate::assign('page_title',$page_title);

$templateselect = 'about.tpl';
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END
?>