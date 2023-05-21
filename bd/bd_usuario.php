<?php
require_once("conecta_bd.php");

function buscaUsuario($email) {
    $conexao = conecta_bd();
    $query = $conexao->prepare("SELECT * FROM usuario WHERE email = ?");
    $query->bindParam(1, $email);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);

    return $resultado;
}

function cadastraUsuario($nome, $senha, $email) {
    $conexao = conecta_bd();
    $query = $conexao->prepare("INSERT INTO usuario (nome, senha, email) VALUES (?, ?, ?)");
    $query->bindParam(1, $nome);
    $query->bindParam(2, $senha);
    $query->bindParam(3, $email);
    $resultado = $query->execute();

    if ($resultado) {
        return 1;
    } else {
        return 0;
    }
}
function buscaUsuarioeditar($codigo) {
    $conexao = conecta_bd();
    $query = $conexao->prepare("SELECT nome, email FROM usuario WHERE cod = ?");
    $query->bindParam(1, $codigo);
    $query->execute();
    $dados = $query->fetch(PDO::FETCH_ASSOC);
    return $dados;
}
function editarUsuario($codigo, $nome, $email, $senha) {
    $conexao = conecta_bd();

    $sql = "UPDATE usuario SET nome = ?, email = ?, senha = ? WHERE cod = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $senha);
    $stmt->bindParam(4, $codigo);

    $result = $stmt->execute();

    $stmt->closeCursor();
    $conexao = null;

    return $result ? 1 : 0;
}
function removeUsuario($codigo) {
    $conexao = conecta_bd();

    $sql = "DELETE FROM usuario WHERE cod = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(1, $codigo);

    $result = $stmt->execute();

    $conexao = null;

    return $result ? 1 : 0;
}
?>