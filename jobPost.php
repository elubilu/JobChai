
<!DOCTYPE html>
<html lang="en">
<head>
<title>Job Chai </title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Candidates</a>
                                   
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="pricing.php">Pricing</a>
                                </li>
                                <li class="nav-item active">
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
	<div class="appointment-w3">
		<form action="employer.php" method="POST">
		<div class="personal">
			<h2>Company Details</h2>
  			<div class="form-left-w3l">
				<p>Company Name</p>
				<input type="text" name="companyName" placeholder="Company Name" required="">
			</div>
			<div class="form-right-w3ls ">
				<p>Company Type</p>
				<select class="form-control" name="companyType">
					<option value="Software">Software</option>
					<option value="Education">Education</option>
					<option value="Finance">Finance</option>
					<option value="Production">Production</option>
					<option value="Agro">Agro</option>
					<option value="Travel and Tourism">Travel And Tourism</option>
					<option value="Research">Research</option>
					<option value="Construction">Construction</option>
					<option value="Human Resource">Human Resource</option>
					<option value="Marketing">Marketing</option>
					<option value="Bank">Bank</option>
					<option value="Financial">Financial</option>
					<option value="Non Profit">Non Profit</option>
				</select>
			</div>
			 <div class="clearfix"></div>	
			 <div class="clear"></div>
			<div class="form-left-w3l">
				<p>Concern Person's Name</p>
				<input type="text" name="concernName" placeholder="Concern Person's Name" required="">
			</div>
			<div class="form-right-w3ls">	
				<p>Concern Person Position</p>
				<input class="buttom" type="text" name="concernPosition" placeholder="Concern Person Position" required="">
		   </div>
		   <div class="form-left-w3l">
			<p>Concern Person Email</p>
				<input type="email"  name="concernEmail" placeholder="mail@example.com" required="">
			</div>
           <div class="form-right-w3ls ">	
				<p>Concern Person Phone</p>
				<input class="buttom" type="text" name="concernNumber" placeholder="Phone Number" required="">
		   </div>
			  <div class="clearfix"></div>			
		      <div class="clear"></div>
		</div>
		<div class="information">
			 <h3>Job Details</h3>
			 <div class="form-left-w3l">
				<p>Job Title</p>
				<input type="text" name="jobTitle" placeholder="Job Title" required="">
			</div>
			<div class="form-right-w3ls">
				<p>Job Category</p>
				<select class="form-control" name="jobCategory" required="">
					<option value="Education">Education</option>
					<option value="Software">Software</option>
					<option value="Finance">Finance</option>
					<option value="Production">Production</option>
					<option value="Agro">Agro</option>
					<option value="Travel and Tourism">Travel And Tourism</option>
					<option value="Research">Research</option>
					<option value="Construction">Construction</option>
					<option value="IT and Telecommunication">IT and Telecommunication</option>
					<option value="Human Resource">Human Resource</option>
					<option value="Data Entry">Data Entry</option>
					<option value="Design">Design</option>
					<option value="Marketing">Marketing</option>
					<option value="Admin">Admin</option>
					<option value="Bank">Bank</option>
					<option value="Law">Law</option>
					<option value="Financial">Financial</option>
					<option value="Non Profit">Non Profit</option>
	            </select>
			</div>
			<div class="clearfix"></div>	
			 <div class="clear"></div>
			 <div class="form-left-w3l">
				<p>Salary</p>
				<input type="text" name="salary" placeholder="Salary" >
			</div>
			<div class="form-right-w3ls">
				<p>Last Date Of Apply</p>
 				<input  id="datepicker1" name="deadline" type="text" placeholder="mm/dd/yyyy" required="">
 			</div>

			<div class="form-left-w3l">
				<p>Job Type</p>
				<select  class="form-control" name="jobType" required="">
					<option value="Full Time">Full Time</option>
					<option value="Part Time">Part Time</option>
				</select>
			</div>
			<div class="form-right-w3ls">
				<p>Experience</p>
				<input type="text" name="experience" placeholder="Experience" required="">
			</div>
			<div class="form-left-w3l">
				<p>Educational Qualification</p>
				<select  class="form-control" name="qualification" required="">
					<option value="HSC">HSC</option>
					<option value="Undergraduate">Undergraduate</option>
					<option value="Postgraduate">Postgraduate</option>
				</select>
			</div>
			<div class="form-right-w3ls">
				<p>Job Location</p>
				<select class="form-control" id="country12" name="jobLocation">
	                <option value="Bogra">Bogra</option>
	                <option value="Barishal">Barishal</option>
	                <option value="Chottogram">Chottogram</option>
	                <option value="Dhaka">Dhaka</option>
	                <option value="Khulna">Khulna</option>
	                <option value="Moymensing">Moymensing</option>
	                <option value="Rajshahi">Rajshahi</option>  
	                <option value="Sylhet">Sylhet</option>
	            </select>
        	</div>
			<div class="form-control-w3l">
				<p>Job Description</p>
				<textarea name="jobDescription" placeholder="Job Description..." required=""></textarea>
			</div>
		</div>
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
			<!-- //Calendar -->
</body>
</html>