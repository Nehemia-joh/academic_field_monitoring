<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/css/preview.css">
<link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
<?php
$id=$_GET['id'];
  session_start();
  $link = mysqli_connect("127.0.0.1","root","chance00","field");
  $email=$_SESSION['username'];
  $query2="SELECT * FROM supervisors WHERE email='$id'";
//   
  $result2=mysqli_query($link,$query2);
  
  echo "<table id=\"t01\" border='' align='center'>";

echo "<tr>
        <th>Full Name</th>
        <th>Phone Number</th>
        <th>Email</th>
    </tr>";
    while($row2=mysqli_fetch_array($result2)){
        echo "<tr>";
        echo "<td>".$row2['FullName']."</td>";
        echo "<td>".$row2['PhoneNumber']."</td>";
        echo "<td>".$row2['email']."</td>";
        echo "</tr>";
    }
    echo"</table>";
    ?>

    </body>
</html>