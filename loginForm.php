<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
  nav {
  background-color: #1E90FF; /* set background color of the navbar */
  height: 60px; /* set height of the navbar */
}

nav ul {
  list-style: none; /* remove the default list style */
  margin: 0;
  padding: 0;
  display: flex; /* use flexbox to align menu items horizontally */
}

nav li {
  margin: 0 10px; /* add some space between menu items */
}

nav a {
  display: block; /* make the links fill the entire space of the menu item */
  color: #fff; /* set text color of links */
  font-size: 18px; /* set font size of links */
  text-decoration: none; /* remove underline from links */
  padding: 20px; /* add some padding to the links for better readability */
}

nav a:hover {
   /* change the background color of the link on hover */
   color: #fff;/* change the text color of the link on hover */
  text-decoration: underline blue;
}

nav li:hover{
  /* color: #fff;/* change the text color of the link on hover */
  text-decoration: underline blue; 
  color: #fff;
}

.loginBox{
  height: 320px;
  width: 320px;
  border: 4px solid;
  margin-top: 80px;
}

.logfield{
  width: 287px;
  height: 33px;
}

</style>

<body>

  <header>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Programs</a></li>
        <li><a href="#">Admissions</a></li>
        <li><a href="#">Student Life</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class = loginBox>
        <div style="background-color: #1E90FF; height: 60px; color: white; font-size: 30px; padding-top: 10px;">
          <p>Login</p>
        </div>
        <div style=" padding-top: 10px; padding-left: 10px;">
        <label for="username" style="font-weight: bold;">User Id</label>
          <input type="text" class="logfield" id="username" require=true name="userID">
         <div style = "margin-top: 20px;">
          <label for="username" style="font-weight: bold;">Password</label>
          <input type="password" class="logfield" id="pass" require=true name="pass">
         </div>
          </div>
          <button class = "btn btn-primary" style="margin-top: 20px; margin-left: 90px; text-align: center; width: 90px; background-color:#1E90FF" id="logbtn">Login</button>
    </div>
  </main>
  

<?php

  
?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>