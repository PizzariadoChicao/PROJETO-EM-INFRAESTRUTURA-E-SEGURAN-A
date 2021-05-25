<?php
    include "banco-acesso.php";

    $id_reserva = intval($_GET['reserva']);

    $sql_code = "DELETE  FROM reserva WHERE id = '$id_reserva'";
    $sql_query = $mysqli->query($sql_code) or die ($mysqli->error);

    if($sql_query)
        echo "
        <script>
            alert('Reserva finalizada com sucesso!');
            location.href='gerenciar_reservas.php';
        </script>";

    else
        echo "<script> alert('Não foi possível finalizar o pedido'); location.herf='consultar_pedidos.php'; </script>";
?>
   