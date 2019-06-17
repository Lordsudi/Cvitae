
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
<title>template </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="js/jquery-ui.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="t2.css">
        
      

</head>
<body>
        <section>
        <div class="container-fluid">
        
        <div class="row r">
           
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a ">
            <div class="heading">
                <h1><b><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></b></h1>
                <h2 style="margin-top: 4px;"><i><?php echo $row['field']; ?></i></h2>
                </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a ">
                <div class="icon">
                <div class="bar1"></div>
                <p><i class="fas fa-map-marker-alt fu"></i><?php echo $row['city']; ?></p>
                <p><i class="fas fa-envelope fu"></i><?php echo $row['email']; ?></p>
                <p><i class="fas fa-mobile fu"></i><?php echo $row['contact']; ?></p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row ra">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a">
                <h2> <i class="fas fa-graduation-cap"></i> EDUCATION</h2>
                </div>
                
                <div class="row">
                
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a">
                    <div class="edu">
                    <h4><?php echo $row['sname']; ?></h4>
                    <h5 style="font-size: 16px; color: #f4f4f4;"><?php echo $row['schyr']; ?></h5>
                </div>
                </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a">
                <div class="du">
                <p style="color: #FBDEAE; font-size: 16px;"> Class 10 details</p>
                    <p style="font-size: 16px; color: #f4f4f4;">Successfully completed Middle School with a percentage/cgpa of <?php echo $row['one']; ?></p>
                </div>
            </div>
            </div>
            <div class="row">
                
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a">
                    <div class="edu">
                    <h4><?php echo $row['s2name']; ?></h4>
                    <h5 style="font-size: 16px; color: #f4f4f4;"><?php echo $row['schyr']; ?></h5>
                </div>
                </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a">
                <div class="du">
                <p style="color: #FBDEAE; font-size: 16px;"> class 12 details</p>
                    <p style="font-size: 16px; color: #f4f4f4;">Successfully completed High School with a percentage/cgpa of <?php echo $row['two']; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
                
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a">
                    <div class="edu">
                    <h4><?php echo $row['univ']; ?></h4>
                    <h5 style="font-size: 16px; color: #f4f4f4;"><?php echo $row['startyr']; ?></h5>
                </div>
                </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a">
                <div class="du">
                <p style="color: #FBDEAE; font-size: 16px;"> university details</p>
                    <p style="font-size: 16px; color: #f4f4f4;">Successfully acquired the <?php echo $row['branch']; ?> degree with a cgpa of <?php echo $row['cgpa']; ?>.</p>
                </div>
            </div>
        </div>
        
        </div>

        <div class="row ra ru">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a">
                <h2 class="c"> <i class="fas fa-user-tie"></i><b> Profile</b></h2>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a">
                <p style="font-size: 16px; color: #263238; margin-top: 12px;"><?php echo $row['about']; ?></p>
                </div>
        </div>
        <span class="bar"></span>
        <div class="row ra ru">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a">
                <h2 class="c"> <i class="fas fa-briefcase"></i> Experience</h2>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a">
                <p style="font-size: 5px; color: #263238; margin-top: 12px;"><?php echo $row['exp']; ?></p>
                </div>
        </div>
        <span class="bar"></span>
        <div class="row ra ru">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a">
                <h2 class="c"> <i class="fas fa-pen"></i> Skills</h2>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a">
                <p style="font-size: 16px; color: #263238; margin-top: 12px;"><?php echo $row['strength']; ?></p>
                </div>

        </div>
        <span class="bar"></span>
        <div class="row ra ru">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a">
                <h2 class="c"> <i class="fas fa-user-circle"></i> Personal details</h2>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a">
                <p style="font-size: 16px; color: #263238; margin-top: 12px;">Date of birth:<?php echo $row['dob']; ?><br>Gender:<?php echo $row['gender']; ?><br>Nation:<?php echo $row['country']; ?><br>Permanent Address:<?php echo $row['address']; ?><br>languages known:<?php echo $row['lang']; ?> <br>Hobbies:<?php echo $row['hobby']; ?> </p>
                </div>
                
        </div>
        <span class="bar"></span>
        <div class="row ra">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a">
                <h2> <i class="fas fa-graduation-cap"></i> Declaration</h2>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a">
                <p style="font-size: 16px; color: #000000; margin-top: 28px;">I hearby declare that all the above provided information are true according to the best of my knowledge.</p>
                </div>
                </div>
        </div>
    </section>