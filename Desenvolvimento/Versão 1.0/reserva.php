<?php
	include "conexao.php"
?>
<html>
 <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, inital-scale=1,0">

        <!--titulo da pagina-->
        <title>Faça sua Reserva</title>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">

        <!--scripts-->
        <!--jquery--> <script src="http://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <!--popper <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script> -->
        <!--bootstrap--><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!--progressbar <script src="js/progressbar.min.js"></script> -->
        <!--parallax <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script> -->
    </head>

    <body>
        <header>
            <div class="container-fluid " id="nav-container">
                <!--contatos-->
                <nav class="navbar navbar-expand-lg justify-content-center" id="contatos">
                    <img src="Imagens/icons/mail.JPG" alt="e-mail">
                    <li>contato@pizzariachicao.com.br</li>
                    <img src="Imagens/icons/facebook.JPG" alt="facebook">
                    <li>pizzariachicao</li>
                    <img src="Imagens/icons/whats.png" alt="telefone">
                    <li>(11)99876-5432</li>
                </nav>
                <!--menus-->
                <nav class="navbar navbar-expand-lg" id="menus">	
                    <img id="logo" src="Imagens/logo.png" alt="pizzaria do chicao">

                    <div class="collapse navbar-collapse justify-content-center" id="navbar-links">
                        <a class="nav-link nav-item" id="home" href="index.html">Home</a>
                        <a class="nav-link nav-item" id="pizzaria" href="Pizzaria.html">A Pizzaria</a>
                        <a class="nav-link nav-item" id="rodizio" href="NossosRodizios.html">Nosso Rod&iacute;zio</a>
                        <a class="nav-link nav-item" id="cardapio" href="Cardapio.html">Cardápio</a>
                        <a class="nav-link nav-item" id="cardapio" href="reserva.php">Faça Sua Reserva</a>
                    </div>
                </nav>
            </div>
        </header>

        <main>
            <!--Barra de Titulo-->
            <div class="container-fluid justify-content-center">
                <div id="titulo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner justify-content-center">
                        <div class="carousel-item active">
                            <img src="Imagens/fundopizza.JPG" alt="fundo pizza" class="d-block w-100">
                        </div>
                        <div id="contorno"></div>
                        <div class="carousel-caption d-none d-md-block">
                            <h1>Faça sua Reserva</h1>
                        </div>
                    </div>
                </div>
            </div>
        </main>
	
		<div class="form">
			<div class="tform">
				<p>Faca sua reserva!</p>
				<h2>Preencha o formulario abaixo e realize sua reserva!</h2>
			</div>
				<div>
					<form action="envio.php" method="POST">
						<div>
							<label for="nome">Nome:</label>
							<input type="text" id="nome" class="inpu" name="nome" required="">
						</div>
						<div>
							<label for="sobrenome">Sobrenome:</label>
							<input type="text" id="sobrenome" class="inpu" name="sobrenome" required="">
						</div>
						<div>
							<label for="email">E-mail:</label>
							<input type="email" id="email" class="inpu" name="email" required="">
						</div>
						<div>
							<label for="telefone">Telefone:</label>
							<input type="text" id="telefone" class="inpu" name="telefone" required="">
						</div>
						<div>
							<label for="convidados">Convidados:</label>
							<input type="number" id="convidados" class="inpu" name="convidados" required="">
						</div>
						<div class="tform">
							<h2>ESCOLHA A DATA E O HORARIO DESEJADO</h2>
						</div>
						<div>
							<label for="dia">Data:</label>
							<input type="date" id="data" class="inpu" name="dia" required="">
						</div>
						<div>
							<label for="horario">Horario:</label>
							<select name="horario" class="inpu" name="horario">
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
							<div>
								<label for="area">Observacoes</label>
								<textarea id="area" name="obs"
								          rows="5" cols="33" class="area"> 
								
								</textarea>
							</div>
							<div>
								<input type="submit" name="botao" value="Reservar" class="botao"></input>
							</div>
						</div>
					</form>
				</div>
		</div>
	<footer>

	<div class="container-fluid" id="rodape">
	<!--selos de qualidade-->
		<nav class="navbar navbar-expand-lg justify-content-center" id="selos">
			<div class="col justify-content-center">
                            <img src="Imagens/icons/pizza.jpg" alt="melhor rodizio">
			<li>O Melhor <br> Rod&iacute;zio</li>
			</div>
			<div class="col justify-content-center">
			<img src="Imagens/icons/atendimento.jpg" alt="atendimento diferenciado">
			<li>Atendimento <br> diferenciado</li>
			</div>
			<div class="col justify-content-center">
			<img src="Imagens/icons/forno.jpg" alt="sabor diferenciado">
			<li>Sabor <br> diferenciado</li>
			</div>
			<div class="col justify-content-center">
			<img src="Imagens/icons/qualidade.jpg" alt="qualidade comprovada">
			<li>Qualidade <br> comprovada</li>
			</div>
		</nav>
		<!--Contatos, logo e endereço-->
		<nav class="navbar navbar-expand-lg" id="end">
			<div class="col">
				<div class="row justify-content-center">
					<li>Rua dos bobos, 0</li>
				</div>
				<div class="row justify-content-center">
					<li>Vila Chic&atilde;o, S&atilde;o Paulo  - SP</li>
				</div>
			</div>
			<div class="col">
				<div class="row justify-content-center">
				<img id="logo" src="Imagens/logo.png" alt="pizzaria do chicao">
				</div>
			</div>
			<div class="col">
				<div class="row justify-content-center">
					<li>Atendimento: Todos os dias das 18hrs as 24hrs</li>
				</div>
				<div class="row justify-content-center">
					<li>contato@pizzariadochicao.com.br</li>
				</div>
			</div>
		</nav>
		
		
	</div>
	</footer>

</body>
</html>