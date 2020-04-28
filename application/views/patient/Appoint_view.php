<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <title>Book</title>
  <style>
    header
    {
      display: flex;
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
    }
    #menu-body{
      justify-content: center;
      align-items: center;
      display: flex;
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
  </style>
  <header>
      <p id="text1">Hospital Management System</p>
      <a href="#">Home</a>
      <a href="http://localhost/hospital/index.php/welcome/contact">Contact</a>
      <p>Welcome <span><?=$this->session->userdata['logged_in']['user']?></span></p>
  </header>
</head>
<body>
  <div>
    <div id="menu-body">
      <div id="text-body">
          <a href="http://localhost/hospital/index.php/patient/show">My details</a>
      </div>
      <div id="text-body">
          <a href="#">Book Appointment</a>
      </div>
      <div id="text-body">
          <a href="http://localhost/hospital/index.php/patient/showbook">View Booking</a>
      </div>
      <div id="text-body">
          <a href="http://localhost/hospital/index.php/login/logout">Sign Out</a>
      </div>
    </div>
  </div>
    <h1>BOOK APPOINTMENT</h1>
    <div id="center">
      <form action="http://localhost/hospital/index.php/Patient/book" method="post">
          <div>
              <label for="">Category:</label>
              <select name="choose" id="" value="Select">
                  <option value="Bone">Bone</option>
                  <option value="Dental Cleaning">Dental Cleaning</option>
              </select>
              <?php echo form_error('choose') ?>
          </div>
          <div>
              <label for="">Doctor:</label>
              <select name="doctor" id="">
                <?php if(count($names)) {?>
                  <?php foreach($names as $name){?>
                    <option value="<?php echo $name->name ?>"><?php echo $name->name ?></option>
                  <?php }?>
                <?php }?>
              </select>
              <?php echo form_error('doctor') ?>
          </div>
          <div>
              <input type="radio" name="time" id="" value="8:00-8:45">
              <label for="">8:00-8:45</label>
              <input type="radio" name="time" id="" value="9:00-9:45">
              <label for="">9:00-9:45</label>
              <input type="radio" name="time" id="" value="10:00-10:45">
              <label for="">10:00-10:45</label>
              <input type="radio" name="time" id="" value="11:00-11:45">
              <label for="">11:00-11:45</label>

              <input type="radio" name="time" id="" value="13:00-13:45">
              <label for="">13:00-13:45</label>
              <input type="radio" name="time" id="" value="14:00-14:45">
              <label for="">14:00-14:45</label>
              <input type="radio" name="time" id="" value="15:00-15:45">
              <label for="">15:00-15:45</label>
              <input type="radio" name="time" id="" value="16:00-16:45">
              <label for="">16:00-16:45</label>
              <?php echo form_error('time') ?>
          </div>
          <div>
              <label for="">Date</label>
              <input type="date" name="date">
              <?php echo form_error('date') ?>
          </div>
          <button type="submit">Enter</button>
      </form>
    </div>
</body>
</html>