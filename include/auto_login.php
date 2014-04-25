<?php

$cookie_name = 'siteAuth';
if(isSet($_COOKIE[$cookie_name]))
{
    parse_str($_COOKIE[$cookie_name]);

    $sql_select_user = "SELECT username,password,email,USERID FROM users WHERE (username = '$usr' OR email = '$usr') AND password = '$hash'";
    $result_select_user = mysqli_query($link,$sql_select_user);
    $row = mysqli_fetch_array($result_select_user,MYSQLI_ASSOC);

    $db_username = $row['username'];
    $db_password = $row['password'];
    $db_email = $row['email'];

    if(($db_username == $usr OR $db_email == $usr) AND $hash == $db_password)
    {
        $USERID = $row['USERID'];
        $username = $row['username'];
        $time = date("d.m.Y,G:i:s");
        $_SESSION['USERID'] = $USERID;
        $_SESSION['username'] = $username;
        $sql_update_time = "UPDATE users SET lastlogin = '$time' WHERE USERID = '$USERID'";
        mysqli_query($link,$sql_update_time);
    }
}

?>