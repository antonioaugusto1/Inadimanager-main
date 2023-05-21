<?php
session_start();
require_once("../bd/bd_generico.php");

if ((empty($_POST['email'])) OR (empty($_POST['senha']))){
    header("Location: ../index.php"); 
}
else{
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	require_once ("../bd/bd_usuario.php");
	$dados = checaLogin($email,$senha);
	if($dados == "") {
		$_SESSION['texto_erro_login'] = 'Email, Senha ou Perfil Inválido!';
	    header("Location:../index.php");
	}

	if($dados != "") {		
	    // Salva os dados encontrados na sessão
	    $_SESSION['cod_usu'] = $dados['cod'];
		$_SESSION['nome_usu'] = $dados['nome'];
	    header("Location:../home/home.php");
	}
	die();
}


?>