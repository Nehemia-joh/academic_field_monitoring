<!DOCTYPE html>
<html>
<head>
<title>Campus supervisor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    @import url("../assets/css/dashboard.css");
</style>
</head>
<body>
<div class="tab">
  <?php
session_start();
  $name=$_SESSION['username'];
  include "link/link.php";
  $querySu="SELECT * FROM supervisors where email='$name'";
  $resultSu=mysqli_query($link,$querySu);
    while($rowSu=mysqli_fetch_array($resultSu)){
        $FullName=$rowSu['FullName'];
}

?>
  <button class="tablinks"><?php echo "<p>Welcome  $FullName</p> "; echo "<p>Email:$name</p> ";?> </button>
  <button class="tablinks" onclick="openTab(event, 'students_Assigned')" id="defaultOpen">Students to Assess</button>
  <button class="tablinks" onclick="openTab(event, 'Students_to_Attend')">Students to Attend</button>
  <button class="tablinks" onclick="openTab(event, 'forms')">Roles</button>
  <button class="tablinks" ><a style="text-decoration: none;" href="../index.php"><img src="../assets/svgs/sign-out-alt.svg" height="20px" width="20px" alt="Log Out"/>   Log Out</a></button>
</div>

<div id="students_Assigned" class="tabcontent">

  <p><?php
  include "campussupervisor/studentstoaccess.php";
  ?></p>
</div>

<div id="Reports" class="tabcontent">
  <h3>Reports</h3>
  <p>Daily reports.</p> 
</div>

<div id="Students_to_Attend" class="tabcontent">

  <p>
  <?php
  include "campussupervisor/studentstoattend.php";
  ?>
  </p> 
</div>

<div id="forms" class="tabcontent">

  <p><?php 
  include "campussupervisor/addonsitesupervisor.php";
  include "campussupervisor/sitesupervisorallocation.php"; 
  include "campussupervisor/attendform.php"
  ?></p> 
</div>

<div id="terms" class="tabcontent">
  <h3>Terms</h3>
  <p>Terms.</p>
</div>

<script src="../assets/js/dashboard.js"></script>
</body>

</html> 
