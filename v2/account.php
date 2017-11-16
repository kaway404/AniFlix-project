<?php ob_start(); ?>
<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
echo '<script>location.href="http://localhost/v2";</script>';
}
?>
<head>
<title>AniFlix - Iniciar sessão/Registrar</title>
<link rel="stylesheet" type="text/css" href="http://localhost/v2/assets/css/style.css"/>
<link rel="stylesheet" href="http://localhost/v2/assets/css/google/icons.css">
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<html>
<body style="background-color:#dedcdc;">
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
<a href="http://localhost/v2/account.php">
<button id="account">
<svg id="account-svg" style="fill:#f78c25" enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="12" cy="8" r="4"/><path d="M12,14c-6.1,0-8,4-8,4v2h16v-2C20,18,18.1,14,12,14z"/></svg>
<p id="login-p" style="color:#f78c25;">Login</p>
</button>
</a>
</div>

</div>
</div>

<div id="main-account">

<div id="left-account">
<h1>Cadastro</h1>
<div class="formularios-cadastro">
<form method="post">
<input type="text" placeholder="Usuario" name="user-registro"/>
<input type="password" placeholder="Senha" name="senha-registro" />
<input type="text" placeholder="Nome" name="nome-registro"/>
<input type="text" placeholder="Sobrenome" name="sobname-registro"/>
<input type="text" placeholder="Email" name="email-registro"/>
<button id="button-cadastro" name="registro">Cadastrar</button>
</form>
</div>
</div>

<div id="right-account">
<h1>Login</h1>
<div class="formularios-cadastro">
<form method="post">
<input type="text" placeholder="Usuario" name="username"/>
<input type="password" placeholder="Senha" name="password"/>
<input style="position:relative;left:-3vw;" id="button-cadastro" type="submit" name="login" value="Iniciar sessão">
</form>
</div>
<center>
<div id="error">
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
header("location: http://localhost/v2/");
if( DBUpdate( 'users', $userUP, "id = '{$iduser}'" ) ){
echo '';
}                    
}     
}
}
			?>
			<?php
if(isset($_POST['registro'])){
$form['nome'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['nome-registro'] ) ));
$form['sobname'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['sobname-registro'] ) ));
$form['email'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['email-registro'] ) ));
$form['username'] = str_replace( '\r\n',"\n", DBEscape( trim( $_POST['user-registro'] ) ));
$form['senha'] = DBEscape(strip_tags(trim(MD5($_POST['senha-registro']))));
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
if(empty($form['nome']) || (empty($form['sobname'])) || (empty($form['email'])) || (empty($form['username'])) || (empty($form['senha'])) || (!validaEmail($email))){
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
header("location: http://localhost/v2/");
}
}
}
}
?>
</div>
</center>
</div>

<div id="vantagem">
<h1 style="position:absolute;bottom:0;color:#fff;text-shadow:0.1vw 0.1vw 0.1vw #000;font-size:1.9vw;">Ao iniciar uma sessão, você pode continuar o anime de onde parou e adicionar animes a fila,totalmente grátis.</h1>
</div>


<footer>

</footer>

</div>

<body>
</html>