<?php
    if(isset($_POST['submit'])){
        if( isset($_POST['fname']) &&  isset($_POST['email']) &&  isset($_POST['pnumber']) && isset($_POST['password'])){
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $pnumber = $_POST['pnumber'];
            $password = $_POST['password'];
            if(isset($_POST['events'])){
                $event[] = $_POST['events'];
            }
            if(isset($_POST['activity'])){
                $activity[] = $_POST['activity'];
            }
            echo "fuck";
        }
        else{
            echo "hi";
        }
    }


?>