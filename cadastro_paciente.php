
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Cadastro Paciente</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" href="js/jquery.js"></script>  
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
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

  <body class = "light-blue lighten-5">
    <!--CABEÇALHO-->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper light-blue">
          <ul id="nav-mobile" class="left">
            <li><a href="board.php">Home</a></li>
            <li><a href="cadastro_funcionario.php">Cadastro Funcionário</a></li>
            <li><a href="cadastro_hospital.php">Cadastro Hospital</a></li>

          </ul>
          <ul id="nav-mobile" class="right">
            <li><a href="index.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </div>

    <!--CLASS/FORM-->
    <div class="row">
      <form class="col s11 m12" action="backend/addPatient.php" method="post">

      <!--TITULO-->
        <h3>Cadastro Paciente</h3>

      <!--NOME-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input name="nome_paciente" id="nome_paciente" type="text" class="validate">
          <label for="nome_paciente">Nome</label>
        </div>

        <!--SOBRENOME-->
        <div class="input-field col s5">
          <input name="sobrenome_paciente" id="sobrenome_paciente" type="text" class="validate">
          <label for="sobrenome_paciente">Sobrenome</label>
        </div>

		<!--CPF-->
        <div class="input-field col s5">
         <i class="material-icons prefix">web</i>
          <input name="CPF" id="cpf" type="text" class="validate">
          <label for="CPF">CPF</label>
        </div>

        <!--DATA DE NASCIMENTO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input name="date_paciente" id="date_paciente" type="text" class="datepicker" >
          <label for="date_paciente">Data de Nascimento</label>
        </div>

         <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="endereco_paciente" id="endereco_paciente" type="text" class="validate">
          <label for="endereco_paciente">Endereço</label>
        </div>

         <!--BAIRRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="bairro_paciente" id="bairro_paciente" type="text" class="validate">
          <label for="bairro_paciente">Bairro</label>
        </div>

         <!--CIDADE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="cidade_paciente" id="cidade_paciente" type="text" class="validate">
          <label for="cidade_paciente">Cidade</label>
        </div>

         <!--CEP-->
        <div class="input-field col s5">
          <i class="material-icons prefix">my_location</i>
          <input name="cep_paciente" id="cep_paciente" type="text" class="validate">
          <label for="cep_paciente">CEP</label>
        </div>

         <!--PLANO DE SAÚDE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input name="plano_de_saude" id="plano_de_saude" type="text" class="validate">
          <label for="plano_de_saude">Plano de Saúde do Paciente</label>
        </div>

         <!--NOME DO RESPONSÁVEL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <input name="nome_responsavel" id="nome_responsavel" type="text" class="validate">
          <label for="nome_responsavel">Nome do Responsável</label>
        </div>

         <!--TELEFONE DO RESPONSÁVEL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_responsavel" id="telefone_responsavel" type="text" class="validate">
          <label for="telefone_responsavel">Telefone do Responsável</label>
        </div>

         <!--UF-->
        <div class="input-field col s5" >
            <i class="material-icons prefix">location_on</i>
            <select class="icons" name="paciente_uf" id="paciente_uf">
              <option value="AC" data-icon="images/acre.jpg" class="left circle">Acre - AC</option>
              <option value="AL" data-icon="images/alagoas.jpg" class="left circle">Alagoas - AL</option>
              <option value="AP" data-icon="images/amapa.jpg" class="left circle">Amapá - AP</option>
              <option value="AM" data-icon="images/amazonas.jpg" class="left circle">Amazonas - AM</option>
              <option value="BA" data-icon="images/bahia.jpg" class="left circle">Bahia - BA</option>
              <option value="CE" data-icon="images/ceara.jpg" class="left circle">Ceará - CE</option>
              <option value="DF" data-icon="images/distritofederal.jpg" class="left circle">Distrito Federal - DF</option>
              <option value="ES" data-icon="images/espiritosanto.jpg" class="left circle">Espírito Santo - ES</option>
              <option value="GO" data-icon="images/goias.jpg" class="left circle">Goiás - GO</option>
              <option value="MA" data-icon="images/maranhao.jpg" class="left circle">Maranhão - MA</option>
              <option value="MT" data-icon="images/matogrosso.jpg" class="left circle">Mato Grosso - MT</option>
              <option value="MS" data-icon="images/matogrossodosul.jpg" class="left circle">Mato Grosso Sul - MS</option>
              <option value="MG" data-icon="images/minasgerais.jpg" class="left circle">Minas Gerais - MG</option>
              <option value="PA" data-icon="images/para.jpg" class="left circle">Pará - PA</option>
              <option value="PB" data-icon="images/paraiba.jpg" class="left circle">Paraíba - PB</option>
              <option value="PR" data-icon="images/parana.jpg" class="left circle">Paraná - PR</option>
              <option value="PE" data-icon="images/pernambuco.jpg" class="left circle">Pernambuco - PE</option>
              <option value="PI" data-icon="images/piaui.jpg" class="left circle">Piauí - PI</option>
              <option value="RN" data-icon="images/riograndedonorte.jpg" class="left circle">Rio Grande do Norte - RN</option>
              <option value="RS" data-icon="images/riograndedosul.jpg" class="left circle">Rio Grande do Sul - RS</option>
              <option value="RJ" data-icon="images/riodejaneiro.jpg" class="left circle">Rio Janeiro - RJ</option>
              <option value="RO" data-icon="images/rondonia.jpg" class="left circle">Rondônia - RO</option>
              <option value="RR" data-icon="images/roraima.jpg" class="left circle">Roraima - RR</option>
              <option value="SC" data-icon="images/santacatarina.jpg" class="left circle">Santa Catarina - SC</option>
              <option value="SP" data-icon="images/saopaulo.jpg" class="left circle">São Paulo - SP</option>
              <option value="SE" data-icon="images/sergipe.jpg" class="left circle">Sergipe - SE</option>
              <option value="TO" data-icon="images/tocantins.jpg" class="left circle">Tocantins - TO</option>
            </select>
          </div>

        <!--GENERO-->
        <div class="input-field col s5" >
          <select class="icons" name="genero_paciente" id="genero_paciente">
            <i class="material-icons prefix">face</i>
            <option value="" disabled selected>Genero do Paciente</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
          </select>
        </div>

        <!--CLINICA-->
        <div class="input-field col s5">
          <p>
            <input type="checkbox" id="clinica" name="clinica" />
            <label for="clinica">Paciente da Clinica</label>
          </p>
        </div>

        <!--CHECK-->
          <div class="input-field col s9">
            <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Confirmar Cadastro
              <i class="material-icons right">send</i>
            </button>
          </div>

      </form>
    </div>

      <!--FOOTER-->
        <footer class="page-footer light-blue">
          <div class="container">
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

    <!--SCRIPSTs-->
    <script>
      $('.datepicker').pickadate({
      selectYears:100
      });
      $(document).ready(function() {
      $('select').material_select();
      });
    </script>
    <script src="js/mask_paciente.js"></script>
  </body>
</html>
