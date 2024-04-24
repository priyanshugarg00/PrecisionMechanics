<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mechanic infomation</title>
    <link rel="stylesheet" href="../style_logic/main.css">
</head>
<body>
    <!--nav bar-->

  <div class="header">
    <img src="../img/logo.jpeg" alt=""  style="float: right; height: 50px; width: 50px; margin-top: 5px; margin-right: 15px;">
  </div>
  
  <input type="checkbox" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
      <div class="spinner top"></div>
      <div class="spinner middle"></div>
      <div class="spinner bottom"></div>
  </label>
  <div id="sidebarMenu">
      <ul class="menu">
        <li><a href="index.html">Home</a></li>
        <li><a href="careers.html">Career</a></li>
        <li><a href="msign up.html">Sign Up</a></li>
        <li><a href="msign in.html">Sign In</a></li>
        <li><a href="customer term.html">Customer Terms</a></li>
        <li><a href="ev customer terms.html">EV Customer Terms</a></li>
        <li><a href="mechanic terms.html">Mechanic Terms</a></li>
        <li><a href="ev mechanic terms.html">EV Mechanic Terms</a></li>
        <li><a href="about us.html">About Us</a></li>
        <li><a href="contact us.html">Contact Us</a></li>
      </ul>
  </div>

<!--Form-->
    <div>
        <form action="msignin.php" method="post" style="margin-top: 70px; margin-left: 10px;">
            <fieldset style="width: 300px;">
                <legend>Mechanic login Form</legend>
                EMAIL: <input id="email" name="email" type="text" placeholder="email..." required>
                <br/>
                <br/>
                USERNAME: <input id="name" name="username" type="text" placeholder="name..." required>
                <br>
                <input type="checkbox" name="" id="" required> <a href="mechanic terms.html">Terms and Conditions</a>
                <br>
                <input type="checkbox" name="" id="" required> <a href="ev mechanic terms.html">Terms and Conditions For EV</a>  
                <br><br>
                <input type="submit" value="submit">
                <input type="reset" value="reset">
            </fieldset>
        </form>
    </div>

<!--php -->

<?php
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    include '../style_logic/backend.php';
    $username = $_POST["username"];
    $email = $_POST["email"];

    
   
        $sql = "select * from login where username='$username' AND email='$email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
           $login = true;
           session_start();
           $_SESSION['loggedin'] = true;
           $_SESSION['username'] = $username;
           header("location: mechanic main.php");
        }
        else {
           $showError = "Invalid Credentials"; 
        }
}

?>
