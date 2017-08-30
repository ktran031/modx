<?php /* Smarty version 3.1.27, created on 2017-08-29 17:22:16
         compiled from "C:\wamp\www\github\modx\manager\templates\default\element\chunk\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2949759a605388cefe9_38074843%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '955cd60da476e47064c9357cc12f91e5d75711e9' => 
    array (
      0 => 'C:\\wamp\\www\\github\\modx\\manager\\templates\\default\\element\\chunk\\create.tpl',
      1 => 1492719674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2949759a605388cefe9_38074843',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a605388e4e79_53725785',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a605388e4e79_53725785')) {
function content_59a605388e4e79_53725785 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2949759a605388cefe9_38074843';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>