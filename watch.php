﻿<?php
require 'static/php/system/database.php';
require 'static/php/system/config.php';
date_default_timezone_set("America/Sao_Paulo");
if(!isset($_GET['id']) || empty($_GET['id']))
echo '<script>location.href="http://localhost/";</script>';
else{
$id = DBEscape( strip_tags(trim($_GET['id']) ) );
$video = DBRead('videos', "WHERE id = '{$id}' LIMIT 1 ");
if(!$video)
echo '<script>location.href="http://localhost/";</script>';
if($video){
$video = $video[0];
$upVisits = array(
'clicks' => $video['clicks'] + 1);
DBUpDate( 'videos', $upVisits, "id = '{$id}'" );
}
}
$idwatch = $video['id_anime'];
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
		
		if($user['configurado'] == 0){
			echo '<script>location.href="http://localhost/configure";</script>';
		}
		
	
	if(empty($_COOKIE['perfil'])){
	echo '<script>location.href="http://localhost/change";</script>';
}
}

?>
<head>
<link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
<script type="text/javascript" src="assets/js/index.js"></script>
<link rel="stylesheet" href="http://localhost/aniflix/assets/css/google/icons.css">
<meta charset="utf-8">
<script type="text/javascript" src="js/jquery.js"></script>
<title>Assistindo à <?php echo $anime['nome'];?></title>
</head>
<html>
<body>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
$animels = DBRead( 'videos', "WHERE id_anime = '{$anime['id']}' ORDER BY id DESC LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>
<?php
$dbCheck = DBRead( 'history', "WHERE id_video = '". $_GET['id'] ."' and perfil = '".  $_COOKIE['perfil'] ."' " );
if( $dbCheck ){
echo '';
}
else{
	$form2['id_user'] = $_COOKIE['iduser'];
	$form2['id_video'] = $_GET['id'];
	$form2['perfil'] = $_COOKIE['perfil'];
	$form2['datec'] = date('Y-m-d H:i:s');
	$form2['id_anime'] = $anime['id'];
	if( DBCreate( 'history', $form2 ) ){	
	echo '';
	}
}
?>
<?php endforeach;}?>

