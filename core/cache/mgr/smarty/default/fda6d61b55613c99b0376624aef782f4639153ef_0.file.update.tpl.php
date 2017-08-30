<?php /* Smarty version 3.1.27, created on 2017-08-29 17:24:09
         compiled from "C:\wamp\www\github\modx\manager\templates\default\element\snippet\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:650859a605a954b275_22014745%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda6d61b55613c99b0376624aef782f4639153ef' => 
    array (
      0 => 'C:\\wamp\\www\\github\\modx\\manager\\templates\\default\\element\\snippet\\update.tpl',
      1 => 1492719674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '650859a605a954b275_22014745',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a605a955abc4_46123676',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a605a955abc4_46123676')) {
function content_59a605a955abc4_46123676 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '650859a605a954b275_22014745';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>