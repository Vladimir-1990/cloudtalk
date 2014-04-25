<?php require ("include/config.php");
$thebaseurl = $config['baseurl'];

$page_title = "Sign up";
STemplate::assign('page_title', $page_title);

//begin ajax validation
$is_ajax = $_POST['is_ajax'];
if (isset($is_ajax))
{
	//username check
	$username = $_POST['username'];
	if (isset($username))
	{
		$username_length = strlen($username);
		if ($username_length <= 4)
		{
			echo '1';
			exit;
		}
		$sql_same_username = "SELECT username FROM users WHERE username = '$username'";
		$username_rows = count_rows($sql_same_username);

		if ($username_rows == 0)
		{
			echo '2';
		}
		else
		{
			echo '3';
		}
		//codes:1 to short; 2 ok; 3 already used
	}

	//email check
	$email = $_POST['email'];
	if (isset($email))
	{
		$sql_same_email = "SELECT  email FROM users WHERE email = '$email'";
		$email_rows = count_rows($sql_same_email);
		$email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);

		if ($email_rows == 0 and $email_valid == true)
		{
			echo '1';
		}
		elseif ($email_valid == false)
		{
			echo '2';
		}
		elseif ($email_rows > 0)
		{
			echo '3';
		}
		//codes: 1 valid, 2 not valid, 3 used
	}

	//password check
	$password = $_POST['password'];
	if (isset($password) and !isset($_POST['repeat_password']))
	{
		if (strlen($password) <= 5)
		{
			echo '1';
		}
		else
		{
			echo '2';
		}
	}

	//repeat password check
	$password = $_POST['password'];
	$repeat_password = $_POST['repeat_password'];
	if (isset($password) and isset($repeat_password))
	{
		if ($password != $repeat_password)
		{
			echo '1';
		}
		else
		{
			echo '2';
		}
	}

}
//end of ajax validation
else
{

	$submit = $_POST['submit'];
	if (isset($submit))
	{
		//getting data
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repeat_password = $_POST['repeat_password'];

		$username = prep_input($username);
		$email = prep_input($email);
		$password = prep_input($password);
		$repeat_password = prep_input($repeat_password);

		//begin php validation
		$sql_same_username = "SELECT username FROM users WHERE username = '$username'";
		$username_rows = count_rows($sql_same_username);

		$sql_same_email = "SELECT  email FROM users WHERE email = '$email'";
		$email_rows = count_rows($sql_same_email);

		$email_valid = filter_var($email, FILTER_VALIDATE_EMAIL);

		if ($username == '' or $email == '' or $password == '' or $repeat_password == '')
		{
			$error = "<p>Please fill out all the data</p>";
		}
		if ($username_rows > 0)
		{
			$error .= "<p>Username already used</p>";
		}
		if (strlen($username) <= 4)
		{
			$error .= '<p>Username to short</p>';
		}
		if ($email_rows > 0)
		{
			$error .= '<p>Email already used</p>';
		}
		if ($email_valid == false)
		{
			$error .= '<p>Email not valid</p>';
		}
		if (strlen($password) <= 5)
		{
			$error .= '<p>Password too short</p>';
		}
		if ($password != $repeat_password)
		{
			$error .= '<p>Passwords don`t match</p>';
		}

		//end validation

		if ($error == '')
		{

			//inserting the user in the db
			$users_ip = $_SERVER['REMOTE_ADDR'];
			$time = date("d.m.Y,G:i:s");
			$password = md5($password);
			$sql_query = "INSERT INTO users SET username = '$username', email = '$email', password = '$password', date_time = '$time', ip_address = '$users_ip'";
			mysqli_query($link, $sql_query);

			//sending the verification mail
			$USERID = mysqli_insert_id($link);
			$code = rand(000000000, 999999999);

			$sql_insert_code = "INSERT INTO verification_code SET USERID = '$USERID', code = '$code'";
			mysqli_query($link, $sql_insert_code);

			$sql_query_details = "INSERT INTO users_details SET USERID = '$USERID'";
			mysqli_query($link, $sql_query_details);

			$to = $email;
			$subject = 'Account verification';
			$message = "
            Please verify your account by clicking the link bellow!<br />
            $users_ip/twitter/verify_account.php?code=$code&id=$USERID
            ";
			send_mail($to, $subject, $message);

			header("location:index.php?message=account_created");
		}

		else
		{
			STemplate::assign('email', $email);
			STemplate::assign('username', $username);
			STemplate::assign('name', $name);
		}

	}
	$templateselect = "sign_up.tpl";

	STemplate::assign('message', $message);
	STemplate::assign('error', $error);
	STemplate::display('header.tpl');
	STemplate::display($templateselect);
	STemplate::display('footer.tpl');
	//TEMPLATES END
} ?>