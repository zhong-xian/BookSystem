<?php
	session_start();
	include("db.php");

	$_SESSION['loginFlog'] = false;

	$usr=$_POST['usr'];
	$pws=$_POST['pwd'];


	$query = "SELECT * FROM user WHERE account='".$usr."' and password ='".$pws."'";
	 //or die("Error in the consult.." . mysqli_error($link)); 

	 // echo $query."<br>";

	$result = mysqli_query($conn, $query); //回傳true 跟flase

	if ($result) {

		if (mysqli_num_rows($result)>0) {
			

			$row = mysqli_fetch_array($result);
			$_SESSION['loginFlog'] = true;
			$_SESSION['name'] = $row["name"];


			echo "登入成功!!1秒進入";
			header("Refresh: 1; url=index.php");

		}else{
			echo "登入失敗!!";
			header('Location: login.html');
		}
	}else{
		echo "語法錯誤!!";
		header('Location: login.html');
	}
	
	

?>