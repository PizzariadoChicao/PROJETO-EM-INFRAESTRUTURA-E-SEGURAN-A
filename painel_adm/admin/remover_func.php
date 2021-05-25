=<?php
    include "banco-acesso.php";

    $id_funcio = intval($_GET['funcio']);

    $sql_code = "DELETE  FROM admin WHERE id = '$id_funcio'";
    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);

    if($sql_query)
        echo "
        <script>
            alert('Funcionário removido com sucesso!');
            location.href='buscar_func.php';
        </script>";

    else
        echo "<script> alert('Não foi possível finalizar o pedido'); location.herf='consultar_pedidos.php'; </script>";
?>
   