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

}

