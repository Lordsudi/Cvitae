<?php 
error_reporting(0);
include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>cVitae Studio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="js/jquery-ui.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="hs.css">
</head>
<body>

<script>
$(document).ready(function(){
	$(".login-form").hide();
	$(".signup").css("background", "#263238");

$(".login").click(function(){
  $(".signup-form").hide();
  $(".login-form").show();
  $(".signup").css("background", "#37474F");
  $(".login").css("background", "#263238");
});

$(".signup").click(function(){
  $(".signup-form").show();
  $(".login-form").hide();
  $(".login").css("background", "#37474F");
  $(".signup").css("background", "#263238");
});
});

</script>
<div id="navbar" class="topnav">
<div class="logo">
	.cVitae studio.
</div>
  <a  data-toggle="modal" data-target="#myModal" data-backdrop="true"><i class="fas fa-sign-in-alt"></i>	Sign up</a>
  <a href="#contact"><i class="fas fa-comments"></i>	Contact</a>
  <a href="#gallery"><i class="fas fa-images"></i>	 Gallery</a>
  <a href="#About"><i class="fas fa-book"></i>	 About</a>
  <a href="#home"><i class="fas fa-home"></i>	Home</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a> 
  <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a> 
  <a href="#" class="google"><i class="fab fa-google-plus-square"></i></a> 
  <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></a>
   <a href="#" class="insta"><i class="fab fa-instagram"></i></a>
</div>


 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <!-- <div class="modal-header"> -->
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> </div> -->
<div class="signup" style=" border-radius:20px 0px 0px 0px;">Sign Up</div>
      <div class="login" style=" border-radius:0px 20px 0px 0px;">Log In</div>
      
       <div class="signup-form">
       <form method="POST" action="server.php">
       <center>
       <i class="fas fa-envelope ab"></i>
           <input type="Email" name="email"  placeholder="Your Email Address" class="input"><br />
          <i class="fas fa-user ab"></i>
         <input type="text" name="username" placeholder="Your Full Name" class="input"><br />
          <i class="fas fa-lock ab"></i>
           <input type="password" name="password_1" placeholder="Choose a Password" class="input"><br />
          <input type="submit" name="reg_user" value="Create account">
          </center>
          </form>
       </div>
      
      <div class="login-form" style="padding-top: 70px">
      <form method="POST" action="server.php">
      <center>
      <i class="fas fa-user ab"></i>
           <input type="text" placeholder="Email" name="email" class="input"><br />
          <i class="fas fa-lock ab"></i>
            <input type="password" placeholder="Password" name="password" class="input"><br />
          
          <input type="submit" name="login_user" value="Login">
          <br>
          <br>
          <span><a href="#">I forgot my username or password.</a></span>
          </center>
          </form>
       </div>
       </div>
       </div>
       </div>
      

<div class="effect">
<div class="parallax">
<div class="ptext ">
	<p>welcome to cVitae studio!</p>
	<span class="bar"></span>
	<a  class="genric-btn" data-toggle="modal" data-target="#myModal" data-backdrop="true">BUILD A cV</a>
</div>

</div>
<section class="dark" id="home">
<h2><b>What cVitae Studio Offers?</b></h2>
	<p style="font-size: 18px; font-weight: bold;">We create stunning cv templates that will help your resume stand out from the crowd.</p>
	<p style="font-size: 16px;">cVitae Studio offers a platform where your expectations meets reality. We know that first look always matter. So here we are to provide our supporters with the best cv templates for their profile.Build your own stunning cv in minutes without any hustle.Explore from a bunch of templates and get a live preview of your cv in just one click.Take it offline or share it online.We provide everything your cv needs to get that extra attention.cvitae Studio aims to give cv a whole new version.</p>
</section>

<div class="parallaxtwo">
<div class="ptext">
<span class="border">
	we provide cv best suited for your profile
</span>
</div>
</div>
<section class="dark">
<h2>section 2</h2>
	<p>The first step is always important.<br>Choose wisely where to make your CV.</p>
</section>

<div class="parallaxthree">
<div class="ptext">
<span class="border">
	CHoose from a bunch of templates
