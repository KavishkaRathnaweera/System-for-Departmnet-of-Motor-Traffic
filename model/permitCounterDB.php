<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnection.php');

class PermitCounterDB extends DBconnection{

	

	//function to get userdetails 
	protected function getUserDetails($id){
    $sql = "SELECT nic,fullname,exam,email FROM useraccount  WHERE nic = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$id]);
        $data = $stmt->fetch();
		return $data;
    }
    //function to get triladate
    protected function getTrialDate($id){
        $sql = "SELECT dates FROM triallist  WHERE nic = ?";
            $stmt = $this->connection()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }

       
protected function getLastTrialApplicant(){
    $sql = "SELECT dates,counts FROM triallist  ORDER BY num DESC LIMIT 1";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute();
        $data = $stmt->fetch();
		return $data;
    // return date and  count;
}
//use when triallistdb is empty
protected function getFirstTriallimitRow(){
    $sql = "SELECT dates FROM triallimit LIMIT 1";
    $stmt = $this->connection()->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}

protected function getTrialLimit($date){
    $sql = "SELECT limits FROM triallimit  WHERE dates = ?";
    $stmt = $this->connection()->prepare($sql);
    $stmt->execute([$date]);
    $data = $stmt->fetch();
    return $data;
}

protected function getTrialDateNum($date){
    $sql = "SELECT num FROM triallimit  WHERE dates = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$date]);
        $data = $stmt->fetch();
		return $data;
    // return num;
}
protected function getNextTrialDate($num){
    $sql = "SELECT dates FROM triallimit  WHERE num = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$num]);
        $data = $stmt->fetch();
		return $data;
    // return date and  limit;
}


protected function addToTrialListDB($nic, $fullname, $date, $count){
    $sql = "INSERT INTO triallist(nic, fullname, dates, counts) VALUES (?,?,?,?)";
    $stmt = $this->connection()->prepare($sql);
    $stmt->execute([$nic, $fullname, $date, $count]);
}






}
 ?>