<html>
  	<head>
    	<title>Envia Email</title>
	    <meta charset="utf-8"/>
	    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	 	<style type="text/css">
	 		.mensagem {
	 			font-size: 50px;
	 			margin-left: 430;
	 			margin-top: 150;
	 		}
	 	</style>
	</head>
  	<body>
  		<header>
		    <nav>
		      <div class="nav-wrapper light-blue">
		      </div>
		    </nav>
	    </header>
	    <div class="mensagem">
		    <div class="main margin_small">
				<br/>
				<?php
				require_once "Mail.php";

					$quebra_linha = "\n";
					$envia_email = "<easyodonto2017@gmail.com>";
					$destinatario = $_POST['E_mail'];
					$assunto = "Email teste";
					$mensagem = "Funciona";

					/*$mensagemHTML = '<p> Teste de Email </p>
					<p> Titulo </p>
					<p><b><t>'.$mensagem.'</p></b></t>
					<br>';*/

					$headers = array(
						'From' => $envia_email,
						'to' => $destinatario,
						'Subject' => $assunto
						);

					$smtp = Mail::factory('smtp', array(
						'host' => 'ssl://smtp.gmail.com',
						'port' => '465',
						'auth' => true,
						'username' => 'easyodonto2017@gmail.com',
						'password' => 'odonto123456'
					));

					//mail($destinatario, $assunto, $mensagemHTML, $headers, "-r". $envia_email);
					$mail = $smtp->send($destinatario, $headers, $mensagem);

					if (PEAR::isError($mail)) {
    					echo('<p>' . $mail->getMessage() . '</p>');
					} else {
   					 	echo('<p>Mansagem enviada !</p>');
					}

				?>

			</div>
		</div>
		<!-- <h6 style="margin-left: 400">Obs: Rodrigo não teve qualquer tipo de envolvimento na criação deste código.</h6>	-->
      	<footer class="page-footer light-blue" style="margin: auto; width: 100%; bottom: 0; position: fixed;">
		    <div class="footer-copyright">
		    	<div class="container">	
		        	<a class="grey-text text-lighten-4 right" href="#!">© 2017 EasyOdonto Solutions</a>
	      		</div>
	    	</div>
    	</footer>
  	</body>   
</html>