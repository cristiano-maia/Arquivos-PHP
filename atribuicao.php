<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="css/estilo.css"/>
<title>Aulas PHP</title>

</head>
<body>
<div>

<?php
	$preco = $_GET["p"];

	echo "O preço do produto é R$ ".number_format($preco, 2); #adicionamos 2 casas decimais para a variavel
#   $preco = $preco + ($preco*10/100); primeira forma de atribuição
#	$preco += $preco*10/100; #outra forma de atribuição += aumento
#	echo "</br>E o novo preço com 10% de aumento é R$ $preco";
	$preco -= $preco*10/100; #outra forma de atribuição -= desconto
	echo "</br>E o novo preço com 10% de desconto é R$ ".number_format($preco, 2);
?>
</div>
</body>
</html>