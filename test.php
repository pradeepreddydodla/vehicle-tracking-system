
<?php

$servername = "mysql.hostinger.in";
$username = "some_user";
$password = "somepassword";
$dbname = "u248795239_vnrs";

$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=<your_api_key>&ip=117.10.168.1&format=json"));
$location=$url->latitude;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}


$file = fopen("data.txt", "r");
$i = 0;

while (!feof($file)) 
{

$line_of_text = fgets($file);



$ip = $_SERVER['REMOTE_ADDR'];
$url = "http://freegeoip.net/json/" . $ip;
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
$latitude = print_r($data['latitude'], true);
$longitude = print_r($data['longitude'], true);
$country = print_r($data['country_code'], true);
$city = print_r($data['city'], true);
$state = print_r($data['region_code'], true);
$location = $latitude . " | " . $longitude . " | " . $city . " | " . $state . " | " . $country;


$date = new DateTime();
$date->setTimezone(new DateTimeZone('Asia/Calcutta'));

$fdate = $date->format('Y-m-d H:i:s');

$sql = "INSERT INTO car (number, location, time)
VALUES ('$line_of_text', '$location', '$fdate')";

mysqli_query($conn, $sql);    
mysqli_close($conn);
}

fclose($file);




?>