<?php


//capture the id variable from select.php

//super global array

//sql query for deleteing a row
// $query="DELETE from users WHERE user_id = '$id'";
// $result=mysqli_query($link,$query);
// if($result){
//     header("location:admin.php");
// }
?>
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
  $query2="SELECT * FROM Activity WHERE RegNo='$id' ORDER BY date DESC ";
  $result2=mysqli_query($link,$query2);
  
  echo "<table id=\"t01\" border='' align='center'>";

echo "<tr>
        <th>Submission Date</th>
        <th>Activity</th>
    </tr>";
    while($row2=mysqli_fetch_array($result2)){
        echo "<tr>";
        echo "<td>".$row2['date']."</td>";
        echo "<td>".$row2['Activity']."</td>";
        echo "</tr>";
    }
    echo"</table>";
?>
 <div class="waper">
  <div class="head">Comment</div>
  
  <form method="post" action="">
    <div class="foc">
    <textarea name="Comment" class="form-control" placeholder="Comments"></textarea>
      </div>
      
      <div class="foc" >
                <input type="submit" name="submit1" class="btn btn-block" value="Save the Activity">
            </div>
  </form>
  
</div>
<?php
if(isset($_POST['submit1'])){ 
    $Comment =$_POST['Comment']; 
    $date=date("Y-m-d");

    $query = "INSERT INTO onsitesupervisorsComments (RegNo,email,Comment,date) VALUES ('$id','$email','$Comment','$date')";
        $result = mysqli_query($link,$query);
        if($result){
            echo "Comment Added";
            header("location:../onsitesupervisor.php");
        }
}
?>

</body>
</html>

