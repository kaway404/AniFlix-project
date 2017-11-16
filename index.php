<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	
		$iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
		$user = DBRead('users', "WHERE id = '{$iduser}' LIMIT 1 ");
		$user = $user[0];
		
		if($user['configurado'] == 0){
			echo '<script>location.href="http://localhost/configure";</script>';
		}
		
	
	if(empty($_COOKIE['perfil'])){
	echo '<script>location.href="http://localhost/change";</script>';
}
}
?>
<head>
<title>AniFlix - Animes online</title>
<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/style.css"/>
<script type="text/javascript" src="http://localhost/assets/js/index.js"></script>
<script type="text/javascript" src="http://localhost/assets/js/all.js"></script>
<script type="text/javascript" src="http://localhost/assets/js/scroll.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<link rel="stylesheet" href="http://localhost/aniflix/assets/css/google/icons.css">
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<html>
<script>
var i = setInterval(function () {
    clearInterval(i);

    // O código desejado é apenas isto:
    document.getElementById("loading").style = "opacity:0;transition:opacity 0.25s; -webkit-transition:opacity 0.25s;";
    document.getElementById("tudo").style = "opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;";

}, 1900);
</script>
<body id="main">

<style>
#tudo{
	opacity:0;
}
#loading{
	width:100%;
	height:100%;
	background-color:#141414;
	position:fixed;
    background-image: linear-gradient(to bottom, transparent, rgba(0,0,0,.3));
	opacity:1;
}
#loading h1{
    -webkit-filter: brightness(0) invert(1);
    animation: linear 5s logo_move infinite;
    -webkit-animation: linear 5s logo_move infinite;
    -moz-animation: linear 5s logo_move infinite;
    -o-animation: linear 5s logo_move infinite;
	font-size:5vw;
	text-align:center;
	position:relative;
	top:10vw;
}
</style>

<div id="loading">
<h1>

