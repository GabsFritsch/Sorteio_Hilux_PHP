<?php
require_once('conectar.php');
$telant = $_POST['tel_ant'];
$telnovo = $_POST['tel_novo'];
$sql="update cadastro set telefone='$telnovo' where (telefone = '$telant') ";
mysqli_query($conexao,$sql) or die(mysqli_connect_error());
$msg=urlencode('Cadastro atualizado com sucesso');
header ("location: ./post-edit.php?retorno=$msg");
?>