<div id="episodeswatch">
<div class="div-ep">
<h1 id="ep"><?php  if($anime['tipo'] == 1){ echo 'Episodios';}?> <?php  if($anime['tipo'] == 2){ echo 'Filmes';}?> de <?php echo $anime['nome'];?></h1>
<button id="close">
<svg id="close-svg-1" enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17.459,16.014l8.239-8.194c0.395-0.391,0.395-1.024,0-1.414c-0.394-0.391-1.034-0.391-1.428,0  l-8.232,8.187L7.73,6.284c-0.394-0.395-1.034-0.395-1.428,0c-0.394,0.396-0.394,1.037,0,1.432l8.302,8.303l-8.332,8.286  c-0.394,0.391-0.394,1.024,0,1.414c0.394,0.391,1.034,0.391,1.428,0l8.325-8.279l8.275,8.276c0.394,0.395,1.034,0.395,1.428,0  c0.394-0.396,0.394-1.037,0-1.432L17.459,16.014z" fill="#fff" id="Close"/><g/><g/><g/><g/><g/><g/></svg>
</button>
<?php
$animels = DBRead( 'videos', "WHERE id_anime = '{$anime['id']}' ORDER BY id DESC LIMIT 10" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
?>
<a href="watch.php?id=<?php echo $animel['id'];?>"><img class="foto-anime" src="/img/animes/<?php echo $anime['foto'];?>" /></a>
<p class="info-ep"><?php echo $animel['episodio'];?></p>
<?php endforeach;?>
</div>
</div>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	$animels = DBRead( 'videos', "WHERE id_anime = '{$anime['id']}' ORDER BY id DESC LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
	?>
<div id="right-watch">
<svg enable-background="new 0 0 32 32" id="favoritewatch" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><polyline fill="none" points="   649,137.999 675,137.999 675,155.999 661,155.999  " stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><polyline fill="none" points="   653,155.999 649,155.999 649,141.999  " stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/><polyline fill="none" points="   661,156 653,162 653,156  " stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"/></g><path d="M29,3H3C2.448,3,2,3.448,2,4c0,0.552,0.448,1,1,1h25v16H15c-0.041,0-0.076,0.018-0.116,0.023  c-0.067,0.008-0.13,0.018-0.195,0.039c-0.068,0.022-0.127,0.053-0.187,0.089c-0.033,0.019-0.071,0.025-0.102,0.049L8,26v-4  c0,0,0,0,0,0s0,0,0,0c0-0.553-0.448-1-1-1H4V8c0-0.552-0.448-1-1-1S2,7.448,2,8V22c0,0.553,0.448,1,1,1h3v5  c0,0.379,0.214,0.725,0.553,0.895C6.694,28.965,6.848,29,7,29c0.212,0,0.423-0.067,0.6-0.2l7.733-5.8H29c0.553,0,1-0.447,1-1V4  C30,3.448,29.553,3,29,3z"/></svg>
<div id="comentar">
Comentar
</div>
<div id="comentarios">
<button id="closecomentarios"><svg id="closecomentariossvg" enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17.459,16.014l8.239-8.194c0.395-0.391,0.395-1.024,0-1.414c-0.394-0.391-1.034-0.391-1.428,0  l-8.232,8.187L7.73,6.284c-0.394-0.395-1.034-0.395-1.428,0c-0.394,0.396-0.394,1.037,0,1.432l8.302,8.303l-8.332,8.286  c-0.394,0.391-0.394,1.024,0,1.414c0.394,0.391,1.034,0.391,1.428,0l8.325-8.279l8.275,8.276c0.394,0.395,1.034,0.395,1.428,0  c0.394-0.396,0.394-1.037,0-1.432L17.459,16.014z" fill="#fff" id="Close"/><g/><g/><g/><g/><g/><g/></svg></button>

<div class="comentarios-div">
<input class="sobre" required placeholder="Comente sobre <?php echo $anime['nome']; ?> - <?php if($anime['tipo'] == 1){echo 'Episódio';}?> <?php echo $video['episodio']; ?>" name="comentop" maxlength="349">
</input>
</div>
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
$coments = DBRead( 'comentarios', "WHERE id and id_video = ".$video['id']." ORDER BY datec DESC LIMIT 12" );
if (!$coments)
echo '';	
else  
	foreach ($coments as $coment):	 
?>
<?php
$comentiduser = $coment['id_user'];
$peoples = DBRead( 'users', "WHERE id = $comentiduser ORDER BY id DESC LIMIT 1" );
if (!$peoples)
echo '';	
else  
	foreach ($peoples as $people):	 
?>
	<div id="todos-comentarios">
	<img id="comentarios-foto" src="http://localhost/img/users/avatar/<?php echo $people['photo']?>">
	<p id="nome-comentario"><?php echo $people['nome'];?> <?php echo $people['sobname'];?>- Comentou</p>
	<hr id="linha">
	<p id="conteudo-comentario"> 
	<?php
	include_once "defines.php";
	require_once('classes/BD.class.php');
	BD::conn();
	$comentario = array();
	
	$emotions = array(':)', ':@', '8)', ':D', ':3', ':(', ';)', ':O', ':o', ':P', ':p', '<3');
		$imgs = array(
			'<img id="emoticon" src="emotions/nice.png"/>',
			'<img id="emoticon" src="emotions/angry.png"/>',
			'<img id="emoticon" src="emotions/cool.png"/>',
			'<img id="emoticon" src="emotions/happy.png"/>',
			'<img id="emoticon" src="emotions/ooh.png"/>',
			'<img id="emoticon" src="emotions/sad.png"/>',
			'<img id="emoticon" src="emotions/right.png"/>',
			'<img id="emoticon" src="emotions/ooooh.png"/>',
			'<img id="emoticon" src="emotions/ooooh.png"/>',
			'<img id="emoticon" src="emotions/pi.png"/>',
			'<img id="emoticon" src="emotions/pi.png"/>',
			'<img id="emoticon" src="emotions/heart.png"/>'
		);
		$msg = str_replace($emotions, $imgs, $coment['texto']);
		$comentario[] = array(
				'id_user' => $_COOKIE['iduser'],
				'texto' => utf8_encode($msg),
				'id_video' => $video['id']
			);
			echo $msg;
?>	
	</p>
	</div>
<?php endforeach;endforeach;}?>
</div>
<?php
$usarioid = $_COOKIE['iduser'];
?>
<script>
var comentariosdiv = document.getElementById('comentarios');
var comentar = document.getElementById('comentar');
var closecomentarios = document.getElementById('closecomentarios');
var insercoment = document.getElementById('insercoment');
var idvideo = '<?php echo $video['id'];?>';
var idanime = '<?php echo $anime['id'];?>';
jQuery(function(){

jQuery('body').on('keyup', '.sobre', function(e){
			var texto = jQuery(this).val();
			if(e.which == 13){
			jQuery.ajax({
				type: 'POST',
				url: 'submit.php',
				data: {mensagem: texto, de: idvideo, iduser: '<?php echo $usarioid;?>'},
				success: function(retorno){
					if(retorno == 'ok'){
						jQuery('.sobre').val('');
					}else{
						alert("Erro ao publicar, tente novamante mais tarde!");
					}
				}
			});
			}
	});

			favoritewatch.addEventListener('click', function(e){
 				e.stopPropagation();
				comentariosdiv.style = 'display:block;';
				video.pause()
 			});
			
			closecomentarios.addEventListener('click', function(e){
 				e.stopPropagation();
				comentariosdiv.style = 'display:none;';
				video.play()
 			});
});
</script>

<script type="text/javascript" src="assets/js/mod_xhr.js"></script>

 	<script type="text/javascript">
</script>

<?php endforeach;}?>
</div>
<video id="playerwatchpri" width="100%" height="100%" autoplay preload="metadata" src="<?php echo $video['src'];?><?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	$userideq = $_COOKIE['iduser'];
	$animels = DBRead( 'videos', "WHERE id_anime = '{$anime['id']}' ORDER BY id DESC LIMIT 1" );
