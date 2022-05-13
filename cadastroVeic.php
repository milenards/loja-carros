<?php
$conexao = mysqli_connect ("localhost", "root","","carros");

$nome =$_POST['nome'];
$marca =$_POST['marca'];
$ano = $_POST['ano'];
$valor = $_POST['valor'];
$observacoes = $_POST['observacoes'];


$sql_inserir = "insert into cadastroveic (nome, marca , ano , valor, observacoes) values ('{$nome}', {$marca}, '{$ano}', '{$valor}','{$observacoes}')";

echo $sql_inserir;
mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);
?>