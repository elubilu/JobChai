
 <?php 
        $serverName = "localhost"; //host name
        $dbUserName = "root"; //Database Username
        $dbPassword = ""; //Database Password
        $dbName = "jobChai"; //Database Name

        $db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 
        $courses = "SELECT * FROM job_info WHERE status=1";
        $locations = "SELECT DISTINCT(jobLocation) FROM job_info WHERE status=1";
        $categories = "SELECT DISTINCT(jobCategory) FROM job_info WHERE status=1";
         
    ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Job Chai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/zoomslider.css" rel='stylesheet' type='text/css' />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>

<body>
    <!-- banner-inner -->
    <div id="demo-1" data-zs-src='["images/1.jpg", "images/2.jpg","images/3.jpg", "images/4.jpg"]' data-zs-overlay="dots">
        <div class="demo-inner-content">
            <div class="header-top">
                <header>
                    <div class="top-head ml-lg-auto text-center">
                        <div class="row">

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
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="how.php">How it works</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Candidates
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pricing.php">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="jobPost.php">Employers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </header>
            </div>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">

                <h3>
                    <span>Find the Right Job</span> .
                    <span>Right Now.</span>
                </h3>
                <p>Your job search starts and ends with us.</p>

                <form action="search.php" method="POST" class="ban-form row">
                    <div class="col-md-4 banf">
                        <select class="form-control" id="country13" name="jobLocation">
                            <option value="Location">Location</option>
                            <?php  foreach($db->query($locations) as $location){  ?>
                            <option value="<?php echo $location['jobLocation'] ?>"><?php echo $location['jobLocation'] ?></option>
                            <?php } ?>
                            
                        </select>
                    </div>
                    <div class="col-md-4 banf">
                        <select id="country13" class="form-control" name="jobCategory">
                            <option value="Search Sector">Search Sector</option>
                           <?php  foreach($db->query($categories) as $category){  ?>
                            <option value="<?php echo $category['jobCategory'] ?>"><?php echo $category['jobCategory'] ?></option>
                            <?php } ?>
                        </select>

                    </div>
                    <div class="col-md-4 banf">
                        <button class="btn1" type="submit">FIND JOB
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    <!-- banner-text -->
    <!-- banner-bottom-wthree -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Our Mission</span>Popular Categories</h3>
                <div class="row populor_category_grids mt-5">
                    <div class="col-md-3 category_grid">
                        <div class="view view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-bullhorn"></i>
                                <h3> Multimedia</h3>
                                <p>(34 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view1 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-graduation-cap"></i>
                                <h3>Education</h3>
                                <p>(22 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 category_grid">
                        <div class="view view2 view-tenth">
                            <div class="category_text_box">
                                <i class="fab fa-accusoft"></i>
                                <h3>Acounting </h3>
                                <p>(16 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p3.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view3 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3>Human Resource</h3>
                                <p>(4 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-3 category_grid">
                        <div class="view view4 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3>Designer </h3>
                                <p>(8 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 category_grid">
                        <div class="view view5 view-tenth">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3>Developer </h3>
                                <p>(6 open flow-positions)</p>
                            </div>
                            <div class="mask">
                                <a href="#">
                                    <img src="images/p4.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-bottom-wthree -->
    <!--/process-->
    <section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90-->
                <h3 class="tittle text-center mb-lg-4 mb-3">
			
                    <span>Some Info</span>Latest Job flow-positions</h3>
					<!---728x90-->
                <div class="tabs mt-5">
                    <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Featured Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Recent Jobs</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-8 text-info-sec">
                                        <!--/job1-->
                                        <?php  foreach($db->query($courses) as $course){  ?>
                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <?php 
                                                        $url= 'jobDetails.php?id='.$course['jobId'];
                                                        echo '<a href="'. $url.'">"'.$course["jobTitle"].'"</a>'; ?>
                                                    </h4>
                                                    <p class="my-2"><?php echo $course['companyName'] ?></p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i> <?php echo $course['experience'] ?></li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> <?php echo $course['jobLocation'] ?></li>
                                                        <li>
                                                            <i class="fas fa-dollar-sign"></i> <?php echo $course['salary'] ?></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> <?php echo $course['jobType'] ?></span>
                                                <?php 
                                                    $url= 'applicationForm.php?id='.$course['jobId'];
                                                    echo '<a href="'. $url.'" class="aply-btn">Apply Now</a>'; ?>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <!--//job1-->
                                    
                                    </div>
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/job-1.jpg" alt=" " class="img-fluid" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-4 text-info-sec">
                                        <img src="images/job-2.jpg" alt=" " class="img-fluid" />
                                    </div>
                                    <div class="col-lg-8 text-info-sec">
                                        <!--/job1-->
                                <?php  foreach($db->query($courses) as $course){  ?>
                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#"><?php echo $course['jobTitle'] ?></a>
                                                    </h4>
                    
                                                    <p class="my-2"><?php echo $course['companyName'] ?></p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i> <?php echo $course['experience'] ?></li>
                                                        <li>
                                                            <i class="fas fa-map-marker-alt"></i> <?php echo $course['jobLocation'] ?></li>
                                                        <li>
                                                            <i class="fas fa-dollar-sign"></i> <?php echo $course['salary'] ?></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <i class="far fa-heart"></i> <?php echo $course['jobType'] ?></span>
                                               <?php 
                                                    $url= 'applicationForm.php?id='.$course['jobId'];
                                                    echo '<a href="'. $url.'" class="aply-btn">Apply Now</a>'; ?>
                                            </div>
                                        </div>
                                        <!--/job2-->

                                       <?php } ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//preocess-->

    <!--job -->
    <section class="banner-bottom-wthree mid py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <div class="mid-info text-center pt-3">
                    <h3 class="tittle text-center cen mb-lg-5 mb-3">
                        <span>Some Info</span>Make a Difference with Your Online Resume!</h3>
                    <p></p>
                    <div class="resume">
                        <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                            <i class="far fa-user"></i> Create Acccount</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->
    <!--job -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span>Selection Process</h3>

                <div class="mid-info text-center mt-5">
                    <div class="parent-chart">
                        <div class="level lev-one top-level">
                            <div class="flow-position">
                                <img src="images/s1.jpg" alt=" " class="img-fluid rounded-circle">
                                <br>
                                <strong>Recruitment Process</strong>
                                <br>
                            </div>
                        </div>
                        <div class="flow-chart">
                            <div class="level lev-two last-lev">
                                <div class="flow-position">
                                    <img src="images/s2.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>1.Job Vacancy</strong>
                                    <br> 
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s3.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>2. Job Analysis
                                    </strong>
                                    <br> 
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s4.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>3. Attracting Candidates
                                    </strong>
                                    <br> 
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s5.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>4.Screening </strong>
                                    <br> 
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s6.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>5.Interviewing Candidates
                                    </strong>
                                    <br> 
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s7.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>6.Selecting</strong>
                                    <br> 
                                </div>
                                <!--
                            -->
                                <div class="flow-position">
                                    <img src="images/s8.jpg" alt=" " class="img-fluid rounded-circle">
                                    <br>
                                    <strong>7.Employee Evaluation
                                    </strong>
                                    <br> 
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//job -->
    <!--/candidates -->
    <section class="banner-bottom-wthree bg-light py-lg-5 py-3 text-center">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-4 py-md-4 py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span>Featured Candidates</h3>
                <div class="row mt-5">
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="images/team1.jpg" alt=" " class="img-fluid rounded-circle">
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4>Mark Jackman</h4>

                                    <p class="my-4"> Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros.</p>
                                    <div class="mt-3 team-social text-center">

                                        <ul class="social-icons text-center">
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="images/team2.jpg" alt=" " class="img-fluid rounded-circle">
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4>Janet Levine</h4>

                                    <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..

                                    </p>
                                    <div class="mt-3 team-social text-center">

                                        <ul class="social-icons text-center">


                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="images/team3.jpg" alt=" " class="img-fluid rounded-circle">
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4>Rene Rickman</h4>

                                    <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..

                                    </p>
                                    <div class="mt-3 team-social text-center">

                                        <ul class="social-icons text-center">


                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="images/team4.jpg" alt=" " class="img-fluid rounded-circle">
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4>Daniele Norwich</h4>
                                    <p class="my-4">Aenean orci erat, placerat id pulvinar nec, tincidunt vel eros..
                                    </p>
                                    <div class="mt-3 team-social text-center">

                                        <ul class="social-icons text-center">


                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/candidates -->
    <!--/stats-->
    <section class="banner-bottom-wthree bg-dark dotts py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle cen text-center mb-lg-5 mb-3">
                    <span>Some Info</span> Our Stats</h3>
                <div class="stats row mt-5">
                    <div class="col-md-3 stats_left counter_grid text-center">

                        <p class="counter">145</p>
                        <h4>Jobs Posted</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid1 text-center">

                        <p class="counter">105</p>
                        <h4>Jobs Filled</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid2 text-center">

                        <p class="counter">403</p>
                        <h4>Companies</h4>
                    </div>
                    <div class="col-md-3 stats_left counter_grid3 text-center">

                        <p class="counter">945</p>
                        <h4>Members</h4>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--//stats-->

    <!--job -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span> Quick Career Tips</h3>
                <div class="row mt-5">

                    <div class="card-deck">
                        <div class="card">
                            <img src="images/g1.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Would Disruption Work for Your Business?</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore .</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/g2.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">The New Mix of a Multigenerational Workforce</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="images/g3.jpg" alt="Card image cap" class="img-fluid card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Would Disruption Work for Your Business?</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//job -->
    <!--/mobile-app -->
    <section class="banner_bottom mobile-app">
        <div class="dotts py-lg-5 py-3">
            <div class="container">
                <!--/mobile-app -->
                <div class="inner-sec-w3ls py-lg-5  py-3">
                    <div class="row">
                        <div class="col-md-7 app-info">
                            <h3 class="header">Download &amp; Enjoy</h3>
                            <p class="para_vl">Our app will lunched soon...</p>
                            <ul class="app-devices mt-5">
                                <li>
                                    <a href="#" title="">
                                        <i class="fab fa-apple"></i>
                                        <span class="app-con">App Store
                                            <span class="avail">Available now on the </span>
                                        </span>

                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="">
                                        <i class="fab fa-google-play"></i>

                                        <span class="app-con">Google Play
                                            <span class="avail">Get in on</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <p class="para_vl">
                                <a href="#">Click here </a>to know more about apps.</p>
                        </div>
                        <div class="col-md-5 app-img">
                            <img src="images/mobile.png" alt=" " class="img-fluid">
                        </div>
                    </div>
                    <!--//mobile-app -->
                </div>
            </div>
        </div>
    </section>
    <!--clients-->
    <section class="clents-slide py-lg-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-5 mb-3">
                    <span>Some Info</span> What Clients Say?</h3>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-5">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Davidson</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Janet Levine</h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Rene Rickman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Mark Jackman</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Convallis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Daniele</h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Mercurio</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Cras rutrum</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Melissa Hoffman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>convallis felis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non mattis.</p>
                                            <h5>Melissa Hoffman</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team4.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6 testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team3.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Convallis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Daniele </h5>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids row">
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet.Cras rutrum iaculis enim, non yallis.</p>
                                            <h5>Thomas Muller</h5>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team2.jpg" alt="">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6  testi-main">
                                    <div class="testi-grids t2 row">
                                        <div class="col-md-3 col-sm-3 col-xs-3 img-testi">
                                            <img class="img-fluid" src="images/team1.jpg" alt="">
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-9 clients-info-text">
                                            <h6>Felis mattis</h6>
                                            <p>Lorem ipsum dolor sit amet. enim, non convallis felis mattis.</p>
                                            <h5>Mark Jackman</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="fas fa-long-arrow-alt-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>

                    </a>

                </div>
            </div>
        </div>
    </section>
    <!--//clients-->
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
                <p class="copy-right text-center ">&copy; 2018 Job Chai. All Rights Reserved | Design by
                    <a href="#">Fahadul Haque Zami</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!--model-forms-->
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
    <!--//Register-->

    <!--//model-form-->
    <!-- js -->
    <!--/slider-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/jquery.zoomslider.min.js"></script>
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

    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->

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
    <!--// end-smoth-scrolling -->
</body>

</html>