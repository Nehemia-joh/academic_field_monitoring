<!DOCTYPE html>
<html>
<head>
<title>Onsite supervisor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    @import url("../assets/css/dashboard.css");
</style>
</head>
<body>
<?php
  session_start();
  $name=$_SESSION['username'];
  include "link/link.php";
  $queryoSu="SELECT * FROM onsitesupervisors where email='$name'";
  $resultoSu=mysqli_query($link,$queryoSu);
    while($rowoSu=mysqli_fetch_array($resultoSu)){
        $FullName=$rowoSu['FullName'];
}
  ?>
  
<div class="tab">
<button class="tablinks"><?php echo "<p>Welcome  $FullName</p> "; echo "<p>Email:$name</p> ";?> </button>
  <button class="tablinks" onclick="openTab(event, 'PersonalInfomation')" id="defaultOpen">Students To Attend</button>
  <button class="tablinks" ><a style="text-decoration: none;" href="../index.php"><img src="../assets/svgs/sign-out-alt.svg" height="20px" width="20px" alt="Log Out"/>   Log Out</a></button>
</div>

<div id="PersonalInfomation" class="tabcontent">
  <h3>Students</h3>
  <p><?php
  session_start();
  include "onsitesupervisor/students.php";
  ?></p>
</div>

<div id="Preview" class="tabcontent">
  <h3>Reports</h3>
  <p>Daily reports.</p> 
</div>

<div id="terms" class="tabcontent">
  <h3>Terms</h3>
  <p>Terms.</p>
</div>

<script src="../assets/js/dashboard.js"></script>
</body>

</html> 
