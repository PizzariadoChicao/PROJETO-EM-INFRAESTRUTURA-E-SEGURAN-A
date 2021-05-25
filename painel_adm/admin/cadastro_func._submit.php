<?php
     include "banco-acesso.php";
?>
<?php

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cargo = $_POST['cargo'];

    $senha = md5($senha);

    $sql = "INSERT INTO admin (nome,email,senha,cargo) VALUES ('$nome','$email','$senha','$cargo')"; //String com consulta SQL da inserção

    mysqli_select_db($mysqli,'$banco');
    
    if (mysqli_query($mysqli, $sql)){
        echo "<script>alert('Usúario cadastrado com sucesso!'); window.location = 'cadastro_func.php';</script>";    
    }else{
        echo "Deu erro" . $sql . "<br>" .mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
?>