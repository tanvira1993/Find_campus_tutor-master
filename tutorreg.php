<?php
$conn = mysqli_connect("localhost", "root", "", "campus_tutor");


$name=$_POST['username'];
$salt = "lolcum";
//$password=($_POST['password']);
$password =$salt.( $_POST['password']).$salt;
$email= $_POST['email'];
$nsuid= $_POST['nsuid'];
$dept= $_POST['dept'];
$gender= $_POST['gender'];
$img= $_POST['img'];
$mobile= $_POST['mobile'];


 $sql="INSERT INTO tutors(username, password, email, nsuid, department, gender, file, mobile) VALUES('$name','$password','$email','$nsuid','$dept','$gender', '$img', '$mobile')";
mysqli_query($conn,$sql);

// Check connection
//if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";

header("Location:login.php");

?>