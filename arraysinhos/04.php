<!DOCTYPE html>
<html>
<head>
	<title> Exercício 04</title>
	<meta charset="utf-8">
</head>
<body bgcolor="#e0ccd6">
	<?php 

$a =array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"],$_POST["n8"],$_POST["n9"],$_POST["n10"],);
$b =array($_POST["n1"],$_POST["n2"],$_POST["n3"],$_POST["n4"],$_POST["n5"],$_POST["n6"],$_POST["n7"],$_POST["n8"],$_POST["n9"],$_POST["n10"],);

for($i=0;$i<10;$i++){
 echo "<br> Resultado da multiplicação : <br>" .$a[$i]*$b[$i];
}

?>

</body>
</html>