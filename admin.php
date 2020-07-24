<?php
include("connection.php");
error_reporting(0);
?>

<html>
<head>

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

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

.button {
  border-radius: 4px;
  background-color:  #1abc9c;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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
  <a href="home.html">Home</a> 
  <a href="gallery.html">Gallery</a>
  <a href="contact.html">Contact Us</a>
  <a href="logout.php">Logout</a>
</div><br/><br/>

<center><h1>Welcome to Admin Panel</h1></center><br/><br/>

<form action="" method="POST">
<center>
<button class="button" name="as"><span>Add Sports Events </span></button><br/>
<button class="button" name="ac"><span>Add Cultural Events </span></button><br/>
<button class="button" name="vs"><span>View Sports Events </span></button><br/>
<button class="button" name="vc"><span>View Cultural Events </span></button><br/>
<button class="button" name="vl"><span>View List of Registered Candidates </span></button><br/>
</center>
</form><br/><br/><br/><br/><br/><br/><br/><br/>

<div class="footer">
  <h3>Sports and Cultural Activities &copy 2019. All Rights Reserved.</h3>
</div>

<?php
  if(isset($_POST['as']))
  {
	  header('location:adds.php');
  }
  
  if(isset($_POST['ac']))
  {
	  header('location:addc.php');
  }
  
 if(isset($_POST['vs']))
 {
	 $query = "SELECT * FROM sports";
	 $data = mysqli_query($conn, $query);
	 $total = mysqli_num_rows($data);
	 if($total != 0)
	 {
		  header('location:display.php');
	 }
 }
 
 if(isset($_POST['vc']))
 {
	 $query = "SELECT * FROM cultural";
	 $data = mysqli_query($conn, $query);
	 $total = mysqli_num_rows($data);
	 if($total != 0)
	 {
		  header('location:cdisplay.php');
	 }
 }
 
 if(isset($_POST['vl']))
 {
	 $query = "SELECT * FROM registration";
	 $data = mysqli_query($conn, $query);
	 $total = mysqli_num_rows($data);
	 if($total != 0)
	 {
		  header('location:displayl.php');
	 }
 }
?>

</body>
</html>