<?php
     include "banco-acesso.php";
?>
<?php

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $id = $_POST['id'];
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cargo = $_POST['cargo'];

    $senha = md5($senha);

    $sql = "UPDATE admin SET nome = '$nome',email = '$email', senha = '$senha',cargo = '$cargo' WHERE id = '$id'"; //String com consulta SQL da inserção

    mysqli_select_db($mysqli,'$banco');
    
    if (mysqli_query($mysqli, $sql)){
        echo "<script>alert('Funcionário atualizado com sucesso!'); window.location = 'buscar_func.php';</script>";    
    }else{
        echo "Deu erro" . $sql . "<br>" .mysqli_error($mysqli);
    }
    mysqli_close($mysqli);