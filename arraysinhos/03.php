<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>exercício 03</title>
</head>
<body>
   <?php
   $var=array(10,20,30,40,50,60,70,80,90,100);

   $n= $_POST['n'];
	for($x=0; $x>9; $x++) {

   echo "Resultados da divisão <br>".$var[$x]/$n;
	}

?>

</body>
</html>