<html>
	<head>
		<title> Uso da Função gettype() </title>
	</head>
	
	<body>
		<?php
		$i = 10;
		$nome = "Tiago"; //string
		$falso = FALSE; //boolean
		$valor = 100.50; //float
		
		echo '<br>$i é do tipo: '. gettype($i);
		echo '<br>$nome é do tipo: '. gettype($nome);
		echo '<br>valor é do tipo: '. gettype($valor);
		
		?>
	</body>
</html>
		