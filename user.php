<?php include('conn.php');
session_start();
 $userid = $_SESSION['id'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Bootstrap Dashboard by cVitae studio.</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="white" data-image="assets/img/sidebar-3.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    ..cVitae studio..
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                
                <li>
                    <a href="notifications.php">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                       <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="user.php">Formal templates</a></li>
                                <li><a href="user.php">Internship templates</a></li>
                                <li><a href="user.php">Something else</a></li>
                                <li class="divider"></li>
                              </ul>
                        </li>
                        <li>
                            <a href="dashboard.php">
                                <p>Connect to dashboard before Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title">User basic Information</h2>
                            </div>
                            <div class="content">
                                <form method="POST" enctype="multipart/form-data" action="conn.php">
                                    <div class="row">
                                    	<div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group ">
                                                <label class="fu">Your Profile Picture.</label>
                                                <input type="file" class="form-control" name="pp">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" class="fu">Email address</label>
                                                <input type="email" class="form-control" name="email"placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id" value="<?php echo  $userid; ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="fu">First Name</label>
                                                <input type="text" class="form-control" name="fname" placeholder="Company" value="  ">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group ">
                                                <label class="fu">Last Name</label>
                                                <input type="text" class="form-control" name="lname" placeholder="Last Name" value="  ">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group fu">
                                                <label class="fu">Contact Number</label>
                                                <input type="number" class="form-control" name="contact" style="padding: 10px" placeholder="ph.no" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                        
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label> Full Address</label>
                                                <input type="text" class="form-control " name="address"placeholder="Home Address" value="  ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control"name="city" placeholder="City" value="  ">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control"name="Country" placeholder="Country" value="  ">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" style="margin-right: 10px;" class="form-control"name="postal" placeholder="ZIP Code">
                                            </div>
                                        </div>
                                    </div>
                                        
                                <h2>User Academic Information</h2>
                                <br>
                                        <div class="row">
                                         <div class="col-md-10">
                                            <div class="form-group">
                                                <label>SCHOOL NAME</label>
                                                <input type="text" class="form-control" name="sname" placeholder="School Name" value=" ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Class 10%</label>
                                                <input type="number" class="form-control" name="one" placeholder="class 10 percentage" value=" ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>SCHOOL NAME (class 12)</label>
                                                <input type="text" class="form-control" name="s2name" placeholder="School Name" value=" ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Class 12 %</label>
                                                <input type="text" class="form-control"name="two" placeholder="percentage">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>YEAR OF SCHOOLING</label>
                                                <input type="text" class="form-control"name="schyr" placeholder="Years of school">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>UNIVERSITY NAME</label>
                                                <input type="text" class="form-control"name="univ" placeholder="University Name">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="row">
                                         <div class="col-md-5">
                                            <div class="form-group">
                                                <label>YEAR</label>
                                                <input type="text" class="form-control"name="startyr" placeholder="ex:2016-2020">
                                            </div>
                                        </div>
                                         
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>CGPA/PERCENTAGE</label>
                                                <input type="number" class="form-control"name="cgpa" placeholder="cgpa/percentage">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header">
                                <h2 class="title">..Personal details..</h2>
                            </div>
                            <div class="row">
                            	<div class="col-md-3">
                                            <div class="form-group">
                                                <label>DATE OF BIRTH</label>
                                                <input type="Date" class="form-control"name="dob" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                  <div class="col-md-4">
                                            <div class="form-group">
                                                <label>GENGER</label>
                                                <input type="text" class="form-control"name="gender" placeholder="gender">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>LANGUAGES KNOWN</label>
                                                <input type="text" class="form-control" name="lang" placeholder="languages">
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="form-group">
                                                <label>HOBBIES</label>
                                                <input type="text" class="form-control" name="hobby" placeholder="hobbies">
                                            </div>
                                        </div>
                                    </div>

                                <div class="header">
                                <h2 class="title">..User's field of Interest..</h2>
                            </div>
                            <div class="row">
                            	<div class="col-md-3">
                                            <div class="form-group">
                                                <label>COURSE</label>
                                                <input type="text" class="form-control"name="course" placeholder="for ex: CSE">
                                            </div>
                                        </div>
                                  <div class="col-md-4">
                                            <div class="form-group">
                                                <label>BRANCH</label>
                                                <input type="text" class="form-control"name="branch" placeholder="for ex: BTECH">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Field of application</label>
                                                <input type="text" class="form-control" name="field" placeholder="(for ex:software engineering)">
                                            </div>
                                        </div>
                                    </div>
                                         <div class="header">
                                <h2 class="title">..Applying for Internship..</h2>
                            </div>
                            <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Present year of studying</label>
                                                <input type="number" class="form-control"name="nowyr" placeholder="Year">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>EXPERIENCE(In Details)</label>
                                                <textarea rows="3" class="form-control"name="exp" placeholder="Type the fields based on your EXPERIENCE in each, remember to press ENTER after each field." value="  "></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label>Strengths</label>
                                                 <textarea rows="4" class="form-control"name="strength" placeholder="Type the fields based on your STRENGTH in each, remember to press ENTER after each field." value="  "></textarea>
                                            </div>
                                        </div> 

                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" name="about" placeholder="Here can be your description" ></textarea>
                                            </div>
                                        </div>
                                    </div>

                                   <button type="submit" class="btn btn-info btn-fill pull-right">Submit Details</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="hommy.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="hommy.php">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="hommy.php">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="hommy.php">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">..cVITAE..</a>, Made for making better CV
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>
