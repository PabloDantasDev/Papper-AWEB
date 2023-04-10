<?php

require('conn.php');
require('conn.php');

// Verifica se o formulário de cadastro foi enviado
if (isset($_POST['reserva'])) {
    // Verifica se todos os campos estão preenchidos
    if (!empty($_POST['nMesa']) && !empty($_POST['nomeReserva']) && !empty($_POST['qtdPessoas']) && !empty($_POST['telReserva'])) {
        $nMesa = strip_tags($_POST['nMesa']);
        $nomeReserva = strip_tags($_POST['nomeReserva']);
        $qtdPessoas = strip_tags($_POST['qtdPessoas']);
        $telReserva = strip_tags($_POST['telReserva']);

        // Verifica se os campos nMesa, qtdPessoas e telReserva contêm apenas números
        if (!is_numeric($nMesa) || !ctype_digit($nMesa)) {
            echo "<script>alert('Hey,, para que possamos providenciar,o melhor lugar para você, poderia inserir o número da mesa desejada? Obrigado!');window.location.replace(document.referrer);</script>";
            exit();
        }
        if (!is_numeric($qtdPessoas) || !ctype_digit($qtdPessoas)) {
            echo "<script>alert('Para que possamos reservar o espaço ideal para o seu grupo, poderia nos informar quantas pessoas estarão presentes? Basta preencher o campo indicado com o número correspondente. Obrigado!');window.location.replace(document.referrer);</script>";
            exit();
        }
        if (!is_numeric($telReserva) || !ctype_digit($telReserva)) {
            echo "<script>alert('Para que possamos entrar em contato caso seja necessário, poderia informar seu número de telefone no campo indicado? É só preencher com os dígitos numéricos correspondentes. Agradecemos desde já!');window.location.replace(document.referrer);</script>";
            exit();
        }

        // Insere o novo usuário no banco de dados
        $sql = "INSERT INTO registro_mesas (num_mesa, nome_reserva, qtd_pessoas, tel_reserva) VALUES ('$nMesa', '$nomeReserva', '$qtdPessoas', '$telReserva')";
        if ($conn->query($sql) === TRUE) {
            // Exibe uma mensagem de aviso com um botão "OK" e redireciona para a página principal
            echo "<script>alert('Usuário cadastrado com sucesso!');window.location.replace('../index.php');</script>";
            //header('Location: ..\index.php');
          
        } else {
            // Exibe uma mensagem de aviso com um botão "OK" e redireciona para a página anterior
            echo "<script>alert('Erro ao cadastrar usuário: " . mysqli_error($conn) . "');window.location.replace(document.referrer);</script>";
        }
    } else {
        // Exibe uma mensagem de aviso com um botão "OK" e redireciona para a página anterior
        echo "<script>alert('Por favor, preencha todos os campos do formulário.');window.location.replace(document.referrer);</script>";
    }
}
?>