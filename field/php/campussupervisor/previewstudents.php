<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/css/preview.css">
<link rel="stylesheet" href="../..assets/css/style.css">
</head>

<body>
<?php
$id=$_GET['id'];
  session_start();
  $link = mysqli_connect("127.0.0.1","root","chance00","field");
  $email=$_SESSION['username'];
  $query2="SELECT * FROM Activity WHERE RegNo='$id' ORDER BY date DESC";
//   
  $result2=mysqli_query($link,$query2);

  echo "<div class=\"head\">Daily Activities </div>";
  
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

    // OnSite SupervisorReview
    $query3="SELECT * FROM onsitesupervisorsComments WHERE RegNo='$id' ORDER BY date DESC";
      $result3=mysqli_query($link,$query3);
      echo "<div class=\"head\">OnSite Supervisor Review </div>";
      echo "<table id=\"t01\" border='' align='center'>";
    
    echo "<tr>
            <th>Comments</th>
            <th>Date</th>
        </tr>";
        while($row3=mysqli_fetch_array($result3)){
            echo "<tr>";
            echo "<td>".$row3['Comment']."</td>";
            echo "<td>".$row3['date']."</td>";
            echo "</tr>";
        }
        echo"</table>";

        // VISIT SUPERVISOR REVIEW
        $query4="SELECT * FROM fieldQuestions WHERE RegNo='$id'";
        //   
          $result4=mysqli_query($link,$query4);
          echo "<div class=\"head\">Visit Supervisor Review </div>";
          echo "<table id=\"t01\" border='' align='center'>";
        
        echo "<tr>
                <th>Activity Summary</th>
                <th>challenges And Solution</th>
                <th>Knowledge Gain</th>
                <th>Relationship Class And Field</th>
                <th>Learning Objectives</th>
                <th>Total and Average</th>
            </tr>";
            while($row4=mysqli_fetch_array($result4)){
                echo "<tr>";
                echo "<td>".$row4['ActivitySummary']."</td>";
                echo "<td>".$row4['challengesAndSolution']."</td>";
                echo "<td>".$row4['KnowledgeGain']."</td>";
                echo "<td>".$row4['RelationshipClassAndField']."</td>";
                echo "<td>".$row4['LearningObjectives']."</td>";
                $total=$row4['ActivitySummary']+$row4['challengesAndSolution']+$row4['KnowledgeGain']+$row4['RelationshipClassAndField']+$row4['LearningObjectives'];
                $Average=$total/5;
                echo "<td>Total:".$total."  Average:".$Average."</td>";
                echo "</tr>";
            }
            echo"</table>";

                 // VISIT SUPERVISOR REVIEW
        
        ?>
        <!-- Add Final Score -->
        <div class="waper">
  <div class="head">Add Score </div>
  
  <form method="post" action="">
    <div class="foc">
      <input type="int" class="form-control" name="Score" placeholder="Add Final Score">
      </div>
      <div class="foc">
      <select name="Grade" class="form-control">
  <option value="A">A</option>
  <option value="B+">B+</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="Supp">Supp</option>
</select>
      </div>
      <div class="foc" >
                <input type="submit" name="submit" class="btn btn-block" value="Add Score">
            </div>
  </form>
  
</div>

<?php
if(isset($_POST['submit'])){
    include "link/link.php"; //connect to database
    $Score =$_POST['Score']; 
    $Grade =$_POST['Grade'];

        $query = "INSERT INTO FinalScore (Score,Grade,RegNo) VALUES ('$Score','$Grade','$id')";
        $result = mysqli_query($link,$query);
        if($result){
            echo "Saved";
        }
      }
?>

</body>
</html>