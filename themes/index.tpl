<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" />
<link href="css/resest.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />

<script src="js/jquery.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script src="js/ajax.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>

<title>{$title}</title>

<style>
#main_content {
    width:100%; 
    padding:0px;   
}
</style>

</head>

<body>

<div id="container" >
    <header id="header">
        <div id="status_bar">
        
        </div>
</header>

    <div id="index_page">
        
        {if $smarty.get.message != ''}
            <div class="message" style="margin-top:55px;">
                {if $smarty.get.message == 'account_created'}
                    <p>Account created, please check your email to verify your account</p>
                {/if}
            </div>
        {/if}
        
        <div class="front-welcome">
            <h1>Welcome to <span style="text-decoration:underlin;">Cloud Talk</span>, login or register here</h1>
        </div>
        
        <div id="right_part">
            <div class="box" id="login_box">
                    {include file='login.tpl'}
            </div>
            <div class="box" id="register_box">
                    {include file='sign_up.tpl'}
            </div>
        </div>
    </div>