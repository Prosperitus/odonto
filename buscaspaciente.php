
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



    </style>



  </head>

  <body class = "light-blue lighten-5">

  <!--Scrip sidenav-->


<script type="text/javascript">
(function($){
    $(function(){
        $('select').material_select();
        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space</script>



<!--CABEÇALHO-->
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
          <div class="input-field">
            <input id="search" type="search" />
            <label for="search"><i class="material-icons">search</i></label>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</nav>

  <!--Sidenav-->

<div class="userView position:relative">
  <ul id="slide-out" class="side-nav ">
    <li><div class="userView">
      <div class="background blue">

      </div>
      <a href="#!user"><img class="circle" src="images/medico.jpg"></a>
      <a href="#!name"><span class="white-text name">Bem Vindo "John Doe"</span></a>
      <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">note_add</i>Cadastrar</a></li>
    <li><a href="#!"><i class="material-icons">add_alert</i>Hospitais</a></li>
    <li><a href="#!"><i class="material-icons">perm_identity</i>Pacientes</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>Arquivos</a></li>
    
    <li><div class="divider"></div></li>
    <li><a class="subheader">Mais opçoes</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  </div>




    <!--Buscas Paciente---->

 
<div class="row">
      <div class="col s10">
       <ul class="right">
        <form>
          <div class="input-field col s6">
            <input id="search" type="search" />  
            	<button class="btn waves-effect waves-light" type="submit" name="action">Submit
    				<i class="material-icons right">send</i>
  				</button>
            <label for="search"><i class="material-icons">search</i></label>
            </ul>
          </div>
        </form>
      </div>
    </div>
          
        
  <!--FOOTER-->
        <footer class="page-footer light-blue">
          <div class="container ; position:absolute">
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
