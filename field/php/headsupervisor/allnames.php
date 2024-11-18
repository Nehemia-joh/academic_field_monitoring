<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/tabdivision.css">
<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('supervisors')"> supervisors</button>
  <button class="btn" onclick="filterSelection('students')"> students</button>
  <button class="btn" onclick="filterSelection('appoint')"> Appoint</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column supervisors">
    <div class="content">
      <?php include "supervisors.php"; ?>
    </div>
  </div>
  
  <div class="column students">
    <div class="content">
    <?php include "students.php"; ?>
    </div>
  </div>

  <div class="column appoint">
    <div class="content">
    <?php 
    include "appointed.php"; 
    ?>
    </div>
  </div>
 
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
<script src="../assets/js/tabdivision.js"></script>
</body>
</html>
