<?php /* Smarty version Smarty-3.0.7, created on 2013-08-07 22:09:36
         compiled from "C:\wamp\www\twitter\libraries/../themes\sign_up.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107405202a9809271d4-86571544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc25e5d5b2ae2a78bdc3bb1b81e37feb2d4b18f5' => 
    array (
      0 => 'C:\\wamp\\www\\twitter\\libraries/../themes\\sign_up.tpl',
      1 => 1375906173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107405202a9809271d4-86571544',
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

    
    <div id="sign_up-in">
        <h2>New to twitter? Sign up</h2>
        <hr />
        
        <form action="sign_up.php" method="post" enctype="multipart/form-data" id="form">
            <input type="text" name="username" id="username" class="text_box" value="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" placeholder="username" />
            <div id="username_status" class="error_box"></div>
                   
            <input type="text" name="email" id="email" class="text_box" value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
" placeholder="email" />
            <div id="email_status" class="error_box"></div>
            
            <input type="password" name="password" id="password" class="text_box" placeholder="password" />
            <div id="password_status" class="error_box"></div>

            <input type="password" name="repeat_password" id="repeat_password" class="text_box" placeholder="repeat password" />
            <div id="repeat_password_status" class="error_box"></div>
            
            <input type="hidden" name="submit" value="1" />
            
            <input type="submit" value="sign up" />
        </form>
    </div>
</div>