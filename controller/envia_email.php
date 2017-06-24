<html>
      <head>
        <title>Envia Email</title>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    </head>
      <body>
          <header>
            <nav>
              <div class="nav-wrapper light-blue">
              </div>
            </nav>
        </header>
        <a href="redefinir_senha.php">redefinir</a>
            <div class="mensagem">
                <br/>
                <?php
                require_once "Mail.php";
                //require_once "../database/dbconnect.php";

                    $quebra_linha = "\n";
                    $envia_email = "<easyodonto2017@gmail.com>";
                    $destinatario = $_POST['E_mail'];
                    $assunto = "Redefinição de senha";

                    $conexao = mysqli_connect("localhost", "root", "", "odt_soft");

                    $sql = "SELECT * FROM odt_soft.users WHERE email= '$destinatario' ";
                    $query = mysqli_query($conexao, $sql);
                    $cont = mysqli_num_rows($query);

                    var_dump($cont);

                    $novasenha = substr(md5(time()), 0, 6);
                    $nscriptografada = hash("sha256", $novasenha);

                    var_dump($novasenha);
                    var_dump($nscriptografada);
                    $localadress = "http://www.alteredepois.com/";
                    $odon = md5("odonto");
                    $odoncrip = hash("sha256" , $odon);
                    $odoncripcrip = base64_encode($odoncrip);
                    $odonsite = "redefinir_senha.php";


                     if ($cont != 0){

                        $sql_subst = "UPDATE odt_soft.users SET password= '$nscriptografada' WHERE email= '$destinatario' ";
                        mysqli_query($conexao, $sql_subst);
                         $link = "<a href=\"".$odonsite."\">$localadress$odoncripcrip</a>";
                         var_dump($link);
                    }else{
                        echo "<script>alert('email nao cadastrado!');</script>";
                    }

                    $mensagemHTML = '<p> Olá, </p>
                    <p> sua nova senha é: </p>
                    <p><b><t>'.$novasenha.'</p></b></t><br>
                    <p> Para redefini-lá clique no link: </p>
                    <p><b><t>'.$link.'</p></b></t><br>
                    <p> Atenciosamente <p/>
                    <p>2017 EasyOdonto Solutions<p>
                    <br>';
                    var_dump($mensagemHTML);

                    $headers = array(
                        'From' => $envia_email,
                        'to' => $destinatario,
                        'Subject' => $assunto
                        );

                    $smtp = Mail::factory('smtp', array(
                        'host' => 'ssl://smtp.gmail.com',
                        'port' => '465',
                        'auth' => true,
                        'debug' =>false,
                        'username' => 'easyodonto2017@gmail.com',
                        'password' => 'odonto123456'
                    ));

                    //mail($destinatario, $assunto, $mensagemHTML, $headers, "-r". $envia_email);
                    $mail = $smtp->send($destinatario, $headers, $mensagemHTML);

                    if (PEAR::isError($mail)) {
                        echo('<p>' . $mail->getMessage() . '</p>');
                    } else {
                            echo "<script>alert('Mansagem enviada !');</script>";
                    }

                ?>
            </div>
            <br/>
          <footer class="page-footer light-blue" style="margin: auto; width: 100%; bottom: 0; position: fixed;">
            <div class="footer-copyright">
                <div class="container">    
                    <a class="grey-text text-lighten-4 right" href="#!"> 2017 EasyOdonto Solutions</a>
                  </div>
            </div>
        </footer>
      </body>   
</html>