$resultsearchs = DBRead( 'history', "WHERE id and id_user = '".$userideq."' and id_video = '".$video['id']."' and perfil = '".$_COOKIE['perfil']."' ORDER BY id DESC" );
 if (!$resultsearchs)
 echo '';
else 
foreach ($resultsearchs as $resultsearch):
?>
<?php echo '#t=';?><?php echo $resultsearch['currenttime'];?>
<?php endforeach;}?>
"></video>
<div id="player">
<div class="info-video">
<div class="back"><a href="http://localhost/" id="voltar"><img id="watch-arrow-left-img" src="/img/icons/back-icon.png"></a></div>
<div class="aniflixbackplayer">
<p>Voltar a navegação</p>
</div>
<p id="anime-info">Você está assistindo à <?php echo $anime['nome'];?> - <?php  if($anime['tipo'] == 1){ echo 'Episodio';}?> <?php  if($anime['tipo'] == 2){ echo 'Filme';}?> <?php echo $video['episodio'];?></p>
</div>


<div id="shortbs">
<div id="defaultBar">
</div>
<div id="progressBar">
</div>
</div>

<div id="buttons">
<button id="buttonpp" style="display:none;"><svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M405.2,232.9L126.8,67.2c-3.4-2-6.9-3.2-10.9-3.2c-10.9,0-19.8,9-19.8,20H96v344h0.1c0,11,8.9,20,19.8,20  c4.1,0,7.5-1.4,11.2-3.4l278.1-165.5c6.6-5.5,10.8-13.8,10.8-23.1C416,246.7,411.8,238.5,405.2,232.9z"/></svg></button>
<button id="buttonpmp"><svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M224,435.8V76.1c0-6.7-5.4-12.1-12.2-12.1h-71.6c-6.8,0-12.2,5.4-12.2,12.1v359.7c0,6.7,5.4,12.2,12.2,12.2h71.6   C218.6,448,224,442.6,224,435.8z"/><path d="M371.8,64h-71.6c-6.7,0-12.2,5.4-12.2,12.1v359.7c0,6.7,5.4,12.2,12.2,12.2h71.6c6.7,0,12.2-5.4,12.2-12.2V76.1   C384,69.4,378.6,64,371.8,64z"/></g></svg></button>
<button id="fastFwd" onclick="skip(10);"><svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path class="st0" d="M436.3,96h-8.1c-6.7,0-12.2,5-12.2,11.7v113.5L228.9,98.7c-2.5-1.7-5.1-2.3-8.1-2.3c-8.3,0-15.4,7-15.4,17v63.1  L86.9,98.3c-2.5-1.7-5.1-2.3-8.1-2.3c-8.3,0-14.9,7.4-14.9,17.4v286c0,10,6.7,16.5,15,16.5c3.1,0,5.4-1.2,8.2-2.9l118.3-77.6v64  c0,10,7.2,16.5,15.5,16.5c3.1,0,5.5-1.2,8.2-2.9L416,290.8v113c0,6.7,5.4,12.2,12.2,12.2h8.1c6.7,0,11.7-5.5,11.7-12.2V107.7  C448,101,443.1,96,436.3,96z" fill="#FFF"/></svg></button>
<div id="hoverplay">
<p>Pular 10 segundos</p>
</div>
<button id="mute"><svg version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="miu" stroke="none" stroke-width="1"><g id="Artboard-1" transform="translate(-683.000000, -551.000000)"><g id="slice" transform="translate(215.000000, 119.000000)"/><path d="M687.125,559.8 L685.041667,559.8 C684,559.8 684,560.866667 684,560.866667 L684,565.133333 C684,565.133333 684,566.2 685.041667,566.2 L687.125,566.2 L695,571 L695,555 L687.125,559.8 Z M701.604021,555.269989 C703.691674,557.189086 705,559.942759 705,563.002007 C705,566.151387 703.613446,568.976921 701.417486,570.90146 L700.615994,570.271717 C702.685249,568.529054 704,565.919069 704,563.002007 C704,560.191061 702.779165,557.665257 700.838796,555.925896 L701.604021,555.269989 Z M699.146204,557.37669 C700.891101,558.844199 702,561.043605 702,563.502007 C702,565.813711 701.019495,567.896405 699.451677,569.356896 L698.654446,568.730501 C700.09362,567.448425 701,565.581064 701,563.502007 C701,561.291536 699.975416,559.320368 698.375249,558.037508 L699.146204,557.37669 Z M696.818718,559.371677 C698.135703,560.27218 699,561.78616 699,563.502007 C699,565.116879 698.234435,566.552944 697.04644,567.467067 L696.228376,566.824303 C697.29691,566.106184 698,564.886203 698,563.502007 C698,562.031868 697.206892,560.74697 696.0252,560.051836 L696.818718,559.371677 L696.818718,559.371677 Z" fill="#FFF" id="device-volume-loudspeaker-speaker-up-glyph"/></g></g></svg></button>
<div id="hovermute">
<p>Mutar som</p>
</div>
<button id="muted" style="display:none;"><svg version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="miu" stroke="none" stroke-width="1"><g id="Artboard-1" transform="translate(-755.000000, -551.000000)"><g id="slice" transform="translate(215.000000, 119.000000)"/><path d="M767,563.979053 L767,571 L759.125,566.2 L757.041667,566.2 C756,566.2 756,565.133333 756,565.133333 L756,560.866667 C756,560.866667 756,559.8 757.041667,559.8 L759.125,559.8 L759.850243,559.357947 L767,563.979053 L767,563.979053 Z M767,560.406982 L767,555 L762.694578,557.624257 L767,560.406982 L767,560.406982 Z M776.407665,566.487443 C776.791323,565.396835 777,564.223791 777,563.002007 C777,559.942759 775.691674,557.189086 773.604021,555.269989 L772.838796,555.925896 C774.779165,557.665257 776,560.191061 776,563.002007 C776,564.022717 775.839026,565.005829 775.541079,565.927342 L776.407665,566.487443 L776.407665,566.487443 Z M775.00889,569.155443 C774.545107,569.79564 774.010844,570.381441 773.417486,570.90146 L772.615994,570.271717 C773.196789,569.782589 773.718144,569.225133 774.167671,568.611738 L775.00889,569.155443 L775.00889,569.155443 Z M773.885657,564.857393 C773.96084,564.416836 774,563.963995 774,563.502007 C774,561.043605 772.891101,558.844199 771.146204,557.37669 L770.375249,558.037508 C771.975416,559.320368 773,561.291536 773,563.502007 C773,563.757715 772.986289,564.010221 772.959562,564.258829 L773.885657,564.857393 L773.885657,564.857393 Z M772.795819,567.725067 C772.420874,568.327158 771.968142,568.875786 771.451677,569.356896 L770.654446,568.730501 C771.159078,568.280953 771.598204,567.759446 771.955718,567.182085 L772.795819,567.725067 L772.795819,567.725067 Z M770.972509,562.974536 C770.815643,561.478385 769.998963,560.178682 768.818718,559.371677 L768.818718,559.371677 L768.0252,560.051836 C768.842774,560.532777 769.474341,561.296026 769.785928,562.207613 L770.972509,562.974536 L770.972509,562.974536 Z M770.275335,566.096002 C769.953336,566.625575 769.535714,567.090587 769.04644,567.467067 L768.228376,566.824303 C768.71821,566.495105 769.131248,566.060443 769.434962,565.552843 L770.275335,566.096002 L770.275335,566.096002 Z M757.961914,556.801514 L777.514404,569.675781 L778.060341,568.837955 L758.507851,555.963687 L757.961914,556.801514 Z" fill="#FFF" id="device-volume-loudspeaker-speaker-mute-glyph"/></g></g></svg></button>
<div id="hovermuted">
<p>Desmutar som</p>
</div>
<div id="timer"><div id="currtime">00:00</div><span></span><div id="durtime">00:00</div></div>
<button id="fullscreenico"><svg enable-background="new 0 0 32 32" id="????_1" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Fullscreen"><path d="M32,1c0-0.558-0.442-1-1-1l-8.985,0c-0.568,0-0.991,0.448-0.992,1.016C21.023,1.583,21.447,2,22.015,2L30,2   l-0.016,8.023c0,0.568,0.432,1,1,1c0.568-0.001,1-0.432,1-1L32,1.015c0-0.003-0.001-0.005-0.001-0.007C31.999,1.005,32,1.003,32,1z   " fill="#FFF"/><path d="M10.016,0H1.031C1.028,0,1.026,0.001,1.023,0.001C1.021,0.001,1.018,0,1.016,0c-0.558,0-1,0.442-1,1   L0,10.008C0,10.576,0.448,11,1.016,11C1.583,11,2,10.576,2,10.008L2.016,2h8c0.568,0,1-0.432,1-1C11.015,0.432,10.583,0,10.016,0z" fill="#FFF"/><path d="M9.985,30H2v-8c0-0.568-0.432-1-1-1c-0.568,0-1,0.432-1,1v8.985c0,0.003,0.001,0.005,0.001,0.007   C0.001,30.995,0,30.997,0,31c0,0.558,0.442,1,1,1h8.985c0.568,0,0.991-0.448,0.992-1.016C10.977,30.417,10.553,30,9.985,30z" fill="#FFF"/><path d="M30.984,21.023c-0.568,0-0.985,0.424-0.984,0.992V30l-8,0c-0.568,0-1,0.432-1,1c0,0.568,0.432,1,1,1   l8.985,0c0.003,0,0.005-0.001,0.007-0.001C30.995,31.998,30.997,32,31,32c0.558,0,1-0.442,1-1v-8.985   C32,21.447,31.552,21.023,30.984,21.023z" fill="#FFF"/></g><g/><g/><g/><g/><g/><g/></svg></button>
<div id="hoverfull">
<p>Tela cheia</p>
</div>

