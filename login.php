<html>
<head>
</head>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contrive_systems";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if(!$conn)
	{
		echo("Database Connection Failed");
		exit();
	}
$name = $_POST['email'];
$pass = mysqli_real_escape_string($conn,$_POST['password']);
$passd=md5($pass);

$query = "SELECT  * FROM `register` WHERE Email = '$name' AND Password='$passd'";
$result = mysqli_query($conn,$query) or die("cannot execute query");
$rows = mysqli_num_rows($result);
if($rows==1)
{
	$row=mysqli_fetch_array($result);
	$_SESSION['c_id'] = $row['user_id'];
	header("location:index.php");
	echo "<script type='text/javascript'>";
	echo 'alert("Login Succesfully");';
    //echo 'window.location= "login.html";';
	echo "</script>";
}
else
{
	echo "<script type='text/javascript'>";
	echo 'alert("Login UnSuccesfull");';
       echo 'window.location= "login_page.php";';
	   echo "</script>";

}
mysqli_close($conn);

?>
<body>



</body>
</html>