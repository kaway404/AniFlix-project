<?php
	if(isset($_POST['mensagem'])){
		include_once "/defines.php";
		require_once('/classes/BD.class.php');
		BD::conn();

		$mensagem = utf8_decode( strip_tags(trim(filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING))) );
		$de = (int)$_POST['de'];
		$para = (int)$_POST['iduser'];

		if($mensagem != ''){
			$insert = BD::conn()->prepare("INSERT INTO `ani_comentarios` (id_video, id_user, texto, datec) VALUES (?,?,?,?)");
			$arrayInsert = array($de, $para, $mensagem, time());
			if($insert->execute($arrayInsert)){
				echo 'ok';
			}else{
				echo 'no';
			}
		}
	}
?>