<?php
include("connection.php");
error_reporting(0);

 $_GET['e'];
 $_GET['v'];
 $_GET['d'];
 $_GET['t'];
 
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

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 35px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/*.modal {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #f1f1f1;
  padding-top: 10px;
}*/

.modal-content {
  background-color: #ddd;
  margin: 0% auto 10% auto;
  width: 60%;
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
</div>

<div class = "modal">
<form class = "modal-content" action="" method="GET">
  <div class="container">

    <label for="event"><b>Sports Event</b></label>
    <input type="text" placeholder="Enter Event" name="event" value="<?php echo $_GET['e'];?>" required>

    <label for="venue"><b>Venue</b></label>
    <input type="text" placeholder="Enter Venue" name="venue" value="<?php echo $_GET['v'];?>" required>
	
	<label for="date"><b>Date</b></label>
    <input type="text" placeholder="Enter Date" name="date" value="<?php echo $_GET['d'];?>" required>

    <label for="time"><b>Timings</b></label>
    <input type="text" placeholder="Enter Timings" name="time" value="<?php echo $_GET['t'];?>" required>



    <center><input type="submit" name="submit" value="Update" class="registerbtn"></center>
  </div>

</form>

</div>

<div class="footer">
  <h3>Sports and Cultural Activities &copy 2019. All Rights Reserved.</h3>
</div>

<?php
if($_GET['submit'])
{
	$event = $_GET['event'];
	$venue = $_GET['venue'];
	$date = $_GET['date'];
	$time = $_GET['time'];
	$query = "UPDATE sports SET Venue='$venue',Date='$date',Time='$time' WHERE Event='$event' ";
	$data = mysqli_query($conn,$query);
	
	if($data)
	{
		echo "<script>alert('Updated Successfully');</script>";
	}
}

?>

</body>
</html>