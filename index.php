<?php
session_start();
include("db.php");
$flog=$_SESSION['loginFlog'];
$name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="tw">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Books System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet" type="text/css">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Booksystem</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact"></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
</nav>
  </head>
  <body>
    
    <div class="container" >
      <div class="jumbotron">
        <?php
        echo "".$name." 歡迎回來!!";
        echo "<a href='logout.php'><button type='button' class='btn btn-info btn-lg'>登出</button></a>";
        ?>
      </div>
     
      <h3 class="text-muted"><b>圖書系統</b></h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">首頁</a></li>
            
          </ul>
        </nav>
      <br>
      <div class="row">
        <div class="col-md-2">
          <div class="input-prepend">
            <form action="search.php" name="search" method="POST">
              <span class="add-on">搜尋清單:</span>
              <select name ="list";>
                <?php
                $query = "SELECT * FROM book" ;
                $result = mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($result))
                {
                $n = $row['no'];
                echo "<option value=".$n.">";
                echo $row['bookname'];
                echo "</option>";
                }
                ?>
              </select>

              <button class="btn-primary" type="submit">查詢</button>
            </form>
          </div>
        </div>
          
        <div class="col-md-10">
            
            <?php
            $query = "SELECT * FROM book" or die("Error in the consult.." . mysqli_error($link));
            $result = mysqli_query($conn, $query);
            
            while($row = mysqli_fetch_array($result)) {
            echo "<div class='col-md-3'>";
              echo "<table class='table table-bordered'>";
                echo "<tr>";
                  echo "<img src=".$row["img"]."  class='img-thumbnail'>";
                  echo "<h6 class='text-center'>".$row["bookname"]."</h6>";
                echo "</tr>";
              echo "</table>";
            echo "</div>";
            }
            ?>
            
          </div>
        </div>
        
        
        <!-- Site footer -->
        <footer class="footer">
          <p class='text-center'>&copy; Company 2014</p>
          <p class='text-center'>software development 第二組</p>
        </footer>
        </div> <!-- /container -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="ie10-viewport-bug-workaround.js"></script>
      </body>
    </html>