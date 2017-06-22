<?php require_once "../controller/session.php";
	  require_once "../controller/verifyLogin.php";

	verifyLogRedirect();
 
	$session = new Session();
   $user = $session->sessionEmployee();

   ?>
  
   
<html xmlns="http://www.w3.org/1999/xhtml" hasBrowserHandlers="true">
  <head>
	<title>EasyOdonto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script type="text/javascript" src="../dataTables/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../dataTables/media/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="chrome://global/skin/" />
	<script type="text/javascript" src="../js/scripts.js"></script>
	<link type="text/css" rel="stylesheet" href="../css/style.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
	
	<!-- BUSCA HOSPITAL-->
	<link rel="stylesheet" type="text/css" media="all" href="chrome://browser/content/contentSearchUI.css" />
	<link rel="stylesheet" type="text/css" media="all" href="chrome://browser/content/newtab/newTab.css" />
	<link rel="stylesheet" type="text/css" media="all" href="chrome://browser/skin/newtab/newTab.css" />
	<script type="text/javascript;version=1.8" src="chrome://browser/content/contentSearchUI.js"></script>
	<script type="text/javascript;version=1.8" src="chrome://browser/content/newtab/newTab.js"></script>
  <head>
  
  
<body onload="java script:contar();" style="width: 100%;">
    <!--SIDENAV-->
	<header>
		<nav>
		  <div class="nav-wrapper light-blue">
			<div class="col s2">
			  <ul class="left">
				<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
			  </ul>
			</div>
		  </div>
		</nav>

		<div class="userView position:relative">
		  <ul id="slide-out" class="side-nav ">
			<li>
			  <div class="userView">
				<div class="background blue"></div>
				<a href="#!user"><img class="circle" src="../images/medico.jpg"></a>
				<a href="#!name"><span class="white-text name">Bem Vindo,</span></a>
				<a href="#!email"><span class="white-text email" style="font-weight: bold"><?=$user->name.' '.$user->surname?></span></a>
			  </div>
			</li>
			<li><a href="busca_hospital.php"><i class="material-icons">business</i>Hospitais</a></li>
			<li><a href="busca_paciente.php"><i class="material-icons">assignment_ind</i>Pacientes</a></li>
			<li><a href="busca_funcionario.php"><i class="material-icons">perm_identity</i>Funcionários</a></li>
			<li><a href="atendimentos.php"><i class="material-icons">view_array</i>Atendimentos</a></li>
			<li><a href="graficos.php"><i class="material-icons">insert_chart</i>Grafico</a></li>
			<li><a href="../controller/redefinir_senha.php"><i class="material-icons">vpn_key</i>Redefinir senha</a></li>
			<li><a href="../request/logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
		  </ul>
		</div>
	</header>

	<script>
		$(document).ready(function(){
			setTimeout(expireSessoes,108000000);
		});
	</script>
	
	<div id="modalReLogin" class="modal" style="background-color:transparent;padding: 0px;width: 500px;height:auto;">
    <div class="modal-content" style="background-color:transparent;padding: 0px;">
		<div class="col s12 z-depth-3 card-panel" style="margin:0px">
		<h4>Sua Sessão expirou, logue novamente para continuar utilizando o sistema!<h4>
        <form class="login-form" id="loginNoRedirect" action="../request/login.php" method="post">     
          <div class="row margin">    
            <div class="input-field col s12">
              <i class="material-icons prefix">face</i>
			  <?php if(isset($_COOKIE['user'])){ ?>
              <input id="username" type="text" name="username" value="<?=$_COOKIE['user']?>">
              <label for="username">Usuário</label>
			  <?php }else{ ?>
			  <input id="username" type="text" name="username">
              <label for="username">Usuário</label>
			  <?php } ?>
            </div>
          </div>
          
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
			  
			  <?php if(isset($_COOKIE['pass'])){ ?>
              <input id="password" type="password" name="password" value="<?=$_COOKIE['pass']?>">
              <label for="password">Senha</label>
			  <?php }else{ ?>
			  <input id="password" type="password" name="password">
              <label for="password">Senha</label>
			  <?php } ?>
              
            </div>
          </div>
          
          <div class="row">          
            <div class="input-field col s9 " style="margin-bottom: 7%;margin-top: -6%;">
			<?php if(isset($_COOKIE['pass']) && isset($_COOKIE['user'])){ ?>
                <input name="remember" type="checkbox" id="remember-me" checked />
                <label for="remember-me">Lembrar Usuário</label>
			<?php }else{ ?>
				<input name="remember" type="checkbox" id="remember-me"/>
                <label for="remember-me">Lembrar Usuário</label>
			<?php } ?>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field">
              <button class="btn waves-effect pulse light-blue col s12 ">Login</button>
            </div>
          </div>

        </form>
      </div>
	</div>
  </div>
