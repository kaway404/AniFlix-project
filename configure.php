<?php ob_start(); ?>
<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
if(empty($_COOKIE['iduser']) and (empty($_COOKIE['inisession']))){
	echo '<script>location.href="http://localhost/account";</script>';
}

if(isset($_COOKIE['perfil'])){
	echo '<script>location.href="http://localhost/selecionar-perfil.php";</script>';
}
?>
<head>
<title>AniFlix - Configure sua conta</title>
<link rel="stylesheet" type="text/css" href="http://localhost/assets/css/style.css"/>
<script type="text/javascript" src="http://localhost/assets/js/index.js"></script>
<script type="text/javascript" src="http://localhost/assets/js/all.js"></script>
<script type="text/javascript" src="http://localhost/assets/js/scroll.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<link rel="stylesheet" href="http://localhost/aniflix/assets/css/google/icons.css">
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<script>
var i = setInterval(function () {
    clearInterval(i);

    // O c??o desejado ?penas isto:
    document.getElementById("loading").style = "opacity:0;transition:opacity 0.25s; -webkit-transition:opacity 0.25s;";
    document.getElementById("tudo").style = "opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;";

}, 1900);
</script>

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

<body id="configure">
<div id="tudo">
<header id="header">
<center><a href="http://localhost/"><div class="logo"></div></a></center>
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
	background-color:#141414;
	width:14%;
	height:auto;
	position:absolute;
	float:right;
	right:2vw;
	top:4.5vw;
	border-radius:0.4vw;
	display:none;
	transition:opacity 1.25s; -webkit-transition:opacity 1.25s;width:15vw;transition:width 1.25s; -webkit-transition:width 1.25s;
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
	background-color:#312d28;
	transition:background-color 1.25s; -webkit-transition:background-color 1.25s;
}
#perfil-right{
	background-color:#141414;
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
    background-image: linear-gradient(transparent, #141414 61%);
    z-index: 556666;
}
</style>
<img id="profilefoto" src="http://localhost/img/users/avatar/<?php echo $user['photo'];?>"/>

<div id="divmenuusuario">
<div id="topo-branco">
</div>


<a href="http://localhost/history">
<li>
Historico
</li>
</a>
<li id="perfil">
Perfil
</li>
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
<button id="closeinfoprofile"><svg enable-background="new 0 0 32 32" height="32px" id="????_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17.459,16.014l8.239-8.194c0.395-0.391,0.395-1.024,0-1.414c-0.394-0.391-1.034-0.391-1.428,0  l-8.232,8.187L7.73,6.284c-0.394-0.395-1.034-0.395-1.428,0c-0.394,0.396-0.394,1.037,0,1.432l8.302,8.303l-8.332,8.286  c-0.394,0.391-0.394,1.024,0,1.414c0.394,0.391,1.034,0.391,1.428,0l8.325-8.279l8.275,8.276c0.394,0.395,1.034,0.395,1.428,0  c0.394-0.396,0.394-1.037,0-1.432L17.459,16.014z" fill="#fff" id="Close"/><g/><g/><g/><g/><g/><g/></svg></button>

<img id="perfil-right-photo" src="http://localhost/img/users/avatar/<?php echo $user['photo'];?>" />
<div class="fotoperfilback"/>

</div>

<div id="shadow-right-profile">

</div>

<p id="nome-right-perfil"><?php echo $user['nome']?> <?php echo $user['sobname']?></p>

</div>



<?php endforeach; }else{ ?>
<?php echo '';?>
<?php }?>

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
</header>




<div class="new-perfil">

<h1>Configure sua conta</h1>

<div class="perfil-form">
<center>
<form method="post">
<img id="who" src="http://localhost/img/icons/how.png"/>
<input type="text" name="nome" id="quem" placeholder="Quem vai usar a conta?">
<input type="submit" id="quemsubmit" value="Salvar" name="criar">
</form>
</center>
</div>

</div>	


<?php
if(isset($_POST['criar'])){
$form['nome'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['nome'] ) ));
$form['id_user'] = $_COOKIE['iduser'];
$eoq = '1';
$username = $_COOKIE['iduser'];
$login_cookie = $_COOKIE['iduser'];

$upRate = array('configurado' => $eoq);
DBUpDate( 'users', $upRate, "id = '{$login_cookie}'" );

if( DBCreate( 'perfil', $form ) ){	
$busca  = "SELECT id FROM ani_perfil WHERE id_user = '".$username."'";
$identificacao = mysql_query($busca);
$retorno = mysql_fetch_array($identificacao);
$iduser = $retorno['id'];
header("location: http://localhost/");
}
}
?>




</div>



</body>