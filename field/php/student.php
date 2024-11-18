<!DOCTYPE html>
<html>
<head>
<title>Student Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    @import url("../assets/css/dashboard.css");
</style>
</head>
<body>
  
<?php
  session_start();
  $RegNo=$_SESSION['username'];
  $password=$_SESSION['password'];
  if($password=='field'){
    include 'change_password.php';
    header("location:change_password.php");
  }
  include "link/link.php";
  $queryS="SELECT * FROM students where RegNo='$RegNo'";
  $resultS=mysqli_query($link,$queryS);
    while($rowS=mysqli_fetch_array($resultS)){
        $FullName=$rowS['FullName'];
}

?>
  <div class="tab">
  <button class="tablinks"><?php echo "<p>Welcome  $FullName</p> "; echo "<p>$RegNo</p> ";?> </button>
  <button class="tablinks" onclick="openTab(event, 'personalinfo')" id="defaultOpen">Personal Infomation</button>
  <button class="tablinks" onclick="openTab(event, 'forms')">Personal & Field Activities</button>
  <button class="tablinks" onclick="openTab(event, 'preview')">Submitted Activities</button>
  <button class="tablinks" onclick="openTab(event, 'Results')">Results</button>
  <button class="tablinks" ><a style="text-decoration: none;" href="../index.php"><img src="../assets/svgs/sign-out-alt.svg" height="20px" width="20px" alt="Log Out"/>   Log Out</a></button>
</div>

<div id="personalinfo" class="tabcontent">

  <p><?php include "student/personalinfo.php"?></p>
</div>

<div id="forms" class="tabcontent">
  <p><?php include "student/studentforms.php"?></p> 
</div>

<div id="preview" class="tabcontent">
  <p><?php include "student/preview.php"?></p> 
</div>

<div id="Results" class="tabcontent">
  <p><?php include "student/result.php"?></p> 
</div>


<script src="../assets/js/dashboard.js"></script>
</body>

</html> 
