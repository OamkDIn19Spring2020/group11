<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php
        foreach ($userArray as $key => $value)
        {
            // echo "<pre>";
            // print_r($value);
            // echo "</pre>";
            echo "<tr>
                <td>".$value->id."</td>
                <td>".$value->username."</td>
                <td>".$value->password."</td>
                <td>".$value->email."</td>
                <td>".$value->phone."</td>
            </tr>";
        }
    ?>
    </table>
</body>
</html>