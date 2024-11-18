<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Academic Field</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<div class="waper">
  <div class="head">Change Password </div>
  
  <form method="post" action="">
      <div class="foc">
        <label>New Password</label>
       <input type="password" class="form-control"  name="password" placeholder="Password" autocomplete="off" >
      </div>
      <div class="foc" >
                <input type="submit" name="submit" class="btn btn-block" value="Change Password">
            </div>
  </form> 
</div>
<?php
session_start();
$RegNo=$_SESSION['username'];
if(isset($_POST['submit'])){
    include "link/link.php"; //connect to database
    if(!$link){
        die('Unable to connect to database');
    }

    $password = $_POST['password']; //sanitize user input


        $query = "UPDATE users SET password = '$password' WHERE username ='$RegNo'";
        $result = mysqli_query($link,$query);


                  header("location: ../index.php");
                }


?>

</body>
</html>
