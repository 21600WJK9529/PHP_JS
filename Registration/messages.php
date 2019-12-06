<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Message system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body onload="init();">
  <div class="header">
  	<h2>Messages</h2>
  </div>
	 
  <form method="post" action="messages.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input type="text" name="inputMsg" >
      </div>
      <div class="input-group">
  		<button type="submit" class="btn" name="msg_send">Send</button>
      </div>
      <div class="msg">
  		<label>Messages<br></label>
          <textarea id="text" rows=20></textarea>   
        </div>
      </form>
      
</body>
</html>   