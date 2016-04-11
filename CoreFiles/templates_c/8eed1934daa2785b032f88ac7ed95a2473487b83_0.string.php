<?php
/* Smarty version 3.1.29, created on 2016-04-11 06:44:26
  from "8eed1934daa2785b032f88ac7ed95a2473487b83" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b47cacfb9d2_40272831',
  'file_dependency' => 
  array (
    '8eed1934daa2785b032f88ac7ed95a2473487b83' => 
    array (
      0 => '8eed1934daa2785b032f88ac7ed95a2473487b83',
      1 => 0,
      2 => 'string',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b47cacfb9d2_40272831 ($_smarty_tpl) {
?>
<div data-role="<?php echo $_smarty_tpl->tpl_vars['datarole']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><div data-role="header" data-position="fixed"><a data-rel="back" class="ui-btn ui-btn-icon-left ui-icon-arrow-l ui-btn-icon-notext ui-corner-all">Zurück</a><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1><div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right"><a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="pop" data-direction="reverse">Einstellungen</a><a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a></div></div><div data-role="content" role="main" class="ui-content">
		<form>
			<div class="ui-field-contain">
				<label for="settings-startdisclaimer">Rechtliches bei Start:</label>
				<select name="flip-1" id="settings-startdisclaimer" data-role="slider">
					<option value="1">Off</option>
					<option value="0">On</option>
				</select>
			</div>
		</form>
		<a id="saveSettings" class="ui-btn ui-btn-icon-left ui-icon-check ui-corner-all show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" data-inline="true">Speichern</a>
	</div></div><?php }
}
