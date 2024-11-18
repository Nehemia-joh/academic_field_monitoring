<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sign Up</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<div class="waper">
  <div class="head">for students</div>
  
  <form method="post" action="">
    <div class="foc">
      <input type="text" class="form-control" name="username" placeholder=" Use Reg No">
      </div>
      <div class="foc" >
                <input type="submit" name="submit" class="btn btn-block" value="Save Student">
            </div>
  </form>
  
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    include "../link/link.php"; //connect to database
    $username =$_POST['username']; 
    $role = $_POST['role'];

        $query = "INSERT INTO users (username,role,password) VALUES ('$username','4','field')";
        $query2 = "INSERT INTO students (RegNo) VALUES ('$username')";
        $query3 = "INSERT INTO appointed (RegNo,value) VALUES ('$username',0)";
        $query4 = "INSERT INTO attend (RegNo,value) VALUES ('$username','Not Attended')";
        $result = mysqli_query($link,$query);
        $result2 = mysqli_query($link,$query2);
        $result3 = mysqli_query($link,$query3);
        $result4 = mysqli_query($link,$query4);
        if($result){
            echo "Added successfully";
            // header("location:../.php");
        }
  mysqli_close($link);
  }

?>
