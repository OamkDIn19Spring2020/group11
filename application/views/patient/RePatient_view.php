<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <title>Registration</title>
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
    #test{
        color:black;
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
      width: 300px;
      padding: 10px;
    }
    input{
      margin: 10px 0px;
    }
    select{
      margin: 10px 0px;
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
            </div>
          </div>
          <div id="text-body">
            <i class='fas fa-user-md' style='font-size:120px;color:rgb(29, 89, 255)'></i>
            <div>
              <p id="title">Doctor Login</p>
              <a href="http://localhost/hospital/index.php/login">Click Here</a>
            </div>
          </div>
          <div id="text-body">
            <i class='fas fa-user-cog' style='font-size:120px;color:rgb(29, 89, 255)'></i>
            <div>
              <p id="title">Admin Login</p>
              <a href="http://localhost/hospital/index.php/login">Click Here</a>
            </div>
          </div>
        </div>
    </div>
    <div id="center">
      <form action="" method="post">
        <h1>Registration</h1>
        <div>
          <label for="fullname">Fullname</label>
          <input type="text" name="fullname" placeholder="Fullname" value="">
          <?php echo form_error('fullname') ?>
        </div>
        <div>
          <label for="Address">Address</label>
          <input type="text" name="address" placeholder="Address" value="">
          <?php echo form_error('address') ?>
        </div>
        <div>
          <label for="City">City</label>
          <input type="text" name="city" placeholder="City" value="">
          <?php echo form_error('city') ?>
        </div>
        <div>
          <label for="D.O.B">D.O.B</label>
          <input type="date" name="dob" placeholder="D.O.B" value="">
          <?php echo form_error('dob') ?>
        </div>
        <div>
          <label for="Gender">Gender</label>
          <select name="gender" id="">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <?php echo form_error('gender') ?>
        </div>
        <div>
          <label for="ID Number">ID Number</label>
          <input type="number" name="idnumber" placeholder="id" value="">
          <?php echo form_error('idnumber') ?>
        </div>
        <div>
          <label for="Email">Email</label>
          <input type="email" name="email" placeholder="Email" value="">
          <?php echo form_error('email') ?>
        </div>
        <div>
          <label for="Phone">Phone</label>
          <input type="tel" name="phone" placeholder="phone" value="">
          <?php echo form_error('phone') ?>
        </div>
        <div>
          <label for="Password">Password</label>
          <input type="password" name="password" placeholder="password" value="">
          <?php echo form_error('password') ?>
        </div>
        <p id="test">Already have an account?<span><a id="test1" href="http://localhost/hospital/index.php/login">Login</a></span></p>  
        <button type="register"><strong>Register</strong></button>
      </form>
    </div>
    
</body>
</html>