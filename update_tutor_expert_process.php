 <?php
    session_start();
    $data=$_SESSION['user'];

    

    if (!isset($_SESSION['user']))
    {
      header("location: login.php");
    }




?>
<?php

$conn = mysqli_connect("localhost", "root", "", "campus_tutor");
$id=  $data['id'];
$expert= $_POST['expert'];


$sql = "UPDATE tutors SET expert= '$expert' WHERE id= '$id'";

if($result = mysqli_query($conn, $sql))
{
        $qr="SELECT * from tutors where id='$id'";
        $info=mysqli_query($conn,$qr);
        $data=mysqli_fetch_assoc($info);
        $_SESSION['user']=$data;

		//echo  $id;
		header("location: Tutor_profile.php");
}

else{
	//echo $result;
	//header("refresh:1; url: Student_profile.php");
}
