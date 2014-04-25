<?php /* Smarty version Smarty-3.0.7, created on 2013-09-11 21:51:41
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98655230c9cd79c611-17081389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '269e9f9a44514aa6330b51dfeb33b3c0ccf4b302' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\home.tpl',
      1 => 1378927652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98655230c9cd79c611-17081389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="main_content">
    <a href="home" id="active_page" style="display:none"></a>
    <a href="<?php echo $_SESSION['USERID'];?>
" id="USERID" style="display:none"></a>
    
    <div id="left">
        <div id="message" style="display:none"></div>
        
        <p>Say something:</p>
            
        <div id="twit_error_box"></div>
        <textarea id="new_twit" maxlength="140"></textarea>
        <p class="max-chars-top">140(used: <span class="charsused">0</span>)</p>
        
        <div id="image_upload" style="display:none;">
            <div class="file">Upload an image</div>
            <input type="file" name="images" class="images" />
            <div id="response"></div>
            <br />
        </div>
        <input type="submit" name="submit" value="Post" id="tweet_submit_button"/>
        
        <a href="#" id="show_new_twits_link" style="display:none;">show new twits</a>
        <div id="all_twits">
        
            <div id="show_new_twits" style="display:none;">
            <!--ajax response-->
            </div>
            
            <div id="show_twits">
            <!--ajax response-->
            </div>
            
            <div id="loading"></div>
    
        </div>
    </div>
    
    <div id="right">
        <div id="profile_box">
            <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>
            <img class="profile_image" src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
            
            <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>
            <a href="user.php?id=<?php echo $_SESSION['USERID'];?>
" class="username"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a>
            
            <div id="stats">
                <div>
                    <a href="following.php?userid=<?php echo $_SESSION['USERID'];?>
">Following: <span><?php echo $_smarty_tpl->getVariable('following_count')->value;?>
</span></a>
                </div>
                <div>
                    <a href="followers.php?userid=<?php echo $_SESSION['USERID'];?>
">Followers: <span><?php echo $_smarty_tpl->getVariable('follewers_count')->value;?>
</span></a>
                </div>
                <div>
                    <a href="user.php?id=<?php echo $_SESSION['USERID'];?>
">Posts: <span><?php echo $_smarty_tpl->getVariable('twits_count')->value;?>
</span></a>
                </div>
                <div>
                    <a href="favourites.php?userid=<?php echo $_SESSION['USERID'];?>
">Favourites: <span><?php echo $_smarty_tpl->getVariable('fav_count')->value;?>
</span></a>
                </div>
            </div>
        </div>
        <?php $_template = new Smarty_Internal_Template('footer_right.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>

</div>