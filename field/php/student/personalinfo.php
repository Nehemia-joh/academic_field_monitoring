<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<?php
  session_start();
  $RegNo=$_SESSION['username'];
  include "link/link.php";
  $query="SELECT * FROM students WHERE RegNo='$RegNo'";
  $result=mysqli_query($link,$query);
  ?>
  <!-- Daily Activities -->
  <div class="waper">
  <?php
  while($row=mysqli_fetch_array($result)){
    echo"<div class=\"foc\">";
    echo"<p class=\"subhead\">User Details</p>";
     echo"</div>";
     echo "<hr>";
    echo"<div class=\"foc\">";
    echo"<p class=\"subhead\">Full Name:".$row['FullName']."</p>";
     echo"</div>";
    echo"<div class=\"foc\">";
    echo"<p class=\"subhead\">Reg Number:".$row['RegNo']."</p>";
     echo"</div>";
    echo"<div class=\"foc\">";
    echo"<p class=\"subhead\">Field Location:".$row['FieldLocation']."</p>";
     echo"</div>";
    echo"<div class=\"foc\">";
    echo"<p class=\"subhead\">Organization:".$row['Organization']."</p>";
     echo"</div>";

  }
  $query3="SELECT * FROM appointed WHERE RegNo='$RegNo'";
  $result3=mysqli_query($link,$query3);
  ?>
  <!-- Daily Activities -->
  
  <?php
  while($row3=mysqli_fetch_array($result3)){
    echo "<hr>";
    echo"<div style=\"background-color: #d4af35; border-radius: 10px;\" class=\"infobtn\">";
    echo "<td><a style=\"text-decoration: none\"; href='student/supervisorinfo.php?id=".$row3['email']."'>Click for Supervisor Info</a></td>";
      echo"</div>";
  }
?> 
</div>
</body>
</html>