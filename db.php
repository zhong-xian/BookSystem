<?php
	 $dbServer ="127.0.0.1";
	 $dbUser = "root";
	 $dbPassword = "m940507";
	 $dpname="booksystem";
	 $conn = mysqli_connect($dbServer,$dbUser,$dbPassword,$dpname) or die("Error " . mysqli_error($link)); 
	 mysqli_set_charset($conn,"utf8"); //---編碼問題----   重要!
?>