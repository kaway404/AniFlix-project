<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
if(isset($_GET['timer'])){
$nome = $_GET['timer'];
$profile = $_GET['profile'];
$login_cookie = $_GET['video'];
$currenttime = $_GET['currenttime'];	
}
?>
<?php
$userideq = $_COOKIE['iduser'];
$perfil = $_COOKIE['perfil'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('aniflix');  
$animels2 = mysql_query("SELECT * FROM ani_history WHERE id and id_user = '".$userideq."' and id_video = '".$login_cookie."'");
if($animels2['perfil'] <> $perfil){
	$form['id_user'] = $_COOKIE['iduser'];
	$form['id_video'] = $_GET['video'];
	$form['time_video'] = $_GET['timer'];
	$form['currenttime'] = $_GET['currenttime'];
	$form['perfil'] = $_GET['profile'];
	if( DBCreate( 'history', $form ) ){	
	echo '';
	}
}
		?>