<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="css/estilo.css"/>
<title>Aulas PHP</title>

</head>
<body>
<div>

<?php
# Uso de variaveis referenciadas

	$a = 3; 	//$a recebe 3
	$b = &$a;	//$b recebe o valor de $a
	$b += 5;	//$b recebe o valor de $b + 5
	echo "A variavel A vale $a";
	echo "</br> A variavel B vale $b";
	
?>
</div>
</body>
</html>