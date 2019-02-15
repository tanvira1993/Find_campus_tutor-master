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
//echo  $id;

$name=$_POST['username'];
//$salt = "lolcum";
//$password=($_POST['password']);
//$password =$salt.( $_POST['password']).$salt;
$email= $_POST['email'];
$nsuid= $_POST['nsuid'];
//$dept= $_POST['dept'];
$gender= $_POST['gender'];
$img= $_POST['img'];
//$mobile= $_POST['mobile'];
$dob= $_POST['dob'];
$blood= $_POST['blood'];
$addr= $_POST['addr'];
$expert= $_POST['expert'];


//$id = $_POST['id'];

//echo  $id;
$sql = "UPDATE tutors SET username='$name', email= '$email', nsuid= '$nsuid', department= '$_POST[dept]', gender= '$gender', file= '$img', mobile= '$_POST[mobile]', dob= '$dob', blood= '$blood', addr= '$addr', expert= '$expert' WHERE id= '$id'";



//echo  $id;
//header("header: Student_profile.php");
//	
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

//echo $result;