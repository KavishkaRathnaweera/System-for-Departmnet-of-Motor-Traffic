<?php 

include '../model/counter2DB.php';

class counter2 extends counter2DB{
	private $out;
	private $details;
	public function  __construct()
	{
		$out=null;
		$details=array();

	}
	
	//function to get userdetails
	public function show_userDetails($id){
		if($id!=""){
			$out = $this->getUserDetails($id);
			$details=$out->fetch();
			if(empty($details)){
				$details["error"]="invalid id";
			}

		
		}
		else{
			$details["error"]="please enter id";
		}
		return $details;	
	}
}
 ?>