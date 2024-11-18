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
  <option value="1">Head Supervisor</option>
  <option value="2">Campus Supervisor</option>
  <option value="3">Visit Supervisor</option>
  <option value="4">Student</option>
</select>
      </div>
      <div class="foc" >
                <input type="submit" name="submit" class="btn btn-block" value="adduser">
            </div>
  </form>
  
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    include "link/link.php"; //connect to database
    $username =$_POST['username']; //sanitize user input
    $password =$_POST['password'];
    $role = $_POST['role'];

        $query = "INSERT INTO users (username,role,password) VALUES ('$username','$role','$password')";
        $result = mysqli_query($link,$query);
        if($result){
            echo "Saved";
        }

        // check if user exists
        
            }

?>
