<?php 
require 'static/php/system/database.php';
require 'static/php/system/config.php';
	?>
	<?php
	if(isset($_GET['info'])){
	$GET = strip_tags(trim($_GET['info']));
	$GET = strip_tags(trim($_GET['info']));
$animels2 = DBRead( 'animes', "WHERE id = ".$GET." ORDER BY id ASC LIMIT 15" );
 if (!$animels2)
	echo "";
else 
	foreach ($animels2 as $animel):
 ?>
	<?php
$idanime = $_GET['info'];
$animels2 = DBRead( 'animes', "WHERE id = ".$GET." ORDER BY id ASC LIMIT 15" );
 if (!$animels2)
	echo "";
else 
	foreach ($animels2 as $animel):
 ?>
 <div id="tudo-info">
 <div id="infoanimediv">
 <p id="animename">
<?php echo $animel['nome'];?>
</p>
	<p id="animevoto">
	Pontuação : <?php echo $animel['votacao'];?>
	</p>
<img id="backanimeimg" src="http://localhost/img/animes/<?php echo $animel['fotoback'];?>">
<p id="sin">Sinopse</p>
<p id="descanime"><?php
	$str2 = nl2br( $animel['desct'] );
	$len2 = strlen( $str2 );
	$max2 = 300;
   if( $len2 <= $max2 )
   echo $str2;
	else    
   echo substr( $str2, 0, $max2 ) . '...'?></p>
	<div id="backinfo">
	
	</div>
	<?php
if(isset($_GET['info'])){
$idwatch = $_GET['info'];
$animes = DBRead( 'animes', "WHERE id = '{$idwatch}'  LIMIT 1" );
$resultsearchs = DBRead( 'videos', "WHERE id_anime = '{$idwatch}'  LIMIT 1" );
 if (!$resultsearchs)
 echo '';
else
foreach ($resultsearchs as $resultsearch):
?>
	<style>
	#assistir<?php echo $animel['id'];?>{
		border:none;
		background-color:transparent;
		border:0.1vw solid #ff0000;
		border-radius:5vw;
		height:5vw;
		width:5vw;
		position:absolute;
		bottom:11vw;
		left:74vw;
		z-index:65665234234121;
		background-color:rgba(0,0,0,0.40);
		opacity:0.4;
		cursor:pointer;
		transition:opacity 1.25s; -webkit-transition:opacity 1.25s;
	}
	#svg{
		position:absolute;
		left:-11vw;
		bottom:-0.1vw;
		fill:#ff0000;
		opacity:0.4;
	}
	#assistir<?php echo $animel['id'];?>:hover{
		opacity:1;
		transition:opacity 1.25s; -webkit-transition:opacity 1.25s;
	}
	</style>
<?php endforeach;}?>
</div>
<div id="buttonsinfo">
	<button id="info">
Informação
</button>
<button id="animesep" name="ep">
Episodios
</button>

	<script type="text/javascript">
	var epanimediv = document.getElementById('animesep');
	var info = document.getElementById('info');
	var episodiosdiv = document.getElementById('epanimediv');
	var infodiv = document.getElementById('infoanimediv');
		$('#animesep').click(function(){
		epanimediv.style = 'color:#1f3c80;color 1.25s; -webkit-transition:color 1.25s;';
		info.style = 'color:#fff;color 1.25s; -webkit-transition:color 1.25s;';
		infodiv.style = 'opacity:0;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
		episodiosdiv.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
    });
	$('#info').click(function(){
		epanimediv.style = 'color:#fff;color 1.25s; -webkit-transition:color 1.25s;';
		info.style = 'color:#1f3c80;color 1.25s; -webkit-transition:color 1.25s;';
		infodiv.style = 'opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
		episodiosdiv.style = 'opacity:0;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;';
    });
		</script>
</div>
<div id="epanimediv">
<p id="animevoto">
	<?php  if($animel['tipo'] == 1){ echo 'Episodios';}?> <?php  if($animel['tipo'] == 2){ echo 'Filmes';}?> de <?php echo $animel['nome'];?>
	</p>
	<div class="ep-div-info">
	<div id="animesdivepnaruto">
			<?php
