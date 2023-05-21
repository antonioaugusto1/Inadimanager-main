
<?php
session_start();
 
//Caso o usu�rio n�o esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['cod_usu'])) {

    //Limpa sess�o
    unset ($_SESSION['cod_usu']);
    unset ($_SESSION['nome_usu']);
	
	//Destr�i sess�o
    session_destroy();
 
    //Redireciona para a p�gina de autentica��o
    header ("Location:../index.php");
	die();
}


?>