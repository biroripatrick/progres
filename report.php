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
	<div id="records" style="padding-top:239px;"> 
	<center>   
<table border="3" style="background-color:#d4d5e8;border-radius:8px;">  
<tr>
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">No</th> 
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;;">NAMES</th>  
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">IDENTITY</th>
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">QUALIRTIER</th> 
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">AGE</th>
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">SEX</th>  
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">UPDATE</th>
<th style="background-color: #900;color: #fff;padding:0px 30px;height: 39px;">DELETE</th>      
</tr>  
<?php  
$conn=mysqli_connect("localhost","root","", "ideas box");
$query="SELECT * FROM module";  
$result=mysqli_query($conn,$query);  
$contacts= mysqli_fetch_all($result,MYSQLI_ASSOC);
($contacts);    
?>
<tr>  
<?php foreach($contacts as $contact) :?>
<tr>
<td><?php echo $contact['id']?></td>  
<td><?php echo $contact['names']?></td>
<td><?php echo $contact['Identity']?></td>
<td><?php echo $contact['Qualirtier']?></td>
<td><?php echo $contact['age']?></td>
<td><?php echo $contact['sex']?></td>
<td><a href="update.php?id=<?php echo $contact['id'] ?>"style="font-size: 33px;font-style:italic;text-decoration: none;">update</a></td>  
<td><a href="delete.php?id=<?php echo $contact['id'] ;?>"style="font-size: 33px;font-style:italic;text-decoration: none;">Delete</a></td>
</tr> 
<?php endforeach;?>  
</table>  
</div>  
</div>     
</div>
</center>
</div>
</body>
</html>
</div>
</body>
</html>