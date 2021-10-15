<?php
include('conecte.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>update</title>
</head>
<body style=" background-color: #2e33c788;">
<center>
<div id="container">
	            <?php 
	            $conn=mysqli_connect("localhost","root","", "ideas box"); 
                $id=$_GET['id'];
                $findquery="SELECT * FROM module WHERE id='$id'";
                $findresult = mysqli_query($conn, $findquery);
                $contact = mysqli_fetch_assoc($findresult); 
                if (isset($_POST['update'])) {
                	$names=$_POST['names'];
                	$Identity=$_POST['Identity'];
                	$Qualirtier=$_POST['Qualirtier'];
                    $age=$_POST['age'];
                    $sex=$_POST['sex'];
                	$sql="UPDATE module SET names='$names',Identity='$Identity',Qualirtier='$Qualirtier',age='$age',sex='$sex' WHERE id='$id'";
                	if (mysqli_query($conn,$sql)) {
                		echo'<script>alert("are sure to update this record?")</script>';
                		header('location:index.php');
                	 } 
                	 else{
                	 	echo 'error update:'.mysqli_error($conn);
                	 }
                }
                ?>
         <form method="post" action="">
        <div id="container"style="background-color:#e3e3e3;border-radius: 67px; width: 999px;height: 989px;padding-top:-9px;">
                <p><label for="name">Please enter your names:</label></p>  
                <p><input type="text" name="names"value="<?php echo $contact['names']?>" required></p>  
                <p><label for="Identity">Please enter your Identity:</label></p>  
                <p><input type="text" name="Identity" value="<?php echo $contact['Identity']?>"required></p>  
                <p><label for="Qualirtier">Select your Qualirtier</label></p>  
                                   <p><select name="Qualirtier"value="<?php echo $contact['Qualirtier']?>" required>
                                    <option name="Qualirtier"value="<?php echo $contact['Qualirtier']?>">Qualirtier1</option>
                                    <option name="Qualirtier"value="<?php echo $contact['Qualirtier']?>">Qualirtier2</option>
                                    <option name="Qualirtier"value="<?php echo $contact['Qualirtier']?>">Qualirtier3</option>
                                    <option name="Qualirtier"value="<?php echo $contact['Qualirtier']?>">Qualirtier4</option>
                                    <option name="Qualirtier"value="<?php echo $contact['Qualirtier']?>">Qualirtier5</option>
                                    <option name="Qualirtier"value="<?php echo $contact['Qualirtier']?>">Qualirtier6</option>
                                    <option name="Qualirtier"value="<?php echo $contact['Qualirtier']?>">Qualirtier7</option>
                                    <option name="Qualirtier"value="<?php echo $contact['Qualirtier']?>">Qualirtier8</option>
                                  </select>
                                </p>
                <p><label for="Date of birth">Please enter your age</label></p>  
                <p><input type="Date" name="age" value="<?php echo $contact['age']?>" required></p>
                <p><label for="Gender">Select your Gender</label></p>  
                <p style="margin-right: 12px;"><input type="radio"name="sex"value="MALE" value="<?php echo $contact['sex']?>"required>MALE</p>
                <p><input type="radio"name="sex"value="FEMALE"value="<?php echo $contact['sex']?>" required>FEMALE</p>
                <p><input type="submit" name="update" value="update" style="background-color:cyan;"></p>  
           </form>
    <div id="records"style="padding-top:9px;">  
    <h2>REPORT</h2>  
    <table border="3" style="background-color: #e2e2e2;border-radius:8px;">  
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
    <td><a href="update.php?id=<?php echo $contact['id'] ?>"style="background-color:pink;font-size: 33px;font-style:italic;text-decoration: none;">update</a></td>  
    <td><a href="delete.php?id=<?php echo $contact['id'] ;?>"style="background-color:pink;font-size: 33px;font-style:italic;text-decoration: none;">Delete</a></td>
    </tr> 
    <?php endforeach;?>  
    </table>  
    </div>  
    </div>     
    </center>
    </form>
    </body>
    </html>