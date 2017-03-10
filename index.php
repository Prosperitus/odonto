
<!DOCTYPE html>
<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" href="js/jquery.js"></script>  
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta charset="utf-8"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.maskedinput.js"></script>
    <script>
	jQuery(function($){
	$("#inputdata").mask("99/99/9999");
	});
    </script>
  </head>

  <body>
    <!--CABEÇALHO-->
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo right">HOME</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="#">Home</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Sing Up</a></li>
          <li><a href="#">UTI Patients</a></li>
          <li><a href="#">Patients History</a></li>
        </ul>
      </div>
    </nav>

    <!--CLASS/FORM-->
    <div class="row">
      <form class="col s8"> 
    
      <!--NOME-->   
        <div class="input-field col s10">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Full Name</label>
        </div>

        <!--SOBRENOME
        <div class="input-field col s5">
          <input id="last_name" type="text" class="validate">
          <label for="last_name"$("#campoDa>Last Name</label>
        </div>
        -->
        
        <!--CPF-->
        <div class="input-field col s5">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">CPF</label>
        </div>

        <!--MATRÍCULA-->
        <div class="input-field col s5">
          <i class="material-icons prefix">description</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Enrolment</label>
        </div>

        <!--EMAIL-->      
        <div class="input-field col s5">
          <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate">
          <label for="email" data-error="wrong" data-success="right">Email</label>
        </div>

        <!--TELEFONE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Telephone</label>
        </div> 

        <!--DATA DE NASCIMENTO-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input id="inputdata" type="date" class="datepicker">
        </div> 

        <!--CONTA DO BANCO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Bank Account</label>
        </div>

        <!--CEP-->
        <div class="input-field col s5">
          <i class="material-icons prefix">my_location</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">CEP</label>
        </div>

        <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Address</label>
        </div>

        <!--DATA DE ADMISSÃO-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input type="date" class="datepicker">
        </div> 

        <!--SENHA-->     
        <div class="input-field col s5">
          <i class="material-icons prefix">vpn_key</i>
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>

          <!--CONFIRMAÇÃO DA SENHA-->
          <div class="input-field col s5">
            <i class="material-icons prefix">vpn_key</i>
            <input id="confirm_password" type="password" class="validate">
            <label for="confirm_password">Confirm Password</label>
          </div>

        <!--CRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">class</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nº   CRO</label>
        </div>
      
          <!--CRO UF-->
          <div class="input-field col s5">
            <select class="browser-default">  
              <option value="" disabled selected>UF CRO</option>
              <option value="1">Acre - AC</option>
              <option value="2">Amapá - AP</option>
              <option value="3">Amazonas - AM</option>
              <option value="4">Pará - PA</option>
              <option value="5">Rondônia - RO</option>
              <option value="6">Roraima - RR</option>
              <option value="7">Tocantins - TO</option>
              <option value="8">Alagoas - AL</option>
              <option value="9">Bahia - BA</option>
              <option value="10">Ceará - CE</option>
              <option value="11">Maranhão - MA</option>
              <option value="12">Paraíba - PB</option>
              <option value="13">Pernambuco - PE</option>
              <option value="14">Piauí - PI</option>
              <option value="15">Rio Grande do Norte - RN</option>
              <option value="16">Sergipe - SE</option>
              <option value="17">Goiás - GO</option>
              <option value="18">Mato Grosso - MT</option>
              <option value="19">Mato Grosso Sul - MS</option>
              <option value="20">Distrito Federal - DF</option>
              <option value="21">Espírito Santo - ES</option>
              <option value="22">Minas Gerais - MG</option>
              <option value="23">Rio Janeiro - RJ</option>
              <option value="24">São Paulo - SP</option>
              <option value="25">Paraná - PR</option>
              <option value="26">Rio Grande do Sul - RS</option>
              <option value="27">Santa Catarina - SC</option>
            </select>
          </div>

        <!--CHECK-->
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light " type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </div>

      </form>
    </div>
  </body>
</html>
