<html>
<head>
<title>BOOK</title>
</head>
<body>

<!-- <?php echo validation_errors(); ?> -->

<form action="" method="post">
<div>
<label for="exampleInputEmail1">Email address</label><br>
<input type="text" name="email" value="<?php echo set_value('email')?>" 
placeholder="Enter email">
<?php echo form_error('email') ?>
</div>
<div>
<label for="name">Name</label><br>
<input type="text" name="name" value="<?php echo set_value('name')?>"
placeholder="Enter name">
<?php echo form_error('name') ?>
</div>
<div>
<label for="age">Age</label><br>
<input type="text" name="age" value="<?php echo set_value('age')?>"
placeholder="Enter age">
<?php echo form_error('age') ?>
</div>
<div>
<label for="exampleInputPassword1">Password</label><br>
<input type="password" name="password" value="<?php echo set_value('password')?>"
placeholder="Enter password">
<?php echo form_error('password') ?>
</div>

<button type="submit">Submit</button>

</form>

</body>
</html>