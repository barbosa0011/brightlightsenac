<?php

function inserir($conexao,$nome,$marca,$preco){
	$sql="insert into  produtos(nome, marca, preco) values('$nome','$marca',$preco);";
	return mysqli_query($conexao,$sql);
	
}
function alterar($conexao,$idCliente,$nome,$email,$idade){
	$sql = "update rodutos set nome='$nome',marca='$preco',idade=$idade where idProdutos=$idProduto";
	return mysqli_query($conexao,$sql);
}

function excluir($conexao,$idCliente){
	$sql = "delete from Produtos where idProdutos = $idProduto";
	return mysqli_query($conexao,$sql);
}

function listarProdutos($conexao){
	$Produtos = array();
	$sql = "select * from Produtos";
	$resultado =  mysqli_query($conexao,$sql);
	
	while($Produto=mysqli_fetch_assoc($resultado)){
		array_push($Produtos,$Produto);
	}
	return $Produtos;
}


function buscarProduto($conexao,$idProduto){
	$sql = "select * from Produtos where idProdutos = $idProduto";
	$resultado = mysqli_query($conexao,$sql);
	return mysqli_fetch_assoc($resultado);
}
?>