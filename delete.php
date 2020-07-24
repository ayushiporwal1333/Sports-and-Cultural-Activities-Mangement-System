<html>
<head>
<style>
/* Style the header */
.header {
  padding : 5px;
  text-align: center;
  background: #1abc9c;
  color: white;
}
/* Increase the font size of the h1 element */
.header h1 {
  font-size: 30px;
  font-family : serif;
}
/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

td
{
	padding:20px;
}

/* Footer */
.footer {
  padding: 5px;
  text-align: center;
  background: #ddd;
}
</style>
</head>

<body>

<div class="header">
  <h1>SPORTS AND CULTURAL ACTIVITIES</h1>
</div>

<div class="navbar"> 
  <a href="display.php">Back</a>
</div><br/><br/><br/>

<?php
include("connection.php");
error_reporting(0);

$event = $_GET['e'];
$query = "DELETE FROM sports WHERE Event='$event'";
$data = mysqli_query($conn,$query);

if($data)
{
		echo "DELETED!!";
}
?>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="footer">
  <h3>Sports and Cultural Activities &copy 2019. All Rights Reserved.</h3>
</div>
</body></html>