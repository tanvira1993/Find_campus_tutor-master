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

 $sql="INSERT INTO students(username, password, email, nsuid, department, gender, file, mobile) VALUES('$name','$password','$email','$nsuid','$dept','$gender', '$img', '$mobile')";
mysqli_query($conn,$sql);

// Check connection
//if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
$id = $data['id'];


$temp = explode(".", $_FILES["file"]["img"]);
$id = round(microtime(true)) . '.' . end($temp);
move_uploaded_file($_FILES["file"]["img"], "C:\xampp\htdocs\Find_campus_tutor\suploads" . $id.jpg);

header("Location:login.php");

?>