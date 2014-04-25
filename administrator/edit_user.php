<?php

require ("../include/config.php");

check_login($_SESSION['ID']);
header_info($_SESSION['ID']);

$USERID = $_GET['id'];

$user_exists_sql = "SELECT USERID FROM users WHERE USERID = '$USERID'";
$rows = count_rows($user_exists_sql);

if($rows == 1)
{
    
    $sql_select = "SELECT A.username,A.password,A.email,A.USERID,B.display_name,B.gender,B.DOB,B.bio FROM users A, users_details B WHERE A.USERID = '$USERID' AND B.USERID = '$USERID'";
    $result = mysqli_query($link,$sql_select) or die(mysqli_error($link));
    while($user[] = mysqli_fetch_array($result,MYSQLI_ASSOC))
        STemplate::assign('user',$user);

    $submit = $_POST['submit'];
    if($submit == 1)
    {
        $new_username = $_POST['username'];
        $new_display_name = $_POST['display_name'];
        $new_email = $_POST['email'];
        $new_bio = $_POST['bio'];
        $new_gender = $_POST['gender'];
        $new_profile_image = $_POST['profile_image'];

        if($new_username == '')
        {
            $error .= '<p>Username cannot be empty</p>';
        }

        if($new_email == '')
        {
            $error .= '<p>Email cannot be empty</p>';
        }

        if($_FILES["profile_image"]["name"] != '')
        {
            $_FILES["profile_image"]["name"] = strtolower($_FILES["profile_image"]["name"]);
            //uploading profile image
            $allowedExts = array(
                "gif",
                "jpeg",
                "jpg",
                "png");
            $extension = end(explode(".",$_FILES["profile_image"]["name"]));
            if((($_FILES["profile_image"]["type"] == "image/gif") || ($_FILES["profile_image"]["type"] == "image/jpeg") || ($_FILES["profile_image"]["type"] == "image/jpg") || ($_FILES["profile_image"]["type"] == "image/png")) && in_array($extension,$allowedExts))
            {
                $size = filesize($_FILES['profile_image']['tmp_name']);
                if($extension == "jpg" || $extension == "jpeg")
                {
                    $uploadedfile = $_FILES['profile_image']['tmp_name'];
                    $src = imagecreatefromjpeg($uploadedfile);
    
                }
                elseif($extension == "png")
                {
                    $uploadedfile = $_FILES['profile_image']['tmp_name'];
                    $src = imagecreatefrompng($uploadedfile);
                }
                else
                {
                    $src = imagecreatefromgif($uploadedfile);
                }
    
                list($width,$height) = getimagesize($uploadedfile);
    
                $newwidth = 300;
                $newheight = ($height / $width) * $newwidth;
                $tmp = imagecreatetruecolor($newwidth,$newheight);
    
                imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
                //$filename = "profilepics/".$_FILES['profile_image']['name'];
                $filename = "../profilepics/".$new_display_name.".".$extension;
                imagejpeg($tmp,$filename,100);
    
                imagedestroy($src);
                imagedestroy($tmp);
                $image_name = $new_display_name.'.'.$extension;
                $sql_addon = ",B.profile_image = '$image_name'";
            }
            else
            {
                $error .= '<p>Invalid image format</p>';
            }
        }

        if($error == '')
        {
            $sql_update = "UPDATE users A, users_details B SET A.email = '$new_email', A.username = '$new_username', B.display_name = '$new_display_name', B.bio = '$new_bio', B.dob = '$new_dob', B.gender = '$new_gender' $sql_addon WHERE A.USERID = '$USERID' AND B.USERID = '$USERID'";
            mysqli_query($link,$sql_update);
            $message = '<p>Account updated</p>';
        }
    }

    if($_POST['new_password'] == '1')
    {
        $password = $_POST['password'];
        if(strlen($password) < 4)
        {
            $error .= "<p>Password too short</p>";
        }
        if($error == '')
        {
            $password = md5($password);
            $sql_update_password = "UPDATE users SET password = '$password' WHERE USERID = '$USERID'";
            mysqli_query($link,$sql_update_password);
            $message = '<p>Password changed</p>';
        }
    }

}
else
{
    $error = "User does not exists";
}

STemplate::assign('error',$error);
STemplate::assign('message',$message);
STemplate::display('administrator/header.tpl');
STemplate::display('administrator/edit_user.tpl');
STemplate::display('administrator/footer.tpl');

?>