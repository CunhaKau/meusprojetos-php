<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'siteclientes';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/* TESTANDO se a conexão funcionava

if($conexao -> connect_errno)
{
 echo "Erro";
}
else
{
 echo "Conexão efetuada com sucesso";
}
*/

?>