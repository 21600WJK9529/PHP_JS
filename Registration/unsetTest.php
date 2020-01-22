<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Deregistration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
  <link rel="icon" href="http://localhost/Practice/Practice/Registration/download.png">
</head>
<body onload="idleLogout();">
<? echo $_SESSION['username'] ?>
<? unset($_SESSION['username'])?>
<!--Error-->
<? echo $_SESSION['username'] ?>
</body>
</html>