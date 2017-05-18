<?php
	require_once "backend/verifyLog.php";
	
	verifyLogRedirect();
?>
<!DOCTYPE html>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <title>Home</title>
  <script type="text/javascript" href="js/jquery.js"></script>  
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
  <script src="js/jquery.maskedinput.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script type="text/javascript" src="DataTables/media/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="DataTables/media/css/jquery.dataTables.min.css">
    
    <style>
      body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      }

      .main {
      flex: 1 0 auto;
      }

      header , footer {
      padding-left: 0px;
    }

      main {
        padding-left: 100px
      }


    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
    }
  @media only screen and (min-width : 768px) {
        .margemCentro{
      margin-left: 14%;
    }
    }
  @media only screen and (max-width : 768px) {
        .margemCentro{
      margin-left: 0;
      margin-right: 0;
    }
    }



    </style>



  </head>

  <body class = "light-blue lighten-5">

  <!--Scrip sidenav-->


<script type="text/javascript">
(function($){
    $(function(){
        $('select').material_select();
        $('.button-collapse').sideNav();
        $('.parallax').parallax();

    }); // end of document ready
})(jQuery); // end of jQuery name space
</script>


<!--CABEÇALHO-->
   <nav>
  <div class="nav-wrapper light-blue">
  <div class="col s2">
        <ul class="left">
          <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
        </ul>
      </div>
    <div class="row">
      <div class="col s10">
       <ul class="right">
        <form>
          <div class="input-field">
            <input id="search" type="search" />
            <label for="search"><i class="material-icons">search</i></label>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</nav>

  <!--Sidenav-->

<div class="userView position:relative">
  <ul id="slide-out" class="side-nav ">
    <li><div class="userView">
      <div class="background blue">

      </div>
      <a href="#!user"><img class="circle" src="../images/medico.jpg"></a>
      <a href="#!name"><span class="white-text name">Bem Vindo <?=$user->name?></span></a>
      <a href="#!email"><span class="white-text email"><?=$user->email?></span></a>
    </div></li>
    <li><a href="board.php"><i class="material-icons">note_add</i>Cadastrar</a></li>
    <li><a href="#!"><i class="material-icons">add_alert</i>Hospitais</a></li>
    <li><a href="buscaPaciente.php"><i class="material-icons">perm_identity</i>Pacientes</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>Arquivos</a></li>
  <li><a href="../backend/logout.php"><i class="material-icons">note_add</i>Logout</a></li>
    
    <li><div class="divider"></div></li>
    <li><a class="subheader">Mais opçoes</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  </div>

<script>
$(document).ready(function(){
  $("#addfile").click(function(){
    $(".uploadfiles").append('<div class="file-field input-field col s5" style="clear:both">'
                       + '<div class="btn input-field col s5 light-blue">'
                     + '<span>Arquivos</span>'
                   +  '<input type="file" multiple>'
                   + '</div>'
                   + '<div class="file-path-wrapper">'
                    +  '<input class="file-path validate" type="text" placeholder="Upload one or more files">'
                  +  '</div>'
                 + '</div>');
  });
});
</script>

    <!--CLASS/FORM-->
    <div class="row">
      <form class="col s11" action="backend/addPatient.php" method="post"> 
    
      <!--TITULO-->
        <h3>Cadastro Hospital</h3>

      <!--NOME DO HOSPITAL-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">business</i>
          <input name="nome_hospital" id="nome_hospital" type="text" class="validate">
          <label for="nome_hospital">Nome do Hospital</label>
        </div>

         <!--TELEFONE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_uti" id="telefone_uti" type="text" class="validate">
          <label for="telefone_uti">Telefone da UTI</label>
        </div>

        <!--NOME DO CHEFE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>  
          <input name="sobrenome_paciente" id="sobrenome_paciente" type="text" class="validate">
          <label for="sobrenome_paciente">Nome do Chefe da UTI</label>
        </div>
       
         <!--TELEFONE DO CHEFE DA UTI-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_chefeuti" id="telefone_chefeuti" type="text" class="validate">
          <label for="telefone_chefeuti">Telefone do Chefe da UTI</label>
        </div>

        <!--NÚMERO DE UTIs-->
        <div class="input-field col s5">
        <i class="material-icons prefix">view_headline</i>  
          <input name="numeroutis_hospital" id="numeroutis_hospital" type="text" class="validate">
          <label for="numeroutis_hospital">Nº de UTIs</label>
        </div>

         <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="endereco_hospital" id="endereco_hospital" type="text" class="validate">
          <label for="endereco_hospital">Endereço</label>
        </div>

         <!--BAIRRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="bairro_hospital" id="bairro_hospital" type="text" class="validate">
          <label for="bairro_hospital">Bairro</label>
        </div>

         <!--CIDADE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="cidade_hospital" id="cidade_hospital" type="text" class="validate">
          <label for="cidade_hospital">Cidade</label>
        </div>

         <!--CEP-->
        <div class="input-field col s5">
          <i class="material-icons prefix">my_location</i>
          <input name="cep_hospital" id="cep_hospital" type="text" class="validate">
          <label for="cep_hospital">CEP</label>
        </div>

         <!--ESTADO-->
        <div class="input-field col s5">
            <i class="material-icons prefix">location_on</i>
            <select class="icons" name="estado_hospital" id="estado_hospital">
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
          <div class="uploadfiles">
         <!--ARQUIVOS-->

                  <div class="file-field input-field col s5" style="clear:both">
                    <div class="btn input-field col s5 light-blue">
                      <span>Arquivos</span>
                      <input type="file" multiple>
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Upload one or more files">
                      <a class="btn-floating waves-effect waves-light light-blue prefix" id="addfile"><i class="material-icons">add</i></a>
                    </div>
                  </div>
          </div>

        <!--CHECK-->
          <div class="input-field col s9">
            <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Confirmar Cadastro
              <i class="material-icons right">send</i>
            </button>
          </div>

      </form>
    </div>

     <?php

     require_once "public/rodape.php";
