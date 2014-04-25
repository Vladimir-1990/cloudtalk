<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$USERID = $_SESSION['ID'];

$submit = $_POST['submit'];
if($submit == 1)
{
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];

    if($new_username == '')
    {
        $error .= '<p>Username cannot be empty</p>';
    }
    if($new_email == '')
    {
        $error .= '<p>Email cannot be empty</p>';
    }

    if($error == '')
    {
        $sql_update = "UPDATE administrators SET username = '$new_username', email = '$new_email' WHERE ID = '$USERID'";
        mysqli_query($link,$sql_update);
        $message = '<p>Account updated</p>';
    }
}

if($_POST['new_password'] == '1')
{
    $new_password = $_POST['password'];
    if(strlen($new_password) < 4)
    {
        $error .= "<p>Password too short</p>";
    }
    if($new_password == '')
    {
        $error .= '<p>Password cannot be empty</p>';
    }
    if($error == '')
    {
        $password = md5($new_password);
        $sql_update_password = "UPDATE administrators SET password = '$password' WHERE ID = '$USERID'";
        mysqli_query($link,$sql_update_password);
        $message = '<p>Password changed</p>';
    }
}

$sql_select = "SELECT username,password,email FROM administrators WHERE ID = '$USERID'";
$result = mysqli_query($link,$sql_select) or die(mysqli_error($link));
while($admin[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
    STemplate::assign('admin',$admin);

STemplate::assign('message',$message);
STemplate::assign('error',$error);
STemplate::display('administrator/header.tpl');
STemplate::display('administrator/account.tpl');
STemplate::display('administrator/footer.tpl');

?>