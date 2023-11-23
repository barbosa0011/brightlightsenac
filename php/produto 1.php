<!--salva o arquivo como "produto" (sem aspas);-->
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1> Cadastro de produtos</h1>
<form method="post" action="processamento-produto.php">
Nome: <input type="text" name="nome"><br>
marca: <input type="text" name="marca"><br>
Preco: <input type="text" name="preco"><br>
<input type="submit" value="Cadastrar" name="btn"><br>
</form>
<a href="lista-produtos.php">Listar produtos</a>
</body>
</html>