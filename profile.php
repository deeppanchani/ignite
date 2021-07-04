<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Name:<?php echo $_COOKIE['fname'];?></td>
            <td>Email:<?php echo $_COOKIE['email'];?></td>
        </tr>
        <tr>
            <td>Phone Number:<?php echo $_COOKIE['pnumber'];?></td>
        </tr>
        <tr>
            <td>Events</td>
            <td>Activities</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>