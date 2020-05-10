<?php 

include 'DBconnection.php';

class counter2DB extends DBconnection{

	

	//function to get userdetails
	protected function getUserDetails($id){
    $sql = "SELECT nic,fullname,verified FROM useraccount  WHERE nic = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$id]);

		return $stmt;
	}
}
 ?>