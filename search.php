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
 <link rel="stylesheet" href="css/bootstrap.min.css">

<script src="jquery-3.3.1.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<body class="bg-success">

 		<nav class="navbar navbar-inverse">
    <center><h1><font color="white">CAMPUS TUTOR</font></h1></center></nav>
 		
 		<center>
 		Total results :
 		<table>

 				
 			
 				<tr>
 					<th>Tutor name</th>
 					<th>Tutor Courses</th>
 					<th>Tutor ID</th>

 					
 				</tr>
 				<?php 

$conn = mysqli_connect("localhost", "root", "", "campus_tutor");
$output ='';

if (isset($_POST['search']) && $_POST['search'] !== '') {


	# code...
	$search= $_POST['search'];
	$q= mysqli_query($conn, "SELECT * FROM tutors WHERE expert LIKE '%$search%' OR username LIKE '%$search%'") or die(mysqli_error());
	$c = mysqli_num_rows($q); 
	  echo $c;

	if ($c== 0) {

		# code...
		$output ='No search results for <b>"'.$search.'" </b>' ;
	}

	else{



		while ($data = mysqli_fetch_array($q)){
			echo "<tr>";

			$id = $data['id'];
			$name =$data['username'];
			$course=$data['expert'];
			$dept=$data['department'];
			$gender=$data['gender'];
			$mobile=$data['mobile'];
			$email=$data['email'];
			$nsuid=$data['nsuid'];

			//echo "<td>" .$name."</td>"; 

			$r['name']=$name;
			$p['course']=$course;
			$d['dept']=$dept;
			$g['gender']=$gender;
			$m['mobile']=$mobile;
			$e['email']=$email;
			$n['nsuid']=$nsuid;

			echo "<td><a href='tutor_vw.php?name=$r[name]&course=$p[course]&dept=$d[dept]&gender=$g[gender]&mobile=$m[mobile]&email=$e[email]&nsuid=$n[nsuid] '> $name </a></td>";
			echo "<td>" .$course."</td>";
			echo "<td>" .$id."</td>";

			//echo "<td><a href='tutor_vw.php'>profile</a></td>";

			//header("location: search_result.php");
			echo "</tr>";
			

		}
	}
}

else{
	header("location: Student_profile.php");
}

?>


 			
 		</table>
			</center>
 	</body>
 </html>





