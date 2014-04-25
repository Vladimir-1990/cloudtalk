<?php /* Smarty version Smarty-3.0.7, created on 2013-07-15 20:58:50
         compiled from "C:\wamp\www\twitter\libraries/../themes\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2081351e4466a1cfe38-01901457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d9301daadb7aaf7d4ba29852b74467c782c0f84' => 
    array (
      0 => 'C:\\wamp\\www\\twitter\\libraries/../themes\\login.tpl',
      1 => 1373823410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2081351e4466a1cfe38-01901457',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="main_content">
        <?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
            <div class="error">
                <p><?php echo $_smarty_tpl->getVariable('error')->value;?>
</p>
            </div>
        <?php }?>
        <?php echo $_smarty_tpl->getVariable('message')->value;?>

    
    <div id="sign_up-in" style="">
    <form action="login.php" method="post">
    
        <input type="text" name="username" placeholder="username or email" class="text_box" />
        
        <input type="password" name="password" placeholder="password" class="text_box" />
        
        <input type="hidden" name="submit" value="1" />
        
        <p style="float:left;">Remember me</p>
        <input type="checkbox" value="1" name="remember_me"/>
        
        <a href="forgot_password.php" style="float:left;">Forgot your password?</a>
        <br />
        <input type="submit" value="login" />
    </form>
    </div>
</div>