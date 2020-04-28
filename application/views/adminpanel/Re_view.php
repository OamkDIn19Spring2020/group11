<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
        .register{
            margin:auto;
        }
    </style>
</head>
<body>
    <header>
        <p id="text1">Hospital Management System</p>
        <a href="#">Home</a>
        <a href="http://localhost/hospital/index.php/welcome/contact">Contact</a>
        <p>Welcome <span><?=$this->session->userdata['logged_in']['user']?></span></p>
    </header>

    <div id="menu-body">
        <div id="text-body">
            <a href="#">Add Doctor</a>
        </div>
        <div id="text-body">
            <a href="http://localhost/hospital/index.php/Admin/viewdoctor">View Doctor</a>
        </div>
        <div id="text-body">
            <a href="http://localhost/hospital/index.php/Admin/viewpatient">View Patient</a>
        </div>
        <div id="text-body">
            <a href="http://localhost/hospital/index.php/Admin/viewpatient">View Booking</a>
        </div>
        <div id="text-body">
            <a href="http://localhost/hospital/index.php/login/logout">Sign Out</a>
        </div>
    </div>
    <div class="register">
        <h1>REGISTER USERNAME</h1>
    
        <form action="" method="post">
            <div>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username" value="">
            <?php echo form_error('username') ?>
            </div>
            <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" value="">
            <?php echo form_error('password') ?>
            </div>
            <div>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" value="">
            <?php echo form_error('email') ?>
            </div>
            <div>
            <label for="phone">phone</label>
            <input type="tel" name="phone" placeholder="Phone" value="">
            <?php echo form_error('phone') ?>
            </div>
            <button type="register">Register</button>
        </form>
    </div>
</body>
</html>