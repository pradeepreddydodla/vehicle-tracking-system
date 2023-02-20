<?php
$token = 'i7QP36s9Cc';
$mobile = 9786543210;
$msg = 'YourVehicleHasBeenTrackedSuccessfully';
$site = 'somesite.com';
$url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";
$homepage = file_get_contents($url);
if($homepage)
{
  echo "Message Send Completed...";
}
else{
  echo "Something Went Wrong...";
}
?>
