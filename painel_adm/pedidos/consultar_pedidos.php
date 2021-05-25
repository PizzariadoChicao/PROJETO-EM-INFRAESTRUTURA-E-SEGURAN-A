<?php
session_start();
if(empty($_SESSION['nome'])) {
  echo "<script language=javascript>alert( 'Acesso Bloqueado!' );</script>";
    echo "<script language=javascript>window.location.replace('../index.html');</script>";
}
?>
<?php
    include "banco-acesso.php";

    $consulta = "SELECT * FROM pedido";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>
<!doctype html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Pizzaria</title>
    <link rel="stylesheet" href="../css/foundation.css">
    <link rel="stylesheet" href="../css/painel.css">
    <link rel="stylesheet" href="../css/form.css">
  </head>
  <body class="page-painel">
    <div class="grid-container">
      
            <div class="grid-x" id="cabecalho">
              	<div class="cell small-12  medium-8 large-8" id="title">
              		<img src="../img/icons/painel.png" >
              		<h1>Painel de Controle</h1>
              	</div>
              	<div class="cell small-12  medium-4 large-4">
              		<div id="usuario">
              			<?php
              			$nome = $_SESSION['nome'];
              			$cargo = $_SESSION['cargo'];
              			
              			if($cargo == 1) $cargo = "Administrador";
              			else $cargo = "Funcionário";

              			echo "<p><span id='dest'>Usuário: </span>".strtoupper($nome)."</p>";
              			echo "<p><span id='dest'>Cargo: </span>$cargo</p>";
              		?>
              		</div>
              		<a href="../php/exit.php" class="button">SAIR</a>
              	</div>
            </div> 

             <div class="grid-x">
               <div class="cell auto"></div>
                <br><br>
                <div class="cell small-12 medium-6 large-6">
                  <a href="../painel.php" class="alert button" id="btn-voltar" >VOLTAR</a>
                  <h2 class="form-cad">Gerenciar Pedidos</h2>

                    
                </div>

            <div class="cell auto"></div>
          </div>
          <br><br>
          <div class="grid-x">
            <div class="cell small-12 medium-12 large-12">
             <table>   
              <tr style='text-align: center; font-weight: bolder; font-family: Arial'>
                <td>ID</td>
                <td>CPF</td>
                <td>NOME</td>
                <td>Telefone</td>
                <td>CEP</td>
                <td>NUMERO</td>
                <td>PEDIDO</td>
                <td>FINALIZAR PEDIDO</td>
                <td>EDITAR</td>
              </tr>
              <?php while($dado = $con->fetch_array()) { ?>
              <tr style='text-align: center; font-family: Arial'>
                <td><?php echo $dado["id"]; ?></td>
                <td><?php echo $dado["cpf"]; ?></td>
                <td><?php echo $dado["nome"]; ?></td>
                <td><?php echo $dado["telefone"]; ?></td>
                <td><?php echo $dado["cep"]; ?></td>
                <td><?php echo $dado["num"]; ?></td>
                <td><?php echo $dado["pedido"]; ?></td>
                <td><a href = "finalizar_pedido.php?pedido=<?php echo $dado["id"]; ?>">Finalizar<a>
                <td><a href = "editar_pedido.php?id=<?php echo $dado["id"]; ?>">Clique<a>
              </tr>
               <?php } ?> 
                
             </table>
          </div>
          </div>
    </div>

<br><br>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>