<?php
session_start();
if(empty($_SESSION['nome'])) {
  echo "<script language=javascript>alert( 'Acesso Bloqueado!' );</script>";
    echo "<script language=javascript>window.location.replace('../index.html');</script>";
}
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
                  <h2 class="form-cad">Cadastrar Pedido</h2>
                    <form method="post" action="criar_pedidos_submit.php" class="form-cad">
                     <p> Nome: <input type="text" name="nome" maxlength="50" required=""></p>
                     <p>CPF: <input type="text" name="cpf" maxlength="14" required=""> </p>
                     <p>Telefone: <input type="text" name="telefone" maxlength="15" onkeydown="javascript: fMasc( this, mTel );" required=""> </p>
                     <fieldset><legend id="legenda">Endereço:</legend>
                      <p> CEP: <input type="text" name="cep"  class="input-tam" required=""></p>
                      <p> Nº: <input type="text" name="num"  class="input-tam" required=""></p><br>
                     </fieldset>
                     <fieldset><legend id="legenda">Pedido</legend>
                     <textarea style="resize: vertical" id="pedido" name="pedido"
								          rows="5" cols="33" class="area" required="">
                     </textarea>            
                     </fieldset>

                     <input type="submit" name="btn" class="button" id="btn-cad" value="Cadastrar">

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