<?php
$conn = mysqli_connect("localhost","root","","students");
$edit_record = $_GET["edit"];
$query = "select * from u_reg where id=".$edit_record."";
//echo $query;
$run = $conn->query($query);

while($row = mysqli_fetch_array($run)){
$u_id = $row[0];
$u_name = $row[1];
$u_roll = $row[2];
$u_father = $row[3];
$u_dob = $row[4];
$u_address = $row[5];
$u_mail = $row[6];
$u_phone = $row[7];}

?>

//<?php 
//$conn = mysqli_connect("localhost","root","","students");
//$edit_record = $_GET["edit"];
//$query = "select * from u_reg where id='$edit_record'";
//$edit_record = $_GET["edit"];
//$query = "select * from u_reg where id=".$edit_record."";
//$run = mysqli_query($conn,$query);

//while($row = mysqli_fetch_array($run)){
//				$u_id = $row[0];
//				$u_name = $row[1];
//				$u_roll = $row[2]; 
//				$u_father = $row[3];
//				$u_dob = $row[4];
//				$u_address = $row[5];
//				$u_mail = $row[6];
//				$u_phone = $row[7];}

//?>



<html>
	<head>
		<title>Updating Student's Record</title>
	</head>
	<body>
		<form method="post" action="edit.php?edit_form=<?php echo $u_id; ?>">
			<table width="500" border="3" align="center">
				<tr>
					<th bgcolor="yellow" colspan="5"><h1>Updating Student's Registration Form<h1></th>
				</tr>
				<tr>
					<td align="right">Student's Name:</td>
					<td>
					<input type="text" name="user_name1" placeholder="Name" value="<?php echo $u_name; ?>">  
					</td>
				</tr>

				<tr>
					<td align="right">Roll No:</td>
					<td>
					<input type="number" name="roll_num1" placeholder="Roll No." value="<?php echo $u_roll; ?>">
					</td>
				</tr>

				<tr>
					<td align="right">Father's Name:</td>
					<td>
					<input type="text" name="father_name1" placeholder="Father Name" value="<?php echo $u_father; ?>">
					</td>
				</tr>

				<tr>
					<td align="right">Date Of Birth:</td>
					<td>
					<input type="date" name="birthdate1" placeholder="Date Of Birth" value="<?php echo $u_dob; ?>">
					</td>
				</tr>

				<tr>
					<td align="right">Address:</td>
					<td>
					<input type="text" name="address1" placeholder="Address" value="<?php echo $u_address; ?>">
					</td>
				</tr>

				<tr>
					<td align="right">E-mail:</td>
					<td>
					<input type="email" name="email1" placeholder="e-mail" value="<?php echo $u_mail; ?>">
					</td>
				</tr>

				<tr>
					<td align="right">Phone No:</td>
					<td>
					<input type="tel" name="phone_num1" placeholder="Phone No." value="<?php echo $u_phone; ?>">
					</td>
				</tr>

				<tr>
					<td align="center" colspan="5">
						<input type="submit" name="update" value="Update">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php
if(isset($_POST['update'])){
	$edit_record1 =$_GET['edit_form'];
	$name = $_POST['user_name1'];
	$roll =  $_POST['roll_num1'];
	$father = $_POST['father_name1'];
	$dob = $_POST['birthdate1'];
	$address = $_POST['address1'];
	$mail = $_POST['email1'];
	$phone = $_POST['phone_num1'];

	$query1 = "update u_reg set u_name='$name', u_roll='$roll', u_father='$father',u_dob='$dob', u_address='$address', u_mail='$mail', u_phone='$phone' where id=$edit_record1";

	/*if($conn->query($query1)){
		echo "<script>window.open('view.php?updated=Record Has  been Updated Successfully!','_self')</script>";
	}*/

	if (mysqli_query($conn, $query1)) {
		echo "<script>window.open('view.php?updated=Record Has  been Updated Successfully!','_self')</script>";
	}
}

?>	