<?php
include 'banco-acesso.php';
include '/administrador/banco-admin.php';

            $recebeEmail = $_POST['email'];
            $filtraEmail = filter_var($recebeEmail, FILTER_SANITIZE_SPECIAL_CHARS);
            $filtraEmail = filter_var($filtraEmail, FILTER_SANITIZE_MAGIC_QUOTES);
            $recebeSenha = $_POST['senha'];
            $filtraSenha = filter_var($recebeSenha, FILTER_SANITIZE_SPECIAL_CHARS);
            $filtraSenha = filter_var($filtraSenha, FILTER_SANITIZE_MAGIC_QUOTES);
            
            session_start();

            function criptoSenha($criptoSenha) {
                return md5($criptoSenha);
            }

            $criptoSenha = criptoSenha($filtraSenha);
            $consultaInformacoes = mysqli_query($conecta, "SELECT * FROM admin WHERE email = '$filtraEmail' AND senha = '$criptoSenha'") or die(mysql_error());
            $verificaInformacoes = mysqli_num_rows($consultaInformacoes);
            if ($verificaInformacoes == 1) {
                while ($result = mysqli_fetch_array($consultaInformacoes)) {
                    $_SESSION['login'] = true;
                    $_SESSION['nome'] = $result['nome'];
                    header("Location: ../painel.php");
                    
                }
            } else {
                echo "<p>Nome de Usuário ou Senha informada não confere. Por favor, <a href='javascript:history.back();'>volte</a> e tente novamente!</p>";
            }

?>









