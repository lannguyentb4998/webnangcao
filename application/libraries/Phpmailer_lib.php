<?php
defined('BASEPATH') OR exit ('No direct scrip access allowed');

/**
 * CodeIgniter PHPMailer Class
 *
 * This class enables SMTP email with PHPMailer
 *
 * @category  Libraries
 * @author    CodexWorld
 * @link      htttps://www.codexworld.com
 */

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 class PHPMailer_lib
 {
 	public function __construct()
 	{
 		log_message('Debug','PHPMailer class is loaded.');
 	}

 	public function load()
 	{
 		require_once APPPATH.'third_party/PHPMailer/Exception.php';
 		require_once APPPATH.'third_party/PHPMailer/PHPMailer.php';
 		require_once APPPATH.'third_party/PHPMailer/SMTP.php';

 		$mail = new PHPMailer;
 		return $mail;

 	}

 }