</span>
</div>
</div>
<section class="dark" id="gallery">
<h2>TRENDING NOW!!</h2>
<div class="main">
	<h4>Check out some of our latest template</h4>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="r6.jpg" alt="Mountains" style="width: 100%">

      <h3 style="padding-bottom: 20px;">The Mod Formal</h3>
      <a  class="butn" data-toggle="modal" data-target="#myModal" data-backdrop="true">TRY NOW</a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="rr1.jpg" alt="Lights" style="width:100%">

      <h3 style="padding-bottom: 20px;">Simple & Sedate</h3>
       <a  class="butn " data-toggle="modal" data-target="#myModal" data-backdrop="true">TRY NOW</a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="r1.jpg" alt="Nature" style="width:100%">
      <h3 style="padding-bottom: 20px;">The Traditional</h3>
       <a  class="butn" data-toggle="modal" data-target="#myModal" data-backdrop="true">TRY NOW</a>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="r7.jpg" alt="Mountains" style="width:100%">
      <h3 style="padding-bottom: 20px;">In Vogue</h3>
       <a  class="butn" data-toggle="modal" data-target="#myModal" data-backdrop="true">TRY NOW</a>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="lappy7.jpg" alt="Bear" style="width:100%">
  <h3 style="padding-bottom: 20px;">Some Other Work</h3>
   <a  class="butn" data-toggle="modal" data-target="#myModal" data-backdrop="true">TRY NOW</a>
</div>

<!-- END MAIN -->
</div>

</section>

<div class="parallaxfour">
<div class="ptext">
<span class="border">
	CReate your own stunning cv in minutes
</span>
</div>
</div>
<section id="contact" style="background-color: #f4f4f4;">
<section class="light lit">
<h2 style="margin-bottom: 40px">CONTACT US</h2>

	<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-sm-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-sm-6 wow animated slideInRight" data-wow-delay=".5s">
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->


<center> <p style="padding-top: 30px">subscribe for updates.</p> </center>
</section>
</section>
<div class="parallaxfive">
<div class="ptext">
<span class="border">
present yourself more appropriately.
</span>
</div>
</div>
<section class="dark" id="About">
			<footer class="footer-area section-gap">
				
					<div class="row raw">
						<div class="col-lg-3  col-md-6 col-sm-6 col-xs-12">
							<div class="single-footer-widget">
								<h3><b>About Us</b></h3>
								<p>
									cVitae Studio is an online professional cv builder that provides its user a whole new approach towards cv.
								</p>
							</div>
						</div>
						<div class="col-lg-4  col-md-6 col-sm-6 col-xs-12">
							<div class="single-footer-widget">
								<h3><b>Popular Content</b></h3>
								<p >
									CV Templates<br>Student CV<br>Job CV<br>CV Format <br>Sample Resume<br>
								</p>
				
							</div>
						</div>						
						<div class="col-lg-5  col-md-12 col-sm-12 col-xs-12">
							<div class="single-footer-widget">
								<h3><b>Newsletter</b></h3>
								<p>You can trust us. we only send updates, not a single spam.</p>
								<div class="d-flex flex-row" id="mc_embed_signup">


									  <form class="navbar-form"  action="" method="post">
									    <div class="input-group add-on align-items-center d-flex ">
									      	<input  style="padding: 5px; z-index: 0;" class="form-control med" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">

									      <div class="input-group-btn">
									        <button class="round">Subscribe Now</button>
									      </div>
									    </div>
									      <div class="info mt-20"></div>									    
									  </form>
								</div>
							</div>
						</div>						
					</div>
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6 col-md-12 col-xs-12 col-sm-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 cVitae Studio - The Professional CV Maker | This website is made by Ishaan jaiswal and Sudipto paul.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<div class="footer-social col-lg-6 col-md-12">
							<a href="#"><i class="fab fa-facebook-f pad"></i></a>
							<a href="#"><i class="fab fa-instagram pad"></i></a>
							<a href="#"><i class="fab fa-twitter pad"></i></a>
							<a href="#"><i class="fab fa-google-plus-g pad"></i></a>
						</div>
					</div>
				</div>
			</footer>	
</section>

       
</div>


<script type="text/javascript">
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-55px";
    }
}
</script>
<script>
function myFunction() {
    var x = document.getElementById("navbar");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</script>
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
<?php if($_GET['register'] == "done") {  ?>
<script type="text/javascript">
      $(document).ready(function(){
       // alert("hello");

          demo.initChartist();

          $.notify({
              icon: 'pe-7s-gift',
              message: "Hello!You have Registered into cVitae studio <br> Kindly do LOGIN"

            },{
                type: 'info',
                timer: 100,
            });

      });
  </script>
 <?php } ?>


</body>
</html>