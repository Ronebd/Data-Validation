<html>
	<head>
		<title>Students Registration Form</title>
	</head>
	<body>
		<form method="post" action="studentRegistration.php">
			<table width="500" border="3" align="center">
				<tr>
					<th bgcolor="yellow" colspan="5"><h1>Students Registration Form<h1></th>
				</tr>
				<tr>
					<td align="right">Student's Name:</td>
					<td><input type="text" name="user_name" placeholder="Name">
					<font color="red"><?php echo @$_GET["name"]; ?></font>
					</td>
				</tr>

				<tr>
					<td align="right">Roll No:</td>
					<td><input type="number" name="roll_num" placeholder="Roll No.">
					<font color="red"><?php echo @$_GET["roll"]; ?></font>
					</td>
				</tr>

				<tr>
					<td align="right">Father's Name:</td>
					<td><input type="text" name="father_name" placeholder="Father Name">
					<font color="red"><?php echo @$_GET["fname"]; ?></font>
					</td>
				</tr>

				<tr>
					<td align="right">Date Of Birth:</td>
					<td><input type="date" name="birthdate" placeholder="Date Of Birth">
					<font color="red"><?php echo @$_GET["birthdate"]; ?></font>
					</td>
				</tr>

				<tr>
					<td align="right">Address:</td>
					<td><input type="text" name="address" placeholder="Address">
					<font color="red"><?php echo @$_GET["address"]; ?></font>
					</td>
				</tr>

				<tr>
					<td align="right">E-mail:</td>
					<td><input type="email" name="email" placeholder="e-mail">
					<font color="red"><?php echo @$_GET["email"]; ?></font>
					</td>
				</tr>

				<tr>
					<td align="right">Phone No:</td>
					<td><input type="tel" name="phone_num" placeholder="Phone No.">
					<font color="red"><?php echo @$_GET["phone"]; ?></font>
					</td>
				</tr>

				<tr>
					<td align="center" colspan="5">
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php 
$conn = mysqli_connect("localhost" , "root" , "" , "students" );
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

elseif (isset($_POST["submit"])) {
 $student_name = $_POST['user_name']; 
 $student_roll = $_POST['roll_num']; 
 $student_father = $_POST['father_name']; 
 $student_birthdate = $_POST['birthdate']; 
 $student_address = $_POST['address']; 
 $student_email = $_POST['email']; 
 $student_phone = $_POST['phone_num'];

if ($student_name== '') {
	echo "<<script>window.open('studentRegistration.php?name=Enter Name', '_self')</script>";
	exit();	
 }
 if ($student_roll== '') {
	echo "<<script>window.open('studentRegistration.php?roll=Enter Roll No.', '_self')</script>";
	exit();	
 } 
 if ($student_father== '') {
	echo "<<script>window.open('studentRegistration.php?fname=Enter Father Name', '_self')</script>";
	exit();	
 }
 if ($student_birthdate== '') {
	echo "<<script>window.open('studentRegistration.php?birthdate=Enter Birth Date', '_self')</script>";
	exit();	
 }
 if ($student_address== '') {
	echo "<<script>window.open('studentRegistration.php?address=Enter Address', '_self')</script>";
	exit();	
 }
 if ($student_email== '') {
	echo "<<script>window.open('studentRegistration.php?email=Enter E-mail', '_self')</script>";
	exit();	
 }
 if ($student_phone== '') {
	echo "<<script>window.open('studentRegistration.php?phone=Enter Phone No.', '_self')</script>";
	exit();	
 }

 $que = "insert into u_reg(u_name, u_roll, u_father, u_dob, u_address, u_mail, u_phone) values('$student_name','$student_roll','$student_father','$student_birthdate','$student_address','$student_email','$student_phone')";
 if($conn->query($que)){
 	echo "Data has been inserted";
 }

}
 
?>