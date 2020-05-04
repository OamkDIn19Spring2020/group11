<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
</head>
<body>
    <h1>Register Form</h1>

    <form method="post" action="">

        <div>
            <label for="Id_patient">Id Patient</label>
            <input type="number" name="id" value="">
            <?php echo form_error('id') ?>
        </div>
        <div>
            <label for="firstname">Firstname</label>
            <input type="text" name="fname">
            <?php echo form_error('fname') ?>
        </div>
        <div>
            <label for="lastname">Lastname</label>
            <input type="text" name="lname">
            <?php echo form_error('lname') ?>
        </div>
        <div>
            <label for="sex">Sex</label>
            <input type="text" name="sex">
            <?php echo form_error('sex') ?>
        </div>
        <button name="submit">Submit</button>
    </form>
</body>
</html>