<button id="fullscreenedico" style="display:none;"><svg enable-background="new 0 0 32 32" id="????_1" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Fullscreen_Exit"><path d="M22.008,13.007h9C31.576,13.007,32,12.559,32,11.992c0-0.568-0.424-0.985-0.992-0.984h-8V2.992   c0-0.568-0.432-1-1-1c-0.568,0-1,0.432-1,1v9c0,0.003,0.001,0.005,0.001,0.007c0,0.003-0.001,0.005-0.001,0.008   C21.008,12.565,21.45,13.008,22.008,13.007z" fill="#FFF"/><path d="M9.984,2C9.417,2,9,2.425,9,2.992v8H0.985c-0.568,0-1,0.432-1,1c0,0.568,0.432,1,1,1h9   c0.003,0,0.005-0.001,0.007-0.001c0.003,0,0.005,0.001,0.008,0.001c0.558,0,1-0.442,1-1v-9C11,2.425,10.552,2.001,9.984,2z" fill="#FFF"/><path d="M9.992,18.992h-9C0.424,18.993,0,19.44,0,20.008c0,0.568,0.424,0.985,0.992,0.984h8v8.015   c0,0.568,0.432,1,1,1c0.568,0,1-0.432,1-1v-9c0-0.003-0.001-0.005-0.001-0.007c0-0.003,0.001-0.005,0.001-0.008   C10.992,19.434,10.55,18.992,9.992,18.992z" fill="#FFF"/><path d="M31.015,18.992h-9c-0.003,0-0.005,0.001-0.007,0.001c-0.003,0-0.005-0.001-0.008-0.001   c-0.558,0-1,0.442-1,1v9c0,0.568,0.448,0.991,1.016,0.992C22.583,29.985,23,29.56,23,28.993v-8h8.015c0.568,0,1-0.432,1-1   C32.015,19.425,31.583,18.993,31.015,18.992z" fill="#FFF"/></g><g/><g/><g/><g/><g/><g/></svg></button>

