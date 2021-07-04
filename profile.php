<?php
 if(isset($_POST['submit'])){
    if( isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo "fuck";
    }
    else{
        echo "hi";
    }
}

if(empty($email))
{
    $email_err = "Please insert your email ";
}

if(empty($password))
{
    $password_err = "Please insert your password ";
}

include('login.php');

?>