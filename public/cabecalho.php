<?php require_once "../backend/userInform.php";
	  require_once "../backend/verifyLog.php";
	
	verifyLogRedirect();

	 if (isset($_SESSION['ultima_atividade']) && (time() - $_SESSION['ultima_atividade'] > 300)) {
	
   
    session_unset();
    session_destroy();
    header('Location: http://localhost/odonto/backend/logout.php');
  }

  $_SESSION['ultima_atividade'] = time();
	
	JSON $time = '{nome:"'.$_SESSION['ultima_atividade'].'"}';
$user = userInform();
?>

	<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
	var time = <?php echo $time; ?>;
	alert (time);

	</SCRIPT>

  <header>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/style.css"/>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script type="text/javascript" src="../dataTables/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../dataTables/media/css/jquery.dataTables.min.css">

    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
		height: 100
      }
      .main {
        flex: 1 0 auto;
        position:relative;
		height:auto;
      }
      header , footer {
        padding-left: 0px;
      }
      main {
        padding-left: 100px
      }
      @media only screen and (max-width : 992px) {
        header, main, footer {
          padding-left: 0;
        }
      }
    	@media only screen and (min-width : 768px) {
        .margemCentro{
    		margin-left: 14%;
			  padding-bottom: 60px;
    		}
      }
    	@media only screen and (max-width : 768px) {
        .margemCentro{
    			margin-left: 0;
    			margin-right: 0;
          padding-bottom: 60px;
    		}
      }
		.ui-button{
			background-color: #0399ff;
			color:white;
			border-color:#0399ff;
			font-weight:bold
		}
		.ui-button:hover{
			background-color: white;
			color:#0399ff;
			border-color:#0399ff;
			font-weight:bold
		}
		
		.ui-dialog-titlebar-close
		{
		 position: absolute;
		 right: .3em;
		 top: 50%;
		 width: 19px;
		 margin: -10px 0 0 0;
		 padding: 1px;
		 height: 18px;

		 /*Esconder o X*/
		 display: none;
		}
		.ui-dialog-titlebar{
			background-color: #0399ff;
			color:white;
			border-color:#0399ff;
			font-weight:bold
		}
		
		
	
    </style>



  <body style="min-height:100%;position:relative;">

    <!--SCRIPT SIDENAV-->
    <script type="text/javascript">
      (function($){
          $(function(){
              $('select').material_select();
              $('.button-collapse').sideNav();
              $('.parallax').parallax();
          }); 
      })(jQuery);
    </script>

    <!--SIDENAV-->
    <nav>
      <div class="nav-wrapper light-blue">
        <div class="col s2">
          <ul class="left">
            <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
          </ul>
        </div>   
        <div class="row">
          <div class="col s10">
            <ul class="right">
              <form>
              </form>
            </ul>
          </div>
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
        <li><a href="board.php"><i class="material-icons">note_add</i>Cadastrar</a></li>
        <li><a href="busca-hospital.php"><i class="material-icons">business</i>Hospitais</a></li>
        <li><a href="buscaPaciente.php"><i class="material-icons">assignment_ind</i>Pacientes</a></li>
        <li><a href="buscaFuncionario.php"><i class="material-icons">perm_identity</i>Funcionários</a></li>
        <li><a href="atendimentos.php"><i class="material-icons">view_array</i>Atendimentos</a></li>
        <li><a href="../backend/logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
      </ul>
    </div>
  </body>
</header>
