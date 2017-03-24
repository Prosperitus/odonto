<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" href="js/jquery.js"></script>  
    <script type="text/javascript" src="js/materialize.min.js"></script>
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

  <body class = "light-blue lighten-3">
   
  <div class="section"></div>
  <div class="section"></div>
  <div class="section"></div>
  <div class="section"></div>
  <div class="section"></div>
    
    <!--MAIN-->
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

  </body>
</html>