<?php
include("conexao.php");
include("banco-produto.php");

$idProduto = $_GET['idProdutos'];
$Produto = buscarProduto($conexao,$idProduto);
?>
<html>
<head>
<meta charset="UTF-8">
<title>Alterar produto</title>
</head>
<body>
<h1>Alterar produto</h1>
<form method="post" action="verifica-alteracao.php">
<input type="hidden" name="idProduto" value="<?php echo $Produto['idProdutos']?>"><br>
		Nome:<input type="text" name="nome" value="<?php echo $Produto['nome']?>"><br>
		marca:<input type="text" name="marca" value="<?php echo $Produto['marca']?>"><br>
		preco:<input type="text" name="preco" value="<?php echo $Produto['preco']?>"><br>
<input type= "submit" value="Alterar" name="btnAlterar"><br>
</form>
</body>
</html>

