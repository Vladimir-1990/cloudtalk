<?php /* Smarty version Smarty-3.0.7, created on 2014-02-16 18:36:18
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31919530105227aa6d3-18809506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a031d013b05ac55b32b8b6ded84e2a24e052cb9a' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\account.tpl',
      1 => 1387491102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31919530105227aa6d3-18809506',
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
        
        <?php if ($_smarty_tpl->getVariable('message')->value!=''){?> 
            <div class="message">
                <?php echo $_smarty_tpl->getVariable('message')->value;?>

            </div>
        <?php }?>

    <div id="edit_account">
        <form action="account.php" method="post" enctype="multipart/form-data">
            <label>Display name:</label>
            <input type="text" name="display_name" class="text_box" value="<?php echo $_smarty_tpl->getVariable('display_name')->value;?>
" />
            <br />            
            <label>Email:</label>
            <input type="text" name="email" class="text_box" value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
" />            
            <br />            
            <label>Bio:</label>
            <textarea name="bio" maxlength="160" class="text_box"><?php echo $_smarty_tpl->getVariable('bio')->value;?>
</textarea>
            <br />           
            <label>Date of birth:</label>
            <input type="text" name="DOB" class="text_box" id="datepicker" value="<?php echo $_smarty_tpl->getVariable('dob')->value;?>
" />   
            <br />
            <label>Profile image:</label>
            <div id="profile_image">
            <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('USERID')->value),$_smarty_tpl), true);?>
            <img src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
            </div>
            <input type="file" name="profile_image" />
            <div class="clear" style="height:15px;"></div>
            <br />
            <label>Gender:</label>
            <label style="width:50px;">male</label><input type="radio" name="gender" value="m" <?php if ($_smarty_tpl->getVariable('gender')->value=='m'){?>checked="cheked"<?php }?> />
            <label style="width:50px;">female</label><input type="radio" name="gender" value="f" <?php if ($_smarty_tpl->getVariable('gender')->value=='f'){?>checked="cheked"<?php }?> />
            <br />
            <input type="hidden" value="1" name="submit" />
            <br />
            <input type="submit" value="update" style="margin-left:0px;" />
        </form>
        <a href="#" style="color:white;" id="show_pass">change password</a>
    </div>
    
    <div id="change_pass_box" style="display:none;">
        <form action="account.php" method="POST">
            <label>New password:</label>
            <input type="password" name="password" id="password" class="text_box" />
            <br />
            <label>Repeat password:</label>
            <input type="password" name="repeat_password" id="repeat_password" class="text_box" />
            <br />
            <input type="hidden" value="1" name="new_password" />
            <br />
            <input type="submit" value="change password" style="margin-left:0px;" />
        </form>
    </div>
    
</div>