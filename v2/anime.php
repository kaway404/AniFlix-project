<?php ob_start(); ?>
<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
$idwatch = DBEscape($_GET['id']);
$anime = DBRead( 'animes', "WHERE id = '{$idwatch}'  LIMIT 1" );
if(!$anime)
echo '<script>location.href="http://localhost/";</script>';
else{
$anime = $anime[0];
}
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$user = DBRead('users', "WHERE id = '{$iduser}' LIMIT 1 ");
$user = $user[0];
}
?>
<head>
<title>AniFlix - <?php echo $anime['nome'];?></title>
<link rel="stylesheet" type="text/css" href="http://localhost/v2/assets/css/style.css"/>
<link rel="stylesheet" href="http://localhost/v2/assets/css/google/icons.css">
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<html>
<body id="anime">
<div id="header">
<div id="top-align">
<a href="http://localhost/v2/"><div id="logo"></div></a>
<li id="li">Séries</li>
<li id="li">Sobre</li>
<div id="searchinput">
		  <svg id="ben" enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><circle cx="21" cy="20" fill="none" r="16" stroke="#000000" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="4" x1="32.229" x2="45.5" y1="32.229" y2="45.5"/></svg>
<input type="text" placeholder="Anime" class="nome"/>
		  <div id="box-s-h">
		    <ul class="src">
			</ul>
		  </div>
	  <script src="lib/js/jquery.js" type="text/javascript"></script>
	<script src="lib/js/js-all.js" type="text/javascript"></script>
			<script src="lib/js/jquery.js" type="text/javascript"></script>
	<script src="lib/js/js-all.js" type="text/javascript"></script>
</div>

<div id="buttons-top">

<?php 
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
echo '
<div id="preto" style="width:auto;position:relative;background-color:#f2f2f2;height:100%;top:-1vw;">
<button id="account">
<img src="http://localhost/img/users/avatar/'.$user['photo'].'" id="foto-perfil"/>
<p style="position:relative;top:-0.5vw;color:#000;font-size:0.9vw;">'.$user['username'].'</p>
</button>
</div>
';
}
else{
	echo '<a href="http://localhost/v2/account.php"><button id="account">
<svg id="account-svg" enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="12" cy="8" r="4"/><path d="M12,14c-6.1,0-8,4-8,4v2h16v-2C20,18,18.1,14,12,14z"/></svg>
<p id="login-p">Login</p>
</button></a>';
}
?>

<div id="menuuser">
<div id="topo-branco"></div>
<img src="http://localhost/v2/img/tring.png" id="tring" />

<a href="http://localhost/v2/profile.php?id=<?php echo $user['id'];?>"><li>Perfil</li></a>
<a href="http://localhost/v2/options.php"><li>Opçoes</li></a>
<a href="http://localhost/v2/logout.php"><li>Sair</li></a>

</div>
</div>



<style>
#menuuser{
	position:absolute;
	background-color:#fff;
	box-shadow:0.1vw 0.1vw 0.1vw 0.1vw rgba(0,0,0,0.40);
	height:auto;
	width:10vw;
	float:right;
	top:2.9vw;
	z-index:5;
	display:none;
	right:-4.5vw;
	}
	#menuuser li{
		text-align:center;
		font-size:1vw;
		position:relative;
		top:-1vw;
		cursor:pointer;
		width:100%;
		height:auto;
		margin-top:0.2vw;
	}
	#menuuser li:hover{
		background-color:#f2f2f2;
		box-shadow:0.1vw 0.1vw 0.1vw 0.1vw rgba(0,0,0,0.30);
	}
#topo-branco{
	background-color:#000;
	width:100%;
	height:1vw;
}
#tring{
	height:1.5vw;
	width:1.5vw;
	position:relative;
	top:-2vw;
	z-index:0;
}
</style>

<script type="text/javascript">
	var preto = document.getElementById('account');
	var menuusuario = document.getElementById('menuuser');
	preto.addEventListener('click', function(e){
 				e.stopPropagation();
					menuusuario.style = 'display:block;';
 			});
			menuusuario.addEventListener('click', function(e){
 				e.stopPropagation();
					menuusuario.style = 'display:block;';
 			});
		document.addEventListener('click', function(){
					menuusuario.style = 'display:none;';
				});
		</script>

