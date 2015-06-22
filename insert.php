<?php
$servername = "127.0.0.1";
$username = "root";
$password = "m940507";
$dbname = "booksystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//==================================================================================
?>
<!DOCTYPE html>
<html>
<head>
<title>Detail</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<!-- ============================================================================ -->
<body>
<?php

$sql = "INSERT INTO user(name, account, password) 
		VALUES ('".$_POST["name"]."', '".$_POST["usr"]."', '".$_POST["pwd"]."')";
if ($conn->query($sql) === TRUE) {
	echo '<div class="alert alert-success" role="alert">註冊成功！1秒後回首頁</div>';
	header("Refresh: 1; url=login.html");
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	echo '<a href="login.html" class="btn btn-info">回首頁</a>';
}

$conn->close();
?>
</body>
</html>