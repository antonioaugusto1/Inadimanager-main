<?php
function conecta_bd(){
    try{
        $conexao = new PDO("mysql:host=localhost;dbname=inadimanager", "root", "");
    }
    catch(PDOException $e){
        echo "Erro ao conectar com o MySQL: " . $e->getMessage();
        exit();
    }
    return $conexao;
}
?>