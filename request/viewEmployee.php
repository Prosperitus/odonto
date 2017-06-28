<?php 

	require_once "../controller/verifyLogin.php";
	require_once "../controller/employee.php";
	verifyLogRedirect();
	
	
	

	$id = $_GET['id'];
	$funcionarioControle = new EmployeeController();	
	$emp = $funcionarioControle->searchId($id);
?>
<link type="text/css" rel="stylesheet" href="../css/style.css"/>
<script type="text/javascript" src="../js/scripts.js"></script>

<!--CLASS/FORM-->
    <div class="row">
      <form class="col s11 m12" action="" method="post">
        <!--TITULO-->
		<div class="divModalTitles">
			<h3 class="center modalTitles">Dados do Funcionário</h3>
		</div>
		<input value="<?=$emp->id?>" type="hidden" name="funcionario_id" required>
        <!--NOME-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input id="funcionario_nome" value="<?=$emp->name?>" type="text" pattern="^\S[a-zA-ZÀ-úẽẼ\s]*$" title="Apenas Letras" class="validate" name="funcionario_nome" required>
          <label for="funcionario_nome" id="noneTransformLabel">Nome</label>
        </div>

        <!--SOBRENOME-->
        <div class="input-field col s5">
		      <i class="material-icons prefix">account_circle</i>
          <input id="funcionario_sobrenome" value="<?=$emp->surname?>" type="text" pattern="^\S[a-zA-ZÀ-úẽẼ\s]*$" title="Apenas Letras" class="validate" name="funcionario_sobrenome" required>
          <label for="funcionario_sobrenome" id="noneTransformLabel">Sobrenome</label>
        </div>

        <!--CPF-->
        <div class="input-field col s5">
          <i class="material-icons prefix">perm_identity</i>
          <input id="funcionario_cpf" value="<?=$emp->social_security?>" type="text" title="000.000.000-00" class="validate" name="funcionario_cpf" onblur="TestaCPF()" required>
          <label for="funcionario_cpf" id="noneTransformLabel">CPF</label>
        </div>

        <!--EMAIL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">email</i>
          <input id="funcionario_email" value="<?=$emp->email?>" type="email" pattern="^\S[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,10}$" class="validate" name="funcionario_email" required>
          <label for="funcionario_email" id="noneTransformLabel">Email</label>
        </div>

        <!--TELEFONE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input id="funcionario_telefone" value="<?=$emp->phone?>" type="text" title="(00) 00000-0000" class="validate" name="funcionario_telefone" required>
          <label for="funcionario_telefone" id="noneTransformLabel">Telefone Residencial</label>
        </div>

        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input id="funcionario_celular" value="<?=$emp->phone2?>" type="text" title="(00) 00000-0000" class="validate" name="funcionario_celular" required>
          <label for="funcionario_celular" id="noneTransformLabel">Telefone Celular</label>
        </div>

        <!--INFORMACOES BANCARIAS-->
        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input id="funcionario_banco" value="<?=$emp->bank?>" type="text" class="validate" pattern="^\S[\w\s]+$" name="funcionario_banco" required>
          <label for="funcionario_banco" id="noneTransformLabel">Banco</label>
        </div>

        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input id="funcionario_conta_banco" value="<?=$emp->number_of_account?>" type="text" class="validate" pattern="^\S[\w\s]+$" name="funcionario_conta_banco" required>
          <label for="funcionario_conta_banco" id="noneTransformLabel">Conta Bancaria</label>
        </div>

        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input id="funcionario_agencia_banco" value="<?=$emp->agency?>" type="text" class="validate" pattern="^\S[\w\s]+$" name="funcionario_agencia_banco" required>
          <label for="funcionario_agencia_banco" id="noneTransformLabel">Agência Bancaria</label>
        </div>

        <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input id="funcionario_endereco" value="<?=$emp->address?>" type="text" class="validate" pattern="^\S[\w\s]+$" name="funcionario_endereco" required>
          <label for="funcionario_endereco" id="noneTransformLabel">Endereço</label>
        </div>

        <!--CRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">class</i>
          <input id="funcionario_cro" value="<?=$emp->cro?>" type="text" title="00.000" class="validate" name="funcionario_cro" required>
          <label for="funcionario_cro" id="noneTransformLabel">Nº   CRO</label>
        </div>


        <!--DATA DE ADMISSÃO NA EMPRESA-->
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input id="funcionario_admissao" value="<?=$emp->admission_date?>" type="text" class="datepicker" name="funcionario_admissao" required>
          <label for="funcionario_admissao" id="noneTransformLabel">Data de Admissão na Empresa</label>
        </div>

        <!--IMAGEM DO FUNCIONÁRIO-->
        <div class="file-field input-field col s8" id="funcionarioFile">
          <div class="btn input-field col s5 light-blue">
            <span>Foto</span>
            <input type="file" name="imagemFuncionario" accept="image/*">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload de uma foto de perfil">
          </div>
        </div>

        <!--CHECK-->
        <div class="input-field col s12 main">
          <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Atualizar funcionário
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
    </div>
