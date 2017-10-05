<?php
//include "connection.php";
require '/mail/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
if(empty($_GET['info'])==false){
$info=unserialize($_GET['info']);

}
else{
	die("error found");
}
$mail->SMTPDebug = 3;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.smtp2go.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'pankajchanchlani4u@gmail.com';                 // SMTP username
$mail->Password = 'ASpirine12';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 2525;                                    // TCP port to connect to
//echo "hi\n";
$mail->setFrom('pankajchanchlani4u@gmail.com', 'pankaj');
$mail->addAddress($info[1],'joe');     // Add a recipient
//$mail->addAddress('pankajchanchlani47@gmail.com');               // Name is optional
$mail->addReplyTo($info[1], 'Information');
$mail->addCC($info[1]);
//$mail->addBCC('ravichanchlani48@gmail.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);  
$mail->Subject = 'Query Recording from '.' '.$info[0];
$mail->Body    = $info[3];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
	echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	
  header('location:/math/way2sms/example.php?tomob='.$info[2]);
//$mail->send();
 	  echo 'Mail Has Been Sent. We Send You Mail At Your Mail-Id Check And Change Your Password.';
    header('location:contact.php');
}
?>