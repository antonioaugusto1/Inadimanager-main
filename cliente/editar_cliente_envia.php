<?php
require_once("../valida_session/valida_session.php");
require_once ("../bd/bd_cliente.php");
	     
$codigo = $_POST["cod"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$telefone = $_POST["telefone"];

$dados = editarCliente($codigo, $nome, $cpf, $email, $endereco, $numero, $bairro, $cidade, $telefone);

if ($dados == 1){
	$_SESSION['texto_sucesso'] = 'Os dados do cliente foram alterados no sistema.';
	header ("Location:cliente.php");
}else{
	$_SESSION['texto_erro'] = 'Os dados do cliente não foram alterados no sistema!';
	header ("Location:cliente.php");
}
		
?>