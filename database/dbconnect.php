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
    $this->conn->setAtrribute(PDO::ATTR_ERROMODE, PDO::ATTR_ERROMODE_SILENT);
  
        }catch (PDOException $e) {
            echo "Erro de Conexão " . $e->getMessage() . "\n";
    exit;
 
    }
}
 
        
 	public function addUser($user){
 	     $sql = "INSERT INTO users (name, surname, cro,DataAdimissao,matricula, cpf,endereco,banco,NumeroConta,agencia, phone, email, pass, birthdate,permissao)
    VALUES (:name, :surname, :cro, :DataAdimissao, :matricula, :cpf, :endereco, :banco, :NumeroConta, :agencia, :phone, :email, :pass, :birthdate, :permissao)";
    	$stmt = $this->conn->prepare($sql);
    	$stmt->bindParam(':name', $user->getName(), PDO::PARAM_STR, 255);
    	$stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR, 255);
    	$stmt->bindParam(':cro', $user->getCro(), PDO::PARAM_INT, 10);
        $stmt->bindParam(':DataAdimissao', $user->getDataAdimissao(),PDO::PARAM_DATE);
        $stmt->bindParam(':matricula', $user->getMatricula(), PDO::PARAM_INT, 11);
        $stmt->bindParam(':cpf', $user->getCpf(), PDO::PARAM_STR, 50);
        $stmt->bindParam(':endereco', $user->getEndereco(), PDO::PARAM_STR,255);
        $stmt->bindParam(':banco', $user->getBanco(), PDO::PARAM_STR, 255);
        $stmt->bindParam(':NumeroConta', $user->getNumeroConta(), PDO::PARAM_STR, 7);
        $stmt->bindParam(':agencia', $user->getAgencia(), PDO::PARAM_INT, 11);
        $stmt->bindParam(':phone', $user->getPhone(), PDO::PARAM_INT, 11);
    	$stmt->bindParam(':email', $user->getEmail(), PDO::PARAM_STR, 255);
    	$stmt->bindParam(':pass', $user->getPass(), PDO::PARAM_STR, 255);
    	$stmt->bindParam(':birthdate', $user->getBirthdate(), PDO::PARAM_DATE);
        $stmt->bindParam(':permissao', $user->getPermissao(), PDO::PARAM_STR, 255);
                   	try{ 
                        $stmt->execute();                    
                    }catch(PDOException $e)
                    {
                        return $e;
                    }
 }

 public function addPatient($patient){
 	$sql = "INSERT INTO paciente (name, age, birthdate, gender, adress, neighborhood, city, state, cep, hospital, heathPlan, responsibleName, responsiblePhone, prontuario, clinc)
 	VALUES (:name, :age, :birthdate, : gender, :adress, :neighborhood, :city, :state, :cep, :hospital, :heathPlan, :responsibleName, :responsiblePhone, :prontuario, :clinic)";
 		$stmt->bindParam(':name', $patient->getName());
 		$stmt->bindParam(':age', $patient->getAge());
 		$stmt->bindParam(':birthdade', $patient->getBirthdate());
 		$stmt->bindParam(':gender', $patient->getGender());
 		$stmt->bindParam(':adress', $patient->getAdress());
 		$stmt->bindParam(':neighborhood', $patient->getNeighborhood());
 		$stmt->bindParam(':city', $patient->getCity());
 		$stmt->bindParam(':state', $patient->getState());
 		$stmt->bindParam(':cep', $patient->getCep());
 		$stmt->bindParam(':hospital', $patient->getHospital());
 		$stmt->bindParam(':heathPlan', $patient->getHealthPlan();
 		$stmt->bindParam(':responsibleName', $patient->getResponsibleName());
 		$stmt->bindParam(':responsiblePhone', $patient->getResponsiblePhone());
 		$stmt->bindParam(':prontuario', $patient->getProntuario());
 		$stmt->bindParam(':clinic', $patient->getClinic());
 					try{
 						$stmt->execute();
 					}
 					catch(PDOExeption $e)
 					{
 						return $e;
 					}



 }




}

 ?>