<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/ExaminarDB.php');
include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/Comparator.class.php');

//Examinar responsible for mark exam attendence, mark trial marks, create and update exam questions. 
class Examinar extends ExaminarDB implements Countable, Iterator{
    private static $instance;
    private $details;
    private $questionArray;
    private $currentIndex = 0;
    private $idcomparator;
    private $datemparator;

    private function  __construct()
	{
        $details=array();
        $questionArray = array();
        //$this->Context=new Context();
        $idcomparator=new IdComparator();
        $datemparator=new DateComparator();
    }
    
    //Function for get data from exam list
    public function getDataE($nic)
    {
        $data = $this->getDataFromExm($nic);
        $Context=new Context();
        $Context->setComparator($datemparator);
        $aa = $Context->compare($data[0]["date"],date('Y-m-d'));
        if($data==null){
            $details["noId"]="InvalidID";
        }
        elseif($aa==0){
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

    //Function for mark attendence
    public function markAttendance($nic)
    {
        $this->attendance($nic);
    }

    //Function for add trial marks
    public function addMarks($nic,$marks,$fullname)
    {
        if($marks=="Yes"){
            $this->addtoUser($nic);
            $this->addtoLicense($nic,$fullname);
        }
        elseif($marks=="No"){
            $failBefore=$this->searchFailtrial($nic);
            if($failBefore==null){
                $this->addtoFailtrail($nic);
            }
            else{
                $count=$failBefore[0]["trialfail"]+1;
                $this->updateTrialfail($nic,$count);
            }
        }
    }

    //Function for  get data from trial list
    public function getDataT($nic)
    {
        $data = $this->getDataFromTrial($nic);
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
    //Function for  get data from exam list
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
    //Add question to the database
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

    //Iterator design pattern implementation
    public function count(): int
    {
        return count($this->questionArray);
    }

    public function current(): Bool
    {
        return $this->questionArray[$this->currentIndex];
    }

    public function key(): int
    {
        return $this->currentIndex;
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    public function valid(): bool
    {
        return isset($this->questionArray[$this->currentIndex]);
    }

    //function for show exam question to the examinor
    public function showQuestion()
    {
        $questionArray = $this->getQ();
        $table = '<table >';
        $table .='<tr><th width="60">Number</th><th>Question</th><th>Answere-1</th><th>Answere-2</th><th>Answere-3</th><th>Answere-4</th><th width="60">Correct</th></th>';
        for($i=0; $i < sizeof($questionArray); ++$i){
            $table.='<tr>';
            foreach ($questionArray[$i] as $key => $ques) {
                $table.='<td>'.$ques.'</td>';
            }
            $table.='</tr>';
        //echo $questionArray[0]["question"];
        }
        $table .= '</table>';
        echo($table);
    }

    ////Function for search question by ID
    public function findQuestion($number)
    {
        $data = $this->getQuestionFromExm($number);

        if($data==null){
            $data["noQsn"]="InvalidID";
        }
        return $data;
    }

    //Function for update question
    public function updateQs($question,$a1,$a2,$a3,$a4,$correct,$idnum)
    {
        $this->updatequestionData($question,$a1,$a2,$a3,$a4,$correct,$idnum);
    }


}


?>