</h1>
<center>
<svg id="loadingsvg" width='10vw' height='10vw' style="position:relative;top:20vw;" height='15vw' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-ring"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><defs><filter id="uil-ring-shadow" x="-100%" y="-100%" width="300%" height="300%"><feOffset result="offOut" in="SourceGraphic" dx="0" dy="0"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="0"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><path d="M10,50c0,0,0,0.5,0.1,1.4c0,0.5,0.1,1,0.2,1.7c0,0.3,0.1,0.7,0.1,1.1c0.1,0.4,0.1,0.8,0.2,1.2c0.2,0.8,0.3,1.8,0.5,2.8 c0.3,1,0.6,2.1,0.9,3.2c0.3,1.1,0.9,2.3,1.4,3.5c0.5,1.2,1.2,2.4,1.8,3.7c0.3,0.6,0.8,1.2,1.2,1.9c0.4,0.6,0.8,1.3,1.3,1.9 c1,1.2,1.9,2.6,3.1,3.7c2.2,2.5,5,4.7,7.9,6.7c3,2,6.5,3.4,10.1,4.6c3.6,1.1,7.5,1.5,11.2,1.6c4-0.1,7.7-0.6,11.3-1.6 c3.6-1.2,7-2.6,10-4.6c3-2,5.8-4.2,7.9-6.7c1.2-1.2,2.1-2.5,3.1-3.7c0.5-0.6,0.9-1.3,1.3-1.9c0.4-0.6,0.8-1.3,1.2-1.9 c0.6-1.3,1.3-2.5,1.8-3.7c0.5-1.2,1-2.4,1.4-3.5c0.3-1.1,0.6-2.2,0.9-3.2c0.2-1,0.4-1.9,0.5-2.8c0.1-0.4,0.1-0.8,0.2-1.2 c0-0.4,0.1-0.7,0.1-1.1c0.1-0.7,0.1-1.2,0.2-1.7C90,50.5,90,50,90,50s0,0.5,0,1.4c0,0.5,0,1,0,1.7c0,0.3,0,0.7,0,1.1 c0,0.4-0.1,0.8-0.1,1.2c-0.1,0.9-0.2,1.8-0.4,2.8c-0.2,1-0.5,2.1-0.7,3.3c-0.3,1.2-0.8,2.4-1.2,3.7c-0.2,0.7-0.5,1.3-0.8,1.9 c-0.3,0.7-0.6,1.3-0.9,2c-0.3,0.7-0.7,1.3-1.1,2c-0.4,0.7-0.7,1.4-1.2,2c-1,1.3-1.9,2.7-3.1,4c-2.2,2.7-5,5-8.1,7.1 c-0.8,0.5-1.6,1-2.4,1.5c-0.8,0.5-1.7,0.9-2.6,1.3L66,87.7l-1.4,0.5c-0.9,0.3-1.8,0.7-2.8,1c-3.8,1.1-7.9,1.7-11.8,1.8L47,90.8 c-1,0-2-0.2-3-0.3l-1.5-0.2l-0.7-0.1L41.1,90c-1-0.3-1.9-0.5-2.9-0.7c-0.9-0.3-1.9-0.7-2.8-1L34,87.7l-1.3-0.6 c-0.9-0.4-1.8-0.8-2.6-1.3c-0.8-0.5-1.6-1-2.4-1.5c-3.1-2.1-5.9-4.5-8.1-7.1c-1.2-1.2-2.1-2.7-3.1-4c-0.5-0.6-0.8-1.4-1.2-2 c-0.4-0.7-0.8-1.3-1.1-2c-0.3-0.7-0.6-1.3-0.9-2c-0.3-0.7-0.6-1.3-0.8-1.9c-0.4-1.3-0.9-2.5-1.2-3.7c-0.3-1.2-0.5-2.3-0.7-3.3 c-0.2-1-0.3-2-0.4-2.8c-0.1-0.4-0.1-0.8-0.1-1.2c0-0.4,0-0.7,0-1.1c0-0.7,0-1.2,0-1.7C10,50.5,10,50,10,50z" fill="#59ebff" filter="url(#uil-ring-shadow)"><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" repeatCount="indefinite" dur="1s"></animateTransform></path></svg></center>	
</div>

<div id="tudo">
<header id="header">
<center><div class="logo"></div></center>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
$iduser = $_COOKIE['iduser'];
$users = DBRead( 'users', "WHERE id = $iduser ORDER BY id ASC LIMIT 1" );
 if (!$users)
	echo "";
else 
	foreach ($users as $user):
