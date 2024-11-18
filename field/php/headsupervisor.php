<!DOCTYPE html>
<html>
<head>
<title>Head supervisor Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    @import url("../assets/css/dashboard.css");
</style>
</head>
<body>
  <?php
  session_start();
  $name=$_SESSION['username'];
  ?>
<div class="tab">
<button class="tablinks"><?php echo "Welcome $name";?> </button>
  <button class="tablinks" onclick="openTab(event, 'students_and_supervisors')" id="defaultOpen">Students and supervisors</button>
  <button class="tablinks" onclick="openTab(event, 'forms')">Supervisor Management</button>
  <button class="tablinks" onclick="openTab(event, 'Students_Management')">Students Management</button>
  <button class="tablinks" ><a style="text-decoration: none;" href="../index.php"><img src="../assets/svgs/sign-out-alt.svg" height="20px" width="20px" alt="Log Out"/>   Log Out</a></button>
</div>

<div id="students_and_supervisors" class="tabcontent">
  <p><?php 
  include "headsupervisor/allnames.php"; 
  ?></p>
</div>

<div id="Students_Management" class="tabcontent">
  <p><?php 
  include "headsupervisor/add_students.php"; 
  ?></p> 
</div>


<div id="forms" class="tabcontent">
  <p><?php 
  include "headsupervisor/headsupervisorform.php"; 
  include "headsupervisor/appoint.php";
  include "headsupervisor/attendapoint.php";
  ?></p> 
</div>


<script src="../assets/js/dashboard.js"></script>
</body>

</html> 
