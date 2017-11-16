<?php 
require '/static/php/system/database.php';
require '/static/php/system/config.php';
	$GET = strip_tags(trim($_GET['info']));
	
	if(isset($_GET['info'])){
	echo 'funcionou';
	} 
 