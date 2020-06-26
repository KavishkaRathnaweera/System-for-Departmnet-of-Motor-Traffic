<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnection.php');

class UserAccountDB extends DBconnection {


    protected function saveUser($nic,$dsurname,$other,$fname,$gender,$birth,$age,$height,$blood,$vehicle,$addrs,$phone,$email,$psswd,$verified,$exam,$trail){
		//$newpass = sha1($psswd);
		$sql = 'INSERT INTO useraccount(nic,surname,otherNames,fullName,gender,birthday,age,height,bloodGroup,vehicle,addrss,phone,email,passwrd,verified,exam,trail) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic,$dsurname,$other,$fname,$gender,$birth,$age,$height,$blood,$vehicle,$addrs,$phone,$email,$psswd,$verified,$exam,$trail]);
	}

	public function selectUserByUserName($nic){
		$sql = 'SELECT * FROM useraccount WHERE nic= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$nic]);
		$data = $stmt->fetchAll();
		return $data;
	}

	public function selectEmailByGivenEmail($email){
		$sql='SELECT * FROM useraccount WHERE email=?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$email]);
		$data = $stmt->fetchAll();
		return $data;
	}

	public function updateCodeDB($email,$code){
		$sql = "UPDATE useraccount SET recover_code='$code' WHERE email=?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$email]);
	}

	public function updatePasswordDB($email,$password){
		$sql = "UPDATE useraccount SET passwrd='$password' WHERE email=?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$email]);

	}
	public function updaterecoverCodeDB($email){
		$sql = "UPDATE useraccount SET recover_code='0' WHERE email=?";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$email]);

}
	protected function accessWaitlistDB(){
// return 
	}
	protected function accessLimtwaitDB(){

	}
}