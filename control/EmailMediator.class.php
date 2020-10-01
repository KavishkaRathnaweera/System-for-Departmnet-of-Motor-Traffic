<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/MailDB.php');
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/EmailSend.php');

class EmailMediator extends MailDB{
    private static $instance;

	private function  __construct()
	{

	}
	public static function getInstance():EmailMediator{
		if(!isset(self::$instance)){
			self::$instance=new EmailMediator();
		}
		return self::$instance;
    }
    public function SendEmailList($applicantType)
    {
        $body;
        $applicantSet;
        $day = date('Y-m-d');
        $nextday=date('Y-m-d',strtotime($day.' +1 day'));
        switch($applicantType){
            case 'newApplicant':
                $applicantSet=$this->getNextApplicant("waitlist",$nextday);
                $body="Your new Registration Date is tomorrow. Please come to Motor Trafic Department at assigned time. Check Previous email to get date.";
                break;
            case 'examApplicant':
                $applicantSet=$this->getNextApplicant("examlist",$nextday);
                $body="Your Exam Date is tomorrow. Please come to Motor Trafic Department at assigned time. Check Previous email to get date.";
                break;
            case 'trialApplicant':
                $applicantSet=$this->getNextApplicant("trialist",$nextday);
                $body="Your Trial Date is tomorrow. Please come to Motor Trafic Department at assigned time. Check Previous email to get date.";
                break;
        }
        $email = EmailSend::getInstance();

        //print_r($applicantSet);
        if(isset($applicantSet) && $applicantSet!=null){
           // echo 1112;
        $it = new ApplicantIterator($applicantSet);
        foreach($applicantSet as $nics){
            // foreach ($questionArray[$i] as $key => $ques) {
            // }
            $emailApp = $this->getNextApplicantEmail($nics['nic']);
            $email->sendmail('Remainder',$body,$emailApp['email']);

        }
    }       
    }

}

class ApplicantIterator implements Iterator{
    private $collection;
    private $position;

    public function __construct($collect)
    {
        $this->collection=$collect;
    }
    public function rewind(Type $var = null)
    {
        # code...
    }
    public function current()
    {
        return $this->collection[$this->position];
    }
    public function key()
    {
        $this->position;
    }
    public function next()
    {
        $this->position= $this->position + 1;
    }
    public function valid()
    {
        return isset($this->collection[$this->position]);
    }

}
    

 ?>