<?php
require('conn.php');

// Verifica se o formulário de cadastro foi enviado
if (isset($_POST['reserva'])) {
	$nMesa = strip_tags($_POST['nMesa']);
	$nomeReserva = strip_tags($_POST['nomeReserva']);
	$qtdPessoas = strip_tags($_POST['qtdPessoas']);
	$telReserva = strip_tags($_POST['telReserva']);

    // Insere o novo usuário no banco de dados
    $sql = "INSERT INTO registro_mesas (num_mesa, nome_reserva, qtd_pessoas, tel_reserva) VALUES ('$nMesa', '$nomeReserva', '$qtdPessoas', '$telReserva')";
    if ($conn->query($sql) === TRUE) {
      echo "Usuário cadastrado com sucesso!";
	  
    } else {
      echo "Erro ao cadastrar usuário: ";
    }
  }

?>