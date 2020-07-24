<?php
include("connection.php");
error_reporting(0);
session_start();
?>

<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

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

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
}


input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  opacity: 0.9;
}

.button:hover {
  opacity:1;
}

.container {
  padding: 30px;
}

/*.modal {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: #f1f1f1;
  padding-top: 50px;
}*/

.modal-content {
  background-color: #ddd;
  margin: 5% auto 15% auto;
  width: 50%;
}

/* Footer */
.footer {
  padding: 5px;
  text-align: center;
  background: #ddd;
}

 

</style>
<body>

<div class="header">
  <h1>SPORTS AND CULTURAL ACTIVITIES</h1>
</div>

<div class="navbar">
  <a href="home.html">Home</a>
  <a href="gallery.html">Gallery</a>
  <a href="contact.html">Contact Us</a>
</div><br/>

<center><h2>User Login</h2></center>

  <div class="modal">
  <form class="modal-content" action="" method="POST">
    <div class="container">
      
      <label for="usr"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="usr" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

       <center><input type="submit" name="submit" value="Login" class="button"></center>
     
    </div>
  </form>
  </div>
  
  <div class="footer">
  <h3>Sports and Cultural Activities &copy 2019. All Rights Reserved.</h3>
</div>
  
 <?php
 if(isset($_POST['submit']))
 {
	 $user = $_POST['usr'];
	 $pwd = $_POST['psw'];
	 $query = "SELECT * FROM user WHERE AUID='$user' && Password='$pwd'";
	 $data = mysqli_query($conn, $query);
	 $total = mysqli_num_rows($data);
	 if($total==1)
	 {
		 header('location:user.php');
	 }
	 else
	 {
		 echo "Login Failed";
	 }
 }
?>
  
</body>
</html>