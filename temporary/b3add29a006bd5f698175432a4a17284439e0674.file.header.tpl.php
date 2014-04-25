<?php /* Smarty version Smarty-3.0.7, created on 2013-09-11 22:40:17
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\administrator/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183025230d531b86a06-12991431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3add29a006bd5f698175432a4a17284439e0674' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\administrator/header.tpl',
      1 => 1378932011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183025230d531b86a06-12991431',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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
            
            <p id="menu_username">Welcome: <?php echo $_smarty_tpl->getVariable('info_array')->value['username'];?>
</p>
                <div id="menu_dropdown" style="display:none;">
                    <a href="account.php">Your account</a>
                    <a href="logout.php">Logout</a>
                </div>
            <p>Server time: <?php echo $_smarty_tpl->getVariable('info_array')->value['server_time'];?>
</p>
            <p>Server date: <?php echo $_smarty_tpl->getVariable('info_array')->value['server_date'];?>
</p>
            <p>Last login: <?php echo $_smarty_tpl->getVariable('info_array')->value['last_login'];?>
</p>
            
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