<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/preview.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<?php
  session_start();
  $email=$_SESSION['username'];
  include "link/link.php";
  $query="SELECT * FROM appointed where email='$email'";
  $result=mysqli_query($link,$query);
  
  echo "<table id=\"t01\" border='' align='center'>";

echo "<tr>
        <th>Reg No</th>
    </tr>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['RegNo']."</td>";
        echo "<td><a style=\"decoration:none\" href='campussupervisor/previewstudents.php?id=".$row['RegNo']."'>Preview</a></td>";
        echo "</tr>";
    }
    echo"</table>";
?>
</body>
</html>