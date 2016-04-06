<?php
	$results = $db->query("SELECT t1.uid,t1.id,t1.title,t1.filtertext,t1.content,t1.hidden,t2.prefix as pre FROM content AS t1, prefix AS t2 WHERE t1.prefix = t2.uid ORDER BY t1.title");
	while ($inhalt = $results->fetchArray()) {
		$content = "<div data-role='page' id='".$inhalt['pre']."-".$inhalt['uid']."-".$inhalt['id']."'>";
		echo $content;
	}
?>