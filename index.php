<html>
	<head>
		<title>Hoje e <?php echo date("d/m/Y")?></title>
	</head>
	<body>
<?php
	echo "Hello, World!";

	$dados = [
		"Cachorro" => "Au au",
		"Gato" => "Miau" 	
	];

	for ($i=0; $i<2; $i++){
		echo "<h1>Hello " . $i . "</h1>";
	}

	
	foreach ($dados as $bicho => $barulho){
		echo "<p>O " . $bicho . " faz " . $barulho . "</p>";
	}
?>
	</body>
</html>
