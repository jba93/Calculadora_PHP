<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Calculadora</title>
		<link rel="icon" href="imagens/calculadora.ico">

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap -->
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    
	    <link href="estilo.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<?php
			//Operações
			require_once 'classes/calculadora.php';

			//Recupera os dados
			$numero1 = $_POST['numero1'];
			$numero2 = $_POST['numero2'];
			$operacao = $_POST['operacao'];

			$calculadora = new Calculadora();

			//Setar valores digitados
			$calculadora -> setNumeros($numero1, $numero2);

			switch ($operacao) {
				case 'somar':
					$calculadora -> somar();
					break;

				case 'subtrair':
					$calculadora -> subtrair();
					break;

				case 'dividir':
					$calculadora -> dividir();
					break;

				case 'multiplicar':
					$calculadora -> multiplicar();
					break;
			}
		?>


		<div class="container">
			<center><h2 class="borda"> Calculadora PHP </h2></center>

			<form method="post" action="calcular.php" class="borda">
				<div class="row">
					<div class="col-md-4">
						<center>
							<label>
								<p>Primeiro número:</p> <input type="text" name="numero1" autofocus="">
							</label>
						</center>
					</div>

					<div class="col-md-4">
						<center>
							<p>Operação:</p>
							<label>
								<input type="radio" name="operacao" value="somar" checked="">+ (somar)
							</label>
							<br/>
							<label>
								<input type="radio" name="operacao" value="subtrair">- (subtrair)
							</label>
							<br/>
							<label>
								<input type="radio" name="operacao" value="dividir">/ (dividir)
							</label>
							<br/>
							<label>
								<input type="radio" name="operacao" value="multiplicar">x (multiplicar)
							</label>
						</center>
					</div>

					<div class="col-md-4">
						<center>
							<label>
								<p>Segundo número:</p> <input type="text" name="numero2"> 
							</label>
						</center>
					</div>

				</div>

				<br/><br/>
				<center>
					<input type="submit" value="Calcular" class="btn btn-md botao">
				</center>

				<br/><br/>
				<div class="row">
					<center>
						<?php echo "<p>Número 1: $numero1 | Operação: $operacao | Número 2: $numero2  </p>" ?>
						<p>Resultado:</p> <?php echo '
						<input class="input" type="text" readonly="true" value="'.$calculadora -> getTotal().'"/>' ?>
					</center>
				</div>

			</form>

			

		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>