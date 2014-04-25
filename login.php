<?php

require ("include/config.php");
$thebaseurl = $config['baseurl'];

$page_title = "Login";
STemplate::assign('page_title',$page_title);

$submit = $_POST['submit'];
if($submit == 1)
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = prep_input($username);
    $password = prep_input($password);
    
    $password = md5($password);
    
    $sql_select_user = "SELECT username,password,email,USERID FROM users WHERE (username = '$username' OR email = '$username') AND password = '$password'";
    $result_select_user = mysqli_query($link,$sql_select_user);
    $row = mysqli_fetch_array($result_select_user,MYSQLI_ASSOC);

    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_email = $row['email'];
        
    if(($db_username == $username OR $db_email == $username) AND $db_password == $password)
    {   
        $USERID = $row['USERID'];
        $username = $row['username'];
        $time = date("d.m.Y,G:i:s");
        $users_ip = $_SERVER['REMOTE_ADDR'];
        $_SESSION['USERID'] = $USERID;
        $_SESSION['username'] = $username;
        $sql_update_time = "UPDATE users SET lastlogin = '$time', ip_address = '$users_ip' WHERE USERID = '$USERID'";
        mysqli_query($link,$sql_update_time);
        $remember_me = $_POST['remember_me'];
            if($remember_me == 1)
            {
                $cookie_name = 'siteAuth';
                $cookie_time = (3600 * 24 * 30);//30 days
                setcookie ($cookie_name, 'usr='.$username.'&hash='.$password, time() + $cookie_time); 
            }
        header('location:home.php');
    }
    else
    {
        $error = "Wrong username or password";
        STemplate::assign('error',$error);
    }
    
}

$templateselect = "login.tpl";

STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');
//TEMPLATES END

?>