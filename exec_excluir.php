<?php
require_once('conectar.php');

$telefone = $_POST['tel'];

$sql="delete from cadastro where telefone='$telefone'";
mysqli_query($conexao,$sql) or die (mysqli_connect_error());
$msg=urlencode('Participante excluído com sucesso!');
header ("location: ./post-delete.php?retorno=$msg");
?>