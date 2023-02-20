<?php

$dbhost =  "mysql.hostinger.in";
$dbuser = "some_user";
$dbpass = "somepassword";




$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"u248795239_vnrs");
if(!$conn)
{
die('Could not connect: ' . mysqli_error($conn));
}
else{

$sql= "select email from register where vehicle in (select number from car);";
$sql1= "select mobile from register where vehicle in (select number from car);";
$res = mysqli_query($conn,$sql);
$res1 = mysqli_query($conn,$sql1);


while($num1 = mysqli_fetch_assoc($res1))
{
$mobile =$num1['mobile'];

$msg = 'YourVehicleHasBeenTracked';
$site = 'searchyourcar.ml';
$token = 'sometoken';

$url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";
$homepage = file_get_contents($url);
if($homepage)
{
  echo "";
}
else{
  echo "Something Went Wrong...";
}

} 




while($num = mysqli_fetch_assoc($res))
{
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Calcutta');

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTPss
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'someemail@gmail.com';

//Password to use for SMTP authentication
$mail->Password = 43835646;

//Set who the message is to be sent from
$mail->setFrom('someemail@gmail.com', 'Admin');

//Set an alternative reply-to address
$mail->addReplyTo($num['email'], '');

//Set who the message is to be sent to
$mail->addAddress($num['email'], '');

//Set the subject line
$mail->Subject ='Vehicle Traced !';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML( 'You can now trace your vehicle location from our website www.searchyourcar.ml. Thank You !', dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'You can now trace your vehicle location from our website www.searchyourcar.ml. Thank You !';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
 else {
    echo "";
}

}
}
?>

