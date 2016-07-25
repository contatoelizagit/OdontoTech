<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8"> </head>

    <body> </body>

</html>

<?php
session_start();
$usuariot = $_POST['login'];
$senhat = $_POST['senha'];

include_once './conexao.php';

$result = mysql_query("SELECT * FROM pessoa WHERE login = '$usuariot' AND senha = '$senhat' LIMIT 1");
$resultado = mysql_fetch_assoc($result);

echo $resultado['nome'];
?>