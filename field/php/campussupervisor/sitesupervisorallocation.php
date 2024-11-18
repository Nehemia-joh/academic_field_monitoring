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
  <div class="head">Allocate Onsite Supervisor </div>
  
  <form method="post" action="">
      <div class="foc">
      <input type="text" class="form-control" name="RegNo" placeholder="Students Reg No">
      </div>
      <div class="foc">
      <input type="tel" class="form-control" name="supervisoremail" placeholder="Onsite Supervisor Email">
      </div>
      <div class="foc" >
                <input type="submit" name="submit10" class="btn btn-block" value="Save">
            </div>
  </form>
  
</div>
</body>
</html>

<?php
if(isset($_POST['submit10'])){
    include "link/link.php"; 
    $RegNo =$_POST['RegNo']; 
    $supervisoremail =$_POST['supervisoremail'];

        $query1 = "INSERT INTO siteappointed (RegNo,email) VALUES ('$RegNo','$supervisoremail')";
        $result1 = mysqli_query($link,$query1);
        if($result){
            echo "Saved";
        }
      }
?>
