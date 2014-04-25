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

<title>{$page_title}</title>

</head>

<body>

<div id="container">

    <header id="header">
        <div id="status_bar">
        <div id="inner">
        <a id="logo" href="index.php"><img src="img/logo_full.png" class="logo" alt="cloud talk"/></a>
        <div id="working"></div>
        <div id="right_menu">
            <p id="menu_username">{$smarty.session.username}</p>
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
            <a href="home.php" style="padding-left: 13px;padding-top: 4px;{if $page == 'home'}background-color: rgba(6, 176, 203, 0.5);{/if}"><img src="img/home.png" width="50" alt="home"/></a>
            </div>
            <div>
            <a href="user.php?id={$smarty.session.USERID}" style="padding-left:27px;padding-top:5px;{if $smarty.get.id == $smarty.session.USERID}background-color: rgba(6, 176, 203, 0.5);{/if}"><img src="img/profile.png" width="20" alt="user" /></a>
            </div>
        </div>
