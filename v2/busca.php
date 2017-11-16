	<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
include("DB.class.php");
?>
<?php
$nome = $_POST['nome'];
$animes = DBRead( 'animes', "WHERE id and upper(nome) LIKE upper('%{$nome}%') ORDER BY id DESC LIMIT 1" );
$resultsearchs = DBRead( 'animes', "WHERE id and upper(nome) LIKE upper('%{$nome}%') ORDER BY id DESC LIMIT 1" );
 if (!$resultsearchs)
 echo '';
else
foreach ($resultsearchs as $resultsearch):
?>

<?php
$animels = DBRead( 'animes', "WHERE id ORDER BY id DESC LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>
<?php
$nome = $_POST['nome'];

$db = new DB;	

$sql = $db->con()->prepare("SELECT * FROM ani_animes WHERE nome LIKE '%$nome%' LIMIT 5");
$sql->execute();

if(empty($nome)){
	echo "";
}else{
	while($ftc = $sql->fetchObject()){
		echo "<a href='http://localhost/v2/anime.php?id=".$resultsearch['id']."'><li id='birlada'>"."<img id='searchimg' src='http://127.0.0.1/img/animes/".$ftc->foto."' />"."<div class='name'><p class='name'>".$ftc->nome."</p></div>".""."</li></a>";
	}
}
?>
<?php endforeach;endforeach;?>
<?php
if($nome == 'foda'){
	echo "<li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/1.jpg'><div class='name'><p class='name'>Sou fodão</p></div></li>";
}
if($nome == 'criador'){
	echo "<a href='https://facebook.com/imxandeco/'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/dudu.gif'><div class='name'><p class='name'>Alexandre Silva</p></div></li></a>";
}
if($nome == 'feito por'){
	echo "<a href='https://facebook.com/imxandeco/'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/dudu.gif'><div class='name'><p class='name'>Alexandre Silva</p></div></li></a>";
}
if($nome == 'dono'){
	echo "<a href='https://facebook.com/imxandeco/'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/dudu.gif'><div class='name'><p class='name'>Alexandre Silva</p></div></li></a>";
}
if($nome == 'staff'){
	echo "<a href='https://facebook.com/imxandeco/'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/dudu.gif'><div class='name'><p class='name'>Alexandre Silva</p></div></li></a>";
}
if($nome == 'adm'){
	echo "<a href='https://facebook.com/imxandeco/'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/dudu.gif'><div class='name'><p class='name'>Alexandre Silva</p></div></li></a>";
}
if($nome == 'hack'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/hack.jpg'><div class='name'><p class='name'>Hackzão</p></div></li></a>";
}
if($nome == 'null'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/null.png'><div class='name'><p class='name'>Campo vazio</p></div></li></a>";
}
if($nome == 'blank'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/null.png'><div class='name'><p class='name'>Campo vazio</p></div></li></a>";
}
if($nome == 'sou gay'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Eu sei</p></div></li></a>";
}
if($nome == 'Sou gay'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Eu sei</p></div></li></a>";
}

if($nome == 'SOU GAY'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Eu sei</p></div></li></a>";
}
if($nome == 'Eu sou gay'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Eu sei</p></div></li></a>";
}
if($nome == 'eu sou gay'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Eu sei</p></div></li></a>";
}
if($nome == 'EU SOU GAY'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Eu sei</p></div></li></a>";
}
if($nome == 'gay'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Você é gay</p></div></li></a>";
}
if($nome == 'bluanime'){
	echo "<a href='http://bluanime.com'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Melhor site <3</p></div></li></a>";
}
if($nome == 'crunchyroll'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Melhor site <3</p></div></li></a>";
}
if($nome == 'site lixo'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Eu sei :/</p></div></li></a>";
}
if($nome == 'porno'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Estais no lugar errado</p></div></li></a>";
}
if($nome == 'anime'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Procure algum anime</p></div></li></a>";
}
if($nome == 'google'){
	echo "<a href='https://google.com.br'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Google.com.br</p></div></li></a>";
}
if($nome == 'facebook'){
	echo "<a href='https://facebook.com'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>fb.com</p></div></li></a>";
}
if($nome == 'anonymous'){
	echo "<a href=''><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/hack.jpg'><div class='name'><p class='name'>:O</p></div></li></a>";
}
if($nome == 'nico'){
	echo "<a href=''><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/start.png'><div class='name'><p class='name'>Também amo</p></div></li></a>";
}
if($nome == 'egg'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/hack.jpg'><div class='name'><p class='name'>:O</p></div></li></a>";
}
if($nome == 'my eggs'){
	echo "<a href='#'><li id='birlada'><img id='searchimg' src='http://127.0.0.1/img/egg/hack.jpg'><div class='name'><p class='name'>:O</p></div></li></a>";
}
if($nome == '666'){
	echo "<a href='#666'><li id='birlada' style='background-color:red;'><img id='searchimg' src='http://127.0.0.1/img/egg/666.jpg'><div class='name'><p class='name'></p></div></li></a>";
}
if($nome == 'capiroto'){
	echo "<a href='#666'><li id='birlada' style='background-color:red;'><img id='searchimg' src='http://127.0.0.1/img/egg/666.jpg'><div class='name'><p class='name'></p></div></li></a>";
}
if($nome == 'satan'){
	echo "<a href='#666'><li id='birlada' style='background-color:red;'><img id='searchimg' src='http://127.0.0.1/img/egg/666.jpg'><div class='name'><p class='name'></p></div></li></a>";
}
?>