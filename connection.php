<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sports_and_cultural";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}
else
{
	echo "Connection Failed";
}

?>