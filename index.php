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

<header>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand p-3" href="/">
				<img src="caminho-da-img" alt="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#sobre">Sobre</a>
					</li>
					<li class="nav-item">
						<a id="servicosbtn" class="nav-link" href="#servicos">Serviços</a>
					</li>
					<li class="nav-item">
						<a id="contatosbtn" class="btn btn-primary btn-contato nav-link" href="/views/loginFuncionario.php" role="button">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>

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
		<div class="menu-botao">
			<p>
				<a href="#" class="btn btn-secondary">Botão 1</a>
			</p>
			<p>
				<a href="#" class="btn btn-secondary">Botão 2</a>
			</p>
			<p>
				<a href="#" class="btn btn-secondary">Botão 3</a>
			</p>
		</div>
	</div>
</main>

<footer>
	<div class="text-center">
		<p>
			Site papper <a href="https://portal.uniasselvi.com.br/">UNIASSELVI</a>, feito pelos <a href="#">Alunos(as)</a>.
		</p>
	</div>
</footer>

</body>
</html>
