<?php 
session_start();
?>

<html>
	<head>
		<title>Admin Login</title>
	</head>
	<body>
		<form action="admin_login.php" method="post">
			<table width="400" border="2" align="center" bgcolor="orange">
			<tr>
				<td align="center" bgcolor="pink" colspan="6">
					<h2>Admin Panel Fprm</h2>
				</td>
			</tr>
			<tr>
				<td>Admin Name:</td>
				<td><input type="text" name="admin_name"></td>
			</tr>
			<tr>
				<td>Admin Password:</td>
				<td><input type="password" name="admin_pass"></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<input type="submit" name="login" value="login">
				</td>
			</tr>
				
			</table>
		</form>
			<center><?php echo @$_GET['error']; ?></center>
	</body>
</html>

<?php 
$con = mysqli_connect("localhost","root","","students");
if(isset($_POST['login'])){
	$admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
	$admin_pass = $_POST['admin_pass'];
	
	$query = "select * from login where user_name='$admin_name' AND user_password='$admin_pass'";

	$run = mysqli_query($con,$query);

	if (mysqli_num_rows($run)>0) {
		echo "<script>window.open('view.php?logged=Admin Logged in Successfully..','_self')</script>";
	}

	else{
	echo "<script>alert('Password or Username is incorrect')</script>";
	session_destroy(); 
	}
	
}

?>
