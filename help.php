<!DOCTYPE html>
<html>
<head>
	<title>Help</title>
	

	<link rel="stylesheet" href="css/bootstrap.min.css">


	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style>



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


	<center>
        
        <form id="student" action="help_process.php" method="POST" >
            
            <table>
                <tr>
                    <td>Name:</td>
                    <td> <input type="text" name="username"/> </td>   
                </tr>

                <tr>
                    <td> Email: </td>
                    <td> <input type="email" name="email"/> </td>   
                </tr>

                <tr>
                    <td> NSU ID: </td>
                    <td> <input type="number" name="nsuid"/> </td>   
                </tr>

                <tr>
                    <td> Mobile: </td>
                    <td> <input type="number" name="mobile"/> </td>   
                </tr>

                	<tr>
                		<td>Account</td>
                		<td>
                        <select name="account">
                            <option value="tutor" >Tutor </option>
                            <option value="student" >Student </option>
                           
                            
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Current password:</td>
                    <td> <input type="password" name="password"/> </td>   
                </tr>

           
                
                <tr>
                    
                    <td colspan= "2">
                        <input type="submit" value="Report"/>
                        
                        <input type="reset" value="Reset">
                    </td>   
                </tr>
                    
            </table>
        </form>
    </center>

    <script src="jquery-3.3.1.min.js"></script> 
        
    <script>

        

     $("#student").submit(function(){
    alert("Reported !!");
});
    </script>


	
	
	

</body>
   
</html>
