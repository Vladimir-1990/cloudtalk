<?php /* Smarty version Smarty-3.0.7, created on 2013-09-11 01:46:44
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\show_posts_reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23343522faf64b4aed8-43352422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fbea7617be36eafb046a3db2ff3bb27f38f42d1' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\show_posts_reply.tpl',
      1 => 1378843277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23343522faf64b4aed8-43352422',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_smarty_tpl->getVariable('fav')->value!=''){?>
    <div class="fav_container">
        <div class="left">
            <p><?php echo $_smarty_tpl->getVariable('total_favs')->value;?>
<br /><span>Favourites</span></p>
        </div>
        <div class="right">
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['y']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['name'] = 'y';
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('fav')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total']);
?>
                <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('fav')->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['USERID']),$_smarty_tpl), true);?>
                <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('fav')->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['USERID']),$_smarty_tpl), true);?>
                <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('fav')->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['USERID'];?>
" class="reply_to">
                <img class="profile_image" src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
                </a>
            <?php endfor; endif; ?>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->getVariable('repost')->value!=''){?>
    <div class="fav_container">
        <div class="left">
            <p><?php echo $_smarty_tpl->getVariable('total_repost')->value;?>
<br /><span>Reposts</span></p>
        </div>
        <div class="right">
            <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['y']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['name'] = 'y';
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('repost')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['y']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['y']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['y']['total']);
?>
                <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('repost')->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['USERID']),$_smarty_tpl), true);?>
                <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('repost')->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['USERID']),$_smarty_tpl), true);?>
                <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('repost')->value[$_smarty_tpl->getVariable('smarty')->value['section']['y']['index']]['USERID'];?>
" class="reply_to">
                <img class="profile_image" src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" title="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
                </a>
            <?php endfor; endif; ?>
        </div>
    </div>
<?php }?>
<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['z']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['name'] = 'z';
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('reply_twits')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['z']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['z']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['z']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['z']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['z']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['z']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['z']['total']);
?>
    <div class="popup_box" id="delete_box">	<!-- OUR PopupBox DIV-->
        
        <div class="pop_box_top">
            <p class="pop_box_title">Are you sure you want to delete this post?</p>
            <a class="popupBoxClose">X</a>	
        </div>
        <div class="pop_box_bottom">
            <p class="pop_up_text"><?php echo $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['content'];?>
</p>
        </div>
        <div class="pop_up_action">
            <a href="" class="pop_up_button_confirm">delete</a>
            <a href="" class="pop_up_button_cancel">cancel</a>
        </div>
            
    </div>
    
    <div class="popup_box" id="report_box">	<!-- OUR PopupBox DIV-->
    
        <div class="pop_box_top">
            <p class="pop_box_title">Report this twit?</p>
            <a class="popupBoxClose">X</a>	
        </div>
        <div class="pop_box_bottom">
            <p class="pop_up_text"><?php echo $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['content'];?>
</p>
            <br />
            <p>Comment:</p>
            <textarea class="report_comment"></textarea>
        </div>
        <div class="pop_up_action">
            <a href="" class="pop_up_button_confirm">yes</a>
            <a href="" class="pop_up_button_cancel">no</a>
        </div>
    </div>
                
    <div id="twit_id_<?php echo $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['TID'];?>
" class="twit">
        
        <div class="top">
                <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['USERID']),$_smarty_tpl), true);?>
                <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['USERID'];?>
" class="username"><?php echo $_smarty_tpl->getVariable('username')->value;?>
&nbsp;</a>
                <a href="status.php?id=<?php echo $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['TID'];?>
" target="_blank" class="time"><?php echo $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['date_time'];?>
</a>
                <?php $_smarty_tpl->assign('fav_status' , insert_get_fav_status (array('value' => 'var', 'USERID' => $_SESSION['USERID'], 'TID' => $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['TID']),$_smarty_tpl), true);?>
                
                <?php if ($_smarty_tpl->getVariable('fav_status')->value==true){?>
                    <div class="favourite_tag"></div>
                <?php }elseif($_smarty_tpl->getVariable('fav_status')->value==false){?>
                    <div class="favourite_tag" style="display:none;"></div>
                <?php }?>
        </div>
    
        <div class="bottom">
            <div class="left">
                <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['USERID']),$_smarty_tpl), true);?>
                <img class="profile_image" src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
            </div>
            
            <div class="right">
                    <?php if ($_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['reply_to_USERID']!='0'){?>
                        <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['reply_to_USERID']),$_smarty_tpl), true);?>
                        <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['reply_to_USERID'];?>
" class="reply_to">@<?php echo $_smarty_tpl->getVariable('username')->value;?>
&nbsp;</a>
                    <?php }?>
                    
                    <p class="twit_text">
                        <?php $_smarty_tpl->assign('post' , insert_prepare_post (array('value' => 'var', 'twit' => $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['content']),$_smarty_tpl), true);?>
                        <?php echo $_smarty_tpl->getVariable('post')->value;?>
 
                    </p>
            </div> 
            
            <div class="action" style="display:none;">
                <?php if ($_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['USERID']==$_SESSION['USERID']){?>
                    <a class="delete_link">delete</a>          
                <?php }?>
                <a class="favourite_link">favourite</a>  
                <?php if ($_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['image']!=''){?>
                    <a href="image.php?image_id=<?php echo $_smarty_tpl->getVariable('reply_twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['image'];?>
" class="show_image_link" target="_blank">show image</a>
                <?php }?>
                <a class="report_link" style="float:left;">report</a>
            </div>   
        </div>
    </div>
<?php endfor; endif; ?>