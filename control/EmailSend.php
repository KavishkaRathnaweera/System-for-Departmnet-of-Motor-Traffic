<?php
require_once('lib/PHPMailer.master/PHPMailerAutoload.php');

class EmailSend extends PHPMailer{


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


}

// $aaa = new EmailSend();
// $body='asasasas';
// $aaa->sendmail('Information for License applicant',$body,'kyasinrathnaweera@gmail.com');

?>