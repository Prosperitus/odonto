<!DOCTYPE html>
<html>
	<head>
		<title>Redefinir Senha</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	    <script type="text/javascript" href="../js/jquery.js"></script>  
	    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>      
	    <script type="text/javascript" src="../js/materialize.min.js"></script>
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
	    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	    <script type="text/javascript" src="../js/materialize.min.js"></script>
	    <script type="text/javascript" src="../css/animate.css"></script>
	    <script src="../js/jquery.maskedinput.js"></script>   
	    <style>
	      body {
	        display: flex;
	        min-height: 100vh;
	        flex-direction: column;
	      }
	      .main {
	        flex: 1 0 auto;
	      }
	    </style>
	</head>
	<body class="light-blue lighten-3">
		<div id="redefinir_senha" class="row main" style="margin-top: 10%">
			<div class="col s12 z-depth-3 card-panel">
				<div class="row margin">
					<div class="input-field col s12" style="margin-top: 10%">
						<input id="password" type="password" name="password" value="<?=$_COOKIE['pass']?>">
						<label for="password">Nova Senha</label>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12" style="margin-top: 10%">
						<input id="password" type="password" name="password" value="<?=$_COOKIE['pass']?>">
						<label for="password">Confirme sua nova senha</label>
					</div>
				</div>		
				<div class="row">
            		<div class="input-field col s12" style="margin-top:1%">
              			<button class="btn waves-effect waves-light light-blue" type="submit" name="action">Redefinir Senha</button>
            		</div>	
				</div>
			</div>
		</div>
	</body>
</html>