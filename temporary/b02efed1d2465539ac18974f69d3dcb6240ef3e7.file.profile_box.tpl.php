<?php /* Smarty version Smarty-3.0.7, created on 2013-09-12 20:28:49
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\profile_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23553523207e1a254d8-46301741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02efed1d2465539ac18974f69d3dcb6240ef3e7' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\profile_box.tpl',
      1 => 1379010527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23553523207e1a254d8-46301741',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="profile_box">
    <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('USERID')->value),$_smarty_tpl), true);?>
    <img class="profile_image" src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
    
    <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('USERID')->value),$_smarty_tpl), true);?>
    <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
" class="username"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a>
    
    <div id="stats">
        <div>
            <a href="following.php?userid=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
" <?php if ($_smarty_tpl->getVariable('active_page')->value=='following'){?>class="active"<?php }?>>Following: <span><?php echo $_smarty_tpl->getVariable('following_count')->value;?>
</span></a>
        </div>
        <div>
            <a href="followers.php?userid=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
" <?php if ($_smarty_tpl->getVariable('active_page')->value=='followers'){?>class="active"<?php }?>>Followers: <span><?php echo $_smarty_tpl->getVariable('followers_count')->value;?>
</span></a>
        </div>
        <div>
            <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
" <?php if ($_smarty_tpl->getVariable('active_page')->value=='user'){?>class="active"<?php }?>>Posts: <span><?php echo $_smarty_tpl->getVariable('posts_count')->value;?>
</span></a>
        </div>
        <div>
            <a href="favourites.php?userid=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
" <?php if ($_smarty_tpl->getVariable('active_page')->value=='favourites'){?>class="active"<?php }?>>Favourites: <span><?php echo $_smarty_tpl->getVariable('fav_count')->value;?>
</span></a>
        </div>
    </div>
</div>