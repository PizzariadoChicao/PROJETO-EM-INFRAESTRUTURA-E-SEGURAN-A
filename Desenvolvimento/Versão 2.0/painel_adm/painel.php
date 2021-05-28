<?php
session_start();
if(empty($_SESSION['nome'])) {
	echo "<script language=javascript>alert( 'Acesso Bloqueado!' );</script>";
    echo "<script language=javascript>window.location.replace('index.html');</script>";
}
?>

<!doctype html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Pizzaria</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/painel.css">
		<script type="text/javascript">
			function gopage(id)
			{
				if(id == 1){
					window.location.href = ('stock/cadastrar_ingrediente.php');
				}
				else if(id == 2){
					window.location.href = ('stock/atualizar_ingrediente.php');
				}
				else if(id == 3){
					window.location.href = ('stock/remover_ingrediente.php');
				}
			}
		</script>
  </head>
  <body class="page-painel">
    <div class="grid-container">
      
            <div class="grid-x" id="cabecalho">
              	<div class="cell small-12  medium-8 large-8" id="title">
              		<img src="img/icons/painel.png" >
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
              		<a href="php/exit.php" class="button">SAIR</a>
              	</div>
            </div> 

            <div class="grid-x grid-padding-x">
                
				<div class="cell small-6  medium-6 large-6" id="conf">
					
						<fieldset>
						<legend>Pedido</legend>
						<div class="grid-x">
							<div class="cell small-12  medium-6 large-6" >
								<div class="cell small-4  medium-4 large-4" >
									<p><a href="pedidos/criar_pedido.php" class="button">Criar Pedido</a>
									<a href="pedidos/consultar_pedidos.php" class="button">Gerenciar Pedidos</a></p>
								</div>
								<div class="cell small-4  medium-4 large-4">
									<p><a href="reservas/gerenciar_reservas.php" class="button">Gerenciar Reservas</a>
								</div>
							</div>
							<div class="hide-for-small-only" class="cell medium-6 large-6" >
								<img src="img/icons/pedido.png">
							</div>
						</div>
						</fieldset>					
				</div>

				
				<div class="cell auto" id="conf">
					<fieldset>
						<legend>Administração</legend>
						<div class="grid-x">
							<div class="cell small-12  medium-6 large-6" >
								<div class="cell small-4  medium-4 large-4" >
									<br><p><a href="admin/cadastro_func.php" class="button">Cadastrar Funcionário</a>
									<a href="admin/buscar_func.php" class="button">Gerenciar Funcionários</a></p>
								</div>
							</div>
							<div class="hide-for-small-only" class="cell medium-6 large-6" >
								<img src="img/icons/admin.png">
							</div>
						</div>
						</fieldset>
				</div>
				
			</div>
			
    </div>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>