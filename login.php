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
    <title>LogIn</title>
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
                        <a href="#">Dancing Competition</a>
                        <a href="#">Singing Competition</a>
                        <a href="#">Gaming Competition</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">Activities
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Bill Gates Talks</a>
                        <a href="#">Sudha Murthy Talks</a>
                        <a href="#">Treasure Hunt</a>
                    </div>
                </div>    
            </li>
        </ul>
        <ul class="rightul">
            <li><a href="signup.html">Register</a></li>
            <li><a href="login.html">Log In</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </div>
    <!--Nav Ends-->
<!--##############################################-->

<!--##############################################-->
    <!--Form Starts-->
    <section style="margin: auto;padding: auto;width: 50%;margin-top: 3em;">
        <div class="holder">
            <div class="title">Log In</div>
            <form method="POST" autocomplete="on" name="contactus" action="profile.php">
                <div class="user-details">
                    
                    <div class="input-box">
                        <label class="details" for="email">Email</label>
                        <input name="email" type="email" id="email" placeholder="Enter E-mail"/>
                    <br/>
                    <?php if(isset($email_err)){ ?>
                    <p><?php echo $email_err?></p>
                    <?php } ?>
                    </div>

                    <div class="input-box">
                        <label class="details" for="password">Password</label>
                        <input name="password" type="password" id="password" placeholder="Enter Password" />
                    <br/>
                    <?php if(isset($password_err)){ ?>
                    <p><?php echo $password_err?></p>
                    <?php } ?>
                    </div>

                </div>

                <div class="cookies">
                    <br />
                    <input type="checkbox" id="rememberme" name="rememberme" value="rememberme"/>
                    
                    <label for="rememberme">Remember Me</label><br/>
                    <input class="submit" type="submit" value="Submit">
                    <br/>
                    <br/>
                    <p align="center">If Not Registered.<a href="signup.html">Sign Up</a>.</p>
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