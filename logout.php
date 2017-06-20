<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGOUT</title>
</head>
<?php 

session_start();
//unset($_SESSION["s_id"]);
//unset($_SESSION["tpo_id"]);
//unset($_SESSION["c_id"]);
$_SESSION['tpo_id'] = 0;
$_SESSION['c_id'] = 0;
$_SESSION['s_id'] = 0; 
$_SESSION['cart_products']=0; 

echo "<script type='text/javascript'>";
       echo 'window.location= "index.php";';
	   echo "</script>";



?>
<body>
</body>
</html>