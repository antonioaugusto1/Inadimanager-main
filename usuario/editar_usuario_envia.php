<?php
require_once("../valida_session/valida_session.php");
require_once ("../bd/bd_usuario.php");
	     
$codigo = $_POST["cod"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = isset($_POST["senha"]) ? $_POST["senha"] : null; 

$dados = editarUsuario($codigo,$nome,$email,$senha);
if ($dados == 1){
	$_SESSION['texto_sucesso'] = 'Os dados do usuário foram alterados no sistema.';
	header ("Location:usuario.php");
}else{
	$_SESSION['texto_erro'] = 'Os dados do usuário não foram alterados no sistema!';
	header ("Location:usuario.php");
}

		
?>