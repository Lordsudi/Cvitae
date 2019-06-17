<?php
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$remember=$_POST['remember'];
		if( $email == $email and $password=$password ){
				if (isset($_POST['remember'])) {
					setcookie('email',$email,time()+60*60*7);
				}
				session_start();
				$_SESSION['email'] = $email;
					header("location: dashboard.php");
		}else {
			echo"Email or password is invalid. <br> click here <a href='hommy.php'>  to try again</a>";
		}
	}else{
		header("location: hommy.php");
	}
	?>