<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/System-for-Departmnet-of-Motor-Traffic/control/lib/PHPMailer.master/PHPMailerAutoload.php');

//This is email send implementation.
class EmailSend extends PHPMailer{
    private static $instance;
	public function  __construct()
	{
	}
//Authentication procedure
// email: motortrafficdepartmentsl@gmail.com
public function sendmail($subject,$body,$address){
    try{
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPAuth = 'true';
        $mail->SMTPSecure = 'ssl';
        $mail->Host ='smtp.gmail.com';
        $mail->Port = '465';
        $mail->isHTML();
        $mail->Username = 'motortrafficdepartmentsl@gmail.com';
        $mail->Password = "0710000000";
        $mail->SetFrom('motortrafficdepartmentsl@gmail.com');
        
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($address);
        $mail->Send();

    }
    catch(phpmailerException $e){
        echo $e->getMessage();
    }
    }
    public static function getInstance():EmailSend{
		if(!isset(self::$instance)){
			self::$instance=new EmailSend();
		}
		return self::$instance;
	}


}

// $aaa = new EmailSend();
// $body='asasasas';
// $aaa->sendmail('Information for License applicant',$body,'kyasinrathnaweera@gmail.com');

?>