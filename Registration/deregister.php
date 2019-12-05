<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Deregistration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body onload="idleLogout();">
  <div class="header">
  	<h2>Deregister</h2>
  </div>
  <form method="post" action="deregister.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="dereg_username" value="<?php echo $username; ?>">
	</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="dereg_pw1" id="txtNewPassword"/>
      </div>
      
      <div class="input-group">
  	  <button type="submit" class="btn" name="dereg_user">Deregister</button>
  	</div>
</body>