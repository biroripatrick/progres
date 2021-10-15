<?php 
include('conecte.php');

          if(isset($_POST['save'])){
           $names=$_POST['names'];  
           $Identity=$_POST['Identity'];  
           $age=$_POST['age'];
           $Qualirtier=$_POST['Qualirtier'];  
           $sex=$_POST['sex'];


$query1="SELECT count(*) as count from module where Identity='"."$Identity"."'";
$result=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($result);
echo $row['count'];
if($row['count']>0){
  echo '<script>
  alert("User already exist in database!");
  location.href="insert.php";
  </script>';
}else {
  $sql="INSERT INTO module (names,Identity,age,Qualirtier,sex) VALUES ('$names','$Identity','$age','$Qualirtier','$sex')"; 
           if(mysqli_query($conn,$sql)){
               echo'<script>
                      alert("are sure to save this record");
                      location.href="insert.php";
                    </script>';  
          }
          else{
          	echo"error".$sql.mysqli_error($conn);
          } 
    }
}

 ?> 