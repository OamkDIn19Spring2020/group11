<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Contact</title>
  <style>
    header
    {
      display: flex;
      /* background-color: #ffffff; */
      padding: 5px;
      color:rgb(255, 0, 0);
      margin-right: 5px;
    }
    body
    {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url(https://www.dnvgl.fi/Images/shutterstock_1135057247_tcm25-149746.jpg);
        background-size: 1300px 900px;
    }
    #text1
    {
        font-weight: bold;
        font-size: 40px;
        width: 80%;
        color:rgb(29, 89, 255);
    }
    a
    {
        font-size: 20px;
        padding: 10px;
        text-decoration: none;
        color:rgb(29, 89, 255);
    }
    #info{
        margin-top: 50px;
    }
    #Du{
        margin-top: 10px;
    }
    #name{
        font-size: 40px;
    }
    p{
        margin: 0px;
        font-size: 20px;
    }
    #text-body{
      border-style: solid;
      border-radius: 5px;
      padding: 10px;
      background-color: pink;
      margin-left: 5px;
    }
  </style>
    <header>
        <p id="text1">Hospital Management System</p>
        <a href="http://localhost/hospital/index.php/welcome">Home</a>
        <a href="#">Contact</a>
        <!-- <p id="text">Home</p>
        <p id="text">Contact</p> -->
    </header>
</head>
<body>
    <div id="info">
        <div id="Khoa">
            <p id="name"><strong>The Huy</strong></p>
            <p>number: 044.948.5715</p>
            <a href="mailto:someone@example.com">t9ngth01@students.oamk.fi</a>
        </div>
        <div id="Khoa">
            <p id="name"><strong>Khoa Dang</strong></p>
            <p>number: 044.944.1134</p>
            <a href="mailto:someone@example.com">t9dang00@students.oamk.fi</a>
        </div>
        <div id="Du">
            <p id="name"><strong>Ngoc Du</strong></p>
            <p>number: 045.251.8653</p>
            <a href="mailto:someone@example.com">t9phng00@students.oamk.fi</a>
        </div>
    </div>
</body>
</html>