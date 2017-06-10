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
	    <a href="redefinir_senha.php">redefinir</a>
		    <div class="mensagem">
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
			<br/>
      	<footer class="page-footer light-blue" style="margin: auto; width: 100%; bottom: 0; position: fixed;">
		    <div class="footer-copyright">
		    	<div class="container">	
		        	<a class="grey-text text-lighten-4 right" href="#!">© 2017 EasyOdonto Solutions</a>
	      		</div>
	    	</div>
    	</footer>
  	</body>   
</html>