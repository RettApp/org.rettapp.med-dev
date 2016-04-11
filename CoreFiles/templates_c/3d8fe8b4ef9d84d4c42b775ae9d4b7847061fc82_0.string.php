<?php
/* Smarty version 3.1.29, created on 2016-04-10 11:11:24
  from "3d8fe8b4ef9d84d4c42b775ae9d4b7847061fc82" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570a34dc3aba33_49686009',
  'file_dependency' => 
  array (
    '3d8fe8b4ef9d84d4c42b775ae9d4b7847061fc82' => 
    array (
      0 => '3d8fe8b4ef9d84d4c42b775ae9d4b7847061fc82',
      1 => 0,
      2 => 'string',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570a34dc3aba33_49686009 ($_smarty_tpl) {
?>
<div data-role="<?php echo $_smarty_tpl->tpl_vars['datarole']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
<div data-role="header" data-position="fixed">
		<span class="ui-title"></span>
		<div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right">
			<a href="#function-02-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="pop" data-direction="reverse">Einstellungen</a>
			<a href="#main-02-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a>
		</div>
	</div>
	<div data-role="content" role="main" class="ui-content">
		<div class="rettapp-banner">
			<img src="core/image/rettapp_973x235_banner.png" alt="Logo" />
			<?php echo '<?php
				';?>switch($_GET['head']){
					case 'cordova':
						echo('');
						break;
					default:
						echo('<p>Entwickler-Version 0.0.1</p>');
						break;
				}
			<?php echo '?>';?>
		</div>
		<form class="ui-filterable">
			<input id="inset-autocomplete-input" data-type="search" placeholder="Schnellsuche Medikament...">
		</form>
		<ul data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#inset-autocomplete-input" class="med" data-inset="true">
			<?php echo '<?php
				';?>$results = $db->query("SELECT t1.uid,t1.id,t1.title,t1.filtertext,t1.hidden,t2.prefix as prefix, t2.title as prefixtitle FROM content AS t1,prefix AS t2 WHERE t1.prefix = t2.uid ORDER BY t1.title");
				while ($inhalt = $results->fetchArray()) {
					if($inhalt['hidden'] == true){
						echo '<li divider="'.$inhalt['prefixtitle'].'" data-filtertext="'.$inhalt['filtertext'].'">'.$inhalt['title'].'<span class="ui-li-count">nicht verfügbar</span></li>';
					} else {
						echo '<li divider="'.$inhalt['prefixtitle'].'" data-filtertext="'.$inhalt['filtertext'].'"><a href="#'.$inhalt['prefix'].'-'.$inhalt['uid'].'-'.$inhalt['id'].'">'.$inhalt['title'].'</a></li>';
					}
				}
			<?php echo '?>';?>
		</ul>
		<p>
			<a href="#law-01-imprint" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-info ui-shadow" data-rel='dialog'>Kontakt</a>
			<a href="#other-01-donate" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-heart ui-shadow">Buy Me a Beer</a>
			<span class="showVersion"></span>
		</p>
		<p class="align-center">"GNU General Public License (GPL) v. 2" &amp; "European Union Public Licence (EUPL)"</p>
	</div>
</div><?php }
}
