<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
if(isset($_GET['timer'])){
$nome = $_GET['timer'];
$profile = $_GET['profile'];
$login_cookie = $_GET['video'];
$currenttime = $_GET['currenttime'];
$idanime = $_GET['anime'];

$upRate = array('time_video' => $nome);
DBUpDate( 'history', $upRate, "id_video = '{$login_cookie}' and perfil = '{$profile}' " );


$upRate2 = array('currenttime' => $currenttime);
DBUpDate( 'history', $upRate2, "id_video = '{$login_cookie}' and perfil = '{$profile}'" );


$upRate3 = array('perfil' => $profile);
DBUpDate( 'history', $upRate3, "id_video = '{$login_cookie}' and perfil = '{$profile}'" );

$upRate3 = array('id_anime' => $idanime);
DBUpDate( 'history', $upRate3, "id_video = '{$login_cookie}' and perfil = '{$profile}'" );

$upRate3 = array('id_video' => $login_cookie);
DBUpDate( 'history', $upRate3, "id_video = '{$login_cookie}' and perfil = '{$profile}'" );
}
		?>