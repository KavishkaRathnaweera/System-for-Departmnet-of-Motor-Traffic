<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnection.php');

class CashierDB extends DBconnection{

    public function getDataFromUser($nic)
    {
        $sql = 'SELECT * FROM useraccount WHERE nic= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
		$data = $stmt->fetchAll();
		return $data;
    }

    public function getDataFromFail($nic)
    {
        $sql = 'SELECT * FROM failtable WHERE nic= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
		$data = $stmt->fetchAll();
		return $data;
    }





}




?>