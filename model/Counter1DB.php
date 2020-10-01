<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/DBconnections/Counter1DBconnection.php');

class Counter1DB extends Counter1DBconnection{


	//function to get userdetails
	protected function getUserDetails($id){
            $sql = "SELECT * FROM useraccount  WHERE nic = ?";
            $stmt = $this->connection()->prepare($sql);
            $stmt->execute([$id]);
            $data = $stmt->fetch();
            return $data;
        }

    protected function verifyToDB($id,$surname,$fullname,$gender,$birthday,$age,$height,$bloodGroup,$vehicle,$addrss,$phone,$email,$verified){
            $sql = "UPDATE useraccount set nic=? ,surname=? ,fullName=? ,gender=? ,birthday=? ,age=? ,height=? ,bloodGroup=? ,vehicle=? ,addrss=? ,phone=? ,email=? ,verified=?  WHERE nic = ?";
            $stmt = $this->connection()->prepare($sql);
            $stmt->execute([$id,$surname,$fullname,$gender,$birthday,$age,$height,$bloodGroup,$vehicle,$addrss,$phone,$email,$verified,$id]);
    }
    
    protected function getRegisterDate($id){
        $sql = "SELECT dates FROM waitlist  WHERE nic = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        return $data;
    }
    protected function getExamDate($id){
        $sql = "SELECT dates FROM examlist  WHERE nic = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        return $data;
    }
    protected function getTrialDate($id){
        $sql = "SELECT dates FROM triallist  WHERE nic = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        return $data;
    }
    protected function getFailDetails($id){
        $sql = "SELECT * FROM failtable  WHERE nic = ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();
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
        $stmt->execute([$nic,$nic, $fullname, $date, $count]);
    }
}