<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Attend Form</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
<div class="waper">
  <div class="head">Attend Form </div>
  
  <form method="post" action="">
    <div class="foc">
        <label>Reg No</label>
      <input type="text" class="form-control" name="RegNo" placeholder="Username">
      </div>
      <div class="foc">
      <label>Activity Summary</label>
      <select name="ActivitySummary" class="form-control">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
      </div>
      <div class="foc">
      <label>challenges you have faced And what Solutions did you came up with?</label>
      <select name="challengesAndSolution" class="form-control">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
      </div>
      <div class="foc">
      <label>what new Knowledge have you Gained?</label>
      <select name="KnowledgeGain" class="form-control">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
      </div>
      <div class="foc">
      <label>What is the Relationship between Classroom theory And practical Field training?</label>
      <select name="RelationshipClassAndField" class="form-control">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
      </div>
      <div class="foc">
      <label>what are your Learning Objectives?</label>
      <select name="LearningObjectives" class="form-control">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select>
      </div>
      <div class="foc" >
                <input type="submit" name="submit15" class="btn btn-block" value="Save">
            </div>
  </form>
  
</div>
</body>
</html>

<?php
if(isset($_POST['submit15'])){
    include "link/link.php"; //connect to database
    $RegNo =$_POST['RegNo'];
    $ActivitySummary =$_POST['ActivitySummary']; //sanitize user input
    $challengesAndSolution =$_POST['challengesAndSolution'];
    $KnowledgeGain = $_POST['KnowledgeGain'];
    $RelationshipClassAndField=$_POST['RelationshipClassAndField'];
    $LearningObjectives=$_POST['LearningObjectives'];

        $query = "INSERT INTO fieldQuestions (RegNo,ActivitySummary,challengesAndSolution,KnowledgeGain,RelationshipClassAndField,LearningObjectives) VALUES ('$RegNo','$ActivitySummary','$challengesAndSolution','$KnowledgeGain','$RelationshipClassAndField','$LearningObjectives')";
        $query1="UPDATE attend SET value='Attended' WHERE RegNo = '$RegNo'";
        $result = mysqli_query($link,$query);
        $result2 = mysqli_query($link,$query1);
        if($result){
            echo "Saved";
        }
}

?>
