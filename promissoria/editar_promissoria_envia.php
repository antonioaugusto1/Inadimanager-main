<?php
require_once("../valida_session/valida_session.php");
require_once ("../bd/bd_promissoria.php");

if (isset($_GET["cod"]) && isset($_GET["descricao"]) && isset($_GET["valor"]) && isset($_GET["data_vencimento"]) && isset($_GET["data_compra"]) && isset($_GET["cod_cliente"])) {
    $codigo = $_GET["cod"];
    $descricao = $_GET["descricao"];
    $valor = $_GET["valor"];
    $data_vencimento = $_GET["data_vencimento"];
    $data_compra = $_GET["data_compra"];
    $cod_cliente = $_GET["cod_cliente"];

    $data = date("Y-m-d");

    $dados = editarPromissoria($codigo, $valor, $descricao, $data_compra, $data_vencimento, $cod_cliente);

    if ($dados == 1){
        $_SESSION['texto_sucesso'] = 'Os dados da promissória foram alterados no sistema.';
        header ("Location: promissoria.php");
    } else {
        $_SESSION['texto_erro'] = 'Os dados da promissória não foram alterados no sistema!';
        header ("Location: promissoria.php");
    }
} else {
    $_SESSION['texto_erro'] = 'Por favor, preencha todos os campos!';
    header ("Location: promissoria.php");
}

?>