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
        <form action="customer main.php" method="post" style="margin-top: 70px; margin-left: 10px;">
            <fieldset style="width: 300px;">
                <legend>User login</legend>
                EMAIL: <input type="text" name="email" placeholder="email..." required>
                <br><br>
                CONTACT NO: <input type="number" name="contact" placeholder="phone no.." required>
               <!-- <br><br>
                LOCATION: <input type="txt" name="location" placeholder="Locatin..." required>  -->
                <br><br>
                NAME: <input type="text" name="name" placeholder="name..." required>
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
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST['email'];
    $name=$_POST['name'];
    $contact=$_POST['contact'];
    
    
  // link to the database 
echo "backend FILE";

$servername = "localhost";
$username = "root";
$password = "";
$database = "test2";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    //data insert quiry
    $sql = "INSERT INTO `student` (`name`, `email`, `contact no`) VALUES ('$name', '$email', '$contact')";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo '<div class="alert alert-success" role="alert"> 
    <br><br><br><br><br><br><br><br>
    strong>Success!</strong> Your email ' .$email.'and contact no '.$contact.'and name is '.$name.'and location is ';
} 
else {
    echo "record not insert successfully". mysqli_error($conn);
}
}
}


?>