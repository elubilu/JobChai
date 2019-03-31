
<!DOCTYPE html>
<html lang="en">
<head>
<title>Job Chai </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<!-- Meta tags -->
		<!--stylesheets-->
	<link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<!-- //Calendar -->

	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<!-- Meta tags -->
		<!--stylesheets-->
	<link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<!-- //Calendar -->

	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
</head>
<body>
	 <!-- banner-inner -->
    <div id="demo-1" class="page-content">
        <div class="dotts">
            <div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row top-vl">

                            <div class="col-md-4">
                                <span>Welcome Back!</span>
                            </div>
                            <div class="col-md-3 sign-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
									<i class="fas fa-lock"></i> Sign In</a>
                            </div>
                            <div class="col-md-3 sign-btn">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
									<i class="far fa-user"></i> Register</a>
                            </div>
                            <div class="search col-md-2">
                                <div class="mobile-nav-button">
                                    <button id="trigger-overlay" type="button">
										<i class="fas fa-search"></i>
									</button>
                                </div>
                                <!-- open/close -->
                                <div class="overlay overlay-door">
                                    <button type="button" class="overlay-close">
										<i class="fa fa-times" aria-hidden="true"></i>
									</button>
                                    <form action="#" method="post" class="d-flex">
                                        <input class="form-control" type="search" placeholder="Search here..." required="">
                                        <button type="submit" class="btn btn-primary submit">
											<i class="fas fa-search"></i>
										</button>
                                    </form>
                                </div>
                                <!-- open/close -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="logo">
                            <h1>
                                <a class="navbar-brand" href="index.php">
									<i class="fab fa-codepen"></i>Job Chai</a>
                            </h1>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon">
								<i class="fas fa-bars"></i>
							</span>

						</button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-lg-auto text-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home
										<span class="sr-only">(current)</span>
									</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="how.php">How it works</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Candidates</a>
                                   
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="pricing.php">Pricing</a>
                                </li>
                                <li class="nav-item ">
                                   <a class="nav-link" href="jobPost.php">Employer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>
            </div>
	
     <h1 class="header-w3ls">Employee Application Form</h1>
	<div class="appointment-w3">
		<form action="applicant.php" method="POST" enctype="multipart/form-data">
			<div class="personal">
			<h2>Personal Details</h2>
  			<div class="form-left-w3l">
				<p>First Name</p>
				<input type="text" name="firstName" placeholder="Name" required="">
			</div>
			<div class="form-right-w3ls ">
				<p>Last Name</p>
				<input type="text" name="lastName" placeholder="Last Name"  required="">
				<div class="clear"></div>
			</div>
		   <div class="form-left-w3l">
			<p>Email</p>
				<input type="email"  name="email" placeholder="Mail@example.com" required="">
			</div>
           <div class="form-right-w3ls ">	
				<p>Phone</p>
				<input class="buttom" type="text" name="mobile" placeholder="Phone Number" required="">
		   </div>
		   <div class="form-left-w3l">
				<p>Gender</p>
				<select class="form-control" name="gender" required="">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="form-right-w3ls">
				<p>Date of Birth</p>
 				<input  id="datepicker1" name="birthDate" type="text" placeholder="mm/dd/yyyy" required="">
 			</div>
            <div class="form-left-w3l">
                <p>Your Image</p>
                <input name="image" type="file"  required="">
            </div>
			 <div class="clearfix"></div>			
		      <div class="clear"></div>
			</div>
			<div class="information">
			 <h3> Permanent Address</h3>
			<div class="form-add-w3ls">	
				<p>Address</p>
				<input type="text" name="address" placeholder="Address" required="">
		   </div>
		   	<div class="form-left-w3l">
				<p>City</p>
				<input type="text" name="city" placeholder="City" required="">
			</div>
           <div class="form-right-w3ls ">	
				<p>State</p>
				<input type="text" name="state" placeholder="State" required="">
		   </div>
		   <div class="clear"></div>
		    <div class="form-left-w3l">	
				<p>Postal code</p>
				<input type="text" name="postCode" placeholder="Postal code" required="">
		   </div>
		   <div class="form-right-w3ls">
				<p>Country</p>
				<select class="form-control buttom" name="country" required="">
					<option value="">Please select</option>
					<option value="Bangladesh">Bangladesh</option>
					<option value="Australia">Australia</option>
					<option value="America">America</option>
					<option value="London">London</option>
					<option value="India">India</option>
					<option value="Canada">Canada</option>
					<option value="Srilanka">Srilanka</option>
				</select>

		   </div>
		    <div class="clear"></div>
			</div>
			<div class="education">	
			<h3>Last Course Details</h3>		
				<div class="form-left-w3l">
					<p>Course Title</p>
					<select  class="form-control" name="lastDegree" required="">
						<option value="HSC">HSC</option>
						<option value="Undergraduate">Undergraduate</option>
						<option value="Postgraduate">Postgraduate</option>
					</select>
				</div>
				<div class="form-right-w3ls">
					<p>Program</p>
					<input type="text" name="program" placeholder="Program/Subject Name">
				</div>
				<div class="form-left-w3l">
					<p>Institution Name</p>
					<input type="text" name="institutionName" placeholder="Institution Name" required="">
				</div>	
				 <div class="clearfix"></div>			
				<div class="form-right-w3ls ">
					<p>CGPA</p>
					<input type="text" name="cgpa" placeholder="CGPA" required="">
				</div>					
				 <div class="form-left-w3l">
				 	<p>CGPA Scale</p>
					<select class="form-control" name="cgpaScale" required="">
						<option value="5">5</option>
						<option value="4">4 </option>
					</select>
				</div>

				<div class="clear"></div>
			</div>
			<div class="education">	
				<h3>Last Work Details</h3>
				<div class="form-left-w3l ">
					<p>Organization Name</p>
					<input type="text" name="lastOrganization" placeholder="Organization Name " >
				</div>	
							
				<div class="form-right-w3ls">
					<p>Position</p>
					<input type="text" name="position" placeholder="Position" >
				</div>
				 <div class="clearfix"></div>					
				 <div class="form-left-w3l">
				 	<p>Experties On</p>
					<input type="text" name="experties" placeholder="Experties" >
				</div>
				 <div class="form-right-w3ls">
				 	<p>Year of Experience</p>
					<input type="text" name="experience" placeholder="Experience" >
				</div>
				<div class="form-add-w3ls">	
					<p> Organization Address</p>
					<input type="text" name="companyAddress" placeholder=" Organization Address" >
		   		</div>
				<div class="clear"></div>
				<div class="form-control-w3l">
					<p>Career Objective</p>
					<textarea  name="careerObjective" placeholder="Career Objective..." required=""></textarea>
				</div>
			</div>
            <input type="hidden" name="jobID" value="<?php echo $_GET['id']?>">
	 		<input type="submit" value="Submit">
		</form>
   </div>
   
 <!--footer -->
    <footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row footer-top">
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>About Us</h3>
                    </div>
                    <div class="footer-text">
                        <p>Curabitur non nulla sit amet nislinit tempus convallis quis ac lectus. lac inia eget consectetur sed, convallis at tellus. Nulla porttitor accumsana tincidunt.</p>
                        <ul class="footer-social text-left mt-lg-4 mt-3">

                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-google-plus-g"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fas fa-rss"></span>
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="#">
                                    <span class="fab fa-vk"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="contact-info">
                        <h4>Location :</h4>
                        <p>Zindabazar,Sylhet.</p>
                        <div class="phone">
                            <h4>Contact :</h4>
                            <p>Phone : +880 1619135572</p>
                            <p>Email :
                                <a href="mailto:info@JobChai.com">info@JobChai.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Quick Links</h3>
                    </div>
                    <ul class="links">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li>
                            <a href="404.php">Error</a>
                        </li>
                        <li>
                            <a href="pricing.php">Job Packages</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <ul class="links">
                        <li>
                            <a href="how.php">How it works</a>
                        </li>
                        <li>
                            <a href="contact.php">Support</a>
                        </li>
                        <li>
                            <a href="employer_list.php">For Employers</a>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3 footer-grid-wthree-w3ls">
                    <div class="footer-title">
                        <h3>Sign up for your offers</h3>
                    </div>
                    <div class="footer-text">
                        <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
                        <form action="#" method="post">
                            <input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
                            <button class="btn2">
                                <i class="far fa-envelope" aria-hidden="true"></i>
                            </button>
                            <div class="clearfix"> </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright mt-4">
                <p class="copy-right text-center ">&copy; 2018 JobChai. All Rights Reserved | Design by
                    <a href="#"> Fahadul Haque Zami </a>
                </p>
            </div>
        </div>
    </footer>
     <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
     <!--/slider-->
  <!--/slider-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
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
    <!--//Register-->
	<!--  	<a href="index.php">	<input type="submit" value="Back"></a>
	 	<br>
	 	<br>
	 	<br>
    <div class="copy">
    <p>&copy;2019 Job Chai . All Rights Reserved | Design by <a href="#" target="#">Fahadul Haque Zami</a></p>
</div> -->
		<!-- js -->
  <script type='text/javascript' src='js/application/jquery-2.2.3.min.js'></script>
<!-- //js -->
<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/application/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
		<!-- js -->
  <script type='text/javascript' src='js/application/jquery-2.2.3.min.js'></script>
<!-- //js -->
<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/application/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
</body>
</html>