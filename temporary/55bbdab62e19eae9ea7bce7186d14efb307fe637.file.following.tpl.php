<?php /* Smarty version Smarty-3.0.7, created on 2013-09-12 20:16:25
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\following.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23753523204f9c3e557-18562799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55bbdab62e19eae9ea7bce7186d14efb307fe637' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\following.tpl',
      1 => 1379009779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23753523204f9c3e557-18562799',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="main_content">    
    
    <div id="left">
    Following
    <?php if ($_smarty_tpl->getVariable('following_array')->value[0]!=''){?>
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('following_array')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="following_box">
                <div>
                    <?php $_smarty_tpl->assign('profile_image' , insert_get_profile_image (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('following_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]),$_smarty_tpl), true);?>
                    <img class="profile_image" src="profilepics/<?php echo $_smarty_tpl->getVariable('profile_image')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('username')->value;?>
"/> 
                </div>
                <div style="margin-top:20px;">
                    <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('following_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]),$_smarty_tpl), true);?>
                    <a href="user.php?id=<?php echo $_smarty_tpl->getVariable('following_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
" class="username"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a>
                    
                    <?php $_smarty_tpl->assign('status' , insert_get_follow_button_status (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('following_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']], 'curr_USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>
                    <?php if ($_smarty_tpl->getVariable('status')->value==1){?>
                    <a id="<?php echo $_smarty_tpl->getVariable('following_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
" class="unfollow">Unfollow</a>
                    <?php }elseif($_smarty_tpl->getVariable('status')->value==2){?>
                    <?php }elseif($_smarty_tpl->getVariable('status')->value==3){?>
                    <a id="<?php echo $_smarty_tpl->getVariable('following_array')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
" class="follow">Follow</a>
                    <?php }?>
                </div>
            </div>
        <?php endfor; endif; ?> 
    <?php }?>   
    </div>
    
    <div id="right">
        <?php $_template = new Smarty_Internal_Template('profile_box.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
        <?php $_template = new Smarty_Internal_Template('footer_right.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>

</div>