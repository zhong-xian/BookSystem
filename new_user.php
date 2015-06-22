<?php
	session_start();
	include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Boos System Sign up</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
	<script language = "JavaScript">
  		function load1()
	  	{
	    	form.id.focus()
		    return
		}
		
		  function trim(string)
		  {
		    return string.replace(/^\s+|\s+$/g,"");
		  }
		
		  function submit1()
		  {
		    var temp1 = form.name.value
		    var temp2 = form.usr.value
			var temp3 = form.pwd.value
		    if (temp1==""||temp2==""||temp3=="") 
		    {
		       var Msg = "名稱請務必要輸入!"
			   window.alert(Msg)
		    }
			else{
		    form.submit()
		    return
			}
		  }
	</script>

    
</head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h1>Sigh up</h1>
          <form name="form" method="POST" action="insert.php">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="usr">New Account:</label>
              <input type="text" class="form-control" id="usr" name="usr">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="pwd">
            </div>
            <div class="form-group">
              <button class="btn btn-lg btn-success btn-block" type="button" onClick = "submit1()">註冊</button>

            </div>
          </form>
 		  
         <?php
        echo "<a href='login.html'> <button type='button' class='btn btn-lg btn-success btn-block'>回上頁</button></a>";
        ?>

        </div>
        <div class="col-sm-4"></div>
      </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
	<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
