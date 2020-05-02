<?php

include("../model/CreateAccountDB.php");

class createAccount extends CreateAccountDB{
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







}

