<?php

require ("include/config.php");
$thebaseurl = $config['baseurl'];

$code = $_GET['code'];
$USERID = $_GET['id'];

//checking if the user is already verified his acc
$sql_select_user = "SELECT verified FROM users WHERE USERID = '$USERID'";
$result_select_user = mysqli_query($link,$sql_select_user);
$row = mysqli_fetch_array($result_select_user,MYSQLI_ASSOC);

$select_user = $row['verified'];
if($select_user == '1')
    $error = "<p>Your account is already verified</p>";
else
{
    //checking the verify code in the db
    $sql_select = "SELECT * FROM verification_code WHERE code = '$code' AND USERID = '$USERID'";
    $rows = count_rows($sql_select);

    if($rows == '1')
    {
        //updating the user status
        $sql_update_user = "UPDATE users SET verified = '1' WHERE USERID = '$USERID'";
        mysqli_query($link,$sql_update_user);
        $message = "<p>Account verified. Thank you</p>";
        
        $time = date("d.m.Y,G:i:s");
        $_SESSION['USERID'] = $USERID;
        $sql_update_time = "UPDATE users SET lastlogin = '$time' WHERE USERID = '$USERID'";
        mysqli_query($link,$sql_update_time);
    }
    else
    {
        $error = "</p>Account not verified. Please <a href='contact_us.php'>contact us</a></p>";
    }
}

STemplate::assign('message',$message);
STemplate::assign('error',$error);
//template begin
$templateselect = "verify_account.tpl";
STemplate::display('header.tpl');
STemplate::display($templateselect);
STemplate::display('footer.tpl');

?>