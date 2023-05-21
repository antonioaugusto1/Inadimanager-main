<?php 
	require_once("../valida_session/valida_session.php");
	require_once ("../bd/bd_promissoria.php");

	$codigo = $_GET['cod'];

	$dados = removerPromissora($codigo);

	if($dados == 0){
		$_SESSION['texto_erro'] = 'Os dados da promissoria não foram excluidos do sistema!';
		header ("Location:promissoria.php");
	}else{
		$_SESSION['texto_sucesso'] = 'Os dados da promissoria foram excluidos do sistema.';
		header ("Location:promissoria.php");
	}

?>