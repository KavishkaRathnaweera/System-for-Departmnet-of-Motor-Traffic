<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnections/CashierDBconnection.php');

class CashierDB extends CashierDBconnection{

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
    protected function getLastRowOFList($listTable){
        $sql = "SELECT dates,counts FROM $listTable ORDER BY num DESC LIMIT 1";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }
    protected function getLimit($limitTable,$date){
        $sql = "SELECT limits FROM $limitTable  WHERE dates = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$date]);
        $data = $stmt->fetch();
        return $data;
    }
    protected function getFirstRowOFlimit($limitTable){
        $sql = "SELECT dates FROM $limitTable LIMIT 1";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }
    protected function getDateNumOFlimt($limitTable,$date){
        $sql = "SELECT num FROM $limitTable  WHERE dates = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$date]);
        $data = $stmt->fetch();
        return $data;
    }
    protected function getNextDate($limitTable,$num){
        $sql = "SELECT dates FROM $limitTable  WHERE num = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$num]);
        $data = $stmt->fetch();
        return $data;
    }
    protected function addTolist($listTable,$nic,$fullname, $date, $count){
        $sql = " DELETE FROM $listTable WHERE nic=? ; INSERT INTO $listTable(nic, fullname, dates, counts) VALUES (?,?,?,?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$nic, $nic, $fullname, $date, $count]);
    }
    protected function ChangeUserExam($userId)
    {
        $sql = "UPDATE useraccount set exam='No' WHERE nic = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$userId]);
    }

    protected function addToLicenseTable($nic, $fullname)
    {
        $sql = 'INSERT INTO licensetable(nic,fullname) VALUES (?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic,$fullname]);
    }

    }





?>