<?php 
$conn = mysqli_connect("localhost","root","","students");
$delete_record = $_GET['del'];
$query = "delete from u_reg where id='$delete_record'";
if($conn->query($query)){
	echo "<script>window.open('view.php?deleted=Record Has  been Deleted Successfully!','_self')</script>";
}

 ?>