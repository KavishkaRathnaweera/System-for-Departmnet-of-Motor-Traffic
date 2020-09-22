<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnection.php');

class ExamPaperDB extends DBconnection {
    public function getQuestions(){
        $sql = 'SELECT * FROM exampaper';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
    }
    public function UpdateExamState($examresult,$idnum)
    {
        $sql = "UPDATE useraccount SET exam=? WHERE nic=?";
		$stmt = $this->connection()->prepare($sql);
        $stmt->execute([$examresult,$idnum]);

    }
    public function getUserRow($nic){
        $sql = 'SELECT * FROM examlist WHERE nic= ?';
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$nic]);
        $data = $stmt->fetchAll();
        return $data;
    }
    public function selectUserByUserName($nic){
		$sql = 'SELECT * FROM useraccount WHERE nic= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
		$data = $stmt->fetchAll();
		return $data;
    }
    public function addtoFailexam($nic)
    {
        $count=1;
        $sql = 'INSERT INTO failtable(nic,examfail) VALUES (?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic,$count]);
    }

    public function updateExamfail($nic,$count)
    {
        $sql = "UPDATE failtable SET examfail=? WHERE nic=?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$count,$nic]);
    }

    public function searchFailexam($nic)
    {
        $sql = 'SELECT * FROM failtable WHERE nic= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
		$data = $stmt->fetchAll();
		return $data;
    }

}

