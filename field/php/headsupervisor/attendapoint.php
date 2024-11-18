<head>
    <style>
        @import url('../css/logistic.css');
        @import url('../css/bootstrap.css');
    </style>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<?php

include 'link/link.php';
$query3="select * from supervisors";
$result3=mysqli_query($link,$query3);


$query2="select * from attend";
$result2=mysqli_query($link,$query2);



?>
<!-- Attending in locations -->
            <div class="waper">
  <div class="head">Visitation Appoint</div>
            <form action="" method="post">
                 <div class="form-group">
                    <label> Students</label>
                    <select class="form-control"  name="RegNo1">
                    <?php
                    while($row2=mysqli_fetch_array($result2) ){
                        $value=$row2['value'];
                        if($value=='Not Attended'){
                            echo "<option  value=".$row2['RegNo'].">".$row2['RegNo'].".". $row2['FieldLocation']."</option>";
                        }
                    }
                    ?>
                    </select>
                    <div class="form-group">
                    <label> Supervisor</label>
                    <select class="form-control"  name="email1">
                    <?php
                    while($row3=mysqli_fetch_array($result3) ){
                        
                            echo "<option  value=".$row3['email'].">".$row3['FullName']."</option>";
                        
                    }
                    ?>
                    </select>
                <input type="submit" class="btn btn-primary w-100" value="Save" name="submit4">
            </form>
            </div>
            <?php
          if(isset($_POST['submit4'])){
                include '../link/link.php';
                $RegNo =$_POST['RegNo1'];        
                $email = $_POST['email1'];        
    
                    $query6="UPDATE attend SET email='$email' WHERE RegNo='$RegNo'";
                    $result6=mysqli_query($link,$query6);
                    if($result){
                        // echo "<font color=green> DATA SAVED";
                        echo "Saved";
                    } 
                }    
    ?>