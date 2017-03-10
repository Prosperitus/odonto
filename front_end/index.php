
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>

<!--CABEÇALHO-->
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo right">Logo</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
  </nav>

<!--NOME-->
  <div class="row">
    <form class="col s12">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>

        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>


<!--SENHA-->     

        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>



        <div class="input-field col s6">
          <input id="confirm_password" type="password" class="validate">
          <label for="confirm_password">Confirm Password</label>
        </div>


<!--EMAIL-->      



        <div class="input-field col s6">
          <input id="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>




<!--TELEFONE-->



        <div class="input-field col s6">
          <i class="material-icons prefix">contact_phone</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Tephone</label>
        </div>  
  


<!--MATRÍCULA-->



        <div class="input-field col s6">
          <i class="material-icons prefix">class</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Enrolment</label>
        </div>

<!--ENDEREÇO-->


        <div class="input-field col s6">
          <i class="material-icons prefix">my_location</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Location</label>
        </div>

    </form>
  </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        