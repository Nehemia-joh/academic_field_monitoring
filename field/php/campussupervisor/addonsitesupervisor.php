<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add users</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<div class="waper">
  <div class="head">Add Onsite Supervisor </div>
  
  <form method="post" action="">
    <div class="foc">
      <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
      <div class="foc">
       <input type="password" class="form-control" name="password"  placeholder="Password" autocomplete="off" >
      </div>
      <div class="foc">
      <input type="text" class="form-control" name="FullName" placeholder="Full Name">
      </div>
      <div class="foc">
      <input type="tel" class="form-control" name="PhoneNumber" placeholder="Phone number">
      </div>
      <div class="foc">
      <input type="email" class="form-control" name="email" placeholder="email">
      </div>
      <div class="foc" >
                <input type="submit" name="submit11" class="btn btn-block" value="adduser">
            </div>
  </form>
  
</div>
</body>
</html>

<?php
if(isset($_POST['submit11'])){
    include "link/link.php"; 
    $username =$_POST['username']; 
    $password =$_POST['password'];
    $FullName = $_POST['FullName'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $email = $_POST['email'];

        $query = "INSERT INTO users (username,role,password) VALUES ('$username','3','$password')";
        $query1 = "INSERT INTO onsitesupervisors (FullName,PhoneNumber,email) VALUES ('$FullName','$PhoneNumber','$email')";
        $result = mysqli_query($link,$query);
        $result1 = mysqli_query($link,$query1);
        if($result){
            echo "Saved";
        }
      }
?>
