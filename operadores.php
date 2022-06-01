<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="css/estilo.css"/>
<title>Aulas PHP</title>

</head>
<body>
<div>

<?php

$n1 = $_GET["a"];
$n2 = $_GET["b"];
$m = ($n1+$n2)/2;
echo "Primeiro numero: $n1 </br>";
echo "Segundo numero: $n2 </br>";
echo "Soma: ".($n1+$n2)."</br>";
echo "Subtração: ".($n1-$n2)."</br>";
echo "Multiplicação: ".($n1*$n2)."</br>";
echo "Divisão: ".($n1/$n2)."</br>";
echo "Módulo: ".($n1%$n2)."</br>";
echo "Média: $m </br>";
echo "Absoluto: ".abs($n1)."</br>";
echo "Pontencia: ".pow($n1,2)."</br>";
echo "Raiz ".sqrt($n1)."</br>";

echo "</br><b><font color='blue'>Obtendo valores da URL com PHP</font> </b></br>

Vamos analisar a URL abaixo: </br>

http://127.0.0.1/cristiano/operadores.php?a=3&b=2
</br>
No link acima, o arquivo operadores.php está sendo chamado do servidor local. Na linha, serão passados dois valores: a valendo 3 e b valendo 2."
?>
</div>
</body>
</html>