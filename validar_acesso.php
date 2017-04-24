<?php

session_start();

require_once('db.class.php');

$usuario = preg_replace('/[^[:alpha:]_]/', '', $_POST['usuario']);
$senha = $_POST['senha'];


$senha_codificada = sha1($senha);

$sql = " SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha_codificada'";

$objdb = new db();
$link = $objdb->conecta_pg();


$resultado_id = pg_query($link, $sql);

if ($resultado_id) {

    $dados_usuario = pg_fetch_array($resultado_id);


    if (isset($dados_usuario['usuario'])){
        header('Location: /projetoSIEMs/home/homepage.html');

        $_SESSION['usuario'] = $dados_usuario['usuario'];
        $_SESSION['email'] = $dados_usuario['email'];
    }
    else {
        header('Location: index.php?erro=1');
    }
}

else {
    echo "Erro na execução da consulta, favor entrar em contato com o administrador do banco!";
}




//update retorna ->true/false
//insert retorna ->true/false
//select retorna ->fa
//delete retorna ->true/false

?>