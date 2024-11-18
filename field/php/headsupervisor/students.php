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
  $query="SELECT * FROM students";
  $result=mysqli_query($link,$query);
  
  echo "<table id=\"t01\" border='' align='center'>";

echo "<tr>
        <th>Full Name</th>
        <th>Reg No</th>
        <th>Field Location</th>
        <th>Organization</th>
        <th>Level</th>
    </tr>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>".$row['FullName']."</td>";
        echo "<td>".$row['RegNo']."</td>";
        echo "<td>".$row['FieldLocation']."</td>";
        echo "<td>".$row['Organization']."</td>";
        echo "<td>".$row['Level']."</td>";
        echo "</tr>";
    }
    echo"</table>";
?>
</body>
</html>