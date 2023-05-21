<?php 
require_once("conecta_bd.php");

function checaLogin($email, $senha){
    $conexao = conecta_bd();
    $senha = md5($senha);
    // $query = $conexao->prepare("SELECT * FROM $tipo WHERE email = ? AND senha = ?");
    $query = $conexao->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");  
    $query->bindParam(1, $email);
    $query->bindParam(2, $senha);
    $query->execute();
    $retorno = $query->fetch(PDO::FETCH_ASSOC);

    return $retorno;
}

function listaDados($tabela){
    $conexao = conecta_bd();
    $query = $conexao->prepare("select * from $tabela");
    $query->execute();
    $lista = $query->fetchAll(PDO::FETCH_ASSOC);
    return $lista;
}

?>