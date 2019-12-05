<?php
session_start();

// initializing variables
$username = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'js_practice');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //Required fields for registration
  //Any errors pushed to errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username
  $user_check_query = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database
    //Default values on create
    $role = 'user';
    $active = 'Y';
  	$query = "INSERT INTO users (username, password, role, active) 
  			  VALUES('$username', '$password', '$role', '$active')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    header('location: index.php');   
  }
}
//-------------------------------------------------------------------------------
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0 ) {
  	$password = md5($password);
  	$query = "SELECT ID,username, password, active  FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_array($results);
    $active = $row['active'];
  	if (mysqli_num_rows($results) == 1 && $active == 'Y') {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
      
  	}else {
      array_push($errors, "Wrong username/password combination");
      session_destroy();
  	}
  }
}
//--------------------------------------------------------------------------------
//DEREGISTER USER
if (isset($_POST['dereg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['dereg_username']);
  $password = mysqli_real_escape_string($db, $_POST['dereg_pw1']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0 ) {
  	$password = md5($password);
    $query = "SELECT id FROM users WHERE username='$username' AND password='$password'"; 
    $results = mysqli_query($db, $query);
    $row = mysqli_fetch_array($results);
    $id = $row['id'];
  	if (mysqli_num_rows($results) == 1) {
      $query = "UPDATE users SET active='N' WHERE ID='$id'";  
      $resultsDereg = mysqli_query($db, $query);
      header('location: login.php');      
  	}else {
  		array_push($errors, "Wrong username/password combination");
    }
  }
}
?>