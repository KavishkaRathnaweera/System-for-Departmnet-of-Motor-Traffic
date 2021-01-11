<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/UserAccountDB.php');

class UserAccount extends UserAccountDB{
    private $nic;
    private $surname;
    private $other;
    private $fullName;
    private $gender;
    private $birth;
    private $age;
    private $height;
    private $blood;
    private $vehicle;
    private $adress;
    private $phone;
    private $email;
    private $passwd;
    private $verified="No";
    private $registerDate;
    private $examStatus="No";
    private $trailStatus="No";
    private $licenedDate="No";


    public function setnic($ni){
        $this->nic=$ni;
    }
    public function setSurname($surnam){
        $this->surname=$surnam;
    }
    public function setOther($othe){
        $this->other=$othe;
    }
    public function setFname($fullNam){
        $this->fullName=$fullNam;
    }
    public function setGender($gende){
        $this->gender=$gende;
    }
    public function setBirth($birt){
        $this->birth=$birt;
    }
    public function setAge($ag){
        $this->age=$ag;
    }
    public function setheight($heigh){
        $this->height=$heigh;
    }
    public function setblood($bloo){
        $this->blood=$bloo;
    }
    public function setvehicle($vehicl){
        $this->vehicle=$vehicl;
    }
    public function setAddrs($adres){
        $this->adress=$adres;
    }
    public function setPhone($phon){
        $this->phone=$phon;
    }
    public function setEmail($emai){
        $this->email=$emai;
    }
    public function setPasswd($passw){
        $this->passwd=$passw;
    }
    public function setVerified($verifie){
        $this->verified=$verifie;
    }
    public function setExam($examStatu){
        $this->examStatus=$examStatu;
    }
    public function setTrail($trailStatu){
        $this->trailStatus=$trailStatu;
    }
    public function setLicense($licenedDat){
        $this->licenedDate=$licenedDat;
    }


    public function getnic(){
    return $this->nic;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getOther(){
      return $this->other;
    }
    public function getFname(){
        return $this->fullName;
    }
    public function getGender(){
        return $this->gender;
    }
    public function getBirth(){
      return $this->birth;
    }
    public function getAge(){
    return $this->age;
    }
    public function getheight(){
       return $this->height;
    }
    public function getblood(){
      return $this->blood;
    }
    public function getvehicle(){
        return $this->vehicle;
    }
    public function getAddrs(){
       return $this->adress;
    }
    public function getPhone(){
      return $this->phone;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getPasswd(){
       return $this->passwd;
    }
    public function getVerified(){
        return $this->verified;
    }
    public function getExam(){
        return $this->examStatus;
    }
    public function getTrail(){
        return $this->trailStatus;
    }
    public function getLicense(){
        return $this->licenedDate;
    }

    public function addToDataBase(){
        $this->saveUser($this->nic,$this->surname,$this->other,$this->fullName,$this->gender,$this->birth,$this->age,$this->height,$this->blood,$this->vehicle,$this->adress,$this->phone,$this->email,$this->passwd,$this->verified,$this->examStatus,$this->trailStatus);
    }

    public Function checkUser($userID,$password){
        $error = array();

        if(empty($userID) || empty($password)){
            if($userID == ""){
                $error[] = "userID is required";
            }

            if($password == "") {
                $error[] = "Password is required";
            }
        }else{
            $result = $this->selectUserByusername($userID);
            

            if(!empty($result)) {
                if(sha1($password)==$result[0]['passwrd']){
                    // $_SESSION['userId'] = $userID;
                    // header('location: http://localhost/System-for-Departmnet-of-Motor-Traffic/view/loginSuccessView.php');
                }else{
                    $error[] = "Password is incorrect!";
                }
            } else {		
                $error[] = "UserID doesnot exists";
            }
        }
        return($error);
    }

    public function isCorrectEmail($email){
        $result=$this->selectEmailByGivenEmail($email);
        if(count($result) == 0){
            return false;
        }
        else{
            return true;
        }
    }
    public function getRegistrationDate($nic, $fullname){
        $out=$this->getLastRowOFwaitList();
		if(empty($out)){
			$date=$this->getFirstRowOFlimitWait();
			$out["counts"]=1;
			$out["dates"]=$date["dates"];

		}
        elseif($out["counts"]>=($this->getLimit($out["dates"]))["limits"]){
            $date=$this->getNextDate(($this->getDateNumOFlimtWait($out["dates"]))["num"]+1);
            $out["counts"]=1;
            $out["dates"]=$date["dates"];
 

        }
        else{
            $out["counts"]=$out["counts"]+1;
            

        }
        $this->addToWaitlist($nic, $fullname, $out["dates"],$out["counts"]);
        $calculatedTimeSlot=$this->calculateTime($out["dates"],$out["counts"]);
        return $calculatedTimeSlot;
        //return date and add to waitlist
    }

    public function calculateTime($fidates,$ficount)
    {
        $newTime;
        $newLimits = ($this->getLimit($fidates))["limits"];
        if(($ficount/$newLimits)<=(1/4)){
            $newTime=" 8.00 AM";
        }
        elseif(($ficount/$newLimits)<=(2/4)){
            $newTime=" 10.00 AM";
        }
        elseif(($ficount/$newLimits)<=(3/4)){
            $newTime=" 01.00 PM";
        }
        else{
            $newTime=" 03.00 PM";
        }
        return $fidates.$newTime;
    }


    public function selectEmailByGivenEmail($email){
        return($this->ByGivenEmailselectEmail($email));
    }
    public function updateCodeDB($email,$code){
        return($this->CodeDBupdate($email,$code));
    }
    public function updatePasswordDB($email,$password){
        return($this->PasswordDBupdate($email,sha1($password)));
    }
    public function updaterecoverCodeDB($email){
        return($this->recoverCodeDBupdate($email));
    }
    
    public function clickedRenewlicense($id, $fullname){
        $this->removeVerification($id);
        $date=$this->getRegistrationDate($id, $fullname);
        return $date;
    }
    
    
    







}

