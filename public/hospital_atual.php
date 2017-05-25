<?php
	require_once "cabecalho.php";
	require_once "../backend/addSessao.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		addSessionHospital($id);
	}
	if(!isset($_SESSION['hospital'])){
		header("location: busca-hospital.php");
		die();
	}
	
	$hospital = $_SESSION['hospital'];

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
		<script>
			function enviarHospital(id) { 
			$.ajax({ 
				type: 'get',
				dataType: 'html',
				url: "../backend/viewEmployee.php?id=" + id,
				beforeSend: function () { 
				}, 
				success: function (data) { 
					var novaURL = "http://www.codigofonte.com.br/";
					$(window.document.location).attr('href',novaURL);
				} 
			}); 
		}
		</script>
	</head>

	<body dir="ltr" background="/images/turquoise.jpg">	
	<div class="row main">
		<div id="newtab-customize-overlay"></div>
		<div class="welcome">
	
			
		Bem vindo, <?=$user->name?>


	    </div> 
		

	<center>
	<p>Você está no hospital:</p>
	</center>


			
			<?php if($hospital->image == '' || $hospital->image == null){
	?>

	    <div class="col s6 m4" style="max-width: 200px;left: 45%;position:relative">
	      <div class="card">
	        <div class="card-image">
	          <img src="../images/hospital 2.jpg" style="width: 100%;height:38%; max-height: 202px;max-width: 200px">
	        </div>
	        <div class="card-content">
	          <p><?=$hospital->name?></p>
	        </div>
	      </div>
	    </div>
		<?php }else{  ?>
			
			<div class="col s6 m4" style="max-width: 200px;left: 45%;position:relative">
			  <div class="card">
				<div class="card-image">
				  <img src="<?=$hospital->image?>" style="width: 100%;height:38%; max-height: 202px;max-width: 200px">
				</div>
				<div class="card-content">
				  <p><?=$hospital->name?></p>
				</div>
			  </div>
			</div>
		<?php }  ?>
	<center style="position:relative;top:300px;left:-5.5%">
	<a href="atendimentos.php" style="text-decoration: none;color:rgba(0,0,0,0.87);font-weight:bold">Ir para página de atendimentos</a><br><br>
	<a href="busca-hospital.php?expired=1" style="text-decoration: none;color:#0399ff;font-weight:bold">Escolher outro hospital</a>
	</center>
	</div>
	</body>
</html>
