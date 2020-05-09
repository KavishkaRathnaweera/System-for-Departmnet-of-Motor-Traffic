<?php

include("DBconnection.php");

class DataList extends DBconnection{
    private static $limitexam = 200;
    private static $limitwait = 200;
    private static $countexam = 0;
    private static $countwait = 0;



    public function addToWaitlist($date)
    {

        $sql = 'INSERT INTO waitlist(dates,counts) VALUES (?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute($date,$limitwait);
    }
    public function addToExamtlist($date)
    {

        $sql = 'INSERT INTO waitlist(dates,counts) VALUES (?,?)';
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute($date,$limitexam);
    }
    
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
}