<?php /* Smarty version Smarty-3.0.7, created on 2013-09-02 18:57:02
         compiled from "C:\wamp\www\twitter\libraries/../themes\administrator/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81255224c35ecc3d59-89752939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dff1f297764909d6aec8e76b1a21be22d3c75b1e' => 
    array (
      0 => 'C:\\wamp\\www\\twitter\\libraries/../themes\\administrator/account.tpl',
      1 => 1378140302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81255224c35ecc3d59-89752939',
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
        <div class="error"><?php echo $_smarty_tpl->getVariable('message')->value;?>
</div>    
    <?php }?>
    
    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('admin')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <form action="account.php" method="post">
        <label>Username:</label>
        <input type="text" class="text_box" name="username" value="<?php echo $_smarty_tpl->getVariable('admin')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
" />
        <br />
        <label>Email:</label>
        <input type="text" class="text_box" name="email" value="<?php echo $_smarty_tpl->getVariable('admin')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
" />
        <input type="hidden" name="submit" value="1" />
        <br />
        <input type="submit" value="save" class="button" />
        <?php endfor; endif; ?>
    </form>
    
    <a id="show_pass">change password</a>
    
    <div id="change_pass_box" style="display:none;">
        <form action="account.php" method="POST">
            <label>New password:</label>
            <input type="password" name="password" id="password" class="text_box" />
            <br />
            <input type="hidden" value="1" name="new_password" />
            
            <input type="submit" value="change pass" class="button" />
            
        </form>
    </div>
</div>