<?php
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
$mail->Username = 'pankajchanchlani47@gmail.com';                 // SMTP username
$mail->Password = 'ASpirine12';                     // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('pankajchanchlani4u@gmail.com', 'pankaj');
$mail->addAddress($info[2],$info[0]);     // Add a recipient
//$mail->addAddress('pankajchanchlani47@gmail.com');               // Name is optional
$mail->addReplyTo($info[2], 'Information');
$mail->addCC($info[0]);
//$mail->addBCC('ravichanchlani48@gmail.com');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
include 'connection.php';
$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $result = '';
    for ($i = 0; $i < 10; $i++)
        $result .= $characters[mt_rand(0, 61)];
    $login = $info[1];
    $username = $info[0];
    $email = $info[2];
    $address = $info[3];
    $city = $info[4];
    $phone = $info[5];
    $pass=$result;

$t = "SELECT login FROM `mst_user` WHERE login='$login'";
  $p=mysqli_query($con,$t);
  $num= mysqli_num_rows($p);
  if($num==0)
  {
   $q="INSERT INTO `mst_user` (username,login,email,address,city,phone,pass) VALUES ('$username','$login','$email','$address','$city','$phone','$pass')";
  mysqli_query($con,$q) or exit('Error in query');
}
else
{
	echo "change kar bhai";
}
$mail->Subject = 'Query is the Subject';
$mail->Body    = "You Are Using Quizzeria Website Where You CAn Explore Yourself... Your Details Are <br> Login-Name = ".$info[1]."<br>Password = ".$result;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
//	header('location:way2sms/example.php?tomob='.$info[2]);
    //echo 'Mail has been sent';
    header('location:signup.php?k='.serialize ($k));
}
?>