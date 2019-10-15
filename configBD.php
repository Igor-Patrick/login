<?php
//configBD.php
//Variáveis
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "senai";

$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($connect->connect_error){
    die("Não foi possível conectar ao Banco de Dados: " .$connect->connect_error);
}
//echo "<h1>Sucesso, Banco de dados conectado</h1>";