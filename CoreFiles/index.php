<!DOCTYPE html>
<html>
<!-- !Copyright -->
<!--
	Project: org.rettapp.med-rhn-dev
	Description: 
	Author: Jonathan Starck 
	Licence: GNU GENERAL PUBLIC LICENSE Version 2, June 1991 & European Union Public Licence
	Source: https://github.com/RettApp/org.rettapp.med-rhn-dev
-->
<?php
	// This Part generate the index.html to use http://build.phonegap.com
	
	require_once('core/libs/Smarty.class.php');
	$smarty = new Smarty;
	// Include html > head
	
	include('inc/core/inc.core.head.php');
	include('inc/core/inc.core.variable.php');
	
	// Open html > body
	print('<body>');

	$results = $db->query("
		SELECT t1.uid,t1.id,t1.title,t1.filtertext,t1.content,t1.specialheader,t1.header,t1.hidden,t2.prefix as prefix,t3.datarole as datarole
		FROM content AS t1,prefix AS t2,datarole AS t3
		WHERE t1.prefix = t2.uid
		AND t1.datarole = t3.uid
		ORDER BY t1.uid
	");
	while ($inhalt = $results->fetchArray()) {
		$smarty->assign('datarole', $inhalt['datarole']);
		$smarty->assign('prefix', $inhalt['prefix']);
		$smarty->assign('uid', $inhalt['uid']);
		$smarty->assign('id', $inhalt['id']);
		$smarty->assign('title', $inhalt['title']);
		$smarty->assign('filtertext', $inhalt['filtertext']);
		$smarty->assign('medlist', $medlistreturn);
		$smarty->assign('cordova', $cordova);
		if($inhalt['specialheader'] == true){
			$template_string =  '<div data-role="{$datarole}" id="{$prefix}-{$uid}-{$id}">';
			$template_string .= $inhalt['header'].$inhalt['content'];
			$template_string .= '</div>';
			$smarty->display('string:'.$template_string);
		}else{
			$template_string =  '<div data-role="{$datarole}" id="{$prefix}-{$uid}-{$id}">';
			$template_string .= '<div data-role="header" data-position="fixed"><a data-rel="back" class="ui-btn ui-btn-icon-left ui-icon-arrow-l ui-btn-icon-notext ui-corner-all">Zurück</a><h1>{$title}</h1><div data-role="controlgroup" data-type="horizontal" class="ui-mini ui-btn-right"><a href="#other-5-settings" class="ui-btn ui-btn-icon-right ui-icon-gear ui-btn-icon-notext" data-transition="pop" data-direction="reverse">Einstellungen</a><a href="#main-2-index" class="ui-btn ui-btn-icon-right ui-icon-home ui-btn-icon-notext">Home</a></div></div>';
			$template_string .= $inhalt['content'];
			$template_string .= '</div>';
			$smarty->display('string:'.$template_string);
		}
		
		
		
		
	}
	// Close html > body
	print('</body>');
?>
</html>