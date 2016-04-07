<?php
	require_once('core/libs/Smarty.class.php');
	$smarty = new Smarty;
	$results = $db->query("SELECT t1.uid,t1.id,t1.title,t1.filtertext,t1.content,t1.hidden,t2.prefix as prefix,t3.datarole as datarole FROM content AS t1,prefix AS t2,datarole AS t3 WHERE t1.prefix = t2.uid AND t1.datarole = t3.uid ORDER BY t1.title");
	while ($inhalt = $results->fetchArray()) {
		$template_string = $inhalt['content'];
		$smarty->assign('datarole', $inhalt['datarole']);
		$smarty->assign('prefix', $inhalt['prefix']);
		$smarty->assign('uid', $inhalt['uid']);
		$smarty->assign('id', $inhalt['id']);
		$smarty->display('string:'.$template_string);
	}
?>