<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/model/LicenseCounterDB.php');

class LicenseCounter extends LicenseCounterDB{
	private $details;
	private static $instance;
	private function  __construct()
	{
		$details=array();

	}
	
	//function to get userdetails
	public function show_userDetails($id){
		if($id!=""){
			$details = $this->getUserDetails($id);
			if(empty($details)){
				$details["error"]="invalid id";
			}

		
		}
		else{
			$details["error"]="please enter id";
		}
		return $details;	
    }
    public function issuedLicense($id){// after click issuelicense button
        $this->updateUserAccount($id);//add license issue date to license table
		$this->removeFromlicenseTable($id);// corresponding id and name remove from license table
	}
	
	public static function getInstance():LicenseCounter{
		if(!isset(self::$instance)){
			self::$instance=new LicenseCounter();
		}
		return self::$instance;
	}
	public function showLicensetable()// license table data get and return
    {
        $applicantArray = $this->getQ();
        $table = '<table >';
        $table .='<tr><th width="150">ID</th><th width="900">Full Name</th></tr>';
        for($i=0; $i < sizeof($applicantArray); ++$i){
            $table.='<tr>';
            foreach ($applicantArray[$i] as $key => $applicant) {
                $table.='<td>'.$applicant.'</td>';
            }
            $table.='</tr>';
        //echo $questionArray[0]["question"];
        }
        $table .= '</table>';
        echo($table);
    }

}
 ?>