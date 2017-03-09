<?php
 class DBconnector {
     
    // try {
    private $Servidor = "172.22.51.144";
    private $BancoDados = "odt_soft";
    private $Usuario = "ceub";
    private $Senha = "bruno";
    private $conn;
    
    public function __construct() 
{ 
    try {
            
    $this->conn = new PDO ("mysql:host=$this->Servidor;dbname=$this->BancoDados;","$this->Usuario","$this->Senha");
  
        }catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
 
    }
}
 
        


 	public function addUser($user){

 	     $sql = "INSERT INTO users (name, surname, cro,DataAdimissao,Matricula, cpf,endereco,Banco,NumeroConta,agencia, phone, email, pass, birthdate,Permissao)
    VALUES (:name, :surname, :cro, :DataAdimissao, :Matricula, :cpf, :endereco, :Banco, :NumeroConta, :agencia, :phone, :email, :pass, :birthdate, :Permissao)";

    	$stmt = $this->conn->prepare($sql);

    	$stmt->bindParam(':name', $user->getName());
    	$stmt->bindParam(':surname', $user->getSurname());
    	$stmt->bindParam(':cro', $user->getCro());
        $stmt->bindParam(':DataAdimissao', $user->getDataAdimissao());
        $stmt->bindParam(':Matricula', $user->getMatricula());
        $stmt->bindParam(':cpf', $user->getcpf());
        $stmt->bindParam(':endereco', $user->getendereco());
        $stmt->bindParam(':Banco', $user->getBanco());
        $stmt->bindParam(':NumeroConta', $user->getNumeroConta());
        $stmt->bindParam(':agencia', $user->getagencia());
        $stmt->bindParam(':phone', $user->getPhone());
    	$stmt->bindParam(':email', $user->getEmail());
    	$stmt->bindParam(':pass', $user->getPass());
    	$stmt->bindParam(':birthdate', $user->getBirthdate());
        $stmt->bindParam(':Permissao', $user->getPermissao());


    	$stmt->execute();




 }

}