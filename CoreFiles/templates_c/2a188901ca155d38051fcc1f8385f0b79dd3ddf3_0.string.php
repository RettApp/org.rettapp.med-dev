<?php
/* Smarty version 3.1.29, created on 2016-04-11 06:55:37
  from "2a188901ca155d38051fcc1f8385f0b79dd3ddf3" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b4a6936cc45_46296846',
  'file_dependency' => 
  array (
    '2a188901ca155d38051fcc1f8385f0b79dd3ddf3' => 
    array (
      0 => '2a188901ca155d38051fcc1f8385f0b79dd3ddf3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b4a6936cc45_46296846 ($_smarty_tpl) {
?>
<div data-role="<?php echo $_smarty_tpl->tpl_vars['datarole']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><div data-role="header" data-position="fixed"><span class="ui-title"></span><div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right"><a href="#other-5-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="pop" data-direction="reverse">Einstellungen</a><a href="#main-2-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a></div></div><div data-role="content" role="main" class="ui-content">
		<div class="rettapp-banner">
			<img src="core/image/rettapp_973x235_banner.png" alt="Logo" />
			<?php echo $_smarty_tpl->tpl_vars['cordova']->value;?>

		</div>
		<form class="ui-filterable">
			<input id="inset-autocomplete-input" data-type="search" placeholder="Schnellsuche Medikament...">
		</form>
		<ul data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#inset-autocomplete-input" class="med" data-inset="true">
			<?php echo $_smarty_tpl->tpl_vars['medlist']->value;?>

		</ul>
		<p>
			<a href="#other-6-imprint" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-info ui-shadow" data-rel='dialog'>Kontakt</a>
			<a href="#other-4-donate" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-heart ui-shadow">Buy Me a Beer</a>
			<span class="showVersion"></span>
		</p>
		<p class="align-center">"GNU General Public License (GPL) v. 2" &amp; "European Union Public Licence (EUPL)"</p>
	</div></div><?php }
}
