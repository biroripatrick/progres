<?php
include('conecte.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Easy shop.com</title>
<link rel="stylesheet" type="text/css" href="style.css">
<title>simple system</title>
</head>
<body>
<div class="head">
  <ul>
    <li><a href="index.php">home</li></a>
  </ul>
</div>
</head>
<body style=" background-color: #2e33c788;">
<center>
<div id="head" style="padding-top: 50px;">
<div id="container"style="background-color:#e3e3e3;border-radius: 67px; width: 900px;height: 1080px;padding-top:-9px;">
<div id="container">
	 <form action="insertaction.php" method="post" style="padding-top:1px;">  
                <p><label for="name">Please enter your names:</label></p>  
                <p><input type="text" name="names" required></p>  
                <p><label for="Identity">Please enter your Identity:</label></p>  
                <p><input type="text" name="Identity"required></p>  
                <p><label for="Qualirtier">Select your Qualirtier</label></p>  
                                   <p><select name="Qualirtier"required>
                                    <option required>Qualirtier1</option>
                                    <option required>Qualirtier2</option>
                                    <option required>Qualirtier3</option>
                                    <option required>Qualirtier4</option>
                                    <option required>Qualirtier5</option>
                                    <option required>Qualirtier6</option>
                                    <option required>Qualirtier7</option>
                                    <option required>Qualirtier8</option>
                                  </select>
                                </p>
                <p><label for="Date of birth">Please enter your age</label></p>  
                <p><input type="date" name="age"required></p>
                <p><label for="Gender">Select your Gender</label></p>  
                <p style="margin-right: 12px;"><input type="radio"name="sex"value="MALE"required>MALE</p>
                <p><input type="radio"name="sex"value="FEMALE"required>FEMALE</p>
                <p><input type="submit" name="save" value="Save" style="background-color:cyan;"></p>  
           </form> 

 <div id="search" style="padding-top:3px;">  
  <form action="search.php" method="GET" style="background-color: orange;height: 40px;padding-top:3px;">  
  <input type="text" name="search" placeholder=" search..." style="height: 25px;width:400px;margin-top: 5px;outline: none;"> 
  <input type="submit" value="search" style="background-color: #333;color:#fff;height: 32px;  width:100px;margin-top: 5px;"> 
           </form>
           </div>    
<div id="records" style="padding-top:9px;">  
<h2>REPORT</h2>  
<table border="3" style="background-color:#d4d5e8;border-radius:8px;">  
<tr>
<th style="background-color: #900;color: #fff;padding:0px 20px;height: 28px;">No</th> 
<th style="background-color: #900;color: #fff;padding:0px 20px;height: 28px;;">NAMES</th>  
<th style="background-color: #900;color: #fff;padding:0px 20px;height: 28px;">IDENTITY</th>
<th style="background-color: #900;color: #fff;padding:0px 20px;height: 28px;">QUALIRTIER</th> 
<th style="background-color: #900;color: #fff;padding:0px 20px;height: 28px;">AGE</th>
<th style="background-color: #900;color: #fff;padding:0px 20px;height: 28px;">SEX</th>  
<th style="background-color: #900;color: #fff;padding:0px 20px;height: 28px;">UPDATE</th>
<th style="background-color: #900;color: #fff;padding:0px 20px;height: 28px;">DELETE</th>      
</tr>  
<?php  

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