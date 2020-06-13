<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnection.php');

class Counter2DB extends DBconnection{

	

	//function to get userdetails
	protected function getUserDetails($id){
    $sql = "SELECT nic,fullname,verified FROM useraccount  WHERE nic = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$id]);

		return $stmt;
	}
}
 ?>