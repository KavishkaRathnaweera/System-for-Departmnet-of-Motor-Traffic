<?php

include($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/ExamPaperDB.php');

class ExamPaper extends ExamPaperDB{

    private $questionArray;
    private $numberOfCorrectAnswers=0;

    public function UpdateExamResult($examresult,$idnum){
        $this->UpdateExamState($examresult,$idnum);
    }

    public function numberOfQuestions(){
        return(count($this->getQuestions()));
    }

    public function randamNumberArray(){
        return(array_rand($this->getQuestions(),10));
    }

    public function promptQuestion($array)
    {
        $questionArray = $this->getQuestions();
        $table = '<div class="questions"><form method="POST" class="checkanswers" action="includes/ExamPaper.inc.php" ><table >';
        $count=0;
        foreach($array as $i){
            $count=$count+1;
            $table.='<br>';
            $table.='<h2 class="Qpara">'.$count.'. ';
            $table.=''.$questionArray[$i]["question"].'</h2>';
            $table.='<label class="container">'.$questionArray[$i]["answere1"].'<input type="radio" value="A1" name="'.$questionArray[$i]["number"].'"><span class="checkmark"></span></label>';
            $table.='<label class="container">'.$questionArray[$i]["answere2"].'<input type="radio" value="A2" name="'.$questionArray[$i]["number"].'"><span class="checkmark"></span></label>';
            $table.='<label class="container">'.$questionArray[$i]["answere3"].'<input type="radio" value="A3" name="'.$questionArray[$i]["number"].'"><span class="checkmark"></span></label>';
            $table.='<label class="container">'.$questionArray[$i]["answere4"].'<input type="radio" value="A4" name="'.$questionArray[$i]["number"].'"><span class="checkmark"></span></label>';
        }
        $table .= '<button type="submit" name="check" id="buttonAutomaticallySubmit">Submit</button></form><div>';
        echo($table);
    }


    public function correctAnswerCount($array){
        $questionArray = $this->getQuestions();
        $numberOfCorrectAnswers=0;
        foreach($array as $Qnumber){
            if($_POST[$Qnumber+1] == $questionArray[$Qnumber]["correct"]){
                $numberOfCorrectAnswers=$numberOfCorrectAnswers+1;
            }
        }
        return $numberOfCorrectAnswers;
    }
    

    public function isPassed($numberOfCorrectAnswers){
        if($numberOfCorrectAnswers>5){
            return true;
        }else{
            return false;
        }
    }
    public Function checkUserForWriteExam($ID,$date){
        $err = array();
        $details=$this->getUserRow($ID);
        
        if(!empty($details)) {
            $correctDate=$details[0]['dates'];
            if($date==$correctDate){
                if($details[0]['attendance']=="Yes"){
                    $err[]="you can write the exam";
                }else{
                    $err[]= "Today you have exam. Please come to the department before 8.00AM";
                }
            }else{
                $err[] = "Your Exam Day is {$correctDate} You are not eligible for write exam now!" ;
            }
        }else {		
            $err[] = "You cannot write exam. Whether you already wrote the exam or not yet came to the department.";
        }
        return ($err);
    }
    public Function showUserDetails($ID){
        return($this->selectUserByUserName($ID));
    }
    public function addtoFailList($nic){
            $failBefore=$this->searchFailexam($nic);
            if($failBefore==null){
                $this->addtoFailexam($nic);
            }
            else{
                $count=$failBefore[0]["examfail"]+1;
                $this->updateExamfail($nic,$count);
            }
    }

}