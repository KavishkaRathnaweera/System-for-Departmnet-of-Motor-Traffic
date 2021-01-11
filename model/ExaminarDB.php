<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnections/ExaminarDBconnection.php');

class ExaminarDB extends ExaminarDBconnection{
    
    public function getDataFromExm($nic)
    {
        $sql = 'SELECT * FROM examlist WHERE nic= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
		$data = $stmt->fetchAll();
		return $data;
    }

    public function attendance($nic)
    {
        $sql = "UPDATE examlist SET attendance='Yes' WHERE nic=?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
    }

    public function getDataFromTrial($nic)
    {
        $sql = 'SELECT * FROM triallist WHERE nic= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
		$data = $stmt->fetchAll();
		return $data;
    }

    public function addtoUser($nic)
    {
        $sql = "UPDATE useraccount SET trail='Yes' WHERE nic=?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
    }
    public function addtoLicense($nic,$fullname)
    {
        $sql = 'INSERT INTO licensetable(nic,fullname) VALUES (?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic,$fullname]);
    }

    public function addtoFailtrail($nic)
    {
        $count=1;
        $sql = 'INSERT INTO failtable(nic,trialfail) VALUES (?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic,$count]);
    }

    public function updateTrialfail($nic,$count)
    {
        $sql = "UPDATE failtable SET trialfail=? WHERE nic=?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$count,$nic]);
    }

    public function searchFailtrial($nic)
    {
        $sql = 'SELECT * FROM failtable WHERE nic= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
		$data = $stmt->fetchAll();
		return $data;
    }

    public function addQdatabase($question,$a1,$a2,$a3,$a4,$correct)
    {
        $sql = 'INSERT INTO exampaper(question,answere1,answere2,answere3,answere4,correct) VALUES (?,?,?,?,?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$question,$a1,$a2,$a3,$a4,$correct]);
    }
    public function getQ()
    {
        $sql = 'SELECT * FROM exampaper';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetchAll();
		return $data;
    }
    public function getQuestionFromExm($number)
    {
        $sql = 'SELECT * FROM exampaper WHERE number= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$number]);
		$data = $stmt->fetchAll();
		return $data;
    }
    public function updatequestionData($question,$a1,$a2,$a3,$a4,$correct,$idnum)
    {
        $sql = "UPDATE exampaper SET question=?,answere1=?,answere2=?,answere3=?,answere4=?,correct=? WHERE number=?";
		$stmt = $this->connection()->prepare($sql);
        $stmt->execute([$question,$a1,$a2,$a3,$a4,$correct,$idnum]);

       // echo($question);
    }
}