if(isset($_GET['info'])){
$idwatch = $_GET['info'];
$resultsearchs3 = DBRead( 'animes', "WHERE id LIMIT 1" );
 if (!$resultsearchs3)
 echo '';
else
foreach ($resultsearchs3 as $resultsearch3):
?>
		<?php
if(isset($_GET['info'])){
$idwatch = $_GET['info'];
$resultsearchs2 = DBRead( 'animes', "WHERE id = '{$idwatch}'  LIMIT 1" );
 if (!$resultsearchs2)
 echo '';
else
foreach ($resultsearchs2 as $resultsearch2):
?>
	<?php
if(isset($_GET['info'])){
$idwatch = $_GET['info'];
$animes = DBRead( 'animes', "WHERE id = '{$idwatch}'  LIMIT 10" );
$resultsearchs = DBRead( 'videos', "WHERE id_anime = '{$idwatch}'  LIMIT 10" );
 if (!$resultsearchs)
 echo '';
else
foreach ($resultsearchs as $resultsearch):
?>
<a href="watch.php?id=<?php echo $resultsearch['id'];?>">

<style>
#foto-ep-info<?php echo $resultsearch2['id'];?>{
background-image:url("http://localhost/img/animes/<?php echo $resultsearch2['foto'];?>");
width:12vw;
  height:8vw;
  display:inline-block;
  margin:0.1vw;
  background-color:#f3f3f3;
  position:relative;
  top:1.5vw;
  left:3vw;
  float:left;
  z-index:1;
  cursor:pointer;
  float:left;
  margin-left:1vw;
  background-size:cover;
	backgrond-repeat:no-repeat;
  }
#foto-ep-info<?php echo $resultsearch2['id'];?>:hover{transform: translate3d(-20px, 0px, 0px);transition-duration:800ms;transition-timing-function:cubic-bezier(0.5, 0, 0.1 , 1);transition-delay:800ms; -webkit-transform: scale(1.35);
		   transform: scale(1.35);
		   opacity: 1;-webkit-transition: all 2.7s ease;
		   transition: all 2.7s ease;z-index:2023215124124;border-radius:0.4vw;}
</style>

<div id="foto-ep-info<?php echo $resultsearch2['id'];?>">
<p style="color:#fff;background-color:rgba(0,0,0,0.50);font-size:1.4vw;width:auto;"><?php echo $resultsearch['episodio'];?></p>
</div>


</a>
<?php endforeach;}endforeach;}endforeach;}?>
</div>
<div id="leftepdestaque" style="position:absolute;top:1.5vw;">
<img class="arrowleft" src="http://localhost/img/icons/arrow_left.png">
</div>
<div id="rightepdestaque" style="position:absolute;top:2.0vw;">
<img class="arrowright"  src="http://localhost/img/icons/arrow_right.png">
</div>
<script>
var scroll = document.getElementById('animesdivepnaruto');
var left = document.getElementById('leftepdestaque');
var right = document.getElementById('animesdivepnaruto');
				$('#leftepdestaque').click(function(){
				 var currentLeft = parseInt($('#animesdivepnaruto').css('left'));
				$('#animesdivepnaruto').css('left', (currentLeft + 300) + '');
    });
				$('#rightepdestaque').click(function(){
				 var currentLeft = parseInt($('#animesdivepnaruto').css('left'));
				$('#animesdivepnaruto').css('left', (currentLeft - 300) + '');
    });
</script>
	</p>
</div>
 	<?php endforeach;?>
	<?php endforeach;}?>
	
