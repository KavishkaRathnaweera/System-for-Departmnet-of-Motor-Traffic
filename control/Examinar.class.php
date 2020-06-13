<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/ExaminarDB.php');

class Examinar extends ExaminarDB{

    private static Examinar $instance;
    private $details;
    private function  __construct()
	{
		$details=array();
	}

    public function getData($nic)
    {
        $data = $this->getDataFromExm($nic);
        if($data==null){
            $details["noId"]="InvalidID";
        }
        elseif($data[0]["dates"]!=date('Y-m-d')){
            $details["noDate"]="DateWrong";
            $details["date"]=$data[0]["dates"];
            // $data["nic"];
            //echo $data[0];
        }
        else{
            $details["nic"]=$data[0]["nic"];
            $details["fullname"]=$data[0]["fullname"];
            
        }
        return $details;
    }

    public function markAttendance($nic)
    {
        $this->attendance($nic);
    }

    public function addMarks($nic,$marks)
    {
        if($marks=="pass"){
            $this->addtoUser($nic);
        }
        elseif($marks=="fail"){
            $failBefore=$this->searchFailtrial($nic);
            if($failBefore==null){
                $this->addtoFailtrail();
            }
            else{
                $count=$failBefore[0]["trialfail"]+1;
                $this->updateTrialfail($nic,$count);
            }
        }
    }
    public function getDataT($nic)
    {
        $data = $this->getDataFromTrial($nic);
        if($data==null){
            $details["noId"]="InvalidID";
        }
        elseif($data[0]["date"]!=date('Y-m-d')){
            $details["noDate"]="DateWrong";
            $details["date"]=$data[0]["date"];
            // $data["nic"];
            //echo $data[0];
        }
        else{
            $details["nic"]=$data[0]["nic"];
            $details["fullname"]=$data[0]["fullname"];
            
        }
        return $details;
    }

    public function addQuestion($question,$a1,$a2,$a3,$a4,$correct)
    {
        $this->addQdatabase($question,$a1,$a2,$a3,$a4,$correct);
    }
    public static function getInstance():Examinar{
		if(!isset(self::$instance)){
			self::$instance=new Examinar();
		}
		return self::$instance;
	}

}


?>