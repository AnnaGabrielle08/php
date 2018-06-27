<!DOCTYPE html>
<html>
<head>
	<title> Exercício 01</title>
	<meta charset="utf-8">
</head>
<body bgcolor="#e0ccd6">
<?php

$nome = array();

$nome[] = "São Vicente";

$nome[] = "Praia Grande";

$nome[] = "Cubatão";

$nome[] = "Guarujá";

$nome[] = "Santos";

$nome[] = "Mongagua";

$nome[] = "Peruíbe";

foreach($nome as $value => $conteudo){
    echo "$value - $conteudo <br>";
}


?>
</body>
</html>
