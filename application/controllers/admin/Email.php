<?php
defined('BASEPATH') OR exit ('No direct scrip access allowed');

/**
* 
*/
class Email extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function send()
	{
		$this->load->library('phpmailer_lib');

		$mail = $this->phpmailer_lib->load();

		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'gardenadorable@gmail.com';
		$mail->Password = 'adorablegarden@123';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;

		$mail->setFrom('gardenadorable@gmail.com','Adorable Garden');
		$mail->addReplyTo('gardenadorable@gmail.com','Adorable Garden');

		$mail->addAddress('mman19021998@gmail.com');

		$mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');


		$mail->Subject='Xác nhận đơn hàng';

		$mail->isHTML(true);

		$mailConten = "<h1>Cảm ơn bạn đã đặt hàng </h1>";

		$mail->Body = $mailConten;

		if(!$mail->send()){
			echo "Message could not be sent";
			echo 'Mailer Error'.$mail->ErrorInfo;
		}
		else{
			echo "Message has been sent";
		}	
	}
}