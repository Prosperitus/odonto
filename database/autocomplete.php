<?php

  require_once "../database/dbconnect.php";
  
  //função que devolve em formato JSON os dados do cliente
  
  function retorna($dbconnect)
  {
    //SQl location paciente database
    $dbconnect = "SELECT `patient`
      FROM `patient` WHERE `nome` = '{$nome}' ";

    $query = $db->query( $sql );

    $arr = Array();
    if( $query->num_rows )
    {
      while( $dados = $query->fetch_object() )
      {
        //Array of patients
        $arr['patient'] = $dados->patient;
        var_dump($dados); 
      }
    }
    else
      $arr['patient'] = 'não encontrado';

    return json_encode( $arr );
  }

/*só se for enviado o parâmetro, que devolve os dados
if( isset($_GET['nome']) )
{
  $db = new mysqli('localhost', 'root', '123', 'test');
  echo retorna( filter ( $_GET['nome'] ), $db );
}

function filter( $var ){
  return $var;//a implementação desta, fica a cargo do leitor
}/*