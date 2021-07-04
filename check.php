<?php
    
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $password = $_POST['password'];

    $event[] = $_POST['events'];
    $activity[] = $_POST['activity'];

    if(empty($fname))
    {
        $fname_err = "Please insert your name ";
    }

    if(empty($email))
    {
        $email_err = "Please insert your email ";
    }

    if(empty($pnumber))
    {
        $pnumber_err = "Please insert your phone number ";
    }


    if(empty($password))
    {
        $password_err = "Please insert your password ";
    }

    include('signup.php');

?>