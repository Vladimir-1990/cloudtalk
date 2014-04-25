<?php

require ("../include/config.php");

if(!isset($_SESSION['ID']))
{

    $submit = $_POST['submit'];
    if($submit == '1')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $md5_password = md5($password);
        $sql_select = "SELECT username, password, ID FROM administrators WHERE username = '$username' AND password = '$md5_password'";
        $result = mysqli_query($link,$sql_select);
        while($record = mysqli_fetch_array($result))
        {
            $db_username = $record['username'];
            $db_password = $record['password'];
            $db_id = $record['ID'];
        }
        if($username == $db_username AND $md5_password == $db_password)
        {
            $_SESSION['username'] = $db_username;
            $_SESSION['ID'] = $db_id;
            $curr_time = time();
            $sql_update = "UPDATE administrators SET last_login = '$curr_time' WHERE ID = '$db_id'";
            mysqli_query($link,$sql_update);
            header("location:home.php");
        }
        else
        {
            $error = "Access denied, wrong username or password";
        }
    }
    STemplate::assign('error',$error);
    STemplate::display('administrator/index.tpl');

}
else
{
    header("location:home.php");
}

?>