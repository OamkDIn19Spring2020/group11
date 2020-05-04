<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <title>Home</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    header
    {
      display: flex;
      /* background-color: #ffffff; */
      padding: 5px;
      color:rgb(255, 0, 0);
      margin-right: 5px;
    }
    #text1
    {
      margin-top: 0px;
      font-weight: bold;
      font-size: 40px;
      width: 80%;
    }
    a
    {
        font-size: 20px;
        padding: 10px;
        text-decoration: none;
        color:rgb(29, 89, 255);
    }
    body
    {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url(https://www.dnvgl.fi/Images/shutterstock_1135057247_tcm25-149746.jpg);
      background-size: 1300px 900px;
    }
    #footer2
    {
      position: absolute;
      /* background-image: url(https://pmcvariety.files.wordpress.com/2019/12/cheezit_teaser1_still.png?w=1000&h=563&crop=1); */
    }
    #menu-body{
      justify-content: center;
      align-items: center;
      display: flex;
      /* margin-top: 400px; */
      background-color:rgb(29, 89, 255);
    }
    #text-body{
      display: flex;
      border-style: solid;
      border-radius: 5px;
      padding: 10px;
      background-color: white;
      margin-left: 20px;
      color:rgb(29, 89, 255);
    }
    p{
      color:rgb(29, 89, 255);
    }
    #title{
      font-size: 20px;
      font-weight: bold;
      margin: 0px;
    }
    #center{
      margin-top:10px;
      display: flex;
      justify-content: center;    
    }
    form{
      background-color: rgb(255, 255, 255);
      border: 1px solid black;
      border-radius: 3px;
      width: 160px;
      padding: 10px;
    }
    input{
      margin: 5px 0px;
    }
  </style>
  <header>
      <p id="text1">Hospital Management System</p>
      <a href="#">Home</a>
      <a href="http://localhost/hospital/index.php/welcome/contact">Contact</a>
  </header>
</head>
<body>
    <div>
        <div id="menu-body">
            <div id="text-body">
                <i class='fas fa-user-plus' style='font-size:120px;color:rgb(29, 89, 255)'></i>
                <div>
                <p id="title">Patients</p>
                <p>Register & Book Appointment</p>
                <a href="http://localhost/hospital/index.php/Patient">Click Here</a>
                <!-- <p>Click Here</p> -->
            </div>
            </div>
            <div id="text-body">
                <i class='fas fa-user-md' style='font-size:120px;color:rgb(29, 89, 255)'></i>
                <div>
                <p id="title">Doctor Login</p>
                <a href="http://localhost/hospital/index.php/login">Click Here</a>
                <!-- <p>Click Here</p> -->
                </div>
            </div>
            <div id="text-body">
                <i class='fas fa-user-cog' style='font-size:120px;color:rgb(29, 89, 255)'></i>
                <div>
                <p id="title">Admin Login</p>
                <a href="http://localhost/hospital/index.php/login">Click Here</a>
                <!-- <p>Click Here</p> -->
                </div>
            </div>
        </div>

        <div id= "center">
          <form action="http://localhost/hospital/index.php/Login" method="post">
          <div>
            <label for="username">Username</label><br>
            <input type="text" name="username" value="<?php echo set_value('username')?>" placeholder="Enter Username">
            <?php echo form_error('username') ?>
          </div>
          <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" value="" placeholder="Enter Password">
            <?php echo form_error('password') ?>
          </div>
          <button type="login"><strong>Login</strong></button>
        </div>
    </div>
</body>
</html>