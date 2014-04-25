<?php /* Smarty version Smarty-3.0.7, created on 2013-09-02 19:23:49
         compiled from "C:\wamp\www\twitter\libraries/../themes\administrator/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119075224c9a5ac3b04-88218112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '766b0d450b02f9ba435edb4ae96c46427164a2ae' => 
    array (
      0 => 'C:\\wamp\\www\\twitter\\libraries/../themes\\administrator/index.tpl',
      1 => 1378142627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119075224c9a5ac3b04-88218112',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE HTML>
<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
	<meta name="author" content="Vladimir" />
    
	<title>Admin login</title>
</head>

<body>

<div id="admin_login">
    <h1>Admin login</h1>
    <?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
        <div class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</div>
    <?php }?>
    <form action="index.php" method="post">
        <input type="text" name="username" class="text_box" />
        <br /> 
        <input type="password" name="password" class="text_box" />
        <br />
        <input type="hidden" value="1" name="submit" />
        <input type="submit" value="login" class="button" style="margin-left:55px"/>
    </form>
</div>

</body>
</html>