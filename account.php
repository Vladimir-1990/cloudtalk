<?php require ("include/config.php");
require ("include/auto_login.php");

$page_title = "Your account";
STemplate::assign('page_title', $page_title);

if ($_SESSION['USERID'] != '')
{
	$USERID = $_SESSION['USERID'];
	if ($_POST['submit'] == '1')
	{
		$new_display_name = $_POST['display_name'];
		$new_email = $_POST['email'];
		$new_bio = $_POST['bio'];
		$new_dob = $_POST['DOB'];
		$new_gender = $_POST['gender'];

		$new_display_name = prep_input($new_display_name);
		$new_email = prep_input($new_email);
		$new_bio = prep_input($new_bio);
		$new_dob = prep_input($new_dob);
		$new_gender = prep_input($new_gender);

		if ($new_display_name == '')
		{
			$error .= '<p>Display name cannot be empty</p>';
		}

		if ($new_email == '')
		{
			$error .= '<p>Email cannot be empty</p>';
		}

		if ($_FILES["profile_image"]["name"] != '')
		{
			$_FILES["profile_image"]["name"] = strtolower($_FILES["profile_image"]["name"]);
			//uploading profile image
			$allowedExts = array(
				"gif",
				"jpeg",
				"jpg",
				"png");
			$extension = end(explode(".", $_FILES["profile_image"]["name"]));
			if ((($_FILES["profile_image"]["type"] == "image/gif") || ($_FILES["profile_image"]["type"] ==
				"image/jpeg") || ($_FILES["profile_image"]["type"] == "image/jpg") || ($_FILES["profile_image"]["type"] ==
				"image/png")) && in_array($extension, $allowedExts))
			{
				$size = filesize($_FILES['profile_image']['tmp_name']);
				if ($extension == "jpg" || $extension == "jpeg")
				{
					$uploadedfile = $_FILES['profile_image']['tmp_name'];
					$src = imagecreatefromjpeg($uploadedfile);

				}
				elseif ($extension == "png")
				{
					$uploadedfile = $_FILES['profile_image']['tmp_name'];
					$src = imagecreatefrompng($uploadedfile);
				}
				else
				{
					$src = imagecreatefromgif($uploadedfile);
				}

				list($width, $height) = getimagesize($uploadedfile);

				$newwidth = 300;
				$newheight = ($height / $width) * $newwidth;
				$tmp = imagecreatetruecolor($newwidth, $newheight);

				imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
				//$filename = "profilepics/".$_FILES['profile_image']['name'];
				$filename = "profilepics/" . $new_display_name . "." . $extension;
                var_dump($filename);
				imagejpeg($tmp, $filename, 100);

				imagedestroy($src);
				imagedestroy($tmp);
				$image_name = $new_display_name . '.' . $extension;
				$sql_addon = ",B.profile_image = '$image_name'";
			}
			else
			{
				$error .= '<p>Invalid image format</p>';
				$sql_addon = null;
			}
		}

		if ($error == '')
		{
			$sql_update = "UPDATE users A, users_details B SET A.email = '$new_email', B.display_name = '$new_display_name', B.bio = '$new_bio', B.dob = '$new_dob', B.gender = '$new_gender' $sql_addon WHERE A.USERID = '$USERID' AND B.USERID = '$USERID'";
			mysqli_query($link, $sql_update);
			$message = '<p>Account updated</p>';
		}
	}

	if ($_POST['new_password'] == '1')
	{
		$password = $_POST['password'];
		$password_repeat = $_POST['repeat_password'];
		$password = prep_input($password);
		$password_repeat = prep_input($password_repeat);
		if ($password != $password_repeat)
		{
			$error .= "<p>Passwords don`t match</p>";
		}
		if (strlen($password) < 4)
		{
			$error .= "<p>Password too short</p>";
		}
		if ($error == '')
		{
			$password = md5($password);
			$sql_update_password = "UPDATE users SET password = '$password' WHERE USERID = '$USERID'";
			mysqli_query($link, $sql_update_password);
			$message = '<p>Password changed</p>';
		}

	}

	$sql_select = "SELECT A.email, B.display_name, B.bio, B.gender, B.DOB, B.USERID FROM users A, users_details B WHERE A.USERID = '$USERID' AND B.USERID = '$USERID'";
	$result_select = mysqli_query($link, $sql_select);
	while ($record = mysqli_fetch_array($result_select))
	{
		$display_name = $record['display_name'];
		$email = $record['email'];
		$bio = $record['bio'];
		$dob = $record['DOB'];
		$gender = $record['gender'];
		$USERID = $record['USERID'];
	}

	$templateselect = "account.tpl";

	STemplate::assign('display_name', $display_name);
	STemplate::assign('email', $email);
	STemplate::assign('bio', $bio);
	STemplate::assign('dob', $dob);
	STemplate::assign('gender', $gender);
	STemplate::assign('error', $error);
	STemplate::assign('message', $message);
	STemplate::assign('USERID', $USERID);

	STemplate::display('header.tpl');
	STemplate::display($templateselect);
	STemplate::display('footer.tpl');
	//TEMPLATES END
}
else
	header("location:index.php"); ?>