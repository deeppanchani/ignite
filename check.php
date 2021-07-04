<?php
    if(isset($_POST['submit'])){
        if( isset($_POST['fname']) &&  isset($_POST['email']) &&  isset($_POST['pnumber']) && isset($_POST['password']) && ( isset($_POST['event']) || isset($_POST['activity']) ) ){
            $fname = $_POST['fname'];
            $email = $_POST['email'];
            $pnumber = $_POST['pnumber'];
            $password = $_POST['password'];
        
            $event[] = $_POST['events'];
            $activity[] = $_POST['activity'];
        }
    }


?>