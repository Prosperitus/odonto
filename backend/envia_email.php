<html>
  	<head>
    	<title>Envia Email</title>
	    <meta charset="utf-8"/>
	    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	 </head>
  	<body>
  		<header>
		    <nav>
		      <div class="nav-wrapper light-blue">
		      </div>
		    </nav>
	    </header>
	    <div class="main margin_small">
			<?php
				$quebra_linha = "\n";
				$envia_email = "contato@".$_SERVER['HTTP_HOST'];
				$destinatario = $_POST['E_mail'];
				$assunto = "Email teste";
				$mensagem = "Funciona";

				$mensagemHTML = '<p> Teste de Email </p>
				<p> Titulo </p>
				<p><b><t>'.$mensagem.'</p></b></t>
				<br>';

				$headers = "MIME-Version: 1.1".$quebra_linha;
				$headers .= "Content-type: text/html; chaset = iso-8859-1".$quebra_linha;
				$headers .= "From: ".$envia_email.$quebra_linha;
				$headers .= "Return-Path: ".$envia_email.$quebra_linha;

				mail($destinatario, $assunto, $mensagemHTML, $headers, "-r". $envia_email);

				print("Mensagem enviada!");
				?>
		</div>
      	<footer class="page-footer light-blue" style="margin: auto; width: 100%; bottom: 0; position: fixed;">
		    <div class="footer-copyright">
		    	<div class="container">	
		        	<a class="grey-text text-lighten-4 right" href="#!">© 2017 EasyOdonto Solutions</a>
	      		</div>
	    	</div>
    	</footer>
  	</body>   
</html>