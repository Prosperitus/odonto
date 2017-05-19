<?php
	require_once "cabecalho.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" hasBrowserHandlers="true">
	<head>
		<title>Bem-Vindo</title>
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
		</style>
	</head>

	<body dir="ltr" background="/images/turquoise.jpg">	
	<div class="row main">
		<div id="newtab-customize-overlay"></div>
		<div class="welcome">
			<p>Bem Vindo,</p>
		    <p>Em qual hospital você está hoje?</p>
	    </div> 
		
	    <!--CARD HOSPITAL 1-->
	    <div class="col s6 m4">
	      <div class="card">
	        <div class="card-image">
	          <img src="../images/hospital 2.jpg">
	          <span class="card-title"></span>
	          <a href="#" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">done</i></a>
	        </div>
	        <div class="card-content">
	          <p>Hospital 1</p>
	        </div>
	      </div>
	    </div>

	    <!--CARD HOSPITAL 2-->
	    <div class="col s6 m4">
	      <div class="card">
	        <div class="card-image">
	          <img src="../images/hospital 2.jpg">
	          <span class="card-title"></span>
	          <a href="#" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">done</i></a>
	        </div>
	        <div class="card-content">
	          <p>Hospital 2</p>
	        </div>
	      </div>
	    </div>

	    <!--CARD HOSPITAL 3-->
	    <div class="col s6 m4">
	      <div class="card">
	        <div class="card-image">
	          <img src="../images/hospital 2.jpg">
	          <span class="card-title"></span>
	          <a href="#" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">done</i></a>
	        </div>
	        <div class="card-content">
	          <p>Hospital 3</p>
	        </div>
	      </div>
	    </div>
    </div>




		<!--div id="newtab-vertical-margin">
			<div id="newtab-horizontal-margin">    		
	    		<div class="newtab-side-margin"></div>   		
	    		<div id="newtab-grid" style="width: 1240px; max-width: 1551px; height: 802px; max-height: 270px;">
				  	
				  	<div class="newtab-cell">
					    <div class="newtab-site" draggable="true" type="affiliate">
						    <span class="newtab-sponsored"></span>
						    <a class="newtab-link" title="..." href="...">  
								<span class="newtab-thumbnail placeholder"></span>  
								<span class="newtab-thumbnail thumbnail" style="background-color: rgb(255, 255, 255); background-image: url(&quot;referencia&quot;);"></span>  				
								<span class="newtab-thumbnail enhanced-content" style="background-image: url(&quot;referencia-da-imagem&quot;);"></span>  
								<span class="newtab-title">get-name</span>
							</a>
							<input title="Remova este Hospital" class="newtab-control newtab-control-block" type="button" />
							<span class="newtab-suggested"></span>
						</div>
					</div>

					<div class="newtab-cell">
					    <div class="newtab-site" draggable="true" type="affiliate">
						    <span class="newtab-sponsored"></span>
						    <a class="newtab-link" title="..." href="...">  
								<span class="newtab-thumbnail placeholder"></span>  
								<span class="newtab-thumbnail thumbnail" style="background-color: rgb(255, 255, 255); background-image: url(&quot;referencia&quot;);"></span>  				
								<span class="newtab-thumbnail enhanced-content" style="background-image: url(&quot;referencia-da-imagem&quot;);"></span>  
								<span class="newtab-title">get-name</span>
							</a>
							<input title="Remova este Hospital" class="newtab-control newtab-control-block" type="button" />
							<span class="newtab-suggested"></span>
						</div>
					</div>

					<div class="newtab-cell">
					    <div class="newtab-site" draggable="true" type="affiliate">
						    <span class="newtab-sponsored"></span>
						    <a class="newtab-link" title="..." href="...">  
								<span class="newtab-thumbnail placeholder"></span>  
								<span class="newtab-thumbnail thumbnail" style="background-color: rgb(255, 255, 255); background-image: url(&quot;referencia&quot;);"></span>  				
								<span class="newtab-thumbnail enhanced-content" style="background-image: url(&quot;referencia-da-imagem&quot;);"></span>  
								<span class="newtab-title">get-name</span>
							</a>
							<input title="Remova este Hospital" class="newtab-control newtab-control-block" type="button" />
							<span class="newtab-suggested"></span>
						</div>
					</div>

					<div class="newtab-cell">
					    <div class="newtab-site" draggable="true" type="affiliate">
						    <span class="newtab-sponsored"></span>
						    <a class="newtab-link" title="..." href="...">  
								<span class="newtab-thumbnail placeholder"></span>  
								<span class="newtab-thumbnail thumbnail" style="background-color: rgb(255, 255, 255); background-image: url(&quot;referencia&quot;);"></span>  				
								<span class="newtab-thumbnail enhanced-content" style="background-image: url(&quot;referencia-da-imagem&quot;);"></span>  
								<span class="newtab-title">get-name</span>
							</a>
							<input title="Remova este Hospital" class="newtab-control newtab-control-block" type="button" />
							<span class="newtab-suggested"></span>
						</div>
					</div>

					<div class="newtab-cell">
					    <div class="newtab-site" draggable="true" type="affiliate">
						    <span class="newtab-sponsored"></span>
						    <a class="newtab-link" title="..." href="...">  
								<span class="newtab-thumbnail placeholder"></span>  
								<span class="newtab-thumbnail thumbnail" style="background-color: rgb(255, 255, 255); background-image: url(&quot;referencia&quot;);"></span>  				
								<span class="newtab-thumbnail enhanced-content" style="background-image: url(&quot;referencia-da-imagem&quot;);"></span>  
								<span class="newtab-title">get-name</span>
							</a>
							<input title="Remova este Hospital" class="newtab-control newtab-control-block" type="button" />
							<span class="newtab-suggested"></span>
						</div>
					</div>

					<div class="newtab-cell">
					    <div class="newtab-site" draggable="true" type="affiliate">
						    <span class="newtab-sponsored"></span>
						    <a class="newtab-link" title="..." href="...">  
								<span class="newtab-thumbnail placeholder"></span>  
								<span class="newtab-thumbnail thumbnail" style="background-color: rgb(255, 255, 255); background-image: url(&quot;referencia&quot;);"></span>  				
								<span class="newtab-thumbnail enhanced-content" style="background-image: url(&quot;referencia-da-imagem&quot;);"></span>  
								<span class="newtab-title">get-name</span>
							</a>
							<input title="Remova este Hospital" class="newtab-control newtab-control-block" type="button" />
							<span class="newtab-suggested"></span>
						</div>
					</div>

					<div class="newtab-cell"></div>
					<div class="newtab-cell"></div>
					<div class="newtab-cell"></div>
					<div class="newtab-cell"></div>
					<div class="newtab-cell"></div>
					<div class="newtab-cell"></div>
					<div class="newtab-cell"></div>
					<div class="newtab-cell"></div>
				</div>				   
				<div class="newtab-side-margin"></div>
			</div>
		  	<div id="newtab-margin-bottom"></div>	  	
		</div-->
	</body>
</html>
