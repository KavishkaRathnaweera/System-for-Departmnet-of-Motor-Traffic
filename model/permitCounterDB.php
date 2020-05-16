<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnection.php');

class permitCounterDB extends DBconnection{

	

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
        $sql = "SELECT date FROM triallist  WHERE nic = ?";
            $stmt = $this->connection()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }
protected function getLastTrialApplicant(){
    $sql = "SELECT date,count,triallimit FROM triallist  ORDER BY num DESC LIMIT 1";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute();
        $data = $stmt->fetch();
		return $data;
    // return date and  count and triallimit;
}
//use when triallistdb is empty
protected function getFirstTriallimitRow(){
    $sql = "SELECT dates,limits FROM triallimit LIMIT 1";
    $stmt = $this->connection()->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch();
    return $data;
}
protected function getLastTrialDateNum($date){
    $sql = "SELECT num FROM triallimit  WHERE dates = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$date]);
        $data = $stmt->fetch();
		return $data;
    // return num;
}
protected function getNextTrialDateAndLimit($num){
    $sql = "SELECT dates, limits FROM triallimit  WHERE num = ?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$num]);
        $data = $stmt->fetch();
		return $data;
    // return date and  limit;
}


protected function addToTrialListDB($nic, $date, $count, $triallimit){
    $sql = "INSERT INTO triallist(nic, date, count, triallimit) VALUES (?,?,?,?)";
    $stmt = $this->connection()->prepare($sql);
    $stmt->execute([$nic, $date, $count, $triallimit]);
}






}
 ?>