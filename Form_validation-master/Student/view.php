<?php 
session_start();
session_destroy();
if(!$_SESSION["admin_name"]){
	header("location:admin_login.php?error=You are not an Administrator...");
}

?>
<html>
	<head>
		<title>Viewing the Records</title>
	</head>
	<body>
	<a href="studentRegistration.php">Insert New Record</a>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="logout.php">Logout</a>
	<center><font color="red" size="6">
	<?php echo @$_GET['deleted']; ?>
	<?php echo @$_GET['updated'];?>
	<?php echo @$_GET['logged']; ?>
	</font></center>
		<table align="center" width="1000" border="4">
			<tr>
				<th align="center" bgcolor="yellow" colspan="10"><h1>Viewing all the records<h1></th>
			</tr>
			<tr align="center">
				<th>Serial Number</th>
				<th>Student's Name</th>
				<th>Roll No.</th>
				<th>Father's Name</th>
				<th>Delete</th>
				<th>Edit</th>
				<th>Details</th>
			</tr>

			<?php 
			$conn = mysqli_connect("localhost","root","","students");
			$que = "select * from u_reg";
			$run = $conn->query($que);
			$i=1;
			while ($row = mysqli_fetch_array($run)) {
				$id = $row[0];
				$u_name = $row[1];
				$u_roll = $row[2]; 
				$u_father = $row[3];
				$u_dob = $row[4];
				$u_address = $row[5];
				$u_mail = $row[6];
				$u_phone = $row[7];
			 ?>

			<tr align="center">

				<td><?php echo $i;$i++; ?></td>
				<td><?php echo $u_name; ?></td>
				<td><?php echo $u_roll; ?></td>
				<td><?php echo $u_father; ?></td>
				<td><a href="delete.php?del=<?php echo $id;?>">Delete</a></td>
				<td><a href="edit.php?edit=<?php echo $id;?>">Edit</a></td>
				<td><a href="view.php?details=<?php echo $id;?>">Details</a></td>
			</tr>
			<?php } ?>
		</table>
		 
		 <?php
			$record_details = @$_GET["details"];
			$query = "select * from u_reg where id='$record_details'";
			$run1 = mysqli_query($conn,$query);
			while ($row1=mysqli_fetch_array($run1)) {
				$name = $row1[1];
				$roll = $row1[2];
				$father = $row1[3];
				$dob = $row1[4];
				$address = $row1[5];
				$mail = $row1[6];
				$phone = $row1[7];

		 ?>
		 <br><br>
		 <table align="center" border="4" bgcolor="gray" width="800">
		 	
		 	<tr>
		 		<td bgcolor="orange" colspan="8">
		 			<h2 align="center">Your Details</h2>
		 		</td>
		 	</tr>

		 	<tr align="center" bgcolor="yellow">
		 		<td><?php echo "Name"; ?></td>
		 		<td><?php echo "Roll"; ?></td>
		 		<td><?php echo "Father's Name"; ?></td>
		 		<td><?php echo "Date of Birth"; ?></td>
		 		<td><?php echo "Address"; ?></td>
		 		<td><?php echo "E-mail"; ?></td>
		 		<td><?php echo "Phone No."; ?></td>

		 	</tr>

			 <tr align="center" bgcolor="white">
			 	<td><?php echo $name; ?></td>
			 	<td><?php echo $roll; ?></td>
			 	<td><?php echo $father; ?></td>
			 	<td><?php echo $dob; ?></td>
			 	<td><?php echo $address; ?></td>
			 	<td><?php echo $mail; ?></td>
			 	<td><?php echo $phone; ?></td>
			 </tr>

			 <?php } ?>

		 </table>

	</body>
</html>