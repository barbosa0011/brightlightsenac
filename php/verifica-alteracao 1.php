<?php
include("conexao.php");
include("banco-Produto.php");

$idProduto = $_POST['idProduto'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$preco = $_POST['preco'];

if(alterar($conexao,$idProduto,$nome,$marca,$preco)){
	header('location:lista-produtos.php');
}
?>