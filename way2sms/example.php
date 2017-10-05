<?php
error_reporting(E_ALL);
ob_implicit_flush(true);

include_once "class.curl.php";
include_once "class.sms.php";
include_once "cprint.php";

if(empty($_GET['tomob'])==false){
    $num=$_GET['tomob'];
}
else{
	die("error in mob");
}

$smsapp=new sms();
$smsapp->setGateway('way2sms');
$myno="9529263020";
$p="T8352M";
$tonum=$num;
//echo $num;
$mess="WE WILL REPLY U ASAP";

cprint("Logging in ..\n");
$ret=$smsapp->login($myno,$p);

if (!$ret) {
   cprint("Error in Logging In");
   exit(1);
}

print("Logged in Successfully\n");

print("Sending SMS ..\n");
$ret=$smsapp->send($tonum,$mess);

if (!$ret) {
   print("Error in sending message");
   exit(1);
}
header('location:../contact.php?status=success');
print("Message sent");

?>