?>
<style>
#profilefoto{
	height:3vw;
	width:3vw;
	float:right;
	position:relative;
	right:2vw;
	top:1vw;
	border-radius:5vw;
	opacity:0.8;
	cursor:pointer;
}
#divmenuusuario{
	background-color:#312d28;
	width:14%;
	height:auto;
	position:absolute;
	float:right;
	right:2vw;
	top:4.5vw;
	border-radius:0.4vw;
	display:none;
}
#topo-branco{
	background-color:#fff;
	width:100%;
	height:0.8vw;
	position:relative;
}
#topo-branco-img{
	position:absolute;
	bottom:0vw;
	z-index:0;
	float:right;
	right:2vw;
}
#divmenuusuario li{
	color:#fff;
	text-align:center;
	font-size:1.3vw;
	margin-top:0.5vw;
	position:relative;
	width:100%;
	height:auto;
	cursor:pointer;
}
#divmenuusuario li:hover{
	background-color:#141414;
	transition:background-color 1.25s; -webkit-transition:background-color 1.25s;
}
#perfil-right{
	background-color:#312d28;
	float:right;
	height:100%;
	width:25%;
	position:fixed;
	right:0;
	z-index:1231231;
	display:none;
}
#closeinfoprofile{
	border:none;
	background-color:rgba(0,0,0,0.30);
	float:right;
	right:2vw;
	position:relative;
	top:1vw;
	cursor:pointer;
	z-index:555223215;
}
#closeinfoprofile:hover{
	background-color:rgba(0,0,0,0.70);
}
#perfil-right-photo{
	width:8vw;
	height:8vw;
	border-radius:15vw;
	position:relative;
	left:1vw;
	top:1vw;
	z-index:999999;
}
#nome-right-perfil{
	color:#fff;
	font-size:1.5vw;
	float:right;
	position:relative;
	right:2vw;
	top:6vw;
	z-index:9999999;
	text-shadow:0.2vw 0.2vw 0.2vw #000;
}
.fotoperfilback{
	background-image:url(http://localhost/img/users/back/<?php echo $user['fotoback'];?>);
	width:100%;
	height:15%;
	backgrond-repeat:no-repeat;
	background-size:cover;
	position:absolute;
	top:0;
	z-index:4555;
	
}
#shadow-right-profile{
	width: 100%;
    height: 2vw;
    min-height: 15vw;
    position: absolute;
    bottom: 41vw;
    background-image: linear-gradient(transparent, #312d28 61%);
    z-index: 556666;
}
</style>
<img id="profilefoto" src="http://localhost/img/users/avatar/<?php echo $user['photo'];?>"/>

<div id="divmenuusuario">
<div id="topo-branco">
</div>



<li id="perfil">
Perfil
</li>
<a href="http://localhost/trocarprofile.php">
<li id="trocarperfil">
Trocar de perfil
</li>
</a>
<li>
Configuracoes
</li>
<li>
Minha fila
</li>
<li>
Favoritos
</li>
<a href="http://localhost/logout.php">
<li>
Sair
</li>
</a>
</div>

<div id="perfil-right">
<button id="closeinfoprofile"><svg enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17.459,16.014l8.239-8.194c0.395-0.391,0.395-1.024,0-1.414c-0.394-0.391-1.034-0.391-1.428,0  l-8.232,8.187L7.73,6.284c-0.394-0.395-1.034-0.395-1.428,0c-0.394,0.396-0.394,1.037,0,1.432l8.302,8.303l-8.332,8.286  c-0.394,0.391-0.394,1.024,0,1.414c0.394,0.391,1.034,0.391,1.428,0l8.325-8.279l8.275,8.276c0.394,0.395,1.034,0.395,1.428,0  c0.394-0.396,0.394-1.037,0-1.432L17.459,16.014z" fill="#fff" id="Close"/><g/><g/><g/><g/><g/><g/></svg></button>

<img id="perfil-right-photo" src="http://localhost/img/users/avatar/<?php echo $user['photo'];?>" />
<div class="fotoperfilback"/>

</div>

<div id="shadow-right-profile">

</div>

<p id="nome-right-perfil"><?php echo $user['nome']?> <?php echo $user['sobname']?></p>

</div>

<script type="text/javascript">
	var perfilli = document.getElementById('perfil');
	var perfilright = document.getElementById('perfil-right');
	var closeperfil = document.getElementById('closeinfoprofile');
	perfilli.addEventListener('click', function(e){
 				e.stopPropagation();
				perfilright.style = 'display:block;';
 			});
				closeperfil.addEventListener('click', function(e){
 				e.stopPropagation();
				perfilright.style = 'display:none;';
 			});
			</script>

<script type="text/javascript">
	var menuusuario = document.getElementById('divmenuusuario');
	var fotoperfil = document.getElementById('profilefoto');
	fotoperfil.addEventListener('click', function(e){
 				e.stopPropagation();
				menuusuario.style = 'display:block;';
 			});
			document.addEventListener('click', function(){
				menuusuario.style = 'display:none;';
			});
			document.addEventListener('click', function(){
					dp.style = 'opacity:0;opacity 1.25s; -webkit-transition:opacity 0.25s;transition:width 0.25s; -webkit-transition:width 0.25s;';
					icon_not.style = 'opacity:1;';
				});
</script>

<?php endforeach; }else{ ?>
<a href="http://localhost/account"><p class="login-cadastro">Login</p></a>
<?php }?>
<div class="search">
<button id="button-search"><p id="busquep">Busque</p><svg id="svg-search" enable-background="new 0 0 50 50" height="50px" id="Layer_1" version="1.1" viewBox="0 0 50 50" width="50px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect fill="none" height="50" width="50"/><circle cx="21" cy="20" fill="none" r="16" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><line fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="4" x1="32.229" x2="45.5" y1="32.229" y2="45.5"/></svg></button>
<div id="searchinput">
		  <input type="text" placeholder="Busque animes" class="nome" />
		  <div id="box-s-h">
		    <ul class="src">
			</ul>
		  </div>
	  <script src="lib/js/jquery.js" type="text/javascript"></script>
	<script src="lib/js/js-all.js" type="text/javascript"></script>
			<script src="lib/js/jquery.js" type="text/javascript"></script>
	<script src="lib/js/js-all.js" type="text/javascript"></script>
