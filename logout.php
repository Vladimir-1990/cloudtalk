<?php

require ("include/config.php");

if(isset($_SESSION['USERID']))
{
    session_destroy();
    $cookie_name = 'siteAuth';
    setcookie($cookie_name, "", time()-3600);
    header("location:index.php");  
}
else
{
    header("location:index.php");    
}

?>