<html>
	<body>
		<h1> Fatorial dos números... </h1>
		<?php
		
			$n = 4;
			$fat = 1;
			
			while($n > 1) {
				$fat *= $n;
				$n--;
			}
			printf('<br> Fatorial = %d ', $fat);
			
		?>
	</body>
</html>