</div>
<script>
				var icon_not = document.getElementById('button-search');
				var dp = document.getElementById('searchinput');
				var input = document.getElementsByClassName('nome');
 			icon_not.addEventListener('click', function(e){
 				e.stopPropagation();
 				dp.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				icon_not.style = 'opacity:0;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';	
				input.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width.25s;';
				input.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
 			});
			dp.addEventListener('click', function(e){
 				e.stopPropagation();
 				dp.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				icon_not.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
				input.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
 			});
			input.addEventListener('click', function(e){
 				e.stopPropagation();
				input.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
 			});
</script>
</div>
</header>
<script>
var headerstyle = document.getElementById('header');
window.onscroll = function(){
var top = window.pageYOffset || document.documentElement.scrollTop
if( top > 150 ) {
headerstyle.style = 'background: rgba(0, 0, 0, 0.7);';
}else{
headerstyle.style = 'background-image: linear-gradient(#000 0%, transparent 100%);';
}
}
</script>
<div class="animes-destaque">
<?php
$animels = DBRead( 'animes', "WHERE id ORDER BY id ASC LIMIT 1" );
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
<img id="back-destaque" src="http://localhost/img/animes/<?php echo $animel['fotoback'];?>">
<div class="div-shadow">

</div>
<div class="destaque-back-inc">

</div>
<div class="destaque-desc">
<p id="destaque-desc">
<div id="back-desc">
<style>
#animelogo<?php echo $animel['id'];?>{
	height:6vw;
	width:13vw;
	bottom:23vw;
	left:2vw;
	position:relative;
	z-index:0;
	opacity:0.8;
}
</style>
<img id="animelogo<?php echo $animel['id'];?>" src="http://localhost/img/animes/<?php echo $animel['logo'];?>"/>
<p id="destaque-nome"><?php echo $animel['nome'];?></p><br>
<p id="destaque-desc"><?php
	$str2 = nl2br( $animel['desct'] );
	$len2 = strlen( $str2 );
	$max2 = 300;
   if( $len2 <= $max2 )
   echo $str2;
	else    
   echo substr( $str2, 0, $max2 ) . '...'?></p>
<a class="assistir" id="watch-destaque2" href="http://localhost/watch.php?id=<?php echo $resultsearch['id'];?>"><button value="<?php echo $animel['id'];?>" id="watch-destaque"><svg id="destaquesvg" height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M405.2,232.9L126.8,67.2c-3.4-2-6.9-3.2-10.9-3.2c-10.9,0-19.8,9-19.8,20H96v344h0.1c0,11,8.9,20,19.8,20  c4.1,0,7.5-1.4,11.2-3.4l278.1-165.5c6.6-5.5,10.8-13.8,10.8-23.1C416,246.7,411.8,238.5,405.2,232.9z"/></svg>Assistir</button></a>
</div>
<script>
</script>
</div>
</p>

<?php endforeach;endforeach;?>
</div>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
$animes = DBRead( 'animes', "WHERE id ORDER BY id ASC LIMIT 1");
$ep = $animel['id'];
$resultsearchs = DBRead( 'videos', "WHERE id_anime = '{$ep}' ORDER BY id ASC LIMIT 1" );
 if (!$resultsearchs)
 echo '';
