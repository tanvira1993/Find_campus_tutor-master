<?php
	session_start();
	if(isset($_SESSION['user']))
		//header("location: login.php");
		// session_destroy();


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	

	<link rel="stylesheet" href="css/bootstrap.min.css">


	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<style>

	input{
			background-color: white;
			color: black;
			font-weight: bold;
			margin-bottom: 10px;
		}



		


		input[type=submit]{
			background-color: black;
			color: white;
			padding: 10px;
			margin-left: 200px;
		}


		

		input:focus{
			border: 2px solid black;
		}

		input[type=submit]:hover {
			background-color: green;
			
		}

		

		input:hover {
			cursor: pointer;
		}

		
		
		footer{
    	font-weight: bold;
    	color: yellow;
    	display: block;
    }
	</style>

	</head>

	<body class="bg-primary">
<?php
	if(isset($_SESSION["error"]))
	{
		$info=$_SESSION["error"];
		echo "<script type=\"text/javascript\">alert('$info')</script>";
		unset($_SESSION["error"]);
	}

?>

<div>
	<nav class="navbar navbar-inverse">
		<center><h1>CAMPUS TUTOR</h1></center>
	</nav>


	
<center>
	<form id="l" action="login_process.php" method="POST">
		
		<table>
			
			<tr>
                    <td> NSU Email: </td>
                    <td> <input type="email" required="required" name="email"/> </td>   
                </tr>
                <tr>
                    <td> password:</td>
                    <td> <input type="password" required="required" name="password"/> </td>   
                </tr>



               
		</table>
		
                       <td colspan="4"> <input type="submit" value="login"/></td>
                        
	</form>

	 <td colspan="2"><a href="Homepage.html"><button type="button" class="btn btn-success">Home</button></a> </td>
                       <td><a href="help.php"><button type="button" class="btn btn-info">Help</button></a> </td>


	</center>




</body>
    
</html>