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
        <form action="mechanic main.html" method="post" style="margin-top: 70px; margin-left: 10px;">
            <fieldset style="width: 300px;">
                <legend>Mechanic login Form</legend>
                EMAIL: <input type="text" placeholder="email..." required>
                <br/>
                <br/>
                CONTACT NO: <input type="number" placeholder="phone no.." required>
                <br>
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