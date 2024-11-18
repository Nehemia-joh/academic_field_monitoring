<head>
    <style>
        @import url('../css/bootstrap.css');
    </style>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<?php

include 'link/link.php';
$query="select * from appointed";
$result=mysqli_query($link,$query);


$query1="select * from supervisors";
$result1=mysqli_query($link,$query1);

?>


<div class="waper">
  <div class="head">Campas supervisor Appoint</div>
<form action="" method="post">
                 <div class="form-group">
                    <label> Students</label>
                    <select class="form-control"  name="RegNo">
                    <?php
                    
                    while($row=mysqli_fetch_array($result) ){
                        $value=$row['value'];
                        if($value==0){
                            echo "<option  value=".$row['RegNo'].">".$row['RegNo']."</option>";
                        }
                    }
                    ?>
                    </select>
                    <div class="form-group">
                    <label> Supervisor</label>
                    <select class="form-control"  name="email">
                    <?php
                    
                    while($row1=mysqli_fetch_array($result1) ){
                        
                            echo "<option  value=".$row1['email'].">".$row1['FullName']."</option>";
                        
                    }
                    ?>
                    </select>
                <input type="submit" class="btn btn-primary w-100" value="Save" name="submit3">
            </form>
            </div>

            
            <?php
        if(isset($_POST['submit3'])){
            include '../link/link.php';
            $RegNo =$_POST['RegNo'];        
            $email = $_POST['email'];        

                $query5="UPDATE appointed SET email='$email',value='1' WHERE RegNo='$RegNo'";
                $result5=mysqli_query($link,$query5);
                if($result){
                    // echo "<font color=green> DATA SAVED";
                    echo "Saved";
                } 
            }    
    ?>