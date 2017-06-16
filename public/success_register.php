<?php 
	require_once "cabecalho.php";
?>



  <div class="container main" align="center" style="position:relative;left: 5%;">
  <div class="row">
    <div class="col s2">&nbsp;</div>
    <div class="col s6">
      <div class="card" >
        <div class="card-image">
          <img src="../images/checked.jpg">
          <span class="card-title">Cadastro realizado com sucesso</span>           
        </div>     
        <div class="card-content">
        </div>
        <div class="card-action">
          <a href="busca_hospital.php">Tela Principal</a>
          <a href='#' onclick="window.history.back()">Cadastrar Novamente</a>
        </div>
      </div>
    </div>
  </div>
</div>

 <?php require_once "rodape.php";