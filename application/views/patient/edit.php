<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <title>Edit</title>
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
  </header>
</head>
<body>
  <div>
    <div id="menu-body">
      <div id="text-body">
        <a href="#">My details</a>
      </div>
      <div id="text-body">
        <a href="http://localhost/hospital/index.php/patient/book">Book Appointment</a>
      </div>
      <div id="text-body">
        <a href="http://localhost/hospital/index.php/patient/showbook">View Booking</a>
      </div>
      <div id="text-body">
        <a href="http://localhost/hospital/index.php/login/logout">Sign Out</a>
      </div>
    </div>
  </div>

  <h1>Edit Information</h1>

        <?php
          foreach ($userArray as $key => $value)
          {
        ?>

        <div id="center">
      <form action="http://localhost/hospital/index.php/patient/update" method="post">
        <div>
          <label for="fullname">Fullname</label>
          <input type="text" name="fullname" placeholder="Fullname" value="<?php echo $value->fullname; ?>">
          <?php echo form_error('fullname') ?>
        </div>
        <div>
          <label for="Address">Address</label>
          <input type="text" name="address" placeholder="Address" value="<?php echo $value->address; ?>">
          <?php echo form_error('address') ?>
        </div>
        <div>
          <label for="City">City</label>
          <input type="text" name="city" placeholder="City" value="<?php echo $value->city; ?>">
          <?php echo form_error('city') ?>
        </div>
        <div>
          <label for="D.O.B">D.O.B</label>
          <input type="date" name="dob" placeholder="D.O.B" value="<?php echo $value->dob; ?>">
          <?php echo form_error('dob') ?>
        </div>
        <div>
          <label for="Gender">Gender</label>
          <select name="gender" id="" value="<?php echo $value->gender; ?>">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <?php echo form_error('gender') ?>
        </div>
        <div>
          <label for="ID Number">ID Number</label>
          <input type="number" name="idnumber" placeholder="id" value="<?php echo $value->id_number; ?>">
          <?php echo form_error('idnumber') ?>
        </div>
        <div>
          <label for="Email">Email</label>
          <input type="email" name="email" placeholder="Email" value="<?php echo $value->email; ?>">
          <?php echo form_error('email') ?>
        </div>
        <div>
          <label for="Phone">Phone</label>
          <input type="tel" name="phone" placeholder="phone" value="<?php echo $value->phone; ?>">
          <?php echo form_error('phone') ?>
        </div>
        <button type="register"><strong>Save Edit</strong></button>
      </form>
    </div>
        <?php
          }
        ?>

</body>
</html>