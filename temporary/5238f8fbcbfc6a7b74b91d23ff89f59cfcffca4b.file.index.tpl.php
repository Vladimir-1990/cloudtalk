<?php /* Smarty version Smarty-3.0.7, created on 2013-09-09 21:47:02
         compiled from "C:\wamp\www\twitter\libraries/../themes\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20892522e25b64bd400-02550321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5238f8fbcbfc6a7b74b91d23ff89f59cfcffca4b' => 
    array (
      0 => 'C:\\wamp\\www\\twitter\\libraries/../themes\\index.tpl',
      1 => 1378755735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20892522e25b64bd400-02550321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
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

<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

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
        
        <?php if ($_GET['message']!=''){?>
            <div class="message" style="margin-top:55px;">
                <?php if ($_GET['message']=='account_created'){?>
                    <p>Account created, please check your email to verify your account</p>
                <?php }?>
            </div>
        <?php }?>
        
        <div class="front-welcome">
            <h1>Welcome to <span style="text-decoration:underlin;">Cloud Talk</span>, login or register here</h1>
        </div>
        
        <div id="right_part">
            <div class="box" id="login_box">
                    <?php $_template = new Smarty_Internal_Template('login.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </div>
            <div class="box" id="register_box">
                    <?php $_template = new Smarty_Internal_Template('sign_up.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </div>
        </div>
    </div>