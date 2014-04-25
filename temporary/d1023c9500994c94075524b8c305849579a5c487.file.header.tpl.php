<?php /* Smarty version Smarty-3.0.7, created on 2013-09-12 23:05:48
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2760152322cacde74a1-16927636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1023c9500994c94075524b8c305849579a5c487' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\header.tpl',
      1 => 1379019947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2760152322cacde74a1-16927636',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" />
<link href="img/logo_icon.png" rel="icon" type="image/png" />
<link href="css/resest.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" type="text/css" />

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/ajax.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>

<title><?php echo $_smarty_tpl->getVariable('page_title')->value;?>
</title>

</head>

<body>

<div id="container">

    <header id="header">
        <div id="status_bar">
        <div id="inner">
        <a id="logo" href="index.php"><img src="img/logo_full.png" class="logo" alt="cloud talk"/></a>
        <div id="working"></div>
        <div id="right_menu">
            <p id="menu_username"><?php echo $_SESSION['username'];?>
</p>
                <div id="menu_dropdown" style="display:none;">
                    <a href="account.php">Your account</a>
                    <a href="logout.php">Logout</a>
                </div>
        </div>
        </div>
    </div>
    </header>
    
    <div id="content">
        <div id="menu">
            <div>
            <a href="home.php" style="padding-left: 13px;padding-top: 4px;<?php if ($_smarty_tpl->getVariable('page')->value=='home'){?>background-color: rgba(6, 176, 203, 0.5);<?php }?>"><img src="img/home.png" width="50" alt="home"/></a>
            </div>
            <div>
            <a href="user.php?id=<?php echo $_SESSION['USERID'];?>
" style="padding-left:27px;padding-top:5px;<?php if ($_GET['id']==$_SESSION['USERID']){?>background-color: rgba(6, 176, 203, 0.5);<?php }?>"><img src="img/profile.png" width="20" alt="user" /></a>
            </div>
        </div>
