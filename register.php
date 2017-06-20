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
$fname = (isset($_POST['fname']) ? $_POST['fname'] : null);
$lname = (isset($_POST['lname']) ? $_POST['lname'] : null);
$email = (isset($_POST['email']) ? $_POST['email'] : null);
$pass = (isset($_POST['pass']) ? $_POST['pass'] : null); 
$passd=md5($pass);

$query = "INSERT INTO `register`(`First_Name`, `Last_Name`, `Email`, `Password`) VALUES ('$fname','$lname','$email','$passd')";
if(mysqli_query($conn,$query)){
	echo "<script type='text/javascript'>";
	echo 'alert("Record added Succesfully");';
    echo 'window.location= "login_page.php";';
	echo "</script>";
    //$to = "somebody@example.com";
    $subject = "Account Registered";
    $txt = "Dear " .$fname." " ."\r\n".
            "Congratulations!!!!Your Account is registered. "	."\r\n".
			"Yours truly,"."\r\n".
			"Team Contrive Systems"."\r\n".
			"https://www.contrivesystems.com"."\r\n".
			"Redefining Innovation";
    $headers = "From: contrivesystems@gmail.com";

mail($email,$subject,$txt,$headers);

}
else
	echo "<script type='text/javascript'>";
	echo 'alert("Error in Registration!!Try Again");';
       echo 'window.location= "register.html";';
	   echo "</script>";

mysqli_close($conn);

?>
<body>



</body>
</html>