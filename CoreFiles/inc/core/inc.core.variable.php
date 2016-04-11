<?php
	$db = new SQLite3('inc/database/database.db');
	
	function sqlquery($query){
		$db = new SQLite3('inc/database/database.db');
	}
	
	$medlistitemes = $db->query("
		SELECT t1.uid,t1.id,t1.title,t1.filtertext,t1.hidden,t2.prefix as prefix, t2.title as prefixtitle
		FROM content AS t1,prefix AS t2
		WHERE t1.prefix = t2.uid
		AND t2.uid = '2'
		ORDER BY t1.title
	");
	$medlistreturn = "";
	while ($medlist = $medlistitemes->fetchArray()) {
		if($medlist['hidden'] == true){
			$medlistreturn .= '<li divider="'.$medlist['prefixtitle'].'" data-filtertext="'.$medlist['filtertext'].'">'.$medlist['title'].'<span class="ui-li-count">nicht verfügbar</span></li>';
		} else {	
			$medlistreturn .= '<li divider="'.$medlist['prefixtitle'].'" data-filtertext="'.$medlist['filtertext'].'"><a href="#'.$medlist['prefix'].'-'.$medlist['uid'].'-'.$medlist['id'].'">'.$medlist['title'].'</a></li>';
		}
	}
	
	switch($_GET['head']){
		case 'cordova':
			$cordova = '';
			break;
		default:
			$cordova = '<p>Entwickler-Version 0.0.1</p>';
			break;
	}
?>