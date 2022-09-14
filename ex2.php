<html>
	<head>
		<title> Uso da Função gettype() </title>
	</head>
	
	<body>
		<?php
		$i = 10;
		$nome = "Tiago"; // string
		$falso = FALSE; //boolean
		$valor = 100.50; //floatval
		
		echo '<br>$i é do tipo: '. gettype($i);
		echo '<br>$nome é do tipo: '. gettype($nome);
		echo '<br>valor é do tipo: '. gettype($valor);
		
		if (is_integer($i)) {
			echo '<br>$i é inteiro...';
		}
		if (is_string($nome)) {
			echo '<br>$nome é string...';
		}
		if (is_bool($falso)) {
			echo '<br> $valor é float...';
		}
		if(is_numeric($i) and is_numeric($valor)) {
			echo '<br> &i e &valor são valores numéricos...'
		}
		<p>8127888 - Leandro da Silva Crapino</p>
		?>
	</body>
</html>