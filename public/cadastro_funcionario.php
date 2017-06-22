<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
  	<title>EasyOdonto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<script type="text/javascript" src="../dataTables/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../dataTables/media/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="chrome://global/skin/" />
	<script type="text/javascript" src="../js/scripts.js"></script>
    <script src="../validation/validacao_cpf.js"></script> 
	<link type="text/css" rel="stylesheet" href="../css/style.css"/>
  </head>

  <body>

    <?php if(isset($_SESSION['Employee'])){
    	$user = $_SESSION['Employee'];
    ?>

    <!--CABEÇALHO-->
      <!--SIDENAV-->
	<header>
		<nav>
		  <div class="nav-wrapper light-blue">
			<div class="col s2">
			  <ul class="left">
				<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
			  </ul>
			</div>
		  </div>
		</nav>

		<div class="userView position:relative">
		  <ul id="slide-out" class="side-nav ">
			<li>
			  <div class="userView">
				<div class="background blue"></div>
				<a href="#!user"><img class="circle" src="../images/medico.jpg"></a>
				<a href="#!name"><span class="white-text name">Bem Vindo,</span></a>
				<a href="#!email"><span class="white-text email" style="font-weight: bold"><?=$user->name.' '.$user->surname?></span></a>
			  </div>
			</li>
			<li><a href="busca_hospital.php"><i class="material-icons">business</i>Hospitais</a></li>
			<li><a href="busca_paciente.php"><i class="material-icons">assignment_ind</i>Pacientes</a></li>
			<li><a href="busca_funcionario.php"><i class="material-icons">perm_identity</i>Funcionários</a></li>
			<li><a href="atendimentos.php"><i class="material-icons">view_array</i>Atendimentos</a></li>
			<li><a href="graficos.php"><i class="material-icons">insert_chart</i>Grafico</a></li>
			<li><a href="../request/logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
		  </ul>
		</div>
	</header>

    <?php }else{?>
    	<nav>
      	<div class="nav-wrapper light-blue">
      	<div class="col s2">
    	</div>
        <div class="row">
        </div>
      </div>
    </nav>
    <?php }?>
    <!-- <script src="../validation/funcionario_script.js"></script>-->

    <!--CLASS/FORM-->
    <div class="row margemCentro">
      <form class="col s11 m12" action="../request/addEmployee.php" method="post">
        <!--TITULO-->
        <h3>Cadastro Funcionário</h3>

        <!--NOME-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input id="funcionario_nome" type="text" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" class="validate" name="funcionario_nome" required>
          <label for="funcionario_nome">Nome</label>
        </div>

        <!--SOBRENOME-->
        <div class="input-field col s5">
		      <i class="material-icons prefix">account_circle</i>
          <input id="funcionario_sobrenome" type="text" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" class="validate" name="funcionario_sobrenome" required>
          <label for="funcionario_sobrenome">Sobrenome</label>
        </div>

        <!--CPF-->
        <div class="input-field col s5">
          <i class="material-icons prefix">perm_identity</i>
          <input id="funcionario_cpf" type="text" title="000.000.000-00" class="validate" name="funcionario_cpf" onblur="TestaCPF()" required>
          <label for="funcionario_cpf">CPF</label>
        </div>

        <!--EMAIL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">email</i>
          <input id="funcionario_email" type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$" class="validate" name="funcionario_email" required>
          <label for="funcionario_email">Email</label>
        </div>

        <!--TELEFONE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input id="funcionario_telefone" type="text" title="(00) 00000-0000" class="validate" name="funcionario_telefone" required>
          <label for="funcionario_telefone">Telefone Residencial</label>
        </div>

        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input id="funcionario_celular" type="text" title="(00) 00000-0000" class="validate" name="funcionario_celular" required>
          <label for="funcionario_celular">Telefone Celular</label>
        </div>

        <!--DATA DE NASCIMENTO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input id="funcionario_nascimento" type="text" class="datepicker" name="funcionario_nascimento" required>
          <label for="funcionario_nascimento">Data de Nascimento</label>
        </div>

        <!--INFORMACOES BANCARIAS-->
        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input id="funcionario_banco" type="text" class="validate" name="funcionario_banco" required>
          <label for="funcionario_banco">Banco</label>
        </div>

        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input id="funcionario_conta_banco" type="text" class="validate" name="funcionario_conta_banco" required>
          <label for="funcionario_conta_banco">Conta Bancaria</label>
        </div>

        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input id="funcionario_agencia_banco" type="text" class="validate" name="funcionario_agencia_banco" required>
          <label for="funcionario_agencia_banco">Agência Bancaria</label>
        </div>

        <!--CEP-->
        <div class="input-field col s5">
          <i class="material-icons prefix">my_location</i>
          <input id="funcionario_cep" type="text" title="00000-000" class="validate" name="funcionario_cep" required>
          <label for="funcionario_cep">CEP</label>
        </div>

        <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input id="funcionario_endereco" type="text" class="validate" name="funcionario_endereco" required>
          <label for="funcionario_endereco">Endereço</label>
        </div>

        <!--CRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">class</i>
          <input id="funcionario_cro" type="text" title="00.000" class="validate" name="funcionario_cro" required>
          <label for="funcionario_cro">Nº   CRO</label>
        </div>

        <!--CRO UF-->
        <div class="input-field col s5" >
          <i class="material-icons prefix">location_on</i>
          <select class="icons" name="funcionario_crouf" id="funcionario_crouf" required>
            <option value="" disabled selected>UF - Unidade da Federação</option>
            <option value="AC" data-icon="../images/acre.jpg" class="left circle">Acre - AC</option>
            <option value="AL" data-icon="../images/alagoas.jpg" class="left circle">Alagoas - AL</option>
            <option value="AP" data-icon="../images/amapa.jpg" class="left circle">Amapá - AP</option>
            <option value="AM" data-icon="../images/amazonas.jpg" class="left circle">Amazonas - AM</option>
            <option value="BA" data-icon="../images/bahia.jpg" class="left circle">Bahia - BA</option>
            <option value="CE" data-icon="../images/ceara.jpg" class="left circle">Ceará - CE</option>
            <option value="DF" data-icon="../images/distritofederal.jpg" class="left circle">Distrito Federal - DF</option>
            <option value="ES" data-icon="../images/espiritosanto.jpg" class="left circle">Espírito Santo - ES</option>
            <option value="GO" data-icon="../images/goias.jpg" class="left circle">Goiás - GO</option>
            <option value="MA" data-icon="../images/maranhao.jpg" class="left circle">Maranhão - MA</option>
            <option value="MT" data-icon="../images/matogrosso.jpg" class="left circle">Mato Grosso - MT</option>
            <option value="MS" data-icon="../images/matogrossodosul.jpg" class="left circle">Mato Grosso do Sul - MS</option>
            <option value="MG" data-icon="../images/minasgerais.jpg" class="left circle">Minas Gerais - MG</option>
            <option value="PA" data-icon="../images/para.jpg" class="left circle">Pará - PA</option>
            <option value="PB" data-icon="../images/paraiba.jpg" class="left circle">Paraíba - PB</option>
            <option value="PR" data-icon="../images/parana.jpg" class="left circle">Paraná - PR</option>
            <option value="PE" data-icon="../images/pernambuco.jpg" class="left circle">Pernambuco - PE</option>
            <option value="PI" data-icon="../images/piaui.jpg" class="left circle">Piauí - PI</option>
            <option value="RN" data-icon="../images/riograndedonorte.jpg" class="left circle">Rio Grande do Norte - RN</option>
            <option value="RS" data-icon="../images/riograndedosul.jpg" class="left circle">Rio Grande do Sul - RS</option>
            <option value="RJ" data-icon="../images/riodejaneiro.jpg" class="left circle">Rio de Janeiro - RJ</option>
            <option value="RO" data-icon="../images/rondonia.jpg" class="left circle">Rondônia - RO</option>
            <option value="RR" data-icon="../images/roraima.jpg" class="left circle">Roraima - RR</option>
            <option value="SC" data-icon="../images/santacatarina.jpg" class="left circle">Santa Catarina - SC</option>
            <option value="SP" data-icon="../images/saopaulo.jpg" class="left circle">São Paulo - SP</option>
            <option value="SE" data-icon="../images/sergipe.jpg" class="left circle">Sergipe - SE</option>
            <option value="TO" data-icon="../images/tocantins.jpg" class="left circle">Tocantins - TO</option>
          </select>
        </div>

        <!--DATA DE ADMISSÃO NA EMPRESA-->
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input id="funcionario_admissao" type="text" class="datepicker" name="funcionario_admissao" required>
          <label for="funcionario_admissao">Data de Admissão na Empresa</label>
        </div>

        <!--TIPO DE PERMISSÃO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <select multiple name="permissao" id="permissao" required>
            <option value="" disabled selected>Tipo de Permissão</option>
            <option value="1">Dentista</option>
            <option value="2">Auxiliar</option>
            <option value="3">Administrador</option>
            <option value="4">Auxiliar Financeiro</option>
          </select>
        </div>

  	<!--SENHA-->
        <div class="input-field col s5">
          <i class="material-icons prefix">vpn_key</i>
          <input id="funcionario_senha" type="password" class="validate" title="A senha deve conter no mínimo 6 caracteres" minlength="6" name="funcionario_senha" required>
          <label for="funcionario_senha">Senha</label>
        </div>

        <!--MOSTRAR A SENHA-->
        <div class="input-field col s5">
          <i class="material-icons prefix">vpn_key</i>
	         <input id="funcionario_mostrar_senha" type="checkbox" onchange="document.getElementById('funcionario_senha').type = this.checked ? 'text' : 'password'">
          <label for="funcionario_mostrar_senha">Mostrar Senha</label>
        </div>

        <!--CHECK-->
        <div class="input-field col s12 main">
          <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Confirmar Cadastro
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
<?php require_once "rodape.php";
