<?php
function check_login($id)
{
    $sql_select = "SELECT id FROM administrators WHERE ID = '$id'";
    $rows = count_rows($sql_select);
    if($rows == 1)
    {
        return true;
    }
    else
    {
        header("location:index.php"); 
    }
}

function header_info($id)
{
    $link = $GLOBALS['link'];
    $sql_select = "SELECT last_login,username FROM administrators WHERE ID = '$id'";
    $result = mysqli_query($link,$sql_select); 
    while($record = mysqli_fetch_array($result))
    {
        $last_login = $record['last_login'];
        $username = $record['username'];
    }
    $server_time = date("G:i:s");
    $server_date = date("d.m.Y");
    $last_login = date("G:i:s",$last_login);
    $info_array = array("last_login" => $last_login, "username" => $username, "server_time" => $server_time, "server_date" => $server_date);
    STemplate::assign('info_array',$info_array);
}

?>