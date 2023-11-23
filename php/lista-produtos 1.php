<?php
//salva o arquivo como "lista-produto" (sem aspas);
include("conexao.php");
include("banco-produto.php");
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Lista de Produtos</title>
	</head>
	<body>
		<h1>Produtos Cadastrados</h1>
		<h2>Menu</h2><br>
		<a href="produto.php">Novo cadastro</a>
		<table>
			<tr>
			    <td>Alterar</td>
			    <td>Excluir</td>
				<td>Id</td>
				<td>Nome</td>
				<td>Marca</td>
				<td>Preco</td>
				
			</tr>
			<?php
			$produtos = listarProdutos($conexao);
			foreach ($produtos as $produto):
			?>
			<tr>l
			    <td><a href="alterar-produto.php?idProdutos=<?php echo $produto['idProdutos']?>">Alterar</td>
			    <td><a href="excluir-produto.php?idProduto=<?php echo $produto['idProdutos']?>">Excluir</td>
				<td><?php echo $produto['idProdutos']?></td>
				<td><?php echo $produto['nome']?></td>
				<td><?php echo $produto['marca']?></td>
				<td><?php echo $produto['preco']?></td>
				
			</tr>
			<?php
			endforeach;
			?>
		</table>
	</body>
</html>