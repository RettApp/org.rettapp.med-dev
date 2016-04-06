<div data-role="page" id="main-02-index">
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
			<?php
				switch($_GET['head']){
					case 'cordova':
						echo('');
						break;
					default:
						echo('<p>Entwickler-Version 0.0.1</p>');
						break;
				}
			?>
		</div>
		<form class="ui-filterable">
			<input id="inset-autocomplete-input" data-type="search" placeholder="Schnellsuche Hilfsmittel...">
		</form>
		<ul data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#inset-autocomplete-input" class="aid" data-inset="true">
		</ul>
		<p>
			<a href="#law-01-imprint" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-info ui-shadow" data-rel='dialog'>Kontakt</a>
			<a href="#other-01-donate" class="ui-btn ui-corner-all ui-btn-icon-right ui-icon-heart ui-shadow">Buy Me a Beer</a>
			<span class="showVersion"></span>
		</p>
		<p class="align-center">"GNU General Public License (GPL) v. 2" &amp; "European Union Public Licence (EUPL)"</p>
	</div>
</div>