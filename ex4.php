<html>
	<body>
		<h1> Cálculo de Combustível da Viagem do Pedro </h1>
		<?php
			$consumoCombustivel = 12.0;  //consumo = 12 km/litro
			$velocidadeMedia 	= 85.0;
			$tempoViagem		= 10.0;
			$custoLitroGasolina	= 4.0;
			
			$distanciaPercorrida = $velocidadeMedia * $tempoViagem;
			$litrosGastos = $distanciaPercorrida / $consumoCombustivel;
			$custoViagem = $litrosGastos * custoLitroGasolina;
			
			//number_format, formata o número com 1 casa decimal
			printf ('Consumo de Combustível do veículo: %s Km/1', number_format($consumoCombustivel,1));
			printf ('<br>Velocidade média da viagem: %s Km/h', number_format(%velocidadeMedia,1));
			printf ('<br>Tempo da viagem: %s horas', number_format($tempoViagem,1));
			printf ('<br>Custo do Combustível: R$ %s /litro', number_format($custoLitroGasolina,2));
			
			printf('<br><hr></hr>');
			printf('<br>Custo do Combustível na viagem = R$ %s', number_format($custoViagem,2));
			<p>8127888 - Leandro da Silva Crapino</p>
			?>
			
	</body>
</html>