else
foreach ($resultsearchs as $resultsearch):
?>
<div class="animes2">
</div>
<?php endforeach;}?>

<div class="animes">
</div>
<script>
$.post('request.php?animeinfo', function (html) {
    $('.animes').html(html);
});

$.post('request.php?animeinfo2', function (html) {
    $('.animes2').html(html);
});

</script>
		 		<button id="closeinfo"><svg enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17.459,16.014l8.239-8.194c0.395-0.391,0.395-1.024,0-1.414c-0.394-0.391-1.034-0.391-1.428,0  l-8.232,8.187L7.73,6.284c-0.394-0.395-1.034-0.395-1.428,0c-0.394,0.396-0.394,1.037,0,1.432l8.302,8.303l-8.332,8.286  c-0.394,0.391-0.394,1.024,0,1.414c0.394,0.391,1.034,0.391,1.428,0l8.325-8.279l8.275,8.276c0.394,0.395,1.034,0.395,1.428,0  c0.394-0.396,0.394-1.037,0-1.432L17.459,16.014z" fill="#fff" id="Close"/><g/><g/><g/><g/><g/><g/></svg></button>
		<script type="text/javascript">	
		$('#closeinfo').click(function(){
				$("#animesinfo").fadeOut(200);
				$("#closeinfo").fadeOut(200);
    });
		</script>
		<div id="animesinfo" style="display:none;">
		<center>
		<svg id="loadingsvg2" width='10vw' height='10vw' style="z-index:90000;position:relative;top:4vw;display:block;" height='15vw' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-ring"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><defs><filter id="uil-ring-shadow" x="-100%" y="-100%" width="300%" height="300%"><feOffset result="offOut" in="SourceGraphic" dx="0" dy="0"></feOffset><feGaussianBlur result="blurOut" in="offOut" stdDeviation="0"></feGaussianBlur><feBlend in="SourceGraphic" in2="blurOut" mode="normal"></feBlend></filter></defs><path d="M10,50c0,0,0,0.5,0.1,1.4c0,0.5,0.1,1,0.2,1.7c0,0.3,0.1,0.7,0.1,1.1c0.1,0.4,0.1,0.8,0.2,1.2c0.2,0.8,0.3,1.8,0.5,2.8 c0.3,1,0.6,2.1,0.9,3.2c0.3,1.1,0.9,2.3,1.4,3.5c0.5,1.2,1.2,2.4,1.8,3.7c0.3,0.6,0.8,1.2,1.2,1.9c0.4,0.6,0.8,1.3,1.3,1.9 c1,1.2,1.9,2.6,3.1,3.7c2.2,2.5,5,4.7,7.9,6.7c3,2,6.5,3.4,10.1,4.6c3.6,1.1,7.5,1.5,11.2,1.6c4-0.1,7.7-0.6,11.3-1.6 c3.6-1.2,7-2.6,10-4.6c3-2,5.8-4.2,7.9-6.7c1.2-1.2,2.1-2.5,3.1-3.7c0.5-0.6,0.9-1.3,1.3-1.9c0.4-0.6,0.8-1.3,1.2-1.9 c0.6-1.3,1.3-2.5,1.8-3.7c0.5-1.2,1-2.4,1.4-3.5c0.3-1.1,0.6-2.2,0.9-3.2c0.2-1,0.4-1.9,0.5-2.8c0.1-0.4,0.1-0.8,0.2-1.2 c0-0.4,0.1-0.7,0.1-1.1c0.1-0.7,0.1-1.2,0.2-1.7C90,50.5,90,50,90,50s0,0.5,0,1.4c0,0.5,0,1,0,1.7c0,0.3,0,0.7,0,1.1 c0,0.4-0.1,0.8-0.1,1.2c-0.1,0.9-0.2,1.8-0.4,2.8c-0.2,1-0.5,2.1-0.7,3.3c-0.3,1.2-0.8,2.4-1.2,3.7c-0.2,0.7-0.5,1.3-0.8,1.9 c-0.3,0.7-0.6,1.3-0.9,2c-0.3,0.7-0.7,1.3-1.1,2c-0.4,0.7-0.7,1.4-1.2,2c-1,1.3-1.9,2.7-3.1,4c-2.2,2.7-5,5-8.1,7.1 c-0.8,0.5-1.6,1-2.4,1.5c-0.8,0.5-1.7,0.9-2.6,1.3L66,87.7l-1.4,0.5c-0.9,0.3-1.8,0.7-2.8,1c-3.8,1.1-7.9,1.7-11.8,1.8L47,90.8 c-1,0-2-0.2-3-0.3l-1.5-0.2l-0.7-0.1L41.1,90c-1-0.3-1.9-0.5-2.9-0.7c-0.9-0.3-1.9-0.7-2.8-1L34,87.7l-1.3-0.6 c-0.9-0.4-1.8-0.8-2.6-1.3c-0.8-0.5-1.6-1-2.4-1.5c-3.1-2.1-5.9-4.5-8.1-7.1c-1.2-1.2-2.1-2.7-3.1-4c-0.5-0.6-0.8-1.4-1.2-2 c-0.4-0.7-0.8-1.3-1.1-2c-0.3-0.7-0.6-1.3-0.9-2c-0.3-0.7-0.6-1.3-0.8-1.9c-0.4-1.3-0.9-2.5-1.2-3.7c-0.3-1.2-0.5-2.3-0.7-3.3 c-0.2-1-0.3-2-0.4-2.8c-0.1-0.4-0.1-0.8-0.1-1.2c0-0.4,0-0.7,0-1.1c0-0.7,0-1.2,0-1.7C10,50.5,10,50,10,50z" fill="#59ebff" filter="url(#uil-ring-shadow)"><animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" repeatCount="indefinite" dur="1s"></animateTransform></path></svg></center>
		</div>
		<script type="text/javascript">	
		var animesinfo = document.getElementById('animesinfo');
		</script>
		
		
