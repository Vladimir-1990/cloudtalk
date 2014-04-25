<?php /* Smarty version Smarty-3.0.7, created on 2013-09-20 02:55:56
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\hashtag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18035523b9d1c117245-41162247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6fbd8c90f36422f2d3ada42aaf39630fed0312c' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\hashtag.tpl',
      1 => 1378927652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18035523b9d1c117245-41162247',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="main_content">
    <div id="left">
        <div id="all_twits">
            <div id="show_twits">
                <?php $_template = new Smarty_Internal_Template("show_posts.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
            </div>
    </div>
    
    </div>
    <div id="right">
    <?php $_template = new Smarty_Internal_Template('footer_right.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
    </div>