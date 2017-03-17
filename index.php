
<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" href="js/jquery.js"></script>  
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta charset="utf-8"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
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

  <body class = "light-blue lighten-5">
    <!--CABEÇALHO-->
    <nav>
      <div class="nav-wrapper light-blue">
        <!--a href="#" class="brand-logo right">HOME</a-->
          <ul id="nav-mobile" class="left">
          <li><a href="index.php">Home</a></li>
          <!--li><a href="cadastro_medico.php">Cadastro Médico</a></li>
          <li><a href="paciente.php">Cadastro Paciente</a></li-->       
        </ul>
      </div>
    </nav>


    <!--OPCOES-->
    <div class="row main">
      <form class="col s12">
        </br><a href="cadastro_paciente.php" class="waves-effect waves-light btn light-blue"><i class="material-icons left">note_add</i>Cadastrar Paciente</a>
        <a href="cadastro_funcionario.php" class="waves-effect waves-light btn light-blue "><i class="material-icons left">note_add</i>Cadastrar Funcionário</a>
      </form>
    </div>
 <!--FOOTER-->
        <footer class="page-footer light-blue">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>


  </body>
</html>
