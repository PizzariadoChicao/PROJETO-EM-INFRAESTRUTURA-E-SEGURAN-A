<?php
     include "conexao.php";
?>
<?php

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['telefone'];
    $data = $_POST['dia'];
    $horario = $_POST['horario'];
    $convidados = $_POST['convidados'];
    $obsevacoes = $_POST['obs'];


    $sql = "INSERT INTO reserva (nome,email,sobrenome,telefone,dia,convidados,obs, horario) VALUES ('$nome','$email','$sobrenome','$telefone','$data','$convidados','$obsevacoes','$horario')"; //String com consulta SQL da inserção

    mysqli_select_db($mysqli,'$banco');
    
    if (mysqli_query($mysqli, $sql)){
        echo "<script>alert('Sua reserva foi enviada ao restaurante'); window.location = 'reserva.php';</script>";    
    }else{
        echo "Deu erro" . $sql . "<br>" .mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
?>