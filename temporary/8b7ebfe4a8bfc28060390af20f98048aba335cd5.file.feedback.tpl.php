<?php /* Smarty version Smarty-3.0.7, created on 2013-09-11 22:41:07
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\administrator/feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136125230d563555182-81394740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7ebfe4a8bfc28060390af20f98048aba335cd5' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\administrator/feedback.tpl',
      1 => 1378932066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136125230d563555182-81394740',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="content">
    <div id="message"></div>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>name</td>
                <td>message</td>
            </tr>
        </thead>
        
        <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('feedback')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td><?php echo $_smarty_tpl->getVariable('feedback')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['FID'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('feedback')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</td>
                <td><?php echo $_smarty_tpl->getVariable('feedback')->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['message'];?>
</td>
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