<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Recuperação de Senha</title>
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


  <body style="background-color: #03a9f4;">   
  <div align="center">
         <img style="padding:40px;" src="../images/logo.png">
    
      </div>
    <div id="recuperar_senha" class="row main" style="margin-top:1%">
      <div style="width:400px;" class="col s12 z-depth-3 card-panel">
      <h4 style="margin-top:30px;margin-bottom:10px;margin-left:10px; ">Esqueceu sua senha?</h4>
        <form class="form" method="POST" action="../controller/envia_email.php">     
          <div class="row margin">    
            <div class="input-field col s12" style="margin-top:10%">
              <i class="material-icons prefix">mail</i>
              <input id="E_mail" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="E_mail" required>
              <label for="E_mail" >Email</label>
            </div>
          </div>         
          <div class="row">
            <div class="input-field col s12" style="margin-top:1%">
              <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Recuperar</button>
            </div>
          </div>        
          <div class="row">
            <div class="input-field col s12">
              <p class="margin left medium-small"><a href="../index.php">Lembrei minha senha!</a></p>
            </div>        
          </div>
        </form>
      </div>
    </div> 
  </body>
</html>