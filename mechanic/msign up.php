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

<!--Form real-->
    <div>
        <form action="msign up.php" method="post" style="margin-top: 70px; margin-left: 10px;">
            <fieldset style="width: 400px;">
        <legend>Mechanic Register Form</Form></legend>
        USERNAME: <input type="text" placeholder="name..." name="username" required>
        <br><br>
        CONTACT NO: <input type="number" placeholder="phone no.." name="contact" required>
        <br><br>
        EMAIL: <input type="email" placeholder="email..." name="email" required>
      <!--  <br><br>
        LOCATION: <input type="" placeholder="Locatin..." name="Locatin" required>-->
        <br><br>
        EXPERIENCE <input type="years" name="experience" required>
       <!-- <br><br>
        TYPE OF VEHICLE REPAIR<br>
                <input type="checkbox" name="type_T_W> TWO WHEELER <br> 
                <input type="checkbox" name="type_F_W"> FOUR WHEELER <br>
                <input type="checkbox" name="type_T_E" id=""> TWO WHEELER EV <br>
                <input type="checkbox" name="type_F_E" id=""> FOUR WHEELER EV
                <br><br>
        IMAGE
        <input type="file" name="IMAGE" id="" required>
        <br><br>
        IDENTITY PROF
        <input type="file" name="id" id="" required>
        <br><br>
        DRIVING LICENSE
        <input type="file" name="dl" id="" required>-->
        <br><br> 
        <input type="checkbox" name="" id="" required> <a href="mechanic terms.html">Terms and Conditions</a>
        <br>
        <input type="checkbox" name="" id="" required> <a href="ev mechanic terms.html">Terms and Conditions For EV</a>
        <br>
        <input type="submit" value="submit">
        <input type="reset" value="reset">

    </fieldset>
</form>
</div>

</body>
</html>
<?php
$showError = false;
$showAlert = false;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    include '../style_logic/backend.php';  // link to the database 
    $username = $_POST['username'];
    $contact= $_POST['contact'];
    $email = $_POST['email'];
    $experience = $_POST['experience'];

    // check exist user 

   $existSql = "SELECT * FROM `login` WHERE 'username' = '$username'";
   $result = mysqli_query($conn, $existSql);
   $numExistRows = mysqli_num_rows($result);
   if ($numExistRows > 0){
    $showError = "Username Already Exists";
   }
   else{
   // if (($password == $cpassword)) {
      $sql = "INSERT INTO `login` (`username`, `contact`, `email`, `experience`) VALUES ('$username', '$contact', '$email', '$experience');";
      $result = mysqli_query($conn, $sql);
 // } else {
 //     echo "password are not matching";
 // }
   } 
}

?>