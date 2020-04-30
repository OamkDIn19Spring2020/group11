<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <title>Detail</title>
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
    <h1>Show Information</h1>

        <?php
        foreach($userArray as $key => $value)
        { 
            echo "Fullname: ".$value->fullname."<br>";
            echo "Address: ".$value->address."<br>";
            echo "City: ".$value->city."<br>";
            echo "DOB: ".$value->dob."<br>";
            echo "Gender: ".$value->gender."<br>";
            echo "ID Number: ".$value->id_number."<br>";
            echo "Email: ".$value->email."<br>";
            echo "Phone Number: ".$value->phone."<br>";
        }
        ?>
        <a href="http://localhost/hospital/index.php/patient/edit">Edit</a>
    </form>
</body>
</html>