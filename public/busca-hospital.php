<?php
	require_once "cabecalho.php";
	require "../database/dbhospital.php";
	$dbhospital = new DbHospital();
	$hospitals = $dbhospital->searchHospitalAll();

?>
<html xmlns="http://www.w3.org/1999/xhtml" hasBrowserHandlers="true">
	<head>
		<title>Busca Hospital</title>
		<link rel="stylesheet" type="text/css" media="all" href="chrome://global/skin/" />
		<link rel="stylesheet" type="text/css" media="all" href="chrome://browser/content/contentSearchUI.css" />
		<link rel="stylesheet" type="text/css" media="all" href="chrome://browser/content/newtab/newTab.css" />
		<link rel="stylesheet" type="text/css" media="all" href="chrome://browser/skin/newtab/newTab.css" />
		<script type="text/javascript;version=1.8" src="chrome://browser/content/contentSearchUI.js"></script>
		<script type="text/javascript;version=1.8" src="chrome://browser/content/newtab/newTab.js"></script>
		<style>
		  	div.welcome{
		  			color: #274e82;
		  			
		  			padding: 20px;
		  			font-family: Helvetica;
		  			font-weight: bold;
		    		font-size: 250%;
		    		text-align: center;
		  	}
			
			p{
				font-size: 18px;
			}
			
			h3{
				font-size: 20px;
				font-weight: bold; 
				 text-shadow: 2px -2px -5px ; 
			}
			h4{
				font-size: 14px;
				font-weight: bold; 
				 text-shadow: 2px -2px -5px ; 
			}
			h2{
				font-size:26px;
				font-weight: bold; 
			
			}
			.row.main{
				width: 50%;
				height:50%;
			}
			
		</style>
	</head>

	<body dir="ltr" background="/images/turquoise.jpg">	
	<div class="row main">
		<div id="newtab-customize-overlay"></div>
		<div class="welcome">
	
			
		Bem vindo,<--USUÁRIO-->


	    </div> 
		
	<?php 
	
	if ($hospitals == null){
		echo "
		
		<center>
		
				<img width=300px height=250px alt='Oops! Não há nada aqui, cadastre seu primeiro hospital!'
			title='alt='Oops! Não há nada aqui, cadastre seu primeiro hospital!' 
			src='../images/hospital/icon_hospital_nothing_here.png'/>
				
				<br/>
				
				<p><b>Oops! Não achamos nada! ;(</p>
				<p><a href='cadastro_hospital.php'>Clique aqui e <u>cadastre seu primeiro hospital</u></a></p>
				
			
			
		
		      ";
	}else{
		
	echo "<center>
	<p>Em qual hospital você está hoje?</p>
	</center>";
	foreach($hospitals as $hospital){ ?>


	    <div class="col s6 m4">
	      <div class="card">
	        <div class="card-image">
	          <img src="../images/hospital 2.jpg">
	         
	          <a href="#" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">done</i></a>
	        </div>
	        <div class="card-content">
	          <p><?=$hospital->name?></p>
	        </div>
	      </div>
	    </div>
	<?php }} ?>