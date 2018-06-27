<!DOCTYPE html>
<html>
<head>
	<title>exercicio 02</title>
	<meta charset="utf-8">
</head>
<body bgcolor="#e0ccd6">
<?php
$a =array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"],$_POST["n8"],$_POST["n9"],$_POST["n10"],);



echo "Numeros Negativos:";
	
	foreach ($a as $valor) {
	 	if ($valor<0) {
	 		echo "$valor</br>";
	 	}
}
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo 'Numeros Positivos :';
	echo "</br>";
	foreach ($a as $value ) {
	 	if ($value>0) {
	 		echo "$value</br>";
	 	}
}
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
for ($i = 0; $i < count($a); $i++){
    if ($a[$i] % 2 == 0)
        echo "O Número é par: $a[$i]<br />";
    else
        echo "O Número é impar: $a[$i]<br />";
}
?>
</body>
</html>

