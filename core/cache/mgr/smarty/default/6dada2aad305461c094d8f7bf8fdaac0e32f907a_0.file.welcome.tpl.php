<?php /* Smarty version 3.1.27, created on 2017-08-29 15:49:24
         compiled from "C:\wamp\www\github\modx\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3198059a5ef7420d281_28726636%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dada2aad305461c094d8f7bf8fdaac0e32f907a' => 
    array (
      0 => 'C:\\wamp\\www\\github\\modx\\manager\\templates\\default\\welcome.tpl',
      1 => 1492719676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3198059a5ef7420d281_28726636',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a5ef74214752_12165551',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a5ef74214752_12165551')) {
function content_59a5ef74214752_12165551 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3198059a5ef7420d281_28726636';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>