<?php
if(isset($_GET['animeinfo'])){
$idwatch = $_GET['animeinfo'];
$resultsearchs3 = DBRead( 'animes', "WHERE id LIMIT 1" );
 if (!$resultsearchs3)
 echo '';
else
foreach ($resultsearchs3 as $resultsearch3):
?>
<div id="left-destaque">
<img class="arrowleft" src="http://localhost/img/icons/arrow_left.png">
</div>
<div id="right2">
<img class="arrowright" src="http://localhost/img/icons/arrow_right.png"/>
</div>	
<script>
				var right2 = document.getElementById('right2');
				var left = document.getElementById('left-destaque');
			right2.addEventListener('click', function(e){
 				e.stopPropagation();
				 var currentLeft = parseInt($('#scrollanime').css('left'));
				$('#scrollanime').css('left', (currentLeft - 300) + '');
				});	
			left.addEventListener('click', function(e){
 				e.stopPropagation();
				var currentLeft = parseInt($('#scrollanime').css('left'));
				$('#scrollanime').css('left', (currentLeft + 300) + '');
				});	
				document.addEventListener('click', function(){
					dp.style = 'opacity:0;opacity 1.25s; -webkit-transition:opacity 1.25s;width:1vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
					icon_not.style = 'opacity:1;';
				});
		
</script>
<p class="lan">Lançamento</p>
<div id="scrollanime">
<?php
$animels2 = DBRead( 'animes', "WHERE id ORDER BY id DESC LIMIT 200" );
 if (!$animels2)
	echo "";
else 
	foreach ($animels2 as $animel):
?>
<style>
#animesnow2<?php echo $animel['id'];?>{
	background-image:url("http://localhost/img/animes/<?php echo $animel['foto'];?>");
	background-size:cover;
	backgrond-repeat:no-repeat;
	width:12.5vw;
  height:8vw;
  display:inline-block;
  margin:0.1vw;
  background-color:#000;
  position:relative;
  top:1.5vw;
  left:3vw;
  float:left;
  z-index:1;
  cursor:pointer;
  opacity:0.8;
  margin-left:0.5vw;
  }
#animesnow2<?php echo $animel['id'];?>:hover{transform: translate3d(-20px, 0px, 0px);transition-duration:400ms;transition-timing-function:cubic-bezier(0.5, 0, 0.1 , 1);transition-delay:400ms;box-shadow:0.2vw 0.2vw 0.2vw rgba(0, 0, 0, 0.40); -webkit-transform: scale(1.35);
		   transform: scale(1.35);
		   opacity: 1;-webkit-transition: all 1s ease;
		   transition: all 1.7s ease;z-index:2023215124124;border-radius:0.4vw;}

#animesnowterror<?php echo $animel['id'];?>{width:12.5vw;
  height:8vw;
  display:inline-block;
  margin:0.1vw;
  background-color:#000;
  position:relative;
  top:1.5vw;
  left:3vw;
  float:left;
  z-index:1;
  cursor:pointer;}
#animesnowterror<?php echo $animel['id'];?>:hover{transform: translate3d(-20px, 0px, 0px);transition-duration:400ms;transition-timing-function:cubic-bezier(0.5, 0, 0.1 , 1);transition-delay:400ms;width: 13vw; height:9vw;box-shadow:0.4vw 0.4vw 0.4vw rgba(0, 0, 0, 0.80);}
#animesinfo{height:28vw;width:100%;position:relative;bottom:5.3vw;display:none;background-color:#000;margin-top:-0.9vw;z-index:1;    -webkit-transition: 300ms ease-in-out;
    -moz-transition: 300ms ease-in-out;
    -o-transition: 300ms ease-in-out;
    transition: 300ms ease-in-out;}
#animesinfo2{height: 22vw;
    width: 100%;
    position: relative;
    bottom: -2.5vw;
    display: none;
    background-color: #000;
    margin-top: -0.9vw;
    z-index: 1;
    -webkit-transition: 300ms cubic-bezier(0.42, 0, 0, 0.55);
    -moz-transition: 300ms ease-in-out;
    -o-transition: 300ms ease-in-out;
    transition: 300ms ease-in-out;}
</style>
<div id="animesnow2<?php echo $animel['id'];?>">
<p id="eoq-nome-anime" style="color:#fff;background-color:rgba(0,0,0,0.50);font-size:1.1vw;width:auto;opacity:1;"><?php
	$str2 = nl2br( $animel['nome'] );
	$len2 = strlen( $str2 );
	$max2 = 18;
   if( $len2 <= $max2 )
   echo $str2;
	else    
   echo substr( $str2, 0, $max2 ) . '...'?></p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $('#animesnow2<?php echo $animel['id']; ?>').click(function(){
	  $("#animesinfo").fadeIn(600);
				$("#animesinfo2").fadeOut(1500);
				closeinfo.style = 'display:block;';
				closeinfo2.style = 'display:none;';
				var i = setInterval(function () {
				clearInterval(i);

				// O código desejado é apenas isto:
				document.getElementById("loadingsvg2").style = "display:none;";
				document.getElementById("animesinfo").style = "opacity:1;transition:opacity 1.25s; -webkit-transition:opacity 1.25s;";
				$("#animesinfo").fadeIn(200);
				}, 1300);
				$.post('request.php?info=<?php echo $animel['id'];?>', function (html) {
				$('#animesinfo').html(html);
				});
    });
