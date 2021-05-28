<?php
session_start();
if(empty($_SESSION['nome'])) {
  echo "<script language=javascript>alert( 'Acesso Bloqueado!' );</script>";
    echo "<script language=javascript>window.location.replace('../index.html');</script>";
}
?>
<?php
    include_once "banco-acesso.php";
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario= "SELECT * FROM reserva WHERE id = '$id'";
    $resultado_usuario = $mysqli->query($result_usuario) or die($mysqli->error);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
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
    <script src="../js/mascara.js"></script>
  </head>
  <body class="page-painel">
    <div class="grid-container">
      
            <div class="grid-x" id="cabecalho">
              	<div class="cell small-12  medium-8 large-8" id="title">
              		<img src="../img/icons/painel.png" >
              		<h1>Painel de Controle</h1>
              	</div>
              	<div class="cell small-12 medium-4 large-4">
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
                <div class="cell small-12 medium-7 large-7">
                  <a href="../painel.php" class="alert button" id="btn-voltar" >VOLTAR</a>
                  <h2 class="form-cad">Editar Reserva</h2>
                    <form method="post" action="editar_reservas_submit.php" class="form-cad">
                    <input type="hidden" name="id" value="<?php echo $row_usuario['id'] ?>">
                     <p> Nome: <input type="text" name="nome" maxlength="50" required="" value="<?php echo $row_usuario['nome'] ?>"></p>
                     <p>Sobrenome: <input type="text" name="sobrenome" maxlength="100" required="" value="<?php echo $row_usuario['sobrenome'] ?>"> </p>
                     <p>E-mail: <input type="email" name="email" maxlength="100" required="" value="<?php echo $row_usuario['email'] ?>"> </p>
                     <p>Telefone: <input type="text" name="telefone" maxlength="15" onkeydown="javascript: fMasc( this, mTel );" required="" value="<?php echo $row_usuario['telefone'] ?>"> </p>
                      <p> Convidados: <input type="number" name="convidados"  class="input-tam" required="" value="<?php echo $row_usuario['convidados'] ?>"></p>
                      <fieldset><legend id="legenda">Data e Horário</legend>
                      <p> Data: <input type="date" id="data" class="input-tam" name="dia" required="" value="<?php echo $row_usuario['dia'] ?>"></p>
                      <p> Horário: <select name="horario" class="inpu" name="horario">
                          <option value="<?php echo $row_usuario['horario'] ?>"><?php echo $row_usuario['horario'] ?></option>
                          <option value="18:00">18:00</option>
                          <option value="18:30">18:30</option>
                          <option value="19:00">19:00</option>
                          <option value="19:30">19:30</option>
                          <option value="20:00">20:00</option>
                          <option value="20:30">20:30</option>
                          <option value="21:00">21:00</option>
                          <option value="21:30">21:30</option>
                          <option value="22:00">22:00</option>
                          <option value="22:30">22:30</option>
                          <option value="23:00">23:00</option>
                          <option value="23:30">23:30</option>
                          <option value="00:00">00:00</option>
                          <option value="00:30">00:30</option>
                        </select>
                        <textarea id="area" name="obs"
								          rows="5" cols="33" class="area"><?php echo $row_usuario['obs'] ?>
								
								        </textarea>

                     <input type="submit" name="btn" class="button" id="btn-cad" value="Atualizar">

                    </form>
                </div>
                <div class="cell auto"></div>
             </div>

    </div>


    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/vendor/what-input.js"></script>
    <script src="../js/vendor/foundation.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>