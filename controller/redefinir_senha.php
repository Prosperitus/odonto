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
    <body style="background-color: #03a9f4;">
        <div align="center">
             <img style="padding:40px;" src="../images/logo.png">
        
          </div>
        <div id="redefinir_senha" class="row main" style="margin-top: 1%">
            <div class="col s12 z-depth-3 card-panel">
                <form class="form" method="POST" action="../controller/senha.php">
                    <div class="row margin">
                        <div class="input-field col s12" style="margin-top: 15%">
                            <input id="senha_recebida" type="password" name="senha_recebida" class="validate" title="A senha deve conter no mínimo 6 caracteres" minlength="6" required>
                            <label for="senha_recebida">Senha Recebida</label>
                        </div>
                    </div>    
                    <div class="row margin">
                        <div class="input-field col s12" style="margin-top: 1%">
                            <input id="re_senha" type="password" name="re_senha" class="validate" title="A senha deve conter no mínimo 6 caracteres" minlength="6" required>
                            <label for="re_senha">Nova Senha</label>
                        </div>
                      </div>
                    <div class="row margin">
                        <div class="input-field col s12" style="margin-top: 2%">
                            <input id="conf_re_senha" type="password" class="validate" name="conf_re_senha" title="A senha deve conter no mínimo 6 caracteres" minlength="6" required>
                            <label for="conf_re_senha">Confirme sua nova senha</label>
                        </div>
                    </div>        
                    <div class="row">
                        <div class="input-field col s12" style="margin-top:1%">
                              <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Redefinir Senha</button>
                        </div>    
                    </div>
                </form>    
            </div>
        </div>
    </body>
</html>