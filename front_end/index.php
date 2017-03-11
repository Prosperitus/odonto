
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
      <form class="col s8" action="backend/addUser.php" method="post"> 
    
      <!--NOME-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix_name" type="text" class="validate" name="name">
          <label for="icon_prefix_name">Nome</label>
        </div>

        <!--SOBRENOME-->
        <div class="input-field col s5">
          <input id="last_name" type="text" class="validate" name="last_name">
          <label for="last_name">Sobrenome</label>
        </div>
        
        <!--CPF-->
        <div class="input-field col s5">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix_cpf" type="text" class="validate" name="cpf">
          <label for="icon_prefix_cpf">CPF</label>
        </div>

        <!--EMAIL-->      
        <div class="input-field col s5">
          <i class="material-icons prefix">email</i>
          <input id="icon_prefix_email" type="email" class="validate" name="email">
          <label for="icon_prefix_email" data-error="wrong" data-success="right">Email</label>
        </div>

        <!--TELEFONE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input id="icon_prefix_phone" type="text" class="validate" name="phone">
          <label for="icon_prefix_phone">Telefone</label>
        </div> 

        <!--DATA DE NASCIMENTO-->   
        <div class="input-field col s5"> 
          <i class="material-icons prefix">today</i>     
          <input id="icon_prefix_birthday" type="text" class="datepicker" name="birthday">
          <label for="icon_prefix_birthday">Data de Nascimento</label>    
        </div> 

        <!--CONTA DO BANCO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input id="icon_prefix_bank" type="text" class="validate" name="bank">
          <label for="icon_prefix_bank">Conta Bancaria</label>
        </div>

        <!--CEP-->
        <div class="input-field col s5">
          <i class="material-icons prefix">my_location</i>
          <input id="icon_prefix_cep" type="text" class="validate" name="cep">
          <label for="icon_prefix_cep">CEP</label>
        </div>

        <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input id="icon_prefix_address" type="text" class="validate" name="address">
          <label for="icon_prefix_address">Endereço</label>
        </div>


        <!--SENHA-->     
        <div class="input-field col s5">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_prefix_password" type="password" class="validate" name="password">
          <label for="icon_prefix_password">Senha</label>
        </div>

          <!--CONFIRMAÇÃO DA SENHA-->
          <div class="input-field col s5">
            <i class="material-icons prefix">vpn_key</i>
            <input id="icon_prefix_confirm_password" type="password" class="validate" name="confirm_password">
            <label for="icon_prefix_confirm_password">Confirmação de Senha</label>
          </div>

        <!--CRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">class</i>
          <input id="icon_prefix_cro type="text" class="validate" name="cro">
          <label for="icon_prefix_cro">Nº   CRO</label>
        </div>
      
          
          <!--CRO UF-->

          <div class="input-field col s5">
            <select class="icons">  
              <option value="" disabled selected>UF CRO</option>
              <option value="1" data-icon="images/yuna.jpg" class="left circle">Acre - AC</option>
              <option value="2" data-icon="images/yuna.jpg" class="left circle">Amapá - AP</option>
              <option value="3" data-icon="images/yuna.jpg" class="left circle">Amazonas - AM</option>
              <option value="4" data-icon="images/yuna.jpg" class="left circle">Pará - PA</option>
              <option value="5" data-icon="images/yuna.jpg" class="left circle">Rondônia - RO</option>
              <option value="6" data-icon="images/yuna.jpg" class="left circle">Roraima - RR</option>
              <option value="7" data-icon="images/yuna.jpg" class="left circle">Tocantins - TO</option>
              <option value="8" data-icon="images/yuna.jpg" class="left circle">Alagoas - AL</option>
              <option value="9" data-icon="images/yuna.jpg" class="left circle">Bahia - BA</option>
              <option value="10" data-icon="images/yuna.jpg" class="left circle">Ceará - CE</option>
              <option value="11" data-icon="images/yuna.jpg" class="left circle">Maranhão - MA</option>
              <option value="12" data-icon="images/yuna.jpg" class="left circle">Paraíba - PB</option>
              <option value="13" data-icon="images/yuna.jpg" class="left circle">Pernambuco - PE</option>
              <option value="14" data-icon="images/yuna.jpg" class="left circle">Piauí - PI</option>
              <option value="15" data-icon="images/yuna.jpg" class="left circle">Rio Grande do Norte - RN</option>
              <option value="16" data-icon="images/yuna.jpg" class="left circle">Sergipe - SE</option>
              <option value="17" data-icon="images/yuna.jpg" class="left circle">Goiás - GO</option>
              <option value="18" data-icon="images/yuna.jpg" class="left circle">Mato Grosso - MT</option>
              <option value="19" data-icon="images/yuna.jpg" class="left circle">Mato Grosso Sul - MS</option>
              <option value="20" data-icon="images/yuna.jpg" class="left circle">Distrito Federal - DF</option>
              <option value="21" data-icon="images/yuna.jpg" class="left circle">Espírito Santo - ES</option>
              <option value="22" data-icon="images/yuna.jpg" class="left circle">Minas Gerais - MG</option>
              <option value="23" data-icon="images/yuna.jpg" class="left circle">example 3>Rio Janeiro - RJ</option>
              <option value="24" data-icon="images/yuna.jpg" class="left circle">example 3>São Paulo - SP</option>
              <option value="25" data-icon="images/yuna.jpg" class="left circle">example 3>Paraná - PR</option>
              <option value="26" data-icon="images/yuna.jpg" class="left circle">example 3>Rio Grande do Sul - RS</option>
              <option value="27" data-icon="images/yuna.jpg" class="left circle">example 3>Santa Catarina - SC</option>
            </select>
            <label>Images in select</label>
          </div>

        <!--CHECK-->
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light " type="submit" name="action">Confirmar Cadastro
              <i class="material-icons right">send</i>
            </button>
          </div>

      </form>
    </div>
            <script>
              $('.datepicker').pickadate({
              selectMonths:15 // Creates a dropdown of 15 years to control year
              });
            </script>
  </body>
</html>
