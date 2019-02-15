 <?php
    session_start();
    $data=$_SESSION['user'];

    

    if (!isset($_SESSION['user']))
    {
      header("location: login.php");
    }




?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>

	

	<link rel="stylesheet" href="css/bootstrap.min.css">


	<meta name="viewport" content="width=device-width, initial-scale=1.0">



	<style >


	input, textarea, select{
			background-color: white;
			color: black;
			font-weight: bold;
			margin-bottom: 10px;
		}



		


		input[type=submit]{
			background-color: black;
			color: white;
			padding: 10px;
		}


		input[type=reset]{
			background-color: black;
			color: white;
			padding: 10px;
		}

		input:focus{
			border: 2px solid black;
		}

		input[type=submit]:hover {
			opacity: 1.8;
			color: white;
		}

		input[type=reset]:hover {
			opacity: 1.8;
			color: white;
		}

		input:hover {
			cursor: pointer;
		}

		h2{
			color: black;
			
		}

	

		footer{
    	font-weight: bold;
    	color: yellow;
    }
	</style>


	
</head>
<body class="bg-primary">

	<nav class="navbar navbar-inverse">
		<center><h1>CAMPUS TUTOR</h1></center>
	</nav>


	<div class="col-md-12">
	<center><h2 >update Info </h2></center>
	</div>


	<center>
		
		<form id="student" action="update_student_process.php" method="POST" >
            
            <table>
                <tr>
                    <td> Student Name:</td>
                    <td> <input type="text" required="required" name="username"/> </td>   
                </tr>

                <tr>
                    <td> NSU Email: </td>
                    <td> <input type="email" required="required" name="email"/> </td>   
                </tr>

                <tr>
                    <td> NSU ID: </td>
                    <td> <input type="number" required="required" name="nsuid"/> </td>   
                </tr>

                <tr>
                    <td> Mobile: </td>
                    <td> <input type="number" required="required" name="mobile"/> </td>   
                </tr>


                <tr>
                    <td>Department</td>
                    
                    <td>
                        <select name="dept">
                            <option value="ece" >ECE </option>
                            <option value="bba" >BBA </option>
                            <option value="pharmacy" >PHARMACY </option>
                            
                        </select>
                    </td>

                </tr>


                <tr>
                    <td>Gender</td>
                    
                    <td>
                        <select name="gender">
                            <option value="Female" >Female </option>
                            <option value="Male" >Male </option>
                            <option value="Other" >Other </option>
                            
                        </select>
                    </td>

                </tr>

                <tr>
                    <td> Date of Birth:</td>
                    <td> <input type="date" required="required" name="dob"/> </td>   
                </tr>




                <tr>
                    <td>Blood Group</td>
                    
                    <td>
                        <select name="blood">
                            <option value="A+" >A+ </option>
                            <option value="B+" >B+ </option>
                            <option value="O+" >O+ </option>
                            <option value="A-" >A-</option>
                            <option value="B-" >B- </option>
                            <option value="O-" >O- </option>
                            
                        </select>
                    </td>

                </tr>

                <tr>
                    <td>Address</td>
                    
                    <td>
                        <textarea rows="4" cols="50" required="required" name="addr"></textarea>
                    </td>
                
                        
                
                </tr>


               


                <tr>
                	<td>File Upload</td>
						<td><input type="file" required="required" name="img"></td>
                </tr>
                
             
                
                
                
                <tr>
                    
                    <td colspan= "2">
                        <input type="submit" value="Update"/>
                        
                        <input type="reset" value="Reset">
                    </td>   
                </tr>
                    
            </table>
        </form>
	</center>

    <script src="jquery-3.3.1.min.js"></script> 
        
    <script>

        

     $("#student").submit(function(){
    alert("Successfully updated !!");

});
    </script>

      

</body>

<footer>
		<center>Copyright   Reserved   by   Tanvir   Ahamed   &   Md.   Ariful   Islam   Sourov</center>
	</footer>
</html>