<button id="listep">
<svg id="listepsvg" enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M0,6c0,0.301,0.246,0.545,0.549,0.545h22.906C23.756,6.545,24,6.301,24,6V2.73c0-0.305-0.244-0.549-0.545-0.549H0.549  C0.246,2.182,0,2.426,0,2.73V6z M0,13.637c0,0.297,0.246,0.545,0.549,0.545h22.906c0.301,0,0.545-0.248,0.545-0.545v-3.273  c0-0.297-0.244-0.545-0.545-0.545H0.549C0.246,9.818,0,10.066,0,10.363V13.637z M0,21.27c0,0.305,0.246,0.549,0.549,0.549h22.906  c0.301,0,0.545-0.244,0.545-0.549V18c0-0.301-0.244-0.545-0.545-0.545H0.549C0.246,17.455,0,17.699,0,18V21.27z"/></svg>
</button>

<button id="idioma">
<svg height="48"fill="#fff" viewBox="0 0 48 48" width="2.5vw" height="2.5vw" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h48v48H0z" fill="none"/><path d="M40 8H8c-2.21 0-4 1.79-4 4v24c0 2.21 1.79 4 4 4h32c2.21 0 4-1.79 4-4V12c0-2.21-1.79-4-4-4zM8 24h8v4H8v-4zm20 12H8v-4h20v4zm12 0h-8v-4h8v4zm0-8H20v-4h20v4z"/></svg>
</button>
<div class="idioma">
<p><?php  if($video['sub'] == 1){ echo 'Legendado';}?> <?php  if($video['sub'] == 2){ echo 'Dublado';}?></p>
</div>

