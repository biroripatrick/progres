<?php
$severname = 'localhost';
$username = 'root';
$password = '';
$db = 'ideas box';
$conn = mysqli_connect ($severname,$username,$password,$db);
if (!$conn){
	die("connection failed".mysqli_connect_error());
}
echo "";
$id = $_GET['id'];
 $deleteQuery ='DELETE FROM module where id='.$id.'';
 if(mysqli_query($conn,$deleteQuery)){
 	echo'<script>alert("are sure to delete this record?")</script>';
 	header('LOCATION: insert.php');
 }else {
 	echo 'Error:'.mysqli_error($conn);

 }
 ?>