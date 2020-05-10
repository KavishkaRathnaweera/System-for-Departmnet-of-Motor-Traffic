<?php
include("DBconnection.php");

class UserAccountDB extends DBconnection {


    protected function saveUser($nic,$dsurname,$other,$fname,$gender,$birth,$age,$height,$blood,$vehicle,$addrs,$phone,$email,$psswd,$verified,$exam,$trail){
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

	
}