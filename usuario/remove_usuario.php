<?php 
require_once("../valida_session/valida_session.php");
require_once("../bd/bd_usuario.php");

$codigo = $_GET['cod'];

// Verifica se o perfil que está sendo excluído é o mesmo do usuário logado
if ($codigo == $_SESSION['codigo_usuario']) {
    $_SESSION['texto_erro'] = 'Você não pode excluir o seu próprio perfil.';
    header("Location: usuario.php");
    exit(); // Encerra o script para evitar a execução da exclusão
}

$dados = removeUsuario($codigo);

if ($dados == 0) {
    $_SESSION['texto_erro'] = 'Os dados do usuário não foram excluídos do sistema!';
    header("Location: usuario.php");
} else {
    $_SESSION['texto_sucesso'] = 'Os dados do usuário foram excluídos do sistema.';
    header("Location: usuario.php");
}

?>