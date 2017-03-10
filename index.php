
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      
      <script type="text/javascript" href="js/jquery.js"></script>
      
      <script type="text/javascript" src="js/materialize.min.js"></script>

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
  


<!--ENDEREÇO-->


        <div class="input-field col s6">
          <i class="material-icons prefix">my_location</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Location</label>
        </div>


<!--MATRÍCULA-->



        <div class="input-field col s6">
          <i class="material-icons prefix">class</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Enrolment</label>
        </div>

<!--CRO-->

        <div class="input-field col s6">
          <i class="material-icons prefix">subject</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">CRO</label>
        </div>  



<!--CROUF-->

        <div class="input-field col s12">
        <script>
        $(document).ready(function() {
          $('select').material_select();
        });
        </script>
          <select>
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Acre</option>
                  <option value="2">Amapá</option>
                  <option value="3">Amazonas</option>
                  <option value="4">Pará</option>
                  <option value="5">Rondônia</option>
                  <option value="6">Roraima</option>
                  <option value="7">Tocantins</option>
                  <option value="8">Alagoas</option>
                  <option value="9">Bahia</option>
                  <option value="10">Ceará</option>
                  <option value="11">Maranhão</option>
                  <option value="12">Paraíba</option>
                  <option value="13">Pernambuco</option>
                  <option value="14">Piauí</option>
                  <option value="15">Rio Grande do Norte</option>
                  <option value="16">Sergipe</option>
                  <option value="17">Goiás</option>
                  <option value="18">Mato Grosso</option>
                  <option value="19">Mato Grosso Sul</option>
                  <option value="20">Distrito Federal</option>
                  <option value="21">Espírito Santo</option>
                  <option value="22">Minas Gerais</option>
                  <option value="23">Rio Janeiro</option>
                  <option value="24">São Paulo</option>
                  <option value="25">Paraná</option>
                  <option value="26">Rio Grande do Sul</option>
                  <option value="27">Santa Catarina</option>
          </select>
          <label>CRO UF</label>
        </div>

<!--CHECK-->
        <a class="waves-effect waves-light btn">Confirm</a>


    </form>
  </div>



      
      


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        