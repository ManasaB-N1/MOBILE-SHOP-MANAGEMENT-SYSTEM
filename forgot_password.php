<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Inventory Management</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
                <!-- <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . </p> -->
            </div>
            <div class="agile-login">
                <ul>
                    <li><a href="registered.php"> Create Account </a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="admin.php">Admin Login</a></li>

                </ul>
            </div>
            <div class="product_list_header">
                <!-- <form action="#" method="post" class="last">
					<input type="hidden" name="cmd" value="_cart">
					<input type="hidden" name="display" value="1">
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form> -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>

                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <h1><a href="index.html">Inventory Management</a></h1>
            </div>
            <!-- <div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div> -->

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation-agileits">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

            </nav>
        </div>
    </div>

    <!-- //navigation -->
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Login Page</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- login -->
    <div class="login">
        <div class="container">
            <h2>Enter Email</h2>

            <div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
                <form action="forgot_password.php" method="post">
                    <input type="email" placeholder="Email Address" name="email" required=" ">
                    <div class="forgot">
                        <!-- <a href="#">Forgot Password?</a> -->
                    </div>
                    <input type="submit" name="submit" value="send">
                </form>
                <!-- </div>
			<h4>For New People</h4>
			<p><a href="forgot_password.php">Forgot Password?</a> (Or) go back to <a href="registered.php">Register<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></p>
		</div> -->
            </div>
            <!-- //login -->
            <!-- //footer -->
            <div class="footer">
                <div class="container">
                    <div class="w3_footer_grids">
                        <div class="col-md-3 w3_footer_grid">
                            <h3>Contact</h3>

                            <ul class="address">
                                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                            </ul>
                        </div>
                        <div class="col-md-3 w3_footer_grid">
                            <h3>Information</h3>
                            <ul class="info">
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.html">Contact Us</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="short-codes.html">Short Codes</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Special Products</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 w3_footer_grid">
                            <h3>Category</h3>
                            <ul class="info">
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Groceries</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Household</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">Personal Care</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="packagedfoods.html">Packaged Foods</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="beverages.html">Beverages</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 w3_footer_grid">
                            <h3>Profile</h3>
                            <ul class="info">
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">My Cart</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.html">Login</a></li>
                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registered.html">Create Account</a></li>
                            </ul>


                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <div class="footer-copy">

                    <div class="container">
                        <p>© 2019 Inventory Management. All rights reserved</p>
                    </div>
                </div>

            </div>
            <div class="footer-botm">
                <div class="container">
                    <div class="w3layouts-foot">
                        <ul>
                            <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="payment-w3ls">
                        <img src="images/card.png" alt=" " class="img-responsive">
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //footer -->
            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <?php

            if (isset($_POST['submit'])) {
                session_start();
                include("config.php");
                $email = $_POST['email'];
                $pass="";
                $bool = true;
                //for Admin


                //   $email = mysqli_real_escape_string($connection, $_POST['email']);
                //   $password = mysqli_real_escape_string($connection, $_POST['passwrd']);

                $query = mysqli_query($connection, "select * from user");
                while ($row = mysqli_fetch_array($query)) {
                    $table_reg = $row['u_email'];
                    $pass = $row['u_pass'];

                    if ($email == $table_reg) {
                        if ($bool) {
                            ini_set("SMTP", "ssl:smtp.gmail.com");
                            ini_set("smtp_port", "465");
                            ini_set('sendmail_from', 'studentprojectveriton@gmail.com');
                            $to = "$email";
                            $subject = "Inventory Management - Reset Password";
                            $message = "Hello! Your Password for login is $pass.";
                            $from = "studentprojectveriton@gmail.com";
                            $headers = "From:" . $from;
                            $retval = mail($email, $subject, $message, "From:" . $from);
        
                           
                                print '<script>alert("Your Password is Sent to Your Mail id. Please check your mail id");</script>';
                                print '<script>window.location.assign("login.php");</script>';
                            
                        }
                    }
                    else{
                        $bool = false;
                        print '<script>alert("' . $email  . ' is not in our Database");</script> ';
                        print '<script>window.location.assign("login.php");</script>';
                    }
                }

                
            }
            ?>
            <!-- top-header and slider -->
            <!-- here stars scrolling icon -->
            <script type="text/javascript">
                $(document).ready(function() {
                    /*
                    	var defaults = {
                    	containerID: 'toTop', // fading element id
                    	containerHoverID: 'toTopHover', // fading element hover id
                    	scrollSpeed: 1200,
                    	easingType: 'linear' 
                    	};
                    */

                    $().UItoTop({
                        easingType: 'easeOutQuart'
                    });

                });
            </script>
            <!-- //here ends scrolling icon -->
            <script src="js/minicart.min.js"></script>
            <script>
                // Mini Cart
                paypal.minicart.render({
                    action: '#'
                });

                if (~window.location.search.indexOf('reset=true')) {
                    paypal.minicart.reset();
                }
            </script>
            <!-- main slider-banner -->
            <script src="js/skdslider.min.js"></script>
            <link href="css/skdslider.css" rel="stylesheet">
            <script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery('#demo1').skdslider({
                        'delay': 5000,
                        'animationSpeed': 2000,
                        'showNextPrev': true,
                        'showPlayButton': true,
                        'autoSlide': true,
                        'animationType': 'fading'
                    });

                    jQuery('#responsive').change(function() {
                        $('#responsive_wrapper').width(jQuery(this).val());
                    });

                });
            </script>
            <!-- //main slider-banner -->

</body>

</html>