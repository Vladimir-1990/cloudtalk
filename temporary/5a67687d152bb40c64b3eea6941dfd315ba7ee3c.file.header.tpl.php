<?php /* Smarty version Smarty-3.0.7, created on 2013-08-31 21:14:22
         compiled from "C:\wamp\www\twitter\libraries/../themes\administrator/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68895222408eb045c2-61949948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a67687d152bb40c64b3eea6941dfd315ba7ee3c' => 
    array (
      0 => 'C:\\wamp\\www\\twitter\\libraries/../themes\\administrator/header.tpl',
      1 => 1377976461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68895222408eb045c2-61949948',
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
                    <a href="logout.php">Logout</a>
                    <a href="account.php">Your account</a>
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
        </ul>
    </div>
</div>