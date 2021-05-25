<?php
     include "banco-acesso.php";
?>
<?php

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $nome = $_POST['nome']; 
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $num = $_POST['num'];
    $pedido = $_POST['pedido'];


    $sql = "INSERT INTO pedido (nome,cpf,telefone,cep,num,pedido) VALUES ('$nome','$cpf','$telefone','$cep','$num','$pedido')"; //String com consulta SQL da inserção

    mysqli_select_db($mysqli,'$banco');
    
    if (mysqli_query($mysqli, $sql)){
        echo "<script>alert('O pedido foi registrado'); window.location = 'criar_pedido.php';</script>";    
    }else{
        echo "Deu erro" . $sql . "<br>" .mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
?>