<?php
if(isset($_POST['sub'])){
 $fullname=$_POST['fullname'];
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $confirm_password=$_POST['confirm_password'];
 $rol=$_POST['role'];
  if(!empty($fullname) && !empty($pass) && !empty($email) && !empty($confirm_password) && !empty($rol)){
    require_once 'connect.php';
if($rol==='student'){
$sqlstate = $pdo->prepare('INSERT INTO student VALUES(?,?,?,?)');
$sqlstate->execute([$fullname,$email,$pass,$confirm_password]);
header('location:login.php');
}elseif($rol==='teacher'){
$sqlstate = $pdo->prepare('INSERT INTO techer VALUES(?,?,?,?)');
$sqlstate->execute([$fullname,$email,$pass,$confirm_password]);
header('location:login.php');
}
}else{
    
 ?>
 <div class="alert alert-danger " role="alert">
 "you shold  insssert your information"
 <?php
 
 }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Sign Up</title>
  <link rel="icon" href="photo/dbdd0a31-24ae-433b-9622-e221f656ee2a-removebg-preview.png" />
  <link rel="stylesheet" href="signup.css">
</head>
<body>

  <nav>
    <a class="logo" href="home.html">GHAZA SC</a>
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="corses.html">Courses</a></li>
      <li><a href="techers.html">Teachers</a></li>
      <li><a href="login.html">Login</a></li>
    </ul>
  </nav>

  <div class="container">
    <h1>Sign Up</h1>
    <form method="post"  onsubmit="return validateForm()">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="fullname" placeholder="Your full name" required />

      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" placeholder="Your email" required />

      <label for="role">I am a:</label>
      <select id="role" name="role" required>
        <option value="">Select role</option>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
      </select>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Create a password" required />

      <label for="confirm">Confirm Password</label>
      <input type="password" id="confirm" name="confirm_password" placeholder="Confirm your password" required />

      <input type="submit"  value="Create Account" name="sub" />
    </form>

    <div class="login-link">
      Already have an account? <a href="login.html">Log in here</a>
    </div>
  </div>

  <script src="signup.js"></script>
</body>
</html>