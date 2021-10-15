<?php
include('conecte.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Easy shop.com</title>
</head>
<body style=" background-color: #2e33c788;">
	<div class="head">
<center>  
<div id="records"style="padding-top:290px;">  
 <table border="3" style="background-color: #e2e2e2;border-radius:8px;">  
    <tr>
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">No</th> 
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;;">NAMES</th>  
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">IDENTITY</th>
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">QUALIRTIER</th> 
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">AGE</th>
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">SEX</th>       
    </tr>    
<?php  
if(isset($_GET['search'])){  
$search_name=$_GET['search'];
$conn=mysqli_connect("localhost","root","", "ideas box");  
$query="SELECT * FROM  module WHERE names  like '"."%$search_name%"."'";
$result=mysqli_query($conn,$query);  
while ($row=mysqli_fetch_assoc($result)) {  
$id=$row['id'];  
$names=$row['names'];  
$Identity=$row['Identity'];  
$Qualirtier=$row['Qualirtier']; 
$age=$row['age'];  
$sex=$row['sex'];  
?>  
<tr>  
    <td><?php echo $id?></td>	
    <td><?php echo $names?></td>
    <td><?php echo $Identity?></td>
    <td><?php echo $Qualirtier?></td>
    <td><?php echo $age?></td>
    <td><?php echo $sex?></td>  
 <?php  }}?>  
 </tr>    
</table> 
<tr><td colspan="4"><a href="index.php">index</a></td></tr> 
</div>
</center>
</div>
</div>
</body>
</html>