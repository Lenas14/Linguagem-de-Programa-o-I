<html>
	<body>
		<h1> Soma dos 10 primeiros números pares... </h1>
		<?php
		
			$i = 1;
			$soma = 0;
			
			while ($i <=10) {
				$soma = $soma + $i*2;
				$i = $i + 1;
			}
			
			printf('<br> Soma = %d ', $soma);
			
		?>
	</body>
</html>