</script>



	<?php endforeach;?>
	</div>

<?php endforeach;}?>












































<?php
if(isset($_COOKIE['perfil'])){
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
$userideq = $_COOKIE['iduser'];
$profileid = $_COOKIE['perfil'];
if(isset($_GET['animeinfo2'])){
$idwatch = $_GET['animeinfo2'];
$resultsearchs3 = DBRead( 'animes', "WHERE id LIMIT 1" );
 if (!$resultsearchs3)
 echo '';
else
foreach ($resultsearchs3 as $resultsearch3):
?>
<?php
$infoprofile = DBRead( 'perfil', "WHERE id_user = '".$userideq."' and id = '".$profileid."' ORDER BY id DESC LIMIT 1" );
 if (!$infoprofile)
 echo '';
else 
	foreach ($infoprofile as $infoprofiles):
?>
<?php
$userideq = $_COOKIE['iduser'];
$profileid = $_COOKIE['perfil'];
$resultsearchs = DBRead( 'history', "WHERE id and id_user = '".$userideq."' and perfil = '".$_COOKIE['perfil']."' ORDER BY id DESC LIMIT 1" );
 if (!$resultsearchs)
 echo '';
else 
foreach ($resultsearchs as $resultsearch):
?>
<div id="left-destaque2">
<img class="arrowleft" src="http://localhost/img/icons/arrow_left.png">
</div>
<div id="right22">
<img class="arrowright" src="http://localhost/img/icons/arrow_right.png"/>
</div>	
<script>
				var right22 = document.getElementById('right22');
				var left2 = document.getElementById('left-destaque2');
			right22.addEventListener('click', function(e){
 				e.stopPropagation();
				 var currentLeft = parseInt($('#scrollanime2').css('left'));
				$('#scrollanime2').css('left', (currentLeft - 300) + '');
				});	
			left2.addEventListener('click', function(e){
 				e.stopPropagation();
				var currentLeft = parseInt($('#scrollanime2').css('left'));
				$('#scrollanime2').css('left', (currentLeft + 300) + '');
				});	
				document.addEventListener('click', function(){
					dp.style = 'opacity:0;opacity 1.25s; -webkit-transition:opacity 1.25s;width:1vw;transition:width 1.25s; -webkit-transition:width 1.25s;';
					icon_not.style = 'opacity:1;';
				});
		
</script>
<p class="lan">Continuar assistindo como <?php echo $infoprofiles['nome']?></p>
<div id="scrollanime2">
<?php 
$userideq = $_COOKIE['iduser'];
$profileid = $_COOKIE['perfil'];
$resultsearchs = DBRead( 'history', "WHERE id and id_user = '".$userideq."' and perfil = '".$_COOKIE['perfil']."' ORDER BY id DESC LIMIT 1000" );
 if (!$resultsearchs)
 echo '';
else 
foreach ($resultsearchs as $resultsearch):
$idvideo = $resultsearch['id_video'];
$idtimervideo = $resultsearch['time_video'];
$idanime = $resultsearch['id_anime'];
$animels = DBRead( 'animes', "WHERE id = '".$idanime."' ORDER BY id DESC LIMIT 1000" );
 if (!$animels)
 echo '';
else 
	foreach ($animels as $animel):
$videoinfos = DBRead( 'videos', "WHERE id = '".$idvideo."' ORDER BY id DESC LIMIT 1000" );
 if (!$videoinfos)
 echo '';
else 
	foreach ($videoinfos as $videoinfo):
?>
<style>
#animesnow2history<?php echo $animel['id'];?>{ 
background-size:cover;
	backgrond-repeat:no-repeat;
	background-image:url("http://localhost/img/animes/<?php echo $animel['foto'];?>");
	width: 12.5vw;
    height: 8vw;
    display: inline-block;
    margin: 0.1vw;
    background-color: #000;
    position: relative;
    top: 1.5vw;
    left: 15vw;
    float: left;
    z-index: 1;
    cursor: pointer;
    margin-left: -11.5vw;
  }
#animesnow2history<?php echo $animel['id'];?>:hover{transform: translate3d(-20px, 0px, 0px);transition-duration:400ms;transition-timing-function:cubic-bezier(0.5, 0, 0.1 , 1);transition-delay:400ms;box-shadow:0.2vw 0.2vw 0.2vw rgba(0, 0, 0, 0.40); -webkit-transform: scale(1.35);
		   transform: scale(1.35);
		   opacity: 1;-webkit-transition: all 1s ease;
		   transition: all 1.7s ease;z-index:2023215124124;border-radius:0.4vw;}
