<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco_dados = 'u633496051_bd';

$conectar = @mysql_connect($servidor, $usuario, $senha) or die("Erro na conexãos");
$sql_banco = mysql_select_db($banco_dados, $conectar);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

    </head>
    <body>

    </body>
</html>