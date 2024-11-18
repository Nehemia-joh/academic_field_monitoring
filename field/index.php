<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Academic Field</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<div class="waper">
  <div class="head">Login </div>
  
  <form method="post" action="">
    <div class="foc">
      <input type="text" class="form-control" name="username" placeholder="username">
      </div>
      <div class="foc">
       <input type="password" class="form-control"  name="password" placeholder="Password" autocomplete="off" >
      </div>
      <div class="foc" >
                <input type="submit" name="submit" class="btn btn-block" value="Login">
                <!-- <input type="submit" name="submit" class="btn btn-block" value="Add+"> -->
                <a href='php/forgot_password.php'>Forgot Password?</a>
            </div>
  </form> 
</div>
<?php
session_start();

if(isset($_POST['submit'])){
    include "php/link/link.php"; //connect to database
    if(!$link){
        die('Unable to connect to database');
    }

    $username = $_POST['username']; //sanitize user input
    $password = $_POST['password'];

    if(empty($username) && empty($password)){
        echo "<p style='color:red;'>Please enter your login credentials</p>";
    }else{
        $query = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";
        $result = mysqli_query($link,$query);

        // check if user exists
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['role'] = $row['role'];

            // authorization level
            switch($_SESSION['role']){
              case '1':
                header("location:php/headsupervisor.php");
                break;
              case '2':
                header("location: php/campussupervisor.php");
                break;
              case '3':
                header("location: php/onsitesupervisor.php");
                break;
                case '4':
                  header("location: php/student.php");
                  break;
              default:
                echo "<p style='color:red;'>Invalid role</p>";
            }
        }else {
            echo "<p style='color:red;'>Invalid login credentials</p>";
        }
    }
    
}

?>

</body>
</html>
