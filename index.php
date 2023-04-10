<!DOCTYPE html>
<html>
<head>
	
	<title>Animated Login Form</title>	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/novoStyle.css">

</head>
<body>

<?php

require('../Papper-AWEB/views/partials/header.php');

?>

<main>
	<div class="container">
		<div style="text-align: center;">
			<div class="col-sm">
				<img class="img-principal" src="img/logoxibenacuia1.fw.png">
				<h2>Seja Bem-vindo!</h2>
				<p>
					O xibé é uma mistura de água com farinha de mandioca que pode ser degustado puro ou com pirarucu e outros peixes, fritos ou assados, como também aqui onde preparamos uma variedade de saboras e combinações com o xibé.
				</p>
			</div>
		</div>
	</div>
	<div class="submenu">
	<p class="col-sm-4 mx-auto">
		<a href="views/reserva.php" class="btn btn-outline-light btn-lg btn-block link-submenu">Reservas</a>
	</p>
	<p class="col-sm-4 mx-auto">
		<a href="views/reserva.php" class="btn btn-outline-light btn-lg btn-block link-submenu">Cardápio Digital</a>
	</p>
	<p class="col-sm-4 mx-auto">
		<a href="views/reserva.php" class="btn btn-outline-light btn-lg btn-block link-submenu">Store</a>
	</p>
	<p class="col-sm-4 mx-auto">
		<a href="views/reserva.php" class="btn btn-outline-light btn-lg btn-block link-submenu">Fale conosco</a>
	</p>
	<p class="col-sm-4 mx-auto">
		<a href="views/reserva.php" class="btn btn-outline-light btn-lg btn-block link-submenu">Pesquisa de Satisfação</a>
	</p>
	</div>


	<div class="text-center">
		<h4>Horário de Funcinamento</h4>
		<p>Segunda a quinta das 11:30 às 23:00 | Sexta e sabádo das 11:30 às 00:00 | Domingo das 11:30 às 23:00</p>
		<h4>Couvert Artístico (opcional)</h4>
		<p>R$5,90</p>
		<p>Taxa de serviço 10% (opcional)</p>
		<p>Site papper <a class="link-texto" href="https://portal.uniasselvi.com.br/">UNIASSELVI</a>, feito pelos <a class="link-texto" href="#">Alunos(as)</a>.</p>
	</div>


</main>

<?php

require('../Papper-AWEB/views/partials/footer.php');

?>

</body>
</html>
