<html>
	<body>
		<h1> Soma dos 100 primeiros números... </h1>
		<?php
		
			$i = 1;
			$soma = 0;
			
			while ($i <=100) {
				$soma = $soma + $i;
				$i++;
			}
			
			printf('<br> Soma = %d ', $soma);

		?>
	</body>
</html>