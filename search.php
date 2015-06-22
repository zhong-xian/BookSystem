<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
        
	</head>
	<body>

				<div class="col-sm-3"></div>
				<div class="col-sm-9">
					
					<?php
								include("db.php");
								$s =$_POST['list'];
								// echo "$s";
								$query = "SELECT * FROM book WHERE no =$s";
								$result = mysqli_query($conn, $query);
											
											while($row = mysqli_fetch_array($result)) 
											{
												echo "<div class='col-md-4'>";
												echo "<div class='col-md-2'>";					
												echo "<img src=".$row["img"]."  class='img-thumbnail'>";
												echo "</div>";

												echo "<table class='table-bordered'>";

												echo "<tr>";
												echo "<td>書名:</td>";
												echo "<td>".$row['bookname']."</td>";
												echo "</tr>";

												// echo "<tr>";
												// echo "<td>.row[bookname].</td>";
												// echo "</tr>";

												echo "<tr>";
												echo "<td>作者:</td>";
												echo "<td>".$row['author']."</td>";
												echo "</tr>";

												echo "<tr>";
												echo "<td>編碼:</td>";
												echo "<td>".$row['isbn']."</td>";
												echo "</tr>";

												echo "<tr>";
												echo "<td>簡介:</td>";
												echo "<td><img src =".$row['summary']."></td>";
												echo "</tr>";
												
											

												// echo	"<form id="form1" name="form1" method="post" action="">";
												// echo	"<label><input type="submit" name="book" id="book" value="訂書" /></label>";

												// echo	"</form>";
        										
												echo   "</table>";
												echo   "</div>";
												
												echo "<a href='index.php'><button type='button' class='btn btn-info btn-lg'>回上頁</button></a>";
											}
					?>
				</div>

		</body>
</html>