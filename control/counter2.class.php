<?php 

include ($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic//model/counter2DB.php');

class Counter2 extends Counter2DB{
	private $out;
	private $details;
	private static Counter2 $instance;
	private function  __construct()
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
	public static function getInstance():Counter2{
		if(!isset(self::$instance)){
			self::$instance=new Counter2();
		}
		return self::$instance;
	}
}
 ?>