<?php
error_reporting(0);
session_start();
// Create connection
$conn = new mysqli('localhost', 'root', '', 'registration');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//print_r($_REQUEST);
//print_r($_FILES);

//DIE();



if($_POST['email'])
{







	/*code for file upload*/


/*$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "audio/wma")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg"))

($_FILES["file"]["size"] &lt; 20000)
// in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] &gt; 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "&lt;br /&gt;";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "&lt;br /&gt;";
    echo "Type: " . $_FILES["file"]["type"] . "&lt;br /&gt;";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb&lt;br /&gt;";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "&lt;br /&gt;";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }

  /*  */

if(isset($_FILES['pp'])){
      $errors= array();
      $file_name = $_FILES['pp']['name'];
      $file_size =$_FILES['pp']['size'];
      $file_tmp =$_FILES['pp']['tmp_name'];
      $file_type=$_FILES['pp']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['pp']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }


  $servername = "";
  $userid= $_POST['user_id'];
  $pp = $file_name;
$email= $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$city = $_POST['city'];
$country= $_POST['country'];
$postal= $_POST['postal'];
$sname= $_POST['sname'];
$one = $_POST['one'];
$s2name= $_POST['s2name'];
$two= $_POST['two'];
$schyr= $_POST['schyr'];
$univ= $_POST['univ'];
$startyr= $_POST['startyr'];
$cgpa= $_POST['cgpa'];
$course= $_POST['course'];
$branch= $_POST['branch'];
$field= $_POST['field'];
$nowyr= $_POST['nowyr'];
$exp= $_POST['exp'];
$strength= $_POST['strength'];
$about= $_POST['about'];
$dbname = "registration";



$sql = "INSERT INTO bom(userid,pp, email, fname,lname,contact,address,city,country,postal,sname,one,s2name,two,schyr,univ,startyr,cgpa,course,branch,field,nowyr,exp,strength,about) VALUES('".$userid."','".$pp."','".$email."','".$fname."','".$lname."','".$contact."','".$address."','".$city."','".$country."','".$postal."','".$sname."','".$one."','".$s2name."','".$two."','".$schyr."','".$univ."','".$startyr."','".$cgpa."','".$course."','".$branch."','".$field."','".$nowyr."','".$exp."','".$strength."','".$about."')";
//echo $sql;
//die();


if ($conn->query($sql) === TRUE) {
    echo "Your data created successfully";
    header("location:dashboard.php");
} else {
    echo "something went wrong." . $sql . "<br>" . $conn->error;
}

}


if (isset($_POST['logout'])) {
    //unset($_SESSION['email']);
  
     session_destroy();
     header("location:hommy.php");

}

$conn->close();





?>