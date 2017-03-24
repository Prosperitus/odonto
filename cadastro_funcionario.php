<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Cadastro Funcionário</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" href="js/jquery.js"></script>  
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta charset="utf-8"/>
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

    <body class = "light-blue lighten-5">
    <!--CABEÇALHO-->
    <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper light-blue">
          <ul id="nav-mobile" class="left">
          <li><a href="board.php">Home</a></li>
          <li><a href="cadastro_funcionario.php">Cadastro Médico</a></li>
          <li><a href="cadastro_paciente.php">Cadastro Paciente</a></li>
          <li><a href="index.php">LogOut</a></li>
        </ul>
      </div>
    </nav>
  </div>

    <!--CLASS/FORM-->
    <div class="row main">
      <form class="col s11 m12" action="backend/addEmployee.php" method="post">

          <!--TITULO-->
            <h3>Cadastro Funcionário</h3>

          <!--NOME-->
          <div class="input-field col s5">
            <i class="material-icons prefix">account_circle</i>
            <input id="funcionario_nome" type="text" class="validate" name="funcionario_nome">
            <label for="funcionario_nome">Nome</label>
          </div>

          <!--SOBRENOME-->
          <div class="input-field col s5">
            <input id="funcionario_sobrenome" type="text" class="validate" name="funcionario_sobrenome">
            <label for="funcionario_sobrenome">Sobrenome</label>
          </div>

          <!--CPF-->
          <div class="input-field col s5">
            <i class="material-icons prefix">perm_identity</i>
            <input id="funcionario_cpf" type="text" class="validate" name="funcionario_cpf">
            <label for="funcionario_cpf">CPF</label>
          </div>

          <!--EMAIL-->
          <div class="input-field col s5">
            <i class="material-icons prefix">email</i>
            <input id="funcionario_email" type="email" class="validate" name="funcionario_email">
            <label for="funcionario_email" data-error="wrong" data-success="right">Email</label>
          </div>

          <!--TELEFONE-->
          <div class="input-field col s5">
            <i class="material-icons prefix">phone</i>
            <input id="funcionario_telefone" type="text" class="validate" name="funcionario_telefone">
            <label for="funcionario_telefone">Telefone Residencial</label>
          </div>

          <div class="input-field col s5">
            <i class="material-icons prefix">phone</i>
            <input id="funcionario_celular" type="text" class="validate" name="funcionario_celular">
            <label for="funcionario_celular">Telefone Celular</label>
          </div>

          <!--DATA DE NASCIMENTO-->
          <div class="input-field col s5">
            <i class="material-icons prefix">today</i>
            <input id="funcionario_nascimento" type="text" class="datepicker" name="funcionario_nascimento">
            <label for="funcionario_nascimento">Data de Nascimento</label>
          </div>

          <!--CONTA DO BANCO-->
          <div class="input-field col s5">
            <i class="material-icons prefix">payment</i>
            <input id="funcionario_banco" type="text" class="validate" name="funcionario_banco">
            <label for="funcionario_banco">Banco</label>
          </div>

          <div class="input-field col s5">
            <i class="material-icons prefix">payment</i>
            <input id="funcionario_conta_banco" type="text" class="validate" name="funcionario_conta_banco">
            <label for="funcionario_conta_banco">Conta Bancaria</label>
          </div>

          <div class="input-field col s5">
            <i class="material-icons prefix">payment</i>
            <input id="funcionario_agencia_banco" type="text" class="validate" name="funcionario_agencia_banco">
            <label for="funcionario_agencia_banco">Agência Bancaria</label>
          </div>

          <!--CEP-->
          <div class="input-field col s5">
            <i class="material-icons prefix">my_location</i>
            <input id="funcionario_cep" type="text" class="validate" name="funcionario_cep">
            <label for="funcionario_cep">CEP</label>
          </div>

          <!--ENDEREÇO-->
          <div class="input-field col s5">
            <i class="material-icons prefix">store</i>
            <input id="funcionario_endereco" type="text" class="validate" name="funcionario_endereco">
            <label for="funcionario_endereco">Endereço</label>
          </div>


          <!--SENHA-->
          <div class="input-field col s5">
            <i class="material-icons prefix">vpn_key</i>
            <input id="funcionario_senha" type="password" class="validate" name="funcionario_senha">
            <label for="funcionario_senha">Senha</label>
          </div>

          <!--CONFIRMAÇÃO DA SENHA-->
          <div class="input-field col s5">
            <i class="material-icons prefix">vpn_key</i>
            <input id="funcionario_confirma_senha" type="password" class="validate" name="funcionario_confirma_senha">
            <label for="funcionario_confirma_senha">Confirmação de Senha</label>
          </div>

          <!--CRO-->
          <div class="input-field col s5">
            <i class="material-icons prefix">class</i>
            <input id="funcionario_cro" type="text" class="validate" name="funcionario_cro">
            <label for="funcionario_cro">Nº   CRO</label>
          </div>


          <!--CRO UF-->

          <div class="input-field col s5" >
            <i class="material-icons prefix">location_on</i>
            <select class="icons" name="funcionario_crouf" id="funcionario_crouf">
              <option value="" disabled selected>CRO UF</option>
              <option value="AC" data-icon="images/acre.jpg" class="left circle">Acre - AC</option>
              <option value="AP" data-icon="images/amapa.jpg" class="left circle">Amapá - AP</option>
              <option value="AM" data-icon="images/amazonas.jpg" class="left circle">Amazonas - AM</option>
              <option value="PA" data-icon="images/para.jpg" class="left circle">Pará - PA</option>
              <option value="RO" data-icon="images/rondonia.jpg" class="left circle">Rondônia - RO</option>
              <option value="RR" data-icon="images/roraima.jpg" class="left circle">Roraima - RR</option>
              <option value="TO" data-icon="images/tocantins.jpg" class="left circle">Tocantins - TO</option>
              <option value="AL" data-icon="images/alagoas.jpg" class="left circle">Alagoas - AL</option>
              <option value="BA" data-icon="images/bahia.jpg" class="left circle">Bahia - BA</option>
              <option value="CE" data-icon="images/ceara.jpg" class="left circle">Ceará - CE</option>
              <option value="MA" data-icon="images/maranhao.jpg" class="left circle">Maranhão - MA</option>
              <option value="PB" data-icon="images/paraiba.jpg" class="left circle">Paraíba - PB</option>
              <option value="PE" data-icon="images/pernambuco.jpg" class="left circle">Pernambuco - PE</option>
              <option value="PI" data-icon="images/piaui.jpg" class="left circle">Piauí - PI</option>
              <option value="RN" data-icon="images/riograndedonorte.jpg" class="left circle">Rio Grande do Norte - RN</option>
              <option value="SE" data-icon="images/sergipe.jpg" class="left circle">Sergipe - SE</option>
              <option value="GO" data-icon="images/goias.jpg" class="left circle">Goiás - GO</option>
              <option value="MT" data-icon="images/matogrosso.jpg" class="left circle">Mato Grosso - MT</option>
              <option value="MS" data-icon="images/matogrossodosul.jpg" class="left circle">Mato Grosso Sul - MS</option>
              <option value="DF" data-icon="images/distritofederal.jpg" class="left circle">Distrito Federal - DF</option>
              <option value="ES" data-icon="images/espiritosanto.jpg" class="left circle">Espírito Santo - ES</option>
              <option value="MG" data-icon="images/minasgerais.jpg" class="left circle">Minas Gerais - MG</option>
              <option value="RJ" data-icon="images/riodejaneiro.jpg" class="left circle">Rio Janeiro - RJ</option>
              <option value="SP" data-icon="images/saopaulo.jpg" class="left circle">São Paulo - SP</option>
              <option value="PR" data-icon="images/parana.jpg" class="left circle">Paraná - PR</option>
              <option value="SC" data-icon="images/santacatarina.jpg" class="left circle">Santa Catarina - SC</option>
              <option value="RS" data-icon="images/riograndedosul.jpg" class="left circle">Rio Grande do Sul - RS</option>
            </select>
          </div>



          <!--DATA DE ADMISSÃO NA EMPRESA-->

          <div class="input-field col s5">
            <i class="material-icons prefix">today</i>
            <input id="funcionario_admissao" type="text" class="datepicker" name="funcionario_admissao">
            <label for="funcionario_admissao">Data de Admissão na Empresa</label>
          </div>

          <!--TIPO DE PERMISSÃO-->

          <div class="input-field col s5" name="funcionario_permissao">
            <i class="material-icons prefix">supervisor_account</i>
            <select multiple>
              <option value="" disabled selected>Tipo de Permissão</option>
              <option value="1">Dentista</option>
              <option value="2">Auxiliar</option>
              <option value="3">Administrador</option>
              <option value="4">Auxiliar Financeiro</option>
            </select>
          </div>

          <!--CHECK-->
            <div class="input-field col s12 main">
              <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Confirmar Cadastro
                <i class="material-icons right">send</i>
              </button>
            </div>

      </form>
    </div>

<!--SCRIPSTs-->
    <script>
      $('.datepicker').pickadate({
      selectYears:100
      });
      $(document).ready(function() {
      $('select').material_select();
      });

    </script>
    <script src="js/mask_funcionario.js"></script>
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

 </body>
</html>
