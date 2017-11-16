$li .= '<div id="infoanimediv">
<p id="animename">
<?php echo $resultsearch['nome'];?>
</p>
	<p id="animevoto">
	Pontuação : <?php echo $resultsearch['votacao'];?>
	</p>
<img id="backanimeimg" src="img/animes/<?php echo $resultsearch['fotoback'];?>">
<p id="sin">Sinopse</p>
<p id="descanime"><?php echo $resultsearch['desct'];?></p>
	<div id="backinfo">
	
	</div>
</div>
<div id="buttonsinfo">
	<button id="info">
Informação
</button>
<button id="animesep">
Episodios
</button>
</div>
<div id="epanimediv">
<p id="animevoto">
	Episodios de <?php echo $resultsearch['nome'];?>
	</p>
	<div class="ep-div-info">
	<div id="animesdivepnaruto">
			<?php
if(isset($_GET['animeshover'])){
$idwatch = $_GET['animeshover'];
$resultsearchs3 = DBRead( 'animes', "WHERE id LIMIT 1" );
 if (!$resultsearchs3)
 echo '';
else
foreach ($resultsearchs3 as $resultsearch3):
?>
		<?php
if(isset($_GET['animeshover'])){
$idwatch = $_GET['animeshover'];
$resultsearchs2 = DBRead( 'animes', "WHERE id = '{$idwatch}'  LIMIT 1" );
 if (!$resultsearchs2)
 echo '';
else
foreach ($resultsearchs2 as $resultsearch2):
?>
	<?php
if(isset($_GET['animeshover'])){
$idwatch = $_GET['animeshover'];
$animes = DBRead( 'animes', "WHERE id = '{$idwatch}'  LIMIT 10" );
$resultsearchs = DBRead( 'videos', "WHERE id_anime = '{$idwatch}'  LIMIT 10" );
 if (!$resultsearchs)
 echo '<div class="error-ep"><p>Nenhum episodio encontrado</p></div>
<div class="sugest">
<p id="recomendado">Animes recomendados</p>
<br>
<img id="foto-ep-info" src="img/animes/'.$resultsearch3["foto"].'">
<p id="info-video-ep">'.$resultsearch3["nome"].'</p>
</div>
';
else
foreach ($resultsearchs as $resultsearch):
?>
<a href="watch.php?id=<?php echo $resultsearch['id'];?>">
<img id="foto-ep-info" src="img/animes/<?php echo $resultsearch2['foto'];?>">
<p id="info-video-ep">Episodio <?php echo $resultsearch['episodio'];?></p>
</a>
<?php endforeach;}endforeach;}endforeach;}?>
</div>
<div id="leftepdestaque" style="position:absolute;top:1.5vw;">
<img class="arrowleft" src="img/icons/arrow_left.png">
</div>
<div id="rightepdestaque" style="position:absolute;top:1.5vw;">
<img class="arrowright"  src="img/icons/arrow_right.png">
</div>
	</p>
</div>
		<button id="closeinfo"><svg enable-background="new 0 0 32 32" height="32px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M17.459,16.014l8.239-8.194c0.395-0.391,0.395-1.024,0-1.414c-0.394-0.391-1.034-0.391-1.428,0  l-8.232,8.187L7.73,6.284c-0.394-0.395-1.034-0.395-1.428,0c-0.394,0.396-0.394,1.037,0,1.432l8.302,8.303l-8.332,8.286  c-0.394,0.391-0.394,1.024,0,1.414c0.394,0.391,1.034,0.391,1.428,0l8.325-8.279l8.275,8.276c0.394,0.395,1.034,0.395,1.428,0  c0.394-0.396,0.394-1.037,0-1.432L17.459,16.014z" fill="#fff" id="Close"/><g/><g/><g/><g/><g/><g/></svg></button>

<?php endforeach;}?>