<?php
    include "banco-acesso.php";

    $id_pedido = intval($_GET['pedido']);

    $sql_code = "DELETE  FROM pedido WHERE id = '$id_pedido'";
    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);

    if($sql_query)
        echo "
        <script>
            alert('Pedido finalizado com sucesso!');
            location.href='consultar_pedidos.php';
        </script>";

    else
        echo "<script> alert('Não foi possível finalizar o pedido'); location.herf='consultar_pedidos.php'; </script>";
?>
   