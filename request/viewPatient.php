<?php 

	require_once "../controller/verifyLogin.php";
	require_once "../controller/patient.php";
	verifyLogRedirect();
	
	$id = $_GET['id'];
	$pacienteControle = new PatientController();	
	$pat = $pacienteControle->searchId($id);	
?>
<link type="text/css" rel="stylesheet" href="../css/style.css"/>
<script type="text/javascript" src="../js/scripts.js"></script>
<script src="../js/mask_paciente.js"></script>


<form class="form" id="formEditPatient" method="POST" action="">
<div class="row">
      <form class="col s11 m12" action="" method="post">
        <!--TITULO-->
		<div class="divModalTitles">
			<h3 class="center modalTitles">Dados do Paciente</h3>
		</div>
		<input value="<?=$pat->id?>" type="hidden" name="paciente_id" id="paciente_id" required>

        <!--NOME-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input name="nome_paciente" id="nome_paciente" value="<?=$pat->name?>"  title="Apenas Letras" type="text" class="validate" required>
          <label for="nome_paciente" id="noneTransformLabel">Nome</label>
        </div>

        <!--SOBRENOME-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input name="sobrenome_paciente" id="sobrenome_paciente" value="<?=$pat->surname?>" title="Apenas Letras" type="text" class="validate" required>
          <label for="sobrenome_paciente" id="noneTransformLabel">Sobrenome</label>
        </div>

        <!--CPF-->
        <div class="input-field col s5">
          <i class="material-icons prefix">web</i>
          <input name="cpf" id="cpf" value="<?=$pat->social_security?>" title="000.000.000-00" type="text" class="validate" onblur="TestaCPFPaciente()" required>
          <label for="cpf" id="noneTransformLabel">CPF</label>
        </div>
    
        <!--EMAIL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">email</i>
          <input id="paciente_email" type="email" value="<?=$pat->email?>" class="validate"  name="paciente_email" required>
          <label for="paciente_email" id="noneTransformLabel">Email</label>
        </div>

        <!--DATA DE NASCIMENTO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input name="date_paciente" id="date_paciente" value="<?=$pat->birthdate?>" type="text" class="datepicker" required>
          <label for="date_paciente" id="noneTransformLabel">Data de Nascimento</label>
        </div>

        <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="endereco_paciente" id="endereco_paciente" value="<?=$pat->address?>"  type="text" class="validate" required>
          <label for="endereco_paciente" id="noneTransformLabel">Endereço</label>
        </div>

        <!--BAIRRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="bairro_paciente" id="bairro_paciente" value="<?=$pat->neighborhood?>"  type="text" class="validate" required>
          <label for="bairro_paciente" id="noneTransformLabel">Bairro</label>
        </div>

        <!--CIDADE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="cidade_paciente" id="cidade_paciente" value="<?=$pat->city?>"  title="Apenas Letras" type="text" class="validate" required>
          <label for="cidade_paciente" id="noneTransformLabel">Cidade</label>
        </div>

        <!--CEP-->
        <div class="input-field col s5">
          <i class="material-icons prefix">my_location</i>
          <input name="cep_paciente" id="cep_paciente" value="<?=$pat->zip_code?>" title="00000-000" type="text" class="validate" required>
          <label for="cep_paciente" id="noneTransformLabel">CEP</label>
        </div>

        <!--PLANO DE SAÚDE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input name="plano_de_saude" id="plano_de_saude" value="<?=$pat->health_insurance?>" type="text" class="validate" required>
          <label for="plano_de_saude" id="noneTransformLabel">Plano de Saúde do Paciente</label>
        </div>

        <!--NOME DO RESPONSÁVEL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <input name="nome_responsavel" id="nome_responsavel" value="<?=$pat->responsible1?>" pattern="^\S[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate" required>
          <label for="nome_responsavel" id="noneTransformLabel">Nome do Responsável 1</label>
        </div>
  
        <!--TELEFONE DO RESPONSÁVEL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_responsavel" id="telefone_responsavel" value="<?=$pat->telephone_r1?>" title="(00) 00000-0000" type="text" class="validate" required>
          <label for="telefone_responsavel" id="noneTransformLabel">Telefone do Responsável 1</label>
        </div>

        <!--NOME DO RESPONSÁVEL 2-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <input name="nome_responsavel_2" id="nome_responsavel_2" value="<?=$pat->responsible2?>" title="Apenas Letras" type="text" class="validate" >
          <label for="nome_responsavel_2" id="noneTransformLabel">Nome do Responsável 2</label>
        </div>

        <!--TELEFONE DO RESPONSÁVEL 2-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_responsavel_2" id="telefone_responsavel_2" value="<?=$pat->telephone_r2?>"  title="(00) 00000-0000" type="text" class="validate" >
          <label for="telefone_responsavel_2" id="noneTransformLabel">Telefone do Responsável 2</label>
        </div>

        <!--UF-->
        <div class="input-field col s5" >
          <i class="material-icons prefix">location_on</i>
          <select class="icons" name="paciente_uf" id="paciente_uf">
            <option value="" disabled selected>UF - Unidade da Federação</option>
            <option value="AC" <?php echo $pat->state=='AC'?'selected':'';?> data-icon="../images/acre.jpg" class="left circle">Acre - AC</option>
            <option value="AL" <?php echo $pat->state=='AL'?'selected':'';?> data-icon="../images/alagoas.jpg" class="left circle">Alagoas - AL</option>
            <option value="AP" <?php echo $pat->state=='AP'?'selected':'';?> data-icon="../images/amapa.jpg" class="left circle">Amapá - AP</option>
            <option value="AM" <?php echo $pat->state=='AM'?'selected':'';?> data-icon="../images/amazonas.jpg" class="left circle">Amazonas - AM</option>
            <option value="BA" <?php echo $pat->state=='BA'?'selected':'';?> data-icon="../images/bahia.jpg" class="left circle">Bahia - BA</option>
            <option value="CE" <?php echo $pat->state=='CE'?'selected':'';?> data-icon="../images/ceara.jpg" class="left circle">Ceará - CE</option>
            <option value="DF" <?php echo $pat->state=='DF'?'selected':'';?> data-icon="../images/distritofederal.jpg" class="left circle">Distrito Federal - DF</option>
            <option value="ES" <?php echo $pat->state=='ES'?'selected':'';?> data-icon="../images/espiritosanto.jpg" class="left circle">Espírito Santo - ES</option>
            <option value="GO" <?php echo $pat->state=='GO'?'selected':'';?> data-icon="../images/goias.jpg" class="left circle">Goiás - GO</option>
            <option value="MA" <?php echo $pat->state=='MA'?'selected':'';?> data-icon="../images/maranhao.jpg" class="left circle">Maranhão - MA</option>
            <option value="MT" <?php echo $pat->state=='MT'?'selected':'';?> data-icon="../images/matogrosso.jpg" class="left circle">Mato Grosso - MT</option>
            <option value="MS" <?php echo $pat->state=='MS'?'selected':'';?> data-icon="../images/matogrossodosul.jpg" class="left circle">Mato Grosso do Sul - MS</option>
            <option value="MG" <?php echo $pat->state=='MG'?'selected':'';?> data-icon="../images/minasgerais.jpg" class="left circle">Minas Gerais - MG</option>
            <option value="PA" <?php echo $pat->state=='PA'?'selected':'';?> data-icon="../images/para.jpg" class="left circle">Pará - PA</option>
            <option value="PB" <?php echo $pat->state=='PB'?'selected':'';?> data-icon="../images/paraiba.jpg" class="left circle">Paraíba - PB</option>
            <option value="PR" <?php echo $pat->state=='PR'?'selected':'';?> data-icon="../images/parana.jpg" class="left circle">Paraná - PR</option>
            <option value="PE" <?php echo $pat->state=='PE'?'selected':'';?> data-icon="../images/pernambuco.jpg" class="left circle">Pernambuco - PE</option>
            <option value="PI" <?php echo $pat->state=='PI'?'selected':'';?> data-icon="../images/piaui.jpg" class="left circle">Piauí - PI</option>
            <option value="RN" <?php echo $pat->state=='RN'?'selected':'';?> data-icon="../images/riograndedonorte.jpg" class="left circle">Rio Grande do Norte - RN</option>
            <option value="RS" <?php echo $pat->state=='RS'?'selected':'';?> data-icon="../images/riograndedosul.jpg" class="left circle">Rio Grande do Sul - RS</option>
            <option value="RJ" <?php echo $pat->state=='RJ'?'selected':'';?> data-icon="../images/riodejaneiro.jpg" class="left circle">Rio de Janeiro - RJ</option>
            <option value="RO" <?php echo $pat->state=='RO'?'selected':'';?> data-icon="../images/rondonia.jpg" class="left circle">Rondônia - RO</option>
            <option value="RR" <?php echo $pat->state=='RR'?'selected':'';?> data-icon="../images/roraima.jpg" class="left circle">Roraima - RR</option>
            <option value="SC" <?php echo $pat->state=='SC'?'selected':'';?> data-icon="../images/santacatarina.jpg" class="left circle">Santa Catarina - SC</option>
            <option value="SP" <?php echo $pat->state=='SP'?'selected':'';?> data-icon="../images/saopaulo.jpg" class="left circle">São Paulo - SP</option>
            <option value="SE" <?php echo $pat->state=='SE'?'selected':'';?> data-icon="../images/sergipe.jpg" class="left circle">Sergipe - SE</option>
            <option value="TO" <?php echo $pat->state=='TO'?'selected':'';?> data-icon="../images/tocantins.jpg" class="left circle">Tocantins - TO</option>
          </select>
        </div>

        <!--GENERO-->
        <div class="input-field col s5" >
          <i class="material-icons prefix">face</i>
          <select class="icons" name="genero_paciente" id="genero_paciente">
            <option value="" disabled selected>Gênero do Paciente</option>
            <option value="1" <?php echo $pat->gender=='1'?'selected':'';?>>Masculino</option>
            <option value="2" <?php echo $pat->gender=='2'?'selected':'';?>>Feminino</option>
          </select>
        </div>
		
	  <?php if($pat->physician_assistant == "1"){ ?>
      <div id="div_medico" style="display:block">
        <!--NOME DO MÉDICO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <input name="nome_medico_responsavel" value="<?=$pat->name_phy_assistant?>" id="nome_medico_responsavel"  title="Apenas Letras" type="text" class="validate">
          <label for="nome_medico_responsavel" id="noneTransformLabel">Nome do Médico</label>
        </div>
  
  
        <!--TELEFONE DO MÉDICO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_medico_responsavel" value="<?=$pat->telephone_phy_assistant?>" id="telefone_medico_responsavel" title="(00) 00000-0000" type="text" class="validate">
          <label for="telefone_medico_responsavel" id="noneTransformLabel">Telefone do Médico</label>
        </div>

        <!--ESPECIALIDADE DO MÉDICO-->
        <div class="input-field col s5">   
          <i class="material-icons prefix">web</i>
          <input name="especialidade_medico_responsavel" value="<?=$pat->speciality_phy_assistant?>" id="especialidade_medico_responsavel" title="Apenas Letras" type="text" class="validate">
          <label for="especialidade_medico_responsavel" id="noneTransformLabel">Especialidade do Médico</label>
        </div>
      </div>
	
        <!--MEDICO RESPONSAVEL-->
        <div class="input-field col s10" style="margin-bottom: 0%;margin-top: -1%;">
          <p>
            <input id="medico_responsavel" checked type="checkbox" name="medico_responsavel" onclick="bloqueio('div_medico')"/>
            <label for="medico_responsavel">Médico Responsável</label>
          </p>
        </div>
	
		<?php }else{ ?>
		
		<div id="div_medico" style="display:none">
        <!--NOME DO MÉDICO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <input name="nome_medico_responsavel" id="nome_medico_responsavel"  title="Apenas Letras" type="text" class="validate">
          <label for="nome_medico_responsavel" id="noneTransformLabel">Nome do Médico</label>
        </div>
  
  
        <!--TELEFONE DO MÉDICO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_medico_responsavel" id="telefone_medico_responsavel" title="(00) 00000-0000" type="text" class="validate">
          <label for="telefone_medico_responsavel" id="noneTransformLabel">Telefone do Médico</label>
        </div>

        <!--ESPECIALIDADE DO MÉDICO-->
        <div class="input-field col s5">   
          <i class="material-icons prefix">web</i>
          <input name="especialidade_medico_responsavel" id="especialidade_medico_responsavel"  title="Apenas Letras" type="text" class="validate">
          <label for="especialidade_medico_responsavel" id="noneTransformLabel">Especialidade do Médico</label>
        </div>
      </div>
		
		<div class="input-field col s10" style="margin-bottom: 0%;margin-top: -1%;">
          <p>
            <input id="medico_responsavel" type="checkbox" name="medico_responsavel" onclick="bloqueio('div_medico')" />
            <label for="medico_responsavel">Médico Responsável</label>
          </p>
        </div>
		
		<?php } ?>

		<?php if($pat->physician_assistant == "1"){ ?>
		
        <!--CLINICA-->
        <div class="input-field col s5" style="margin-bottom: 2%;margin-top: 1%;">
          <p>
            <input type="checkbox" id="clinica" checked name="clinica" />
            <label for="clinica">Paciente da Clínica</label>
          </p>
        </div>
		
		<?php }else{ ?>
		
		<!--CLINICA-->
        <div class="input-field col s5" style="margin-bottom: 2%;margin-top: 1%;">
          <p>
            <input type="checkbox" id="clinica" name="clinica" />
            <label for="clinica">Paciente da Clínica</label>
          </p>
        </div>
		
		<?php } ?>
        <!--CHECK-->
        <div class="input-field col s9">
          <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Atualizar paciente
            <i class="material-icons right">send</i>
          </button>
        </div>
	</div>
 </form>
    </div>

