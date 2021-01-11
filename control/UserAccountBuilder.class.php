<?php
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/UserAccount.class.php');

class UserAccountBuilder{
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
    private $village;
    private $weight;
    private $eyecolor;

    public function setnic($ni){
        $this->nic=$ni;
        return $this;
    }
    public function setSurname($surnam){
        $this->surname=$surnam;
        return $this;
    }
    public function setOther($othe){
        $this->other=$othe;
        return $this;
    }
    public function setFname($fullNam){
        $this->fullName=$fullNam;
        return $this;
    }
    public function setGender($gende){
        $this->gender=$gende;
        return $this;
    }
    public function setBirth($birt){
        $this->birth=$birt;
        return $this;
    }
    public function setAge($ag){
        $this->age=$ag;
        return $this;
    }
    public function setheight($heigh){
        $this->height=$heigh;
        return $this;
    }
    public function setblood($bloo){
        $this->blood=$bloo;
        return $this;
    }
    public function setvehicle($vehicl){
        $this->vehicle=$vehicl;
        return $this;
    }
    public function setAddrs($adres){
        $this->adress=$adres;
        return $this;
    }
    public function setPhone($phon){
        $this->phone=$phon;
        return $this;
    }
    public function setEmail($emai){
        $this->email=$emai;
        return $this;
    }
    public function setPasswd($passw){
        $this->passwd=$passw;
        return $this;
    }
    public function setVerified($verifie){
        $this->verified=$verifie;
        return $this;
    }
    public function setExam($examStatu){
        $this->examStatus=$examStatu;
        return $this;
    }
    public function setTrail($trailStatu){
        $this->trailStatus=$trailStatu;
        return $this;
    }
    public function setLicense($licenedDat){
        $this->licenedDate=$licenedDat;
        return $this;
    }

    public function getUser(){
        $U=new UserAccount();
        $U->setnic($this->nic)   ;
        $U->setSurname($this->surname);        
        $U->setOther($this->other);
        $U->setFname($this->fullName);
        $U->setGender($this->gender);      
        $U->setBirth($this->birth);        
        $U->setAge($this->age);
        $U->setheight($this->height);          
        $U->setblood($this->blood);         
        $U->setvehicle($this->vehicle);         
        $U->setAddrs($this->adress);        
        $U->setPhone($this->phone);         
        $U->setEmail($this->email);           
        $U->setPasswd($this->passwd);          
        $U->setVerified($this->verified); 
        $U->setExam($this->examStatus);
        $U->setTrail($this->trailStatus);
        $U->setLicense($this->licenedDate);
        return $U;
    }
}