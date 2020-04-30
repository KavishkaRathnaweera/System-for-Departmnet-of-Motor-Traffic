<?php

include("../model/CreateAccountDB.php");

class UserAccount extends CreateAccountDB{
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
    private $verified;
    private $registerDate;
    private $examStatus;
    private $trailStatus;
    private $licenedDate;

    public function __constructor()
    {
        $verified="No";
        $registerDate=null;
        $examStatus="No";
        $trailStatus="No";
        $licenedDate="No";
    }

    public function setnic($nic){
        $this->nic;
    }
    public function setSurname($surname){
        $this->surname;
    }
    public function setOther($other){
        $this->other;
    }
    public function setFname($fullName){
        $this->fullName;
    }
    public function setGender($gender){
        $this->$gender;
    }
    public function setBirth($birth){
        $this->birth;
    }
    public function setAge($age){
        $this->age;
    }
    public function setheight($height){
        $this->height;
    }
    public function setblood($blood){
        $this->blood;
    }
    public function setvehicle($vehicle){
        $this->vehicle;
    }
    public function setAddrs($adress){
        $this->adress;
    }
    public function setPhone($phone){
        $this->phone;
    }
    public function setEmail($email){
        $this->email;
    }
    public function setPasswd($passwd){
        $this->passwd;
    }
    public function setVerified($verified){
        $this->verified;
    }
    public function setExam($examStatus){
        $this->examStatus;
    }
    public function setTrail($trailStatus){
        $this->trailStatus;
    }
    public function setLicense($licenedDate){
        $this->licenedDate;
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
        $this->saveUser($this->nic,$this->dsurname,$this->other,$this->fullName,$this->gender,$this->birth,$this->age,$this->height,$this->blood,$this->vehicle,$this->adress,$this->phone,$this->email,$this->passwd,$this->verified,$this->examStatus,$this->trailStatus);
    }







}

