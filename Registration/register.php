<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
  <link rel="icon" href="http://localhost/Practice/Practice/Registration/download.png">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
	</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" id="txtNewPassword" onkeyup="checkPasswordMatch();"/>
	  </div>
	  
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" id="txtConfirmPassword" onkeyup="checkPasswordMatch();" />
	  </div>

	  <div class="registrationFormAlert" id="divCheckPasswordMatch">
	  </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>
