<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="css/estilo.css"/>
<title>Aulas PHP</title>

</head>
<body>
<div>

<?php
# Mostrar qual foi o ano anterior ao ano atual
# ++ incremento
# -- decremento
	$atual = $_GET["aa"];
	echo "O ano atual é $atual e o ano anterior é ".--$atual;
?>
</div>
</body>
</html>