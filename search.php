<?php

$servername = "mysql.hostinger.in";
$username = "u248795239_user";
$password = "u248795239";
$dbname = "u248795239_vnrs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$num=$_POST['number'];
$sql = "SELECT number, location, time FROM car WHERE number='$num'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<body bgcolor= pink>";

    echo "<br>";
	
	echo "<h3 align=center >LAST TRACED AT !</h3>";
	echo "<br>";
	
	
    
    echo "<table border=2 cellpadding=7 align=center><tr><th>NUMBER</th><th> LAT  || LONG & LOCATION </th><th>DATE & TIME</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["number"]."</td><td>".$row["location"]."</td><td>".$row["time"]."</td></tr>";
    }
    echo "</table>";
	echo "<br>";
	echo "<br>";
    echo '<p align="center"><b>SEARCH YOUR VEHICLE LOCATION FROM HERE --><b></p>';
    echo '<a href="https://www.google.co.in/maps/" ><img src="img/1.png" align="right" width="300" height="300"/></a>';
	echo "</body>";
} else {
    echo "0 results";
}
$conn->close();
?>