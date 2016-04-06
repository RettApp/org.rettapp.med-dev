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
	// Include html > head
	include('inc/core/inc.core.head.php');
	include('inc/core/inc.core.variable.php');
	// Open html > body
	print('<body>');
	// Search for main content files an include
	
	foreach (glob("inc/content/main/inc.main.*.php") as $filename){
		include $filename;
	}
	include('inc/core/inc.core.generator.php');
	// Close html > body
	print('</body>');
?>
</html>