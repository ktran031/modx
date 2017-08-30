<?php /* Smarty version 3.1.27, created on 2017-08-29 15:49:00
         compiled from "C:\wamp\www\github\modx\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1098459a5ef5c8fa3d5_30541892%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd8dfb032577dcf812a8ebd4a8a60ce2bb0066a8' => 
    array (
      0 => 'C:\\wamp\\www\\github\\modx\\setup\\templates\\footer.tpl',
      1 => 1492719676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1098459a5ef5c8fa3d5_30541892',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a5ef5c926506_11589195',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a5ef5c926506_11589195')) {
function content_59a5ef5c926506_11589195 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/wamp/www/github/modx/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1098459a5ef5c8fa3d5_30541892';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>