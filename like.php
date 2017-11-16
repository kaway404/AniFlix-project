<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
?>
<?php
	if(isset($_GET['info'])){
	$GET = strip_tags(trim($_GET['info']));
$animels = DBRead( 'videos', "WHERE id = '". $GET ."' ORDER BY id DESC LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>


<?php
$iduser = $_COOKIE['iduser'];
$dbCheck = DBRead( 'curtidas', "WHERE id_user = '".$iduser."' and id_video = '". $animel['id_anime'] ."' ORDER BY id DESC LIMIT 1" );
if( $dbCheck ){
echo "Descurtir";
}
else{
	echo "Curtir";
}
?>
	<?php endforeach;}?>
<?php
	if(isset($_GET['curtir'])){
	$GET = strip_tags(trim($_GET['curtir']));
$animels = DBRead( 'videos', "WHERE id = '". $GET ."' ORDER BY id DESC LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>
<?php
if(isset($_GET['curtir'])){
echo "Curtir";
$form['id_video'] = $GET;
$form['id_user'] = $_COOKIE['iduser'];
$form['id_anime'] = $animel['id_anime'];
$form['datec'] = date('Y-m-d H:i:s');
if( DBCreate( 'curtidas', $form));
}
?>
<?php endforeach;}?>


<?php
	if(isset($_GET['descurtir'])){
	$GET = strip_tags(trim($_GET['descurtir']));
$animels = DBRead( 'videos', "WHERE id = '". $GET ."' ORDER BY id DESC LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>
<?php
if(isset($_GET['descurtir'])){
$GET2 = strip_tags(trim($_GET['descurtir']));
$iduser = $_COOKIE['iduser'];
$dbCheck = DBRead( 'curtidas', "WHERE id_user = '".$iduser."' and id_video = '". $GET2 ."' ORDER BY id DESC LIMIT 1" );
if( $dbCheck ){
$form['id_anime'] = $animel['id_anime'];
$form['id_user'] = $_COOKIE['iduser'];
if( DBDelete( 'curtidas','id_user = '.$iduser.' and id_anime='.$animel['id_anime'].'') );
}
}
?>
<?php endforeach;}?>
