<?php 
  require_once "cabecalho.php";
?>
  <script src="../validation/validation.js"></script>
  <script type="text/javascript">
    (function($){
      $(function(){
        $('select').material_select();
        $('.button-collapse').sideNav();
        $('.parallax').parallax();
      }); 
    })(jQuery);
    
    function bloqueio(el) {
      var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
  </script>

    <!--CLASS/FORM-->
    <div class="row margemCentro">
      <form class="col s11 m12" action="../backend/addPatient.php" method="post">

        <!--TITULO-->
        <h3>Cadastro Paciente</h3>

        <!--NOME-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input name="nome_paciente" id="nome_paciente" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate" required>
          <label for="nome_paciente">Nome</label>
        </div>

        <!--SOBRENOME-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input name="sobrenome_paciente" id="sobrenome_paciente" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate" required>
          <label for="sobrenome_paciente">Sobrenome</label>
        </div>

        <!--CPF-->
        <div class="input-field col s5">
          <i class="material-icons prefix">web</i>
          <input name="cpf" id="cpf" title="000.000.000-00" type="text" class="validate" required>
          <label for="cpf">CPF</label>
        </div>
    
        <!--EMAIL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">email</i>
          <input id="paciente_email" type="email" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="paciente_email" required>
          <label for="paciente_email">Email</label>
        </div>

        <!--DATA DE NASCIMENTO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input name="date_paciente" id="date_paciente" type="text" class="datepicker" required>
          <label for="date_paciente">Data de Nascimento</label>
        </div>

        <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="endereco_paciente" id="endereco_paciente" type="text" class="validate" required>
          <label for="endereco_paciente">Endereço</label>
        </div>

        <!--BAIRRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="bairro_paciente" id="bairro_paciente" type="text" class="validate" required>
          <label for="bairro_paciente">Bairro</label>
        </div>

        <!--CIDADE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="cidade_paciente" id="cidade_paciente" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate" required>
          <label for="cidade_paciente">Cidade</label>
        </div>

        <!--CEP-->
        <div class="input-field col s5">
          <i class="material-icons prefix">my_location</i>
          <input name="cep_paciente" id="cep_paciente" title="00000-000" type="text" class="validate" required>
          <label for="cep_paciente">CEP</label>
        </div>

        <!--PLANO DE SAÚDE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input name="plano_de_saude" id="plano_de_saude" type="text" class="validate" required>
          <label for="plano_de_saude">Plano de Saúde do Paciente</label>
        </div>

        <!--NOME DO RESPONSÁVEL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <input name="nome_responsavel" id="nome_responsavel" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate" required>
          <label for="nome_responsavel">Nome do Responsável 1</label>
        </div>
  
        <!--TELEFONE DO RESPONSÁVEL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_responsavel" id="telefone_responsavel" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 00000-0000" type="text" class="validate" required>
          <label for="telefone_responsavel">Telefone do Responsável 1</label>
        </div>

        <!--NOME DO RESPONSÁVEL 2-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <input name="nome_responsavel_2" id="nome_responsavel_2" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate" >
          <label for="nome_responsavel_2">Nome do Responsável 2</label>
        </div>

        <!--TELEFONE DO RESPONSÁVEL 2-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_responsavel_2" id="telefone_responsavel_2" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 00000-0000" type="text" class="validate" >
          <label for="telefone_responsavel_2">Telefone do Responsável 2</label>
        </div>

      <div id="div_medico" style="display:none">
         <!--NOME DO MÉDICO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">supervisor_account</i>
          <input name="nome_medico_responsavel" id="nome_medico_responsavel" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate">
          <label for="nome_medico_responsavel">Nome do Médico</label>
        </div>
  
  
         <!--TELEFONE DO MÉDICO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_medico_responsavel" id="telefone_medico_responsavel" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="(00) 00000-0000" type="text" class="validate">
          <label for="telefone_medico_responsavel">Telefone do Médico</label>
        </div>

         <!--ESPECIALIDADE DO MÉDICO-->
        <div class="input-field col s5">   
          <i class="material-icons prefix">web</i>
          <input name="especialidade_medico_responsavel" id="especialidade_medico_responsavel" pattern="[a-zA-ZÀ-úẽẼ\s]+$" title="Apenas Letras" type="text" class="validate">
          <label for="especialidade_medico_responsavel">Especialidade do Médico</label>
        </div>
      </div>

        <!--UF-->
        <div class="input-field col s5" >
          <i class="material-icons prefix">location_on</i>
          <select class="icons" name="paciente_uf" id="paciente_uf">
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

        <!--GENERO-->
        <div class="input-field col s5" >
          <i class="material-icons prefix">face</i>
          <select class="icons" name="genero_paciente" id="genero_paciente">
            <option value="" disabled selected>Gênero do Paciente</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
          </select>
        </div>

        <div class="input-field col s10" style="margin-bottom: 0%;margin-top: -1%;">
          <p>
            <input id="medico_responsavel" type="checkbox" name="medico_responsavel" value="checkbox" onclick="bloqueio('div_medico')" />
            <label for="medico_responsavel">Médico Responsável</label>
          </p>
        </div>

        <!--CLINICA-->
        <div class="input-field col s5" style="margin-bottom: 2%;margin-top: 1%;">
          <p>
            <input type="checkbox" id="clinica" name="clinica" />
            <label for="clinica">Paciente da Clínica</label>
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

<?php require_once "rodape.php";
