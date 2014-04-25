<?php /* Smarty version Smarty-3.0.7, created on 2013-09-11 22:33:39
         compiled from "C:\wamp\www\cloudtalk\libraries/../themes\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212135230d3a340a450-66662573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea2e1b598839fc10ce13b124402dc8f79e398b4' => 
    array (
      0 => 'C:\\wamp\\www\\cloudtalk\\libraries/../themes\\contact.tpl',
      1 => 1378931616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212135230d3a340a450-66662573',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="main_content">
    <div id="static">
        <?php if ($_smarty_tpl->getVariable('error')->value!=''){?>
            <div class="error">
                <p><?php echo $_smarty_tpl->getVariable('error')->value;?>
</p>
            </div>
        <?php }?>
        
        <?php if ($_smarty_tpl->getVariable('message')->value!=''){?> 
            <div class="message">
                <?php echo $_smarty_tpl->getVariable('message')->value;?>

            </div>
        <?php }?>
        
        <h1>Contact us</h1>
        <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="Your Name" class="text_box" />
        <br />
        <textarea name="message" placeholder="Message" class="text_box" style="height:150px;"></textarea>
        <br />
        <input type="submit" value="Send" />
    </div>
</div>