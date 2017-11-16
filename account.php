	<?php ob_start(); ?>
<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
echo '<script>location.href="http://localhost/";</script>';
}
?>
<head>
<title>AniFlix - Login/Cadastro</title>
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

    // O c�digo desejado � apenas isto:
    document.getElementById("loading").style = "opacity:0;transition:opacity 0.25s; -webkit-transition:opacity 0.25s;";
    document.getElementById("tudo").style = "opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;";

}, 400);
</script>
<html>
<body id="account">
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
<center><a href="http://localhost/"><div class="logo"></div></a></center>
</header>
<div id="login">

<center>
<div class="box-login">
<h1 id="h1-login">Faça o login</h1>

<div class="form">
<form method="post">
<input id="input-email" type="text" name="username" placeholder="Usuario">
<input id="input-senha" type="password" name="password" placeholder="Senha">
<input id="loginbutton" type="submit" name="login" value="Login">
</form>
</div>
<hr style="position:relative;top:6vw;"> 
<h1 id="h1-registro">Faça um cadastro</h1>
<h1 id="gratuito">É gratuito e sempre será</h1>
<div class="form2">
<form method="post">
<input type="text" name="email-registro" placeholder="Email">
<input type="password" name="senha-registro" placeholder="Senha">
<input type="text" name="nome-registro" placeholder="Seu nome">
<input type="text" name="sobname-registro" placeholder="Sobrenome">
<input type="text" name="user-registro" placeholder="Usuario">
<input type="text" name="gosto-registro" placeholder="Eu gosto de?">
<input type="submit" name="registro" value="Cadastrar">
</form>
</div>




<div class="resultado">


<?php
if(isset($_POST['registro'])){
$form['nome'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['nome-registro'] ) ));
$form['sobname'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['sobname-registro'] ) ));
$form['email'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['email-registro'] ) ));
$form['username'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['user-registro'] ) ));
$form['senha'] = DBEscape(strip_tags(trim(MD5($_POST['senha-registro']))));
$form['sobre'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['gosto-registro'] ) ));
$form['datec'] = date('Y-m-d H:i:s');
$form['lastlogin'] = date('Y-m-d H:i:s');
$form['photo'] = 'default.jpg';
$form['fotoback'] = 'xande.png';
$form['configurado'] = '0';
$username = $form['username'];
$form['inisession'] = date('Y-m-d H:i:s');
$inisession = $form['inisession'];
$email = $form['email'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('aniflix');  
function validaEmail($email) {
$conta = "^[a-zA-Z0-9\._-]+@";
$domino = "[a-zA-Z0-9\._-]+.";
$extensao = "([a-zA-Z]{2,4})$";
$pattern = $conta.$domino.$extensao;
if (ereg($pattern, $email))
return true;
else
return false;
}
if(empty($form['nome']) || (empty($form['sobname'])) || (empty($form['email'])) || (empty($form['username'])) || (empty($form['senha'])) || (empty($form['sobre'])) || (!validaEmail($email))){
if(!validaEmail($email)){
echo '<p style="color:#fff;">Desculpe, mas o Email está inválido, siga o exemplo:<br>exemplo@dominio.com</p>';
}
}
else{
$dbCheck = DBRead( 'users', "WHERE email = '". $form['email'] ."'" );
if( $dbCheck ){
echo '<p style="color:#fff;">Desculpe, mas já utilizam esse email ;-;</p>';
}
$dbCheck = DBRead( 'users', "WHERE username = '". $form['username'] ."'" );
if( $dbCheck ){
echo '<p style="color:#fff;">Desculpe, mas já utilizam esse nome de usuário ;-;</p>';
if(!validaEmail($email)){
echo '<p style="color:#fff;">Email inválido</p>';
}
}
else{
if( DBCreate( 'users', $form ) ){	
$busca  = "SELECT id FROM ani_users WHERE username = '".$username."'";
$identificacao = mysql_query($busca);
$retorno = mysql_fetch_array($identificacao);
$iduser = $retorno['id'];
setcookie("iduser", $iduser);
setcookie("inisession", $inisession);
header("location: http://localhost/");
}
}
}
}
?>


<?php
if(isset($_POST['login'])){
$form['username'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['username'] ) ));
$form['password'] = DBEscape(strip_tags(trim(MD5($_POST['password']))));
$form['inisession']= date('Y-m-d H:i:s');
$password = $form['password'];
$username = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['username'] ) ));
$inisession = $form['inisession'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('aniflix'); 
if(empty($_POST['username']) || (empty($_POST['password']))){
echo '<p style="color:#fff;">Preencha o email e senha.</p>';
}
$verifica = mysql_query("SELECT * FROM ani_users WHERE senha  = '$password'") or die("erro ao selecionar");
if (mysql_num_rows($verifica)<=0){
echo '<p class="error" style="color:#fff;">Dados de login incorretos.</p>';
}
else{
$query = mysql_query("SELECT * FROM ani_users WHERE username  = '".$_POST['username']."'");
$result = mysql_fetch_array($query);
if (ereg($_POST['username'], $result['username'])) {
$busca  = "SELECT id FROM ani_users WHERE username = '".$username."'";
$identificacao = mysql_query($busca);
$retorno = mysql_fetch_array($identificacao);
$iduser = $retorno['id'];
$userUP['lastlogin'] = date('Y-m-d H:i:s');	
setcookie("iduser", $iduser);
setcookie("inisession", $inisession);
header("location: http://localhost/");
if( DBUpdate( 'users', $userUP, "id = '{$iduser}'" ) ){
echo '';
}                    
}     
}
}
			?>
</div>

</div>


</center>

</div>


</div>
<body>
</html>