</div>


</div>


<script type="text/javascript">
document.getElementById("playerwatchpri").onclick = function() {vidplay()};
document.getElementById("buttonpp").onclick = function() {vidplay()};
document.getElementById("buttonpmp").onclick = function() {vidplay()};
document.getElementById("mute").onclick = function() {mute()};
document.getElementById("muted").onclick = function() {mute()};
document.getElementById("playerwatchpri").ondblclick = function() {goFullscreen()};
document.getElementById("fullscreenico").onclick = function() {goFullscreen()};
document.getElementById("fullscreenedico").onclick = function() {goFullscreen()};
document.getElementById("player").onmouseover = function() {showplayer()};
document.getElementById("playerwatchpri").onended = function() {redirectnext()};


var video = document.getElementById("playerwatchpri");
var listep = document.getElementById("listep");
var close = document.getElementById("close");
var episodeswatch = document.getElementById("episodeswatch");
var bar = document.getElementById("shortbs");
bar.addEventListener("click", seek);
var progressBar = document.getElementById("progressBar");



			listep.addEventListener('click', function(e){
 				e.stopPropagation();
 				episodeswatch.style = 'display:block;transition:display 1.25s; -webkit-transition:display 1.25s;';
				video.pause()
 			});
			close.addEventListener('click', function(e){
 				e.stopPropagation();
 				episodeswatch.style = 'display:none;transition:display 1.25s; -webkit-transition:display 1.25s;';
				video.play()
 			});

function seek(e) {
var percent = e.offsetX / this.offsetWidth;
video.currentTime = percent * video.duration;
progressBar.value = percent / 100;
}

video.addEventListener('progress', function() {
var bufferedEnd = video.buffered.end(video.buffered.length - 1);
var duration =  video.duration;
if (duration >= 0) {
      document.getElementById('defaultBar').style.width = ((bufferedEnd / duration)*100) + "%";
}
});

