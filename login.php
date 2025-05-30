<?php
if(isset($_POST['sub'])){

    $fullname=$_POST['name'];
  
    $pass=$_POST['password'];
 $rol=$_POST['role'];
    if(!empty($fullname) && !empty($pass) && !empty($rol) ){


        require_once 'connect.php';
  if($rol==='student'){
  

        $sqlstate= $pdo->prepare('SELECT * FROM student WHERE
                                                    fullname=?
                                                AND password=?');
        $sqlstate->execute([$fullname,$pass]);
        if($sqlstate->rowCount()>=1){
             $_SESSION['user']=$sqlstate->fetch();
             header('location:student.php');

        }
    }elseif( $rol==='teacher'){

 
        $sqlstate= $pdo->prepare('SELECT * FROM techer WHERE
                                                    techname=?
                                                AND techpassword=?');
        $sqlstate->execute([$fullname,$pass]);
        if($sqlstate->rowCount()>=1){

             $_SESSION['user']=$sqlstate->fetch();
             header('location:homtetcher.php');
            }else{
                ?>
 <div class="alert alert-danger " role="alert">
 "you shold  insssert correct information"
            
 <?php
            }
       

    }
}
 else{
        ?>
        <div class="alert alert-danger " role="alert">
        "you shold  wriht your name and password"
        <?php
        
    }

}
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
 <title>LOG IN</title>
 <link rel="icon" href="photo/dbdd0a31-24ae-433b-9622-e221f656ee2a-removebg-preview.png">
<link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="continer">
    <nav>
        <a class="logo" href="home.html">GHAZA SC</a>
        <ul>
            <li><a href="home.html">HOME</a></li>
            <li><a href="techers.html">TECHERS</a></li>
            <li><a href="login.html">LOGIN</a></li>
        </ul>
    </nav>
    <!-- زر تغيير الثيم (ضوء/ظلام) -->
  <button id="themeToggle" class="toggle-btn">🌙</button>
  <!-- زر الرجوع للأعلى -->
    <div class="login">
        <form method="post">
            <h1 id="txt1">LOG IN</h1>
            <label for="txt">username</label>
            <input id="txt" type="text" placeholder="your full name" name="name">
        
        <br>
            <label for="pas">password</label>
  <input id="pas" type="password" placeholder="your password" name="password" required>
    <div class="password-container">
  <span id="togglePassword" style="cursor:pointer;">👁</span>
</div>
 <label for="role">I am a:</label>
<div class="kochi">
      <select id="role" name="role" required>
        <option value="">Select role</option>
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
      </select>  
</div>
            <br>
             <input id="jojo" type="submit" value="login" name="sub">
             
               <div class="signup-link">
                Don’t have an account? <a href="sign_up.php">Sign up here</a>
             </div>
             <a href="resetpassword.html" class="reset-link">Forgot your password?</a>
        </form>
        </div>
        <script src="login.js"></script>

</body>
</html>