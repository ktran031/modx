<?php /* Smarty version 3.1.27, created on 2017-08-29 17:23:17
         compiled from "C:\wamp\www\github\modx\manager\templates\default\element\snippet\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1056059a60575cb04e3_22047478%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dd3ab563298969f52510061a652e3e162556069' => 
    array (
      0 => 'C:\\wamp\\www\\github\\modx\\manager\\templates\\default\\element\\snippet\\create.tpl',
      1 => 1492719674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056059a60575cb04e3_22047478',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a60575cb80a9_96598267',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a60575cb80a9_96598267')) {
function content_59a60575cb80a9_96598267 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1056059a60575cb04e3_22047478';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>