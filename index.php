<html>
	<head>
		<title>Hoje e <?php echo date("d/m/Y")?></title>
	</head>
	<body>
<?php

echo $texto;
	echo "Hello, World!";

	$dados = [
		"Cachorro" => [
			"som" => "Au au",
			"imagem" => "https://images-na.ssl-images-amazon.com/images/I/71sG1O12uPL.jpg"
		],
		"passaro" => [
			"som" => "fiu fiu",
			"imagem" => "http://s2.glbimg.com/1kWIO3wpu_PqcAXkK3y-ecyoK2g=/s.glbimg.com/jo/g1/f/original/2015/01/06/carlosalbertocoutinho1.jpg"
		],
		"vaca" => [
			"som" => "Muuuu...",
			"imagem" => "https://ibahia-cdn1.cworks.cloud/fileadmin/user_upload/ibahia/2018/maio/10/vaca.jpg"
		]
		
	];

	for ($i=0; $i<2; $i++){
		echo "<h1>Hello " . $i . "</h1>";
	}

	
	foreach ($dados as $bicho => $info){
		echo "<p>O " . $bicho . " faz " . $info["som"] . "</p>";
		echo "<img src='" . $info["imagem"] . "' />";
	}
?>
<a href="cpuinfo.php">/cpuinfo.php</a>
	</body>
</html>
