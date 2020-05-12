<?php

include("DBconnection.php");

class AdminDB extends DBconnection{
    private static $limitexam = 200;
    private static $limitwait = 200;
    // private static $countexam = 0;
    // private static $countwait = 0;



    public function addToWaitlist($date,$limits)
    {

        $sql = 'INSERT INTO limitwait(dates,limits) VALUES (?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$date,$limits]);
    }

    public function addToExamtlist($date,$limits)
    {

        $sql = 'INSERT INTO limitexam(dates,limits) VALUES (?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$date,$limits]);
    }

    public function checkDate($date)
    {
        $sql='SELECT * FROM limitwait WHERE dates=?';
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$date]);
        $data = $stmt->fetchAll();
        return $data;
    }
    public function checkDateE($date)
    {
        $sql='SELECT * FROM limitexam WHERE dates=?';
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$date]);
        $data = $stmt->fetchAll();
        return $data;
    }

    // private function getlast(){

    //     $sql = 'SELECT "counts" FROM waitlist ORDER BY "num" DESC LIMIT 1';
    //     $stmt = $this->connection()->query($sql);
    //     $data = $stmt->fetchAll();
    //     return $data[0];

    // }
    
    public static function changeLimitExam($limits)
    {
        self::$limitexam = $limits;    
    }
    public static function changeLimitWait($limits) 
    {
        self::$limitwait = $limits;    
    }
    public static function getlimitwait()
    {
        return self::$limitwait;
    }
    public static function getlimitexam()
    {
        return self::$limitexam;
    }
    public function selectOfficerById($id)
    {
        $sql = 'SELECT * FROM officer WHERE id= ?';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetchAll();
		return $data;
    }

    
}