<script type="text/javascript" src="assets/info/js/mod_xhr.js"></script>
<script type="text/javascript" src="assets/info/js/info.js"></script>
	
<script type="text/javascript">
var leftepdestaque = document.getElementById("leftepdestaque");
var rightepdestaque = document.getElementById("rightepdestaque");
var animesdivepnaruto = document.getElementById("animesdivepnaruto");
			rightepdestaque.addEventListener('click', function(e){
 				e.stopPropagation();
				 var currentLeft = parseInt($('#animesdivepnaruto').css('left'));
				$('#animesdivepnaruto').css('left', (currentLeft - 300) + '');
				});	
			leftepdestaque.addEventListener('click', function(e){
 				e.stopPropagation();
				 var currentLeft = parseInt($('#animesdivepnaruto').css('left'));
				$('#animesdivepnaruto').css('left', (currentLeft + 300) + '');
				});	
				
</script>
		 		<button id="closeinfo2"><svg enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17.459,16.014l8.239-8.194c0.395-0.391,0.395-1.024,0-1.414c-0.394-0.391-1.034-0.391-1.428,0  l-8.232,8.187L7.73,6.284c-0.394-0.395-1.034-0.395-1.428,0c-0.394,0.396-0.394,1.037,0,1.432l8.302,8.303l-8.332,8.286  c-0.394,0.391-0.394,1.024,0,1.414c0.394,0.391,1.034,0.391,1.428,0l8.325-8.279l8.275,8.276c0.394,0.395,1.034,0.395,1.428,0  c0.394-0.396,0.394-1.037,0-1.432L17.459,16.014z" fill="#fff" id="Close"/><g/><g/><g/><g/><g/><g/></svg></button>
		<script type="text/javascript">	
		var closeinfo2 = document.getElementById('closeinfo2');
		</script>

<footer>

</footer>
</div>
</body>
</html>