video.addEventListener('timeupdate', function() {
var duration =  video.duration;
if (duration > 0) {
	var bufferedEnd = video.buffered.end(video.buffered.length - 1);
document.getElementById('progressBar').style.width = ((video.currentTime / duration)*100) + "%";

var videotimer = document.getElementById('defaultBar').style.width = ((bufferedEnd / duration)*100) + "%";
video.ontimeupdate = function() {myFunction()};

function myFunction() {
// Display the current position of the video in a <p> element with id="demo"
    document.getElementById("currtime").innerHTML = video.currentTime;
}
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	$animels = DBRead( 'videos', "WHERE id_anime = '{$anime['id']}' ORDER BY id DESC LIMIT 1" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
	?>
		window.setInterval(function(){	
		xhr.get('historytime.php?timer='+videotimer+'&video=<?php echo $video['id'];?>&currenttime='+video.currentTime+'&profile=<?php echo $_COOKIE['perfil'];?>&anime=<?php echo $anime['id']; ?>', function(nots){
	 			});
 			}, 6000);
<?php endforeach;}?>
}
});	

	

if (video.paused) {
video.play();
document.getElementById("buttonpmp").style.display = "block";
document.getElementById("buttonpp").style.display = "none";	
} else {	
video.pause();
document.getElementById("buttonpp").style.display = "block";
document.getElementById("buttonpmp").style.display = "none";
}

function vidplay() {	
if (video.paused) {
video.play();
document.getElementById("buttonpmp").style.display = "block";
document.getElementById("buttonpp").style.display = "none";
} else {	
video.pause();
document.getElementById("buttonpp").style.display = "block";
document.getElementById("buttonpmp").style.display = "none";
}
}

function skip(value) {
var video = document.getElementById("playerwatchpri");
video.currentTime += value;
video.play();
}

function mute(){
if (video.muted) {
video.muted = false;
document.getElementById("mute").style.display = "block";
document.getElementById("muted").style.display = "none";
}else{
video.muted = true;
document.getElementById("muted").style.display = "block";
document.getElementById("mute").style.display = "none";	
}
}
	
function goFullscreen() {
if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.msRequestFullscreen) {
      document.documentElement.msRequestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
document.getElementById("normal").setAttribute("id","full");
document.getElementById("header").style.display = "none";
document.getElementById("inikopy").setAttribute("id","fullscreen");
document.getElementById("fullscreenedico").style.display = "block";
document.getElementById("fullscreenico").style.display = "none";
	} else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
document.getElementById("full").setAttribute("id","normal");
document.getElementById("header").style.display = "block";
document.getElementById("fullscreen").setAttribute("id","inikopy");
document.getElementById("fullscreenico").style.display = "block";
document.getElementById("fullscreenedico").style.display = "none";	
}
}

document.onkeyup = function(evt) {
evt = evt || window.event;
if (evt.keyCode == 27 || evt.keyCode == 122) {
if (document.exitFullscreen) {
document.exitFullscreen();
} else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
document.getElementById("full").setAttribute("id","normal");
document.getElementById("header").style.display = "block";
document.getElementById("fullscreen").setAttribute("id","inikopy");
document.getElementById("fullscreenico").style.display = "block";
document.getElementById("fullscreenedico").style.display = "none";	
}
}

document.getElementById("playerwatchpri").addEventListener('timeupdate', function() {
var video = document.getElementById("playerwatchpri");
	var nt = video.currentTime * (100 / video.duration);
	var curmins = Math.floor(video.currentTime / 60);
	var cursecs = Math.floor(video.currentTime - curmins * 60);
	var durmins = Math.floor(video.duration / 60);
	var dursecs = Math.floor(video.duration - durmins * 60);
	if(cursecs < 10){ cursecs = "0"+cursecs; }
	if(dursecs < 10){ dursecs = "0"+dursecs; }
	if(curmins < 10){ curmins = "0"+curmins; }
	if(durmins < 10){ durmins = "0"+durmins; }
	document.getElementById("currtime").innerHTML = curmins+":"+cursecs;
	document.getElementById("durtime").innerHTML = durmins+":"+dursecs;	
});

var timeout;
document.getElementById("playerwatchpri").onmousemove = function(){
  clearTimeout(timeout);
  timeout = setTimeout(function(){
document.getElementById("playerwatchpri").style.cursor = "none";	
document.getElementById("player").style.opacity = "0";
 document.getElementById("favoritewatch").style.opacity = "0";
  }, 2000);
document.getElementById("playerwatchpri").style.cursor = "auto";
document.getElementById("player").style.opacity = "1";	 	
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	echo 'document.getElementById("favoritewatch").style.opacity = "1";';
}
?>
}
function showplayer(){
document.getElementById("player").style.opacity = "1";	  	
<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	echo 'document.getElementById("favoritewatch").style.opacity = "0";';
}
?>
}
</script>


</body>
</html>