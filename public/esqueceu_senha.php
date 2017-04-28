<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Recuperação de Senha</title>
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
    
    <div id="recuperar_senha" class="row main">
      <div class="col s12 z-depth-3 card-panel">
        <form class="form">     
          <div class="row margin">
            
            <div class="input-field col s12">
              <i class="material-icons prefix">mail</i>
              <input class="validate" id="email" type="email">
              <label for="email" data-error="Email invalido" >Email</label>
            </div>
          </div>         
          <div class="row">
            <div class="input-field col s12">
              <a href="index.php" class="btn waves-effect waves-light light-blue bounceOutLeft">Recuperar</a>
            </div>
          </div>        
          <div class="row">
            <div class="input-field col s12">
              <p class="margin left medium-small"><a href="index.php">Lembrei minha senha!</a></p>
            </div>        
          </div>
        </form>
      </div>
    </div> 
  </body>
</html>