#animesinfo{height:28vw;width:100%;position:relative;bottom:5.3vw;display:none;background-color:#000;margin-top:-0.9vw;z-index:1;    -webkit-transition: 300ms ease-in-out;
    -moz-transition: 300ms ease-in-out;
    -o-transition: 300ms ease-in-out;
    transition: 300ms ease-in-out;}
#animesinfo2{height: 22vw;
    width: 100%;
    position: relative;
    bottom: -2.5vw;
    display: none;
    background-color: #000;
    margin-top: -0.9vw;
    z-index: 1;
    -webkit-transition: 300ms cubic-bezier(0.42, 0, 0, 0.55);
    -moz-transition: 300ms ease-in-out;
    -o-transition: 300ms ease-in-out;
    transition: 300ms ease-in-out;}
</style>
<a href="http://localhost/watch.php?id=<?php echo $videoinfo['id'];?>">

<div id="animesnow2history<?php echo $animel['id'];?>">

<p style="color:#fff;background-color:rgba(0,0,0,0.50);font-size:1.4vw;width:auto;"><?php echo $videoinfo['episodio'];?></p>

</div>


</a>
<div class="timeridanime<?php $resultsearch['id_anime'];?>" style="background-color: #010101; width: 12.3vw; height: 0.5vw; top: 10vw; position: relative;  border-radius: 0.5vw;  float: left;  left: 2.5vw;">
<div class="timeridanimeido<?php echo $resultsearch['id_anime'];?>" style="background-color:#ff020c;width:<?php echo $resultsearch['time_video'];?>;height:0.5vw;top:0vw;position:absolute;left:0vw;border-radius:0.5vw;float:left;">
</div>
</div>



	<?php endforeach;endforeach;endforeach;endforeach;endforeach;?>
	</div>

<?php endforeach;}}}?>


















<?php
if(isset($_GET['getcomment'])){
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession']))){
	$animels2 = DBRead( 'users', "WHERE id ORDER BY id DESC LIMIT 10" );
 if (!$animels2)
	echo "";
else 
	foreach ($animels2 as $animel2):
	?>
<?php
$id = DBEscape( strip_tags(trim($_GET['eoq']) ) );
$video = DBRead('videos', "WHERE id = '{$id}' LIMIT 1 ");
$videoids = $video['id'];
	$animels = DBRead( 'comentarios', "WHERE id and id_video = $videoids ORDER BY id DESC LIMIT 10" );
 if (!$animels)
	echo "";
else 
	foreach ($animels as $animel):
	?>
<img id="comentarios-foto" src="http://localhost/img/users/avatar/<?php echo $animel2['photo']?>">
	<p id="nome-comentario"><?php echo $animel2['nome'];?> <?php echo $animel2['sobname'];?>- Comentou</p>
	<hr id="linha">
	<p id="conteudo-comentario"> 
	<?php
	include_once "defines.php";
	require_once('/classes/BD.class.php');
	BD::conn();
	$comentario = array();
	
	$emotions = array(':)', ':@', '8)', ':D', ':3', ':(', ';)', '.-.', 'gif');
		$imgs = array(
			'<img id="emoticon" src="emotions/nice.png"/>',
			'<img id="emoticon" src="emotions/angry.png"/>',
			'<img id="emoticon" src="emotions/cool.png"/>',
			'<img id="emoticon" src="emotions/happy.png"/>',
			'<img id="emoticon" src="emotions/ooh.png"/>',
			'<img id="emoticon" src="emotions/sad.png"/>',
			'<img id="emoticon" src="emotions/right.png"/>',
			'<img id="emoticon" src="emotions/show.png"/>',
			'<img id="emoticon" src="emotions/gif.gif"/>'
		);
		$msg = str_replace($emotions, $imgs, $animel['texto']);
		$comentario[] = array(
				'id_user' => $_COOKIE['iduser'],
				'texto' => utf8_encode($msg),
				'id_video' => $video['id']
			);
			echo $msg;
?>	
	</p>
	</div>
<?php endforeach;endforeach;}}?>
 