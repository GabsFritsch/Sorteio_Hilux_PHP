<?php
$ip='localhost';
$user='root';
$password='root';
$bd='toyota';
$conexao = mysqli_connect($ip, $user, $password, $bd);

if (!$conexao)
{
    die("Falha na conexão");
}

?>