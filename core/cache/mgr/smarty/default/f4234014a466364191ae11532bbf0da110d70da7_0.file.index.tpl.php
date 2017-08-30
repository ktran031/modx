<?php /* Smarty version 3.1.27, created on 2017-08-29 17:13:52
         compiled from "C:\wamp\www\github\modx\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:415759a6034078e725_20931618%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4234014a466364191ae11532bbf0da110d70da7' => 
    array (
      0 => 'C:\\wamp\\www\\github\\modx\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1492719676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '415759a6034078e725_20931618',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a603407adad5_59779175',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a603407adad5_59779175')) {
function content_59a603407adad5_59779175 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '415759a6034078e725_20931618';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>