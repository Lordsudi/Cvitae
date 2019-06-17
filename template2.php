
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
<title>template 1</title>
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
    <link rel="stylesheet" href="tss2.css">
        
      

</head>
<body>
        <section>
        <div class="container-fluid">
        
        <div class="row sudi">
        
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a ">
        <div class="image">
                        <img src="upload/<?php echo $row['pp']; ?>">
                    </div>
                    </div>
                    
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a ">
            <div class="heading">
            
                <h1><?php echo $row['fname']; ?> <b><?php echo $row['lname']; ?></b></h1>
                <div class="icon">
                <p><i class="fas fa-map-marker-alt fu"></i><?php echo $row['city']; ?></p>
                <p><i class="fas fa-envelope fu"></i><?php echo $row['email']; ?></p>
                <p><i class="fas fa-mobile fu"></i><?php echo $row['contact']; ?></p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

       <section>
           <div class="container-fluid ab">
       
        <div class="row r">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 a  ">
        <div class="descrip">
        <div class="fields">
            <h3>
            WORK EXPERIENCE <i class="fas fa-briefcase"></i>
            </h3>
            <p> <?php echo $row['exp']; ?></p>
        </div>
        <span class="bar"></span>
               <div class="fields">
            <h3>
            EDUCATION <i class="fas fa-graduation-cap"></i>
            </h3>
            <h4><?php echo $row['sname']; ?></h4><h4><?php echo $row['schyr']; ?></h4>
            <p> Successfully completed Middle School with a percentage/cgpa of <?php echo $row['one']; ?></p>
            <h4><?php echo $row['s2name']; ?></h4><h4><?php echo $row['schyr']; ?></h4>
            <p> Successfully completed High School with a percentage/cgpa of <?php echo $row['two']; ?></p>
            <h4>UNIVERSITY</h4><h4><?php echo $row['startyr']; ?></h4>
            <p> Successfully acquired the <?php echo $row['branch']; ?> degree with a cgpa of <?php echo $row['cgpa']; ?>.</p>
        </div>
          </div>  
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 a  ">
            <div class="descrip2">
            <div class="fields">
            <h3>
            ABOUT ME <i class="fas fa-user-tie"></i>
            </h3>
            <p> <?php echo $row['about']; ?>
            </p>
              
            

        </div>
        <span class="bar"></span>
        <div class="fields">
            <h3>
            SKILLS <i class="fas fa-pen"></i>
            </h3>
            <p>  <?php echo $row['strength']; ?>
            </p>

        </div>
        </div>
        </div>
        </div>
    </div>
    </section>
</body>