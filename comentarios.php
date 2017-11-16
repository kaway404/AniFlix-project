<?php 
require '/static/php/system/database.php';
require '/static/php/system/config.php';
	?>

<?php
	if(isset($_GET['ver'])){
	$GET = strip_tags(trim($_GET['ver']));
$animels = DBRead( 'videos', "WHERE id = '". $GET ."' ORDER BY id DESC LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>
<div class="coment">

</div>