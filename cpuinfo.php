<html>
	<head>
		<title> ler texto</title></title>
	</head>
	<body>
<?php
$arquivo = "cpuinfo.txt"; // Ler o txt
$fp = fopen($arquivo,"r");
 
//lemos o arquivo
$texto = fread($fp, filesize($arquivo));
 
//transformamos as quebras de linha em etiquetas
$texto = nl2br($texto);
echo $texto;
echo "Nome do arq: $arquivo";
?>
	</body>
</html>
