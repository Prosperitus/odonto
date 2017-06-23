<?php
	session_start();
	if(isset($_SESSION['msg'])){
		$msg = $_SESSION['msg'];
	}else{
		$msg = "";
	}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
	<title>EasyOdonto</title>
	  <script type="text/javascript" href="js/jquery.js"></script>
	  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="css/animate.css"></script>
    <script src="js/jquery.maskedinput.js"></script>   

    <style>
      body {
       
      }
      .main {
        flex: 1 0 auto;
      }
    </style>
  </head>

  <body style=" background-color:#03a9f4" >
   
      <div align="center">
         <img style="padding:40px;" src="images/logo.png">
    
      </div>
    
    <!--MAIN-->
    <div id="login-page" class="row main" style="position:relative;width:300px;padding-top:10px;padding-bottom:30px;">
      <div class="col s12 z-depth-3 card-panel" style="height:460px;padding-top:30px;" >
        <form class="login-form" action="request/login.php" method="post"  >     
          <div class="row margin">    
            <div class="input-field col s12">
              <i class="material-icons prefix">face</i>
			  <?php if(isset($_COOKIE['user'])){ ?>
              <input id="username" type="text" name="username" value="<?=$_COOKIE['user']?>">
              <label for="username">Usuário</label>
			  <?php }else{ ?>
			  <input id="username" type="text" name="username">
              <label for="username">Usuário</label>
			  <?php } ?>
            </div>
          </div>
          
          <div class="row margin">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
			  
			  <?php if(isset($_COOKIE['pass'])){ ?>
              <input id="password" type="password" name="password" value="<?=$_COOKIE['pass']?>">
              <label for="password">Senha</label>
			  <?php }else{ ?>
			  <input id="password" type="password" name="password">
              <label for="password">Senha</label>
			  <?php } ?>
              
            </div>
          </div>
          
          <div class="row">          
            <div class="input-field col s9 " style="margin-bottom: 7%;margin-top: -6%;  float:left;">
			<?php if(isset($_COOKIE['pass']) && isset($_COOKIE['user'])){ ?>
                <input name="remember" type="checkbox" id="remember-me" checked />
                <label for="remember-me">Lembrar Usuário</label>
			<?php }else{ ?>
				<input name="remember" type="checkbox" id="remember-me"/>
                <label for="remember-me">Lembrar Usuário</label>
			<?php } ?>
            </div>
          </div>
          
          <div class="row">
            <div class="input-field">
              <button class="btn waves-effect pulse light-blue col s12 ">Login</button>
            </div>
          </div>
		  
		 
          <label id="msg" style="position:relative;left: 50px;color:red;"><?=$msg?></label>    
          <?php if(isset($_SESSION['msg'])){unset($_SESSION['msg']);}?>
          <div class="row" style="float:left" >
            <div class="input-field col s12">
                <p class="margin right medium-small"><a href='public/esqueceu_senha.php'>Esqueceu a senha?</a></p>
            </div>          
          </div>

        </form>
      </div>
    </div>
  </body>
</html>
