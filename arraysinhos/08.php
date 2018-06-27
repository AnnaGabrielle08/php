<!DOCTYPE html>
<html>
<head lang="pt-br">
	<title> exercício 08 </title>
	<meta charset="utf-8">
</head>
<body color="#e0ccd6">

	<?php 
		$vet=array(
			$modelo=array("Uno","Fiesta", "doblo", "Celta", "March", "Corsa","Ranger","Trail Brazer","Ecosport","Tucson"),
			$fab=array("Fiat", "Ford", "Fiat", "GM", "Nissan", "GM", "Ford", "GM", "Ford", "Hyundai"),
			$cor=array("prata", "preto", "verde", "preto", "prata", "branco", "prata", "branco", "preto", "vinho"),
			$portas=array("1","2","3","4","5","6","7","8","9","10","11"),
			$ano=array( 2001 , 2002 , 2003 , 2004 , 2005 , 2006 , 2007 , 2008 , 2013 , 2014 , 2015 ),
		);
		
	 for ($x = 0; $x < 10; $x++) {
    echo "A - MODELO:    $modelo[$x] ";
    echo " ANO: $ano[$x] <br>";
		}
	echo "<br>";
	echo "B- VEICULOS COR PRATA: $modelo[0].$modelo[4].$modelo[6]";
	echo "<br>";
	for ($x = 0; $x < 10; $x++) {
    echo "C- MODELO: $modelo[$x] ";
    echo "COR: $cor[$x] ";
    echo "Nº DE PORTAS: $portas[$x] <br>";
		}
	echo "<br>";
	echo " D - VEICULOS DA FORD: $modelo[1].$modelo[6].$modelo[8] <br>";
	echo "<br>";
	echo "E- VEICULOS MAIOR Q 2013: $modelo[8].$modelo[9].modelo[10]";
    ?>

</body>
</html>
