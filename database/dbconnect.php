<?php
 class DBconector {
     
    // try {
    private $Servidor = "172.22.51.144";
    private $BancoDados = "odt_soft";
    private $Usuario = "root";
    private $Senha = "123456";
    
    public function __construct() 
{
    try {
            
    $conexao = new PDO ("mysql:host=$this->Servidor;dbname=$this->BancoDados;","$this->Usuario","$this->Senha");
    var_dump($conexao);
        }catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
 
    }
}


 }
        
new DBconector();