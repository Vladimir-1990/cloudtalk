<?php /* Smarty version Smarty-3.0.7, created on 2013-09-07 18:47:46
         compiled from "C:\wamp\www\twitter\libraries/../themes\favourites.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3497522b58b2b2e153-37906649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87b4068667cd218b8b0f979dfbff0f10110e0491' => 
    array (
      0 => 'C:\\wamp\\www\\twitter\\libraries/../themes\\favourites.tpl',
      1 => 1378571240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3497522b58b2b2e153-37906649',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="main_content">    
    <div id="left">
    <div id="message" style="display:none"></div>
    Favourites
    <div id="all_twits">
    <div id="show_twits">
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['z']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['name'] = 'z';
$_smarty_tpl->tpl_vars['smarty']->value['section']['z']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('fav_array')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <?php $_smarty_tpl->assign('twits' , insert_get_twit (array('value' => 'var', 'TID' => $_smarty_tpl->getVariable('fav_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['z']['index']]['TID']),$_smarty_tpl), true);?>
    
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('twits')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <div class="popup_box" id="delete_box">	<!-- OUR PopupBox DIV-->
            <div class="pop_box_top">
                <p class="pop_box_title">Are you sure you want to delete this post?</p>
                <a class="popupBoxClose">X</a>	
            </div>
            <div class="pop_box_bottom">
                <p class="pop_up_text"><?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
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
                <p class="pop_up_text"><?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content'];?>
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
          
        <div id="twit_id_<?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TID'];?>
" class="twit">
        
            <div class="top">
                    <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                    <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" class="username"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a>
                    <a href="status.php?id=<?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TID'];?>
" target="_blank" class="time"><?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date_time'];?>
</a>
                    <?php $_smarty_tpl->assign('fav_status' , insert_get_fav_status (array('value' => 'var', 'USERID' => $_GET['userid'], 'TID' => $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TID']),$_smarty_tpl), true);?>
                    <?php if ($_smarty_tpl->getVariable('fav_status')->value==true){?>
                        <div class="favourite_tag"></div>
                    <?php }elseif($_smarty_tpl->getVariable('fav_status')->value==false){?>
                        <div class="favourite_tag" style="display:none;"></div>
                    <?php }?>
            </div>
        
            <div class="bottom">
                <div class="left">
                    <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                    <img class="profile_image" src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
                </div>
                
                <div class="right">
                    <?php if ($_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['reply_to_USERID']!='0'){?>
                        <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['reply_to_USERID']),$_smarty_tpl), true);?>
                        <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['reply_to_USERID'];?>
" class="reply_to">@<?php echo $_smarty_tpl->getVariable('username')->value;?>
&nbsp;</a>
                    <?php }?>
                    
                    <p class="twit_text">
                        <?php $_smarty_tpl->assign('twit' , insert_prepare_twit (array('value' => 'var', 'twit' => $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['content']),$_smarty_tpl), true);?>
                        <?php echo $_smarty_tpl->getVariable('twit')->value;?>
 
                    </p>
                                
                </div>
                
                <div class="action" style="display:none;">
                    <?php if ($_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']==$_SESSION['USERID']){?>
                        <a class="delete_link">delete</a>          
                    <?php }?>
                    <a class="favourite_link">favourite</a>
                    <?php if ($_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image']!=''){?>
                        <a href="image.php?image_id=<?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" class="show_image_link" target="_blank">show image</a>
                    <?php }?>
                    <a class="report_link" style="float:left;">report</a>
                </div>  
            </div>
        
        </div>
    
        <div class="details" style="display:none;">   
            <div class="show_twits_reply">
                 
            </div>
            
            <div class="reply_message"></div> 
            <textarea class="twit_text_reply" maxlength="140" placeholder="reply to @<?php echo $_smarty_tpl->getVariable('username')->value;?>
"></textarea>
            <p class="max-chars-top">140(used: <span class="charsused_reply">0</span>)</p>  
            
            <div id="image_upload">
                <div class="file">Upload a file</div>
                <input type="file" name="images" class="images" />
                <div id="response"></div>
                <br />
            </div>
            
            <input type="submit" name="submit" value="Post" class="tweet_submit_button_reply" />
            <input type="hidden" name="reply_to" value="<?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TID'];?>
" class="reply_to" />
            <input type="hidden" name="reply_to_USERID" value="<?php echo $_smarty_tpl->getVariable('twits')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" class="reply_to_USERID" />
            
           
        </div>
    <?php endfor; endif; ?>  
    <?php endfor; endif; ?>   
    </div>
    </div>
    </div>
       
    <div id="right">
        <div id="profile_box">
            <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('USERID')->value),$_smarty_tpl), true);?>
            <img class="profile_image" src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/>
            
            <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('USERID')->value),$_smarty_tpl), true);?>
            <a href="user.php?id=<?php echo $_GET['userid'];?>
" class="username"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a>
            
            <div id="stats">
                <div>
                    <a href="following.php?userid=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
">Following: <span><?php echo $_smarty_tpl->getVariable('following_count')->value;?>
</span></a>
                </div>
                <div>
                    <a href="followers.php?userid=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
">Followers: <span><?php echo $_smarty_tpl->getVariable('followers_count')->value;?>
</span></a>
                </div>
                <div>
                    <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
">Posts: <span><?php echo $_smarty_tpl->getVariable('posts_count')->value;?>
</span></a>
                </div>
                <div>
                    <a href="favourites.php?userid=<?php echo $_smarty_tpl->getVariable('USERID')->value;?>
">Favourites: <span><?php echo $_smarty_tpl->getVariable('fav_count')->value;?>
</span></a>
                </div>
            </div>
        </div>
    </div>
    
</div>