
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	


	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/g1.png">
		</div>
		<div class="login-content">
			<form id="casdastro-form" method="post">
		
<<<<<<< HEAD
				<h2 class="title">Bem vindoo</h2>
=======
				<h2 class="title">bem Vindo!</h2>
>>>>>>> de4d1396f7065a37b27ebee61567a118e9b439ac
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" name="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Senha</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
				<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida corretamente
if ($conn->connect_error) {
  die("Erro ao conectar ao banco de dados: " . $conn->connect_error);
}

// Verifica se o formulário de login foi enviado
if (isset($_POST['login'])) {
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);

  // Consulta o banco de dados para verificar as credenciais do usuário
  $sql = "SELECT * FROM cadastro WHERE nome='$username' AND senha='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Login bem-sucedido
    echo "Login efetuado com sucesso!";
  } else {
    // Login falhou
    echo "Usuário ou senha inválidos.";
  }
}

// Verifica se o formulário de cadastro foi enviado
if (isset($_POST['cadastro'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Verifica se o usuário já existe no banco de dados
  $sql = "SELECT * FROM cadastro WHERE nome='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Usuário já cadastrado
    echo "Usuário já cadastrado.";
  } else {
    // Insere o novo usuário no banco de dados
    $sql = "INSERT INTO cadastro (nome,senha) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
      echo "Usuário cadastrado com sucesso!";
    } else {
      echo "Erro ao cadastrar usuário: " . $conn->error;
    }
  }
}

$conn->close();
?>
            	
            	<input type="submit" name="login"  value="Login">
				<input type="submit" name="cadastro"  value="Cadastro">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>

	
</body>
</html>
