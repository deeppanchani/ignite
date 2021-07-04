<?php
    $fname_err = "";
    $email_err = "";
    $pnumber_err = "";
    $password_err = "";
    $selection_err = "";
    $fname = "";
    $email = "";
    $pnumber = "";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST["fname"])){
            $fname_err = "Please insert your Full Name ";
        }
        else if (preg_match("/^[A-Z][a-zA-Z ]+$/", $_POST["fname"]) === 0){
            $fname_err = "Only Aplphabets Allowed";
        }
        else{
            $fname = test_input($_POST["fname"]);
            setcookie('fname',$fname,time() + (86400 * 30),'/');
        }

        if(empty($_POST["email"])){
            $email_err = "Please insert your email ";
        }
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $email_err = "Not A Valid Email";
        }
        else{
            $email = test_input($_POST["email"]);
            setcookie('email',$email,time() + (86400 * 30),'/');
        }

        if(empty($_POST["pnumber"])){
            $pnumber_err = "Please insert your Phone Number";
        }
        else{
            $pnumber = test_input($_POST["pnumber"]);
            setcookie('pnumber',$pnumber,time() + (86400 * 30),'/');
        }

        if(empty($_POST["password"])){
            $password_err = "Please insert your password ";
        } 
        else if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0){
            $password_err = "Enter Strong Password";
        }
        else{
            $password = test_input($_POST["password"]);
            setcookie('password',$password,time() + (86400 * 30),'./');
        }

        if(empty($_POST['events']) && empty($_POST['activity'])){
            $selection_err = "Select atleast one event or activity";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forms.css">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="image\logo.png" type="image/x-icon"/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>
</head>
<body>

<!--##############################################-->
    <!--Nav Starts-->
    <div class="navbar" style="position: relative;">
        <a href="index.html"><img src="image/logo.png" style="width: 50px;"></a>
        <ul class="centreul">                
            <li><a href="index.html">Home</a></li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Events
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="events.html#dance">Dancing Competition</a>
                        <a href="events.html#sing">Singing Competition</a>
                        <a href="events.html#game">Gaming Competition</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Activities
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="Activites.html#treasure">Treasure Hunt</a>
                        <a href="Activites.html#quiz">Sports Quiz</a>
                        <a href="Activites.html#movie">Movie Nights</a>
                    </div>
                </div>    
            </li>
        </ul>
        <ul class="rightul">
            <li><a href="signup.php">Register</a></li>
            <li><a href="login.php">Log In</a></li>
        </ul>
    </div>
    <!--Nav Ends-->
<!--##############################################-->

<!--##############################################-->
    <!--Form Starts-->
    <section style="margin: auto;padding: auto;width: 50%;margin-top: 3em;">
        <div class="holder">
            <div class="title">Registration</div>
            <form method="POST" autocomplete="on" name="contactus" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"    >
                <div class="user-details">
                    
                    <div class="input-box">
                        <label class="details" for="fname">Full Name</label>
                        <input name="fname" type="text" id="fname" placeholder="Enter Full Name"/>
                        <span><?php echo $fname_err;?></span>
                    </div>

                    <div class="input-box">
                        <label class="details" for="email">Email</label>
                        <input name="email" type="email" id="email" placeholder="Enter E-mail"/>
                        <span><?php echo $email_err;?></span>
                    </div>

                    <div class="input-box">
                        <label class="details" for="pnumber">Phone Number</label>
                        <input name="pnumber" type="number" id="pnumber" placeholder="Enter Phone Number"/>
                        <span><?php echo $pnumber_err;?></span>
                    </div>

                    <div class="input-box">
                        <label class="details" for="password">Password</label>
                        <input name="password" type="password" id="password" placeholder="Enter Password" />
                        <span><?php echo $password_err;?></span>
                    </div>

                </div>

                <div class="event-details">
                    <br />
                    <label for="events" class="details">Select the events you want to participate :</label><br/>
                    <input type="checkbox" id="event1" name="events" value="dancing-competition"/>
                    <label for="event1">Dancing Competition</label><br/>
                    <input type="checkbox" id="event2" name="events" value="singing-competition"/>
                    <label for="event2">Singing Competition</label><br/>
                    <input type="checkbox" id="event3" name="events" value="gaming-competition"/>
                    <label for="event3">Gaming Competition</label><br/><br/>

                    <label for="activity" class="details">Select the activities you want to participate :</label><br/>
                    <input type="checkbox" id="activity1" name="activity" value="sports-quiz"/>
                    <label for="activity1">Sports Quiz</label><br/>
                    <input type="checkbox" id="activity2" name="activity" value="movie-night"/>
                    <label for="activity2">Movie Night</label><br/>
                    <input type="checkbox" id="activity3" name="activity" value="treasure-hunt"/>
                    <label for="activity3">Treasure Hunt</label><br/>
                    <br>
                    <span><?php echo $selection_err;?></span>
                    <br>

                    <input class="submit" type="submit" value="Submit">
                    <br/>
                    <br/>
                    <p align="center">Already Registered.<a href="login.html">Log In</a>.</p>
                </div>
            </form>
        <div>
    </section>
    <!--Form Ends-->
<!--##############################################-->

<!--##############################################-->
    <!--Footer Starts-->
    <footer style="background-color: #010932;">
        <div class="mfoot">
                <div class="ftlog">
                    <a href="#"><img src="image/logo.png"></a>
                </div>
                <div class="alftlog">Ignite</div>    
        </div>
        <br>
        <div class="container">
            <div class="row">
                <p style="color: rgb(255, 255, 255); font-size: 20px;">Keep track of the event by following us on our social media pages</p>
            </div>
            <br>
            <div class="site-footer">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
                </ul>
            </div>
            <br><br>
            <div style="text-align: center; margin-left: 20px; color: blanchedalmond;">
                <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
                    <a href="#" class="cpylk">IIIT Nagpur</a>.</p>
            </div>
        </div>
    </footer>
    <!--Foooter Ends-->
<!--##############################################-->
</body>
</html>
