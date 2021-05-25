<?php
     include "banco-acesso.php";
?>
<?php

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $id = $_POST['id'];
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $sobrenome = $_POST['sobrenome'];
    $telefone = $_POST['telefone'];
    $data = $_POST['dia'];
    $horario = $_POST['horario'];
    $convidados = $_POST['convidados'];
    $obsevacoes = $_POST['obs'];


    $sql = "UPDATE reserva SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', telefone = '$telefone', dia = '$data', horario = '$horario', convidados = '$convidados', obs = '$obsevacoes' WHERE id = '$id'"; //String com consulta SQL da inserção

    mysqli_select_db($mysqli,'$banco');
    
    if (mysqli_query($mysqli, $sql)){
        echo "<script>alert('Sua reserva foi atualizada!'); window.location = 'gerenciar_reservas.php';</script>";    
    }else{
        echo "Deu erro" . $sql . "<br>" .mysqli_error($mysqli);
    }
    mysqli_close($mysqli);