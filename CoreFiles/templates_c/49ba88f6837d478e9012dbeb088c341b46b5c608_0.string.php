<?php
/* Smarty version 3.1.29, created on 2016-04-11 15:00:16
  from "49ba88f6837d478e9012dbeb088c341b46b5c608" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570bbc00ba7882_68083397',
  'file_dependency' => 
  array (
    '49ba88f6837d478e9012dbeb088c341b46b5c608' => 
    array (
      0 => '49ba88f6837d478e9012dbeb088c341b46b5c608',
      1 => 0,
      2 => 'string',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570bbc00ba7882_68083397 ($_smarty_tpl) {
?>
<div data-role="<?php echo $_smarty_tpl->tpl_vars['datarole']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><div data-role="header" data-position="fixed"><a data-rel="back" class="ui-btn ui-btn-icon-left ui-icon-arrow-l ui-btn-icon-notext ui-corner-all">Zurück</a><h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1><div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right"><a href="#other-5-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="pop" data-direction="reverse">Einstellungen</a><a href="#main-2-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a></div></div><div data-role="content" role="main" class="ui-content">
	<div data-role="collapsibleset" data-inset="true">
		<div data-role="collapsible">
			<h3>Indikation</h3>
		</div>
    		<div data-role="collapsible">
       			 <h3>Kontraindikation</h3>
		</div>
		<div data-role="collapsible">
			<h3>Nebenwirkungen</h3>
		</div>
		<div data-role="collapsible">
			<h3>Wechselwirkungen</h3>
		</div>
		<div data-role="collapsible">
			<h3>Toxizität</h3>
		</div>
		<div data-role="collapsible">
			<h3>Dosierung</h3>
		</div>
		<div data-role="collapsible">
			<h3>Wirkungsweise</h3>
		</div>
	</div>
	<div data-role="collapsible">
		<h4>Stichwörter</h4>
		<p><?php echo $_smarty_tpl->tpl_vars['filtertext']->value;?>
</p>
	</div>
</div></div><?php }
}
