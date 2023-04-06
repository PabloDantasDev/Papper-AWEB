<!DOCTYPE html>
<html>
<head>
	
	<title>Animated Login Form</title>	
	<link rel="stylesheet" href="./css/novoStyle.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">

<?php

require('../Papper-AWEB/views/partials/header.php');

?>

<main>
	<div class="text-center">
		<div class="logo-principal">
			<img src="img/g1.png">
		</div>
		<h2>
		Texto em destaque aqui a baixo da imagem!
		</h2>
		<p>
			Texto falando um pouco sobre o nosso restaurante!
		</p>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<a href="views/reserva.php" class="btn btn-outline-dark btn-lg btn-block mb-3">Reserva</a>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<a href="#" class="btn btn-outline-dark btn-lg btn-block mb-3">Reserva</a>
		</div>
	</div>
</main>

<?php

require('../Papper-AWEB/views/partials/footer.php');

?>

</body>
</html>
