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
  $RegNo=$_SESSION['username'];
  $link = mysqli_connect("127.0.0.1","root","chance00","field");
  $email=$_SESSION['username'];
  $query2="SELECT * FROM FinalScore WHERE RegNo='$RegNo'";
//   
  $result2=mysqli_query($link,$query2);

  echo "<div class=\"head\">Result </div>";
  
  echo "<table id=\"t01\" border='' align='center'>";

echo "<tr>
        <th>Practical Field Results</th>
    </tr>";
    while($row2=mysqli_fetch_array($result2)){
        echo "<tr>";
        if($row2['Grade']!='supp'){
            echo "<td class=\"subhead\">".$row2['Grade']."</td>";
        }
        if($row2['Grade']=='supp'){
            echo "<td class=\"subheadred\">".$row2['Grade']."</td>";
        }
        echo "</tr>";
    }
    echo"</table>";