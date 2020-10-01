<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnection.php');

class MailDB extends DBconnection{

	

	//function to get userdetails
	protected function getNextApplicant($table,$dates){
    $sql = "SELECT nic FROM $table  WHERE dates = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$dates]);
        $data = $stmt->fetchAll();
		return $data;
    }
    protected function getNextApplicantEmail($nic){
        $sql = "SELECT email FROM useraccount  WHERE nic = ?";
            $stmt = $this->connection()->prepare($sql);
            $stmt->execute([$nic]);
            $data = $stmt->fetch();
            return $data;
        } 
}
 ?>