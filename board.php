
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Home</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" href="js/jquery.js"></script>  
    <script type="text/javascript" src="js/materialize.min.js"></script>
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

  <body class = "light-blue lighten-3">
    <!--NAVBAR-->
    <nav>
      <div class="nav-wrapper light-blue">
        <ul id="nav-mobile" class="right">
          <li><a href="index.php">Logout</a></li>     
        </ul>
      </div>
    </nav>


    <!--Card Paciente---->

 <!--OPCOES 2-->
 <div class="row main">
    <div class="col s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/medico.jpg">
          <span class="card-title"></span>
          <a href="cadastro_funcionario.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Cadastro de Funcionario</p>
        </div>
      </div>
    </div>
  


      
        <!--CARD FUNCIONÁRIO-->
        
    <div class="col s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/paciente.jpg">
          <span class="card-title"></span>
          <a href="cadastro_paciente.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Cadastro de Paciente</p>
        </div>
      </div>
    </div>
  

      <!--CARD HOSPITAL-->
    
    <div class="col s6 m4">
      <div class="card">
        <div class="card-image">
          <img src="images/hospital 2.jpg">
          <span class="card-title"></span>
          <a href="cadastro_hospital.php" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>Cadastro de Hospital</p>
        </div>
      </div>
    </div>
  </div>
          
        
  
      <!--FOOTER-->
        <footer class="page-footer light-blue">
          <div class="container">
            <div class="row">
              <div class="col s6 s12">
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
