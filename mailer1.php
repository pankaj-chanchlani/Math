<?php
include "connection1.php";
require '/mail/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
if(empty($_GET['info'])==false){
$info=unserialize($_GET['info']);
}
else{
	die("error found");
}
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.smtp2go.com';   // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'pankajchanchlani47@gmail.com';                 // SMTP username
$mail->Password = 'ASpirine12';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('pankajchanchlani4u@gmail.com', 'pankaj');
$mail->addAddress($info[0],'joe');     // Add a recipient
//$mail->addAddress('pankajchanchlani47@gmail.com');               // Name is optional
$mail->addReplyTo($info[0], 'Information');
$mail->addCC($info[0]);
//$mail->addBCC('ravichanchlani48@gmail.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);  
$r=rand(1000,9999);
/*                                // Set email format to HTML
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$rr=generateRandomString();
*/
$mail->Subject = 'Activation link';
$mail->Body    = $r;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   $k= "SELECT email FROM otp WHERE email='$info[0]'";
  $q=mysqli_query($con,$k);
  $num= mysqli_num_rows($q);
    $q="INSERT INTO `otp` (otp , email) VALUES ('$r','$info[0]')";
  mysqli_query($con,$q) or exit('Error in query');
if(!$mail->send()) {
    //echo 'Message could not be sent.';
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
 	//header('location:way2sms/example.php?tomob='.$info[2]);
   // echo 'Mail Has Been Sent. We Send You Mail At Your Mail-Id Check And Change Your Password.';
  //$k = array($info[0],$r);
  echo "1";
    header('location:activate.php?info=');
}
?>