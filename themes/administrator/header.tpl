<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8" />
	<meta name="author" content="Vladimir" />
    <link href="css/resest.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" /> 
    
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="js/functions.js" type="text/javascript"></script> 
    <script src="js/ajax.js" type="text/javascript"></script> 
	<title>Untitled 2</title>
</head>

<body>
<div id="container">
<div id="header">
    <div id="top">
        <div id="logo_container">
            <a href="home.php"><img src="../img/logo_full.png" id="logo" alt="cloud talk" /></a>
        </div>
        <div id="right_group">
            
            <p id="menu_username">Welcome: {$info_array.username}</p>
                <div id="menu_dropdown" style="display:none;">
                    <a href="account.php">Your account</a>
                    <a href="logout.php">Logout</a>
                </div>
            <p>Server time: {$info_array.server_time}</p>
            <p>Server date: {$info_array.server_date}</p>
            <p>Last login: {$info_array.last_login}</p>
            
        </div>
    </div>
    <div id="nav">
        <ul>
            <li><a href="users.php">Users</a></li>
            <li><a href="reports.php">Reports</a></li>
            <li><a href="administrators.php">Administrators</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
    </div>
</div>