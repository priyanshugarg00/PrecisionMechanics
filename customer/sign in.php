<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <form action="sign in.php" method="post" style="margin-top: 70px; margin-left: 10px;">
            <fieldset style="width: 300px;">
                <legend>User login</legend>
                EMAIL: <input type="text" name="email" placeholder="email..." required>
                <br><br>
                CONTACT NO: <input type="number" name="contact" placeholder="phone no.." required>
               <!-- <br><br>
                LOCATION: <input type="txt" name="location" placeholder="Locatin..." required>  -->
                <br><br>
                USERNAME: <input type="text" name="username" placeholder="name..." required>
                <br><br>
                <input type="checkbox" name="" id="" required> <a href="customer term.html">Terms and Conditions</a>
                <br><br>
                <input type="checkbox" name="" id="" required> <a href="ev customer terms.html">Terms and Conditions For EV</a>
                <br> <br>
                <input type="submit" value="submit">
                <input type="reset" value="reset">
    
            </fieldset>
        </form>
    </div>
    
</body>
</html>

<?php
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    include '../style_logic/backend.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    
   
        $sql = "select * from c_login where username='$username' AND email='$email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
           $login = true;
           session_start();
           $_SESSION['loggedin'] = true;
           $_SESSION['username'] = $username;
           header("location: customer main.php");
           echo "logged in";
        }
        else {
           $sql1 = "INSERT INTO `c_login` (`username`, `contact`, `email`) VALUES ('$username', '$contact', '$email');";
           $result = mysqli_query($conn, $sql1);
           $login = true;
           session_start();
           $_SESSION['loggedin'] = true;
           $_SESSION['username'] = $username;
           header("location: customer main.php");
           echo "logged in";
        }
}
?>