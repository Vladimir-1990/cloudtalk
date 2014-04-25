<?php /* Smarty version Smarty-3.0.7, created on 2013-09-11 19:50:19
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\administrator/edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35145230ad5b2d4d02-53341125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a77990e26b4c411e2241db74a22936f8efb5f7c3' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\administrator/edit_user.tpl',
      1 => 1378142985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35145230ad5b2d4d02-53341125',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content">
<?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
    <div class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</div>
<?php }?>
<?php if ($_smarty_tpl->getVariable('message')->value!=''){?>
    <div class="message"><?php echo $_smarty_tpl->getVariable('message')->value;?>
</div>  
<?php }?>
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('user')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
        <div id="left">
            <div id="labels">
                <label>Username:</label>
                <label>Display name:</label>
                <label>Email:</label>
                <label>Bio:</label>
                <label style="margin-top:66px;">Gender:</label>
                <label>Profile image:</label>   
            </div>
            
            <div id="inputs">
                <form action="edit_user.php?id=<?php echo $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" method="post" enctype="multipart/form-data">
                    <input type="text" name="username" class="text_box" value="<?php echo $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
" />
                    <br />
                    <input type="text" name="display_name" class="text_box" value="<?php echo $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['display_name'];?>
" />
                    <br />
                    <input type="text" name="email" class="text_box" value="<?php echo $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
" />
                    <br />
                    <textarea name="bio" maxlength="160" class="text_box" style="width:200px;height:78px;resize:none;"><?php echo $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['bio'];?>
</textarea>
                    <div id="gender_container">
                        <label style="width:50px;">male</label><input type="radio" name="gender" value="m" <?php if ($_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gender']=='m'){?>checked="cheked"<?php }?> />
                        <label style="width:50px;">female</label><input type="radio" name="gender" value="f" <?php if ($_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gender']=='f'){?>checked="cheked"<?php }?> />
                    </div>
                    <div id="profile_image">
                        <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                        <img src="../profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
" class="profile_image" />
                        <input type="file" name="profile_image" />
                    </div>
                <input type="hidden" name="submit" value="1"/>
                <input type="submit" value="save" class="button"/>
                </form>
            </div>
        </div>
        
        <div id="right">
            <a href="#" id="show_pass">change password</a>
           
            <div id="change_pass_box" style="display:none;">
                <form action="edit_user.php?id=<?php echo $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" method="POST">
                    <label>New password:</label>
                    <input type="password" name="password" id="password" class="text_box" />
                    <br />
                    <input type="hidden" value="1" name="new_password" />
                    
                    <input type="submit" value="change pass" class="button" />
                    
                </form>
            </div>
            <a id="<?php echo $_smarty_tpl->getVariable('user')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" class="delete_user">delete user</a>
        </div>
        
        

    <?php endfor; endif; ?>
</div>