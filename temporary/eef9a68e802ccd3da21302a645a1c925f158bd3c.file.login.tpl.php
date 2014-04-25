<?php /* Smarty version Smarty-3.0.7, created on 2013-09-10 01:26:50
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4579522e593a052583-76586097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eef9a68e802ccd3da21302a645a1c925f158bd3c' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\login.tpl',
      1 => 1373823410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4579522e593a052583-76586097',
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