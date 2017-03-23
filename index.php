
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>

    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" href="js/jquery.js"></script>  
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta charset="utf-8"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="css/animate.css"></script>
    <script src="js/jquery.maskedinput.js"></script>   
    

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
    <!--nav>
      <div class="nav-wrapper light-blue">
        <ul id="nav-mobile" class="left">
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastro_funcionario.php">Cadastro Funcionário</a></li>
        <li><a href="cadastro_paciente.php">Cadastro Paciente</a></li>      
        <li><a href="board.php">Board</a></li>        
        </ul>
      </div>
    </nav-->
          
    <!--MAIN-->
  <div class="section"></div>
  <div class="section"></div>
  <div class="section"></div>
  <div class="section"></div>
  <div class="section"></div>

    <div id="login-page" class="row main">
      <div class="col s12 z-depth-3 card-panel">
        <form class="login-form">     
          <div class="row margin">
            
            <div class="input-field col s12">
              <i class="material-icons prefix">face</i>
              <input id="username" type="text">
              <label for="username">Usuário</label>
            </div>
          </div>
          
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password">
              <label for="password">Senha</label>
            </div>
          </div>
          
          <div class="row">          
            <div class="input-field col s12">
                <input type="checkbox" id="remember-me"/>
                <label for="remember-me">Lembrar Usuário</label>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field col s12">
              <a href="board.php" class="btn waves-effect waves-light col s12 light-blue bounceOutLeft">Login</a>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field col s6">
              <p class="margin left medium-small"><a href="cadastro_funcionario.php">Cadastrar</a></p>
            </div>
            <div class="input-field col s6">
                <p class="margin right medium-small"><a href='esqueceu_senha.php'>Esqueceu a senha?</a></p>
            </div>          
          </div>

        </form>
      </div>
    </div>

   <!--FOOTER-->
    <!--footer class="page-footer light-blue">
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
    </footer-->
  
  </body>
</html>
