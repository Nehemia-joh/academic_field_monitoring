<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
<?php
  session_start();
  $RegNo=$_SESSION['username'];
  ?>
  <!-- Daily Activities -->
  <div class="waper">
  <div class="head">Activities Done</div>
  
  <form method="post" action="">
    <div class="foc">
    <textarea name="Activity" class="form-control" placeholder="Write all Activities done Today"></textarea>
      </div>
      
      <div class="foc" >
                <input type="submit" name="submit1" class="btn btn-block" value="Save the Activity">
            </div>
  </form>
  
</div>

<!-- Personal Infomation -->
<div class="waper">
  <div class="head">Personal Informations</div>
  
  <form method="post" action="">
    <div class="foc">
      <input type="text" class="form-control" name="FullName" placeholder="Add your full name">
      </div>
      <div class="foc">
       <input type="text" class="form-control" name="FieldLocation"  placeholder="Field location" autocomplete="off" >
      </div>
      <div class="foc">
       <input type="text" class="form-control" name="Organization"  placeholder="Add the organization you are working for" autocomplete="off" >
      </div>
      <div class="foc">
      <select name="level" class="form-control">
  <option value="Ordinary Diploma">Ordinary Diploma</option>
  <option value="Bachelor Degree">Bachelor Degree</option>
</select>
      </div>
      <div class="foc" >
                <input type="submit" name="submit" class="btn btn-block" value="Save">
            </div>
  </form>
  
</div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    include "../link/link.php";
    $FullName =$_POST['FullName']; 
    $FieldLocation =$_POST['FieldLocation'];
    $Organization = $_POST['Organization'];
    $level = $_POST['level'];

    $query2 = "UPDATE students SET FullName='$FullName',FieldLocation='$FieldLocation',Organization='$Organization',level='$level' WHERE RegNo='$RegNo'";
    $query3 = "UPDATE attend SET FieldLocation='$FieldLocation' WHERE RegNo='$RegNo'";   
    $result = mysqli_query($link,$query2);
    $result3 = mysqli_query($link,$query3);
        if($result){
            echo "Data added";
        }
}
else if(isset($_POST['submit1'])){
    include "../link/link.php"; 
    $Activity =$_POST['Activity']; 
    $date=date("Y-m-d");

    $query = "INSERT INTO Activity (Activity,date,RegNo) VALUES ('$Activity','$date','$RegNo')";
        $result = mysqli_query($link,$query);
        if($result){
            echo "Activity Added";
        }
}
?>
