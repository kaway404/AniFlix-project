<?php ob_start(); ?>
<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
$user = DBRead('users', "WHERE id = '{$iduser}' LIMIT 1 ");
$user = $user[0];
}
?>
<head>
<title>AniFlix - Animes online</title>
<link rel="stylesheet" type="text/css" href="http://localhost/v2/assets/css/style.css"/>
<link rel="stylesheet" href="http://localhost/v2/assets/css/google/icons.css">
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<html>
<body id="index">

<div id="header">
<div id="top-align">
<div id="logo"></div>
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
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	echo'
<div id="menuuser">
<div id="topo-branco"></div>
<img src="http://localhost/v2/img/tring.png" id="tring" />

<a href="http://localhost/v2/profile.php?id='.$user['id'].'."><li>Perfil</li></a>
<a href="http://localhost/v2/options.php"><li>Opçoes</li></a>
<a href="http://localhost/v2/logout.php"><li>Sair</li></a>

</div>';
}
?>
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

<?php
$animels = DBRead( 'animes', "WHERE id ORDER BY id desc LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>
	<?php
$animes = DBRead( 'animes', "WHERE id ORDER BY id ASC LIMIT 1");
$ep = $animel['id'];
$resultsearchs = DBRead( 'videos', "WHERE id_anime = '{$ep}' ORDER BY id ASC LIMIT 1" );
 if (!$resultsearchs)
 echo '';
else
foreach ($resultsearchs as $resultsearch):
?>
<style>
#backdestaque{
	background-image:url("http://localhost/img/animes/<?php echo $animel['fotoback'];?>");
	width:100%;
	height:98%;
	backgrond-repeat:no-repeat;
	background-size:cover;
	z-index:1;
	position:absolute;
}
#logodestaque{
		width:20vw;
		height:7vw;
		position:absolute;
		z-index:4;
		left:39vw;
		}
		#haha{
			position:relative;
			z-index:4;
		}
</style>
<a href="http://localhost/v2/anime.php?id=<?php echo $animel['id'];?>">
<center><img id="logodestaque" src="http://localhost/img/animes/<?php echo $animel['logo'];?>"/></center>
<div id="backdestaque">
<div id="shadow-destaque"></div>
</div>
</a>
<?php endforeach;endforeach;?>
<center>
<div id="menu-index">
<div id="line-right"></div>
<div id="line-bottom"></div>
<div id="right-menu-index">
<p id="desq">Ultimos lançamentos</p>

<?php
$animels2 = DBRead( 'animes', "WHERE id ORDER BY id ASC LIMIT 3" );
 if (!$animels2)
	echo "";
else 
	foreach ($animels2 as $animel):
?>
<a href="http://localhost/v2/anime.php?id=<?php echo $animel['id'];?>">
<li id="animes">
<img src="http://localhost/img/animes/<?php echo $animel['foto'];?>"/ id="destaque">
<p id="name-anime"><?php echo $animel['nome']?></p>
<p id="name-anime">Pontuação: <?php echo $animel['votacao']?></p>
</li>
</a>
<?php endforeach;?>
</div>

<div id="left-menu-index">
<?php
$animels2 = DBRead( 'animes', "WHERE id ORDER BY id ASC LIMIT 1" );
 if (!$animels2)
	echo "";
else 
	foreach ($animels2 as $animel):
?>
<img id="lanc" src="http://localhost/img/animes/<?php echo $animel['fotoback'];?>"/>
<div class="info">
<p id="name-anime-info"><?php echo $animel['nome']?></p>
<p id="name-anime-info-desc"><?php
	$str2 = nl2br( $animel['desct'] );
	$len2 = strlen( $str2 );
	$max2 = 80;
   if( $len2 <= $max2 )
   echo $str2;
	else    
   echo substr( $str2, 0, $max2 ) . '...'?></p>
</div>
<a href="http://localhost/v2/anime.php?id=<?php echo $animel['id'];?>"><button id="watch-now">Assistir agora</button></a>
<?php endforeach;?>
</div>

<div id="lanc-ep">

<?php
if(empty($_COOKIE['news'])){
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	echo '
	<div id="news">
	<p>Obrigado por usar nossos serviços '.$user['nome'].' '.$user['sobname'].'['.$user['username'].'].</p>
	<form method="post"><button id="close" name="close">X</button></form>
	</div>
	';
	if(isset($_POST['close'])){
		setcookie("var", $iduser);
		setcookie("eoq", $iduser);
		setcookie("balada", $iduser);
		setcookie("soni", $iduser);
		setcookie("news", $iduser);
		header("location: http://localhost/v2/");
	}
}
}
?>




</div>

</div>




</center>


<script>
var headerstyle = document.getElementById('header');
var back = document.getElementById('backdestaque');
var back2 = document.getElementById('logodestaque');
window.onscroll = function(){
var top = window.pageYOffset || document.documentElement.scrollTop
if( top > 200 ) {
back.style = 'position:fixed;top:0vw;transition:top 1.25s; -webkit-transition:top 1.25s;';
back2.style = 'position:fixed;top:0vw;left:0;transition:left 1.25s; -webkit-transition:left 1.25s;';
headerstyle.style = 'position:relative;';
}else{
back.style = 'position:absolute;transition:top 1.25s; -webkit-transition:top 1.25s;';
headerstyle.style = 'position:relative;';
back2.style = 'position:absolute;transition:left 1.25s; -webkit-transition:left 1.25s;';
}
}
</script>

</body>
</html>