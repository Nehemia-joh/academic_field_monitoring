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
  <div class="head">Add Users </div>
  
  <form method="post" action="">
    <div class="foc">
      <input type="text" class="form-control" name="username" placeholder="Username">
      </div>
      <div class="foc">
       <input type="password" class="form-control" name="password"  placeholder="Password" autocomplete="off" >
      </div>
      <div class="foc">
      <select name="role" class="form-control">
      <option value="2">Campus Supervisor</option>
      <option value="1">Head Supervisor</option>
</select>
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
                <input type="submit" name="submit10" class="btn btn-block" value="adduser">
            </div>
  </form>
  
</div>
</body>
</html>

<?php
if(isset($_POST['submit10'])){
    include "link/link.php"; 
    $username =$_POST['username']; 
    $password =$_POST['password'];
    $role = $_POST['role'];
    $FullName = $_POST['FullName'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $email = $_POST['email'];

        $query = "INSERT INTO users (username,role,password) VALUES ('$username','$role','$password')";
        $query1 = "INSERT INTO supervisors (FullName,PhoneNumber,email) VALUES ('$FullName','$PhoneNumber','$email')";
        $result = mysqli_query($link,$query);
        $result1 = mysqli_query($link,$query1);
        if($result){
            echo "Saved";
        }
      }
?>
