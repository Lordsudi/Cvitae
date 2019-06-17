
<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'registration');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//  echo  "<h1>".$_SESSION['id']."<h1>"; 

  $userid = $_SESSION['id'];

  $sql = "select * from bom where `userid` = $userid";
  $res = $conn->query($sql);
  $row = $res->fetch_array();
 // echo "<pre>";
 // print_r($row);
  //die();


?>
<!DOCTYPE html>
<html>
<head>
	<title>cool</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/jquery-ui.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sec.css">
</head>
<body>
    <section>
    
        <div class="container-fluid">
        <div class="top">
        <div class="row">
        	        
        		<div class=" col-md-5 a">
        		
        			<div class="image">
        				<img src="upload/<?php echo $row['pp']; ?>">
        			</div>
        		</div>
        		<div class=" col-md-7 a">
        			<div class="name">
        				<h2 ><?php echo $row['fname']; ?><?php echo $row['lname']; ?></h2>
        				<h3>WEB DEVELOPER</h3>
        				<p>Hard-working with a flair for creating elegant solutions in the least amount of time. Developed an ecommerce webapp, customer web portal, documentary launch website, and donations webapp for a local charity. Passionate about software architecture and cloud computing. Regular attendee of web developer meetups and hackathons.</p>
        			</div>

        		</div>
        </div>
        </div>
        <div class="two">
        	
        
        	<div class="row">
        		<div class="col-md-4">
        		<p><i class="fas fa-phone b" ></i> <?php echo $row['contact']; ?></p>
        		</div>
        		 <div class="col-md-4">
        		<p><i class="fas fa-envelope b"></i><?php echo $row['email']; ?></p>
        		</div>
        		 <div class="col-md-4 ">
        		<p><i class="fas fa-map-marker-alt b"></i> <?php echo $row['address']; ?></p>
        		</div>
        	</div>
        </div>
        <div class="three">
        	<div class="row">
        		<div class="col-md-6 ">
        		<h3>Education</h3>
        		<div class="c">
        			<p><?php echo $row['sname']; ?></p>
        			<p><?php echo $row['one']; ?></p>
        			</div>
        			<div class="content">
        				<p><b>percentage:<?php echo $row['one']; ?></b></p>
        			</div>
        		<div class="content">
        				<h3><?php echo $row['course']; ?></h3>
        				<p><b></b></p>
        			</div>
        			<div class="c">
        			<p>TORONTO HIGH SCHOOL<br>Toronto,Canada</p>
        			<p>2002-2004</p>
        			</div>
        		<div class="content">
        				<h3>SUCCESSFULLY COMPLETED HIGH SCHOOL</h3>
        				<p><b>CGPA:9.4</b></p>
        			</div>
        		</div>
        		<div class="col-md-6 ">
        		<h3>Experience</h3>
        		<div class="c">
        		
        		<P>Senior Web Developer<br>Flexor Inc.</P>
        		<p>2013 - 2017</p>
        		</div>
        		<div class="list">
        		<ul>
        			<li>Full stack web developer responsible for end-to-end web app development and creative cloud engineering. Led three teams of five employees each.</li>
        			<li>Prototyped an average of 25 new product features per year.</li>
        			<li>Drove best practice implementation for 22 employees across multiple departments. Decreased rework by 23% and costs by 15%.</li>
        			<li>Boosted user experience scores by 55% over company-wide previous best.</li>
        		</ul>
        		</div>
        		<div class="c">
        		<p>Freelance Web Developer <br>Rexid Pvt Ltd.</p>
        		<p>2010-2011</p>
        		</div>
        		<div class="list">
        		<ul>
        			<li>Built an ecommerce webapp to sell products online. Increased company sales by 58%.</li>
        			<li>Designed a customer web form for a local dentist's office. Increased patient satisfaction scores by 30%.</li>
        			<li>Developed a launch website for the Indie Documentary Jogging the Amazon. Boosted streaming sales by 60%.</li>
        			<li>Created a website and Facebook-linked donations webapp for a local animal shelter. Raised donations by 38%. Saved the lives of 15 dogs.</li>
        		</ul>
        			
        		</div>
        		
        		</div>
        	</div>
        </div>
        <div class="four">
        	<div class="row">
        		<div class="col-md-12 ">
        		<h3><center><b>SKILLS</b></center></h3>
        			<div class="skillbox">
        				<p>HTML</p>
        				<p>80%</p>
        					<div class="skill">
        						<div class="level" style="width: 80%"></div>
        					</div>
        			</div>
        			<div class="skillbox">
        				<p>CSS</p>
        				<p>90%</p>
        					<div class="skill">
        						<div class="level" ></div>
        					</div>
        			</div>
        			<div class="skillbox">
        				<p>PHP</p>
        				<p>70%</p>
        					<div class="skill" >
        						<div class="level" style="width: 70%"></div>
        					</div>
        			</div>
        			<div class="skillbox">
        				<p>JAVA SCRIPT</p>
        				<p>87%</p>
        					<div class="skill">
        						<div class="level" style="width: 87%"></div>
        					</div>
        			</div>
        			<div class="skillbox">
        				<p>WORDPRESS</p>
        				<p>95%</p>
        					<div class="skill">
        						<div class="level" style="width: 95%"></div>
        					</div>
        			</div>
        			<div class="skillbox">
        				<p>JQUERY</p>
        				<p>85%</p>
        					<div class="skill">
        						<div class="level" style="width: 85%"></div>
        					</div>
        			</div>
        		</div>
        		</div>
        		</div>
        		<div class="five">
        	    <div class="row">
        		<div class="col-md-12 ">
        		<h3><b>DECLARATION</b></h3>
        		<p>I hearby, declare that all the above provided information are true according to the best of my knowledge.</p>
        		</div>
        		</div>
        		</div>
        </div>
    </section>    

</body>
</html>