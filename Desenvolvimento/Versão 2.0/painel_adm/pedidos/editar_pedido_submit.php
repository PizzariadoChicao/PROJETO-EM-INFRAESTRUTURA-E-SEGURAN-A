<?php
     include "banco-acesso.php";
?>
<?php

    //Abaixo atribuímos os valores provenientes do formulário pelo método POST
    $id = $_POST['id'];
    $nome = $_POST['nome']; 
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $num = $_POST['num'];
    $pedido = $_POST['pedido'];


    $sql = "UPDATE pedido SET nome = '$nome',cpf = '$cpf', telefone = '$telefone',cep = '$cep', num = '$num', pedido = '$pedido' WHERE id = '$id'"; //String com consulta SQL da inserção

    mysqli_select_db($mysqli,'$banco');
    
    if (mysqli_query($mysqli, $sql)){
        echo "<script>alert('Pedido atualizado com sucesso!'); window.location = 'consultar_pedidos.php';</script>";    
    }else{
        echo "Deu erro" . $sql . "<br>" .mysqli_error($mysqli);
    }
    mysqli_close($mysqli);