<?php
require_once('conectar.php');

$tel = $_POST['telefone'];
$name = $_POST['nome'];
$sql= "insert into cadastro (nome, telefone) values ('$name', '$tel')";
mysqli_query($conexao,$sql) or die(mysqli_connect_error());
$ultimocod=mysqli_insert_id($conexao);
$msg= urlencode('Cadastro realizado!');
header("location: ./post-create.php?retorno=$msg");
?>   