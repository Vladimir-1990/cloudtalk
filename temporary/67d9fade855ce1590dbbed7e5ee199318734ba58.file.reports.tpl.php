<?php /* Smarty version Smarty-3.0.7, created on 2013-09-11 19:39:49
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\administrator/reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:119175230aae541dbf3-27478834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67d9fade855ce1590dbbed7e5ee199318734ba58' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\administrator/reports.tpl',
      1 => 1378170413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119175230aae541dbf3-27478834',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content">
    <div class="message" style="display:none;"></div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>post</th>
                <th>user</th>
                <th>comment</th>
                <th>date</th>
                <th>delete</th>
            </tr>
        </thead>
        
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('reports')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td><?php echo $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['RID'];?>
</td>
                <td><a href="../status.php?id=<?php echo $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TID'];?>
"><?php echo $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TID'];?>
</a><a class="delete_post" id="<?php echo $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TID'];?>
">&nbsp;<img src="images/delete-icon.png" class="delete_image" title="delete this post" alt="delete status "/></a></td>
                <td>
                <?php $_smarty_tpl->assign('username' , insert_get_member_display_name (array('value' => 'var', 'USERID' => $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID']),$_smarty_tpl), true);?>
                <a href="edit_user.php?id=<?php echo $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['USERID'];?>
" class="username"><?php echo $_smarty_tpl->getVariable('username')->value;?>
</a>
                </td>
                <td><?php echo $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['comment'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date_time'];?>
</td>
                <td><a class="delete_report" id="<?php echo $_smarty_tpl->getVariable('reports')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['RID'];?>
">Delete report</td>
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
</div>