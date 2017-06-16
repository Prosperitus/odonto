<?php 


class DbConnector {
    // try {
    private $Servidor = "localhost";
    private $BancoDados = "odt_soft";
    private $Usuario = "root";
    private $Senha = "";
    private $conn;
    
    public function __construct() { 
    try {
            
    	$this->conn = new PDO ("mysql:host=$this->Servidor;dbname=$this->BancoDados;","$this->Usuario","$this->Senha");
    	//$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_OBJ);
  
    }catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
 
    }

}

	public function getConn(){
		return $this->conn;
	}
}
 
        
 	
 ?>
