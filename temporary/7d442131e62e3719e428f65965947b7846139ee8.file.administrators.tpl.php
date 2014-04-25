<?php /* Smarty version Smarty-3.0.7, created on 2013-09-11 18:02:48
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\administrator/administrators.tpl" */ ?>
<?php /*%%SmartyHeaderCode:811952309428e635b3-66526250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d442131e62e3719e428f65965947b7846139ee8' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\administrator/administrators.tpl',
      1 => 1378170079,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811952309428e635b3-66526250',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content">
    <div class="message" style="display:none;"></div>
    <?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
        <div class="error"><?php echo $_smarty_tpl->getVariable('error')->value;?>
</div>
    <?php }?>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>username</td>
                <td>email</td>
                <td>last login</td>
                <td>delete</td>
            </tr>
        </thead>
        
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('administrators')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <tr>
                <td><?php echo $_smarty_tpl->getVariable('administrators')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('administrators')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['username'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('administrators')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('administrators')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['last_login'];?>
</td>
                <td><a id="<?php echo $_smarty_tpl->getVariable('administrators')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ID'];?>
" class="delete_admin">delete</a></td>
            </tr>
        <?php endfor; endif; ?>
    </table>
    
    <?php if ($_smarty_tpl->getVariable('prev')->value!='0'){?>
        <a href='?page=<?php echo $_smarty_tpl->getVariable('prev')->value;?>
'>prev</a>
    <?php }?>
    
    <?php if ($_smarty_tpl->getVariable('next')->value<=$_smarty_tpl->getVariable('num_pages')->value){?>
        <a href='?page=<?php echo $_smarty_tpl->getVariable('next')->value;?>
'>next</a>
    <?php }?>
    
    <br />
    
    <a class="add_new">Add a new admin</a>
    
    <div class="add_new_admin" style="display:none;">
        <form action="administrators.php" method="post">
            <input type="text" name="username" class="text_box" placeholder="username" value="<?php echo $_smarty_tpl->getVariable('username')->value;?>
" />
            <br />
            <input type="password" name="password" class="text_box" placeholder="password" />
            <br />
            <input type="email" name="email" class="text_box" placeholder="email" value="<?php echo $_smarty_tpl->getVariable('email')->value;?>
 "/>
            <br />
            <input type="hidden" name="add_new" value="1" />
            <input type="submit" value="add" class="button "/>
        </form>
    </div>
</div>