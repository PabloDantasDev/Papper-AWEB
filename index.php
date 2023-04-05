
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
		


				<h2 class="title">Bem Vindo!</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" name="username"  placeholder="Usuario" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		   
           		    	<input type="password" name="password"  placeholder="Senha" class="input">
            	   </div>
            	</div>
			
				<?php

					require('database/valida.php');
				
				?>	

            	<div class="box">
					
            	<input type="submit" class="btn" name="login"  value="Login">
            	<input type="submit" class="btn" name="cadastro"  value="Cadastre-Se">
				
				</div>

            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>

	
</body>
</html>