</div>
</div>
<center><img src="http://localhost/img/animes/<?php echo $anime['logo'];?>" style="position:absolute;z-index:1;height:8vw;width:15vw;left:42vw;z-index:10;" id="logoanime" /></center>
<div id="anime-back"></div>

<style>
#anime-back{
	background-image:url("http://localhost/img/animes/<?php echo $anime['fotoback'];?>");
	width:100%;
	height:98%;
	backgrond-repeat:no-repeat;
	background-size:cover;
	z-index:0;
	position:absolute;
}
#shadow{
	width:100%;
	height:104%;
	background-color:rgba(0,0,0,0.70);
	z-index:1;
	position:absolute;
	top:0;
	left:0;
}
#shadow2{
	width:100%;
	height:104%;
	background-color:transparent;
	z-index:11;
	position:absolute;
	top:0;
	left:0;
}
</style>

<div id="main-anime">
		
<div id="ep-anime">

<p id="name-anime-anime"><?php echo $anime['nome'];?></p>
<div id="tab-anime">
<button id="video" class="buttonvideos">Vídeo(s)</button>
<button id="btncoment" class="buttonvideos">Comentarios</button>
<div id="branco-tab">
<p style="font-size:0.9vw;" >Mais Recentes</p>
</div>
</div>

<div id="episode">

<?php
$animels = DBRead( 'videos', "WHERE id_anime = '{$anime['id']}' ORDER BY id DESC LIMIT 10" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>
<a href="http://localhost/v2/watch.php?id=<?php echo $animel['id'];?>">
<li>
<img src="http://localhost/img/animes/<?php echo $anime['foto'];?>"/>
<p>Episódio <?php echo $animel['episodio'];?></p>

</li>
</a>
<?php endforeach;?>

</div>

<div id="comentarios">
<input type="text" placeholder="Comente algo" id="input-comentar"/>

</div>

<script type="text/javascript">
	var epanimediv = document.getElementById('video');
	var info = document.getElementById('btncoment');
	var episodiosdiv = document.getElementById('episode');
	var infodiv = document.getElementById('comentarios');
	var branco = document.getElementById('branco-tab');
	$('#video').click(function(){
		episodiosdiv.style = 'display:block;';
				info.style = 'background-color:#555;color:#fff;';
		epanimediv.style = 'background-color:#fff;color:#000;';
		infodiv.style = 'display:none;';
		branco.style = 'display:block';
		});
	$('#btncoment').click(function(){
		episodiosdiv.style = 'display:none;';
		info.style = 'background-color:#fff;color:#000;';
		epanimediv.style = 'background-color:#555;color:#fff;';
		infodiv.style = 'display:block;';
		branco.style = 'display:none';
		});
		</script>


</div>

<div id="right-anime">
<div id="banner-logo">
<img src="http://localhost/img/animes/<?php echo $anime['banner'];?>" id="anime-foto-banner"/>
</div>
<button id="watch-anime">Assistir</button>
<div id="info">
<p>Informações sobre está série.</p>
<p id="info-anime"><?php
	$str2 = nl2br( $anime['desct'] );
	$len2 = strlen( $str2 );
	$max2 = 300;
   if( $len2 <= $max2 )
   echo $str2;
	else    
   echo substr( $str2, 0, $max2 ) . '...'?></p>
</div>
</div>
</div>

<div id="shadow"></div>
<div id="shadow2"></div>
<script>
var headerstyle = document.getElementById('header');
var back = document.getElementById('anime-back');
var back2 = document.getElementById('shadow');
var header = document.getElementById('header');
window.onscroll = function(){
var top = window.pageYOffset || document.documentElement.scrollTop
if( top > 50 ) {
headerstyle.style = '';
back.style = 'position:fixed;top:0vw;transition:top 1.25s; -webkit-transition:top 1.25s;';
back2.style = 'position:fixed;top:0vw;left:0;transition:left 1.25s; -webkit-transition:left 1.25s;';
}else{
back.style = 'position:absolute;transition:top 1.25s; -webkit-transition:top 1.25s;';
headerstyle.style = 'position:relative;';
back2.style = 'position:absolute;transition:left 1.25s; -webkit-transition:left 1.25s;';
headerstyle.style = 'position:relative;';
}
}
</script>
</body>
</html>