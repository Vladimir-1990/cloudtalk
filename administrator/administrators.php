<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$add_new = $_POST["add_new"];
if($add_new == 1)
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    if($username == '')
    {
        $error = "<p>Username cannot be empty</p>";
    }
    if($password == '')
    {
        $error.= "<p>Password cannot be empty</p>";
    }
    if(strlen($password) < 4 AND $password != '')
    {
        $error.= "<p>Password to short</p>";
    }
    if($email == '')
    {
        $error.= "<p>Email cannot be empty</p>";
    }

    if($error == '')
    {
        $md5_password = md5($password);
        $sql_insert = "INSERT INTO administrators SET username = '$username', password = '$md5_password', email = '$email'";
        mysqli_query($link,$sql_insert);
    }
}

check_login($_SESSION['ID']);

$start = 0;
$per_page = 4;

if(!isset($_GET['page']))
{
    $page = 1;
}
else
{
    $page = $_GET['page'];
}

if($page <= 1)
    $start = 0;
else
    $start = $page * $per_page - $per_page;

$sql_select = "SELECT * FROM administrators ORDER BY ID ASC";
$num_rows = count_rows($sql_select);
$num_pages = $num_rows / $per_page;
$num_pages = ceil($num_pages);
$sql_select .= " LIMIT $start, $per_page";

$result = mysqli_query($link,$sql_select) or die(mysqli_error($link));
while($administrators[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
    STemplate::assign('administrators',$administrators);

$prev = $page - 1;
$next = $page + 1;

STemplate::assign('next',$next);
STemplate::assign('prev',$prev);
STemplate::assign('num_pages',$num_pages);
STemplate::assign('error',$error);
STemplate::assign('username',$username);
STemplate::assign('email',$email);
STemplate::display('administrator/header.tpl');
STemplate::display('administrator/administrators.tpl');
STemplate::display('administrator/footer.tpl');

?>