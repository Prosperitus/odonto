<?php 
	require_once "cabecalho.php";
?>

 




  <div style="background-color:#df1f1f;position:absolute;height:100%;width:100%;padding:100px; ">

    <div align="center">
       <img style="padding-bottom:80px" src="../images/close.png">
        <h3 style="color: white; font-size:35px;font-weight: 590;">Desculpe</h3>
        <h3 style="color: white; font-size:20px; padding-bottom:80px ; padding-top:20px;font-weight: 150; ">Operação falhou</h3>
    </div>
    <div align="center">
        <div style="display: inline;padding-right:80px ">
            <img src="../images/home.png" style="vertical-align:middle;padding-right:10px">
            <a  style="color: white; " href="busca_hospital.php">Tela Principal</h4>
        </div>
        <div style="display: inline;">
            <img src="../images/left-arrow.png" style="vertical-align:middle;padding-right:10px">
            <a style="color: white;" onclick="history.go(-1)" href="#">Voltar</a>
        </div>
    </div>    

  </div>

 <?php require_once "rodape.php";