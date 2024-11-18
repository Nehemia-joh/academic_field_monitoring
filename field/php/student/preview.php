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
  $RegNo=$_SESSION['username'];
  include "link/link.php";
  $query="SELECT * FROM Activity WHERE RegNo='$RegNo' ORDER BY date DESC";
  $result=mysqli_query($link,$query);
  
  echo "<table id=\"t01\" border='' align='center'>";

echo "<tr>
        <th>Submission Date</th>
        <th>Activity</th>
    </tr>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['date']."</td>";
        echo "<td>".$row['Activity']."</td>";
        echo "</tr>";
    }
    echo"</table>";
?>
</body>
</html>