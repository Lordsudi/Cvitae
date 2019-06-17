<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="full">
    <br>
  <div class="header">
  	<h2>Register</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label><font color="grey">Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div></font>
  	<div class="input-group">
  	  <label><font color="grey">Email</label>
  	  <input type="text" name="email" value="<?php echo $email; ?>">
  	</div></font>
      <div class="input-group">
      <label><font color="grey">gender</label>
      <input type="radio" name="gender" value="male"><label><font color="grey">male</label></font>
      <input type="radio" name="gender" value="female"><label><font color="grey">female</label></font>
    </div></font>
  	<div class="input-group">
  	  <label><font color="grey">Password</label>
  	  <input type="password" name="password_1">
  	</div></font>
  	<div class="input-group">
  	  <label><font color="grey">Confirm password</label>
  	  <input type="password" name="password_2">
  	</div></font>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		<font color="grey">Already a member? <a href="loginn.php">Sign in</a></font>
  	</p>
  </form>
</div>
</body>
</html>