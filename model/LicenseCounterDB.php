<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnection.php');

class LicenseCounterDB extends DBconnection{

	

	//function to get userdetails
	protected function getUserDetails($id){
    $sql = "SELECT nic,fullname,trail FROM useraccount  WHERE nic = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
    }
    
    public function addToDB($id)
    {
        $date = date("Y-m-d");
        $sql = "UPDATE useraccount SET license=? WHERE nic=?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$date,$id]);
    }
}
 ?>