<?php 
$conn = mysqli_connect("localhost", "root", "", "campus_tutor");


$name=$_POST['username'];
$salt = "lolcum";
//$password=($_POST['password']);
$pass =$salt.( $_POST['password']).$salt;
$mail= $_POST['email'];
$nsuid= $_POST['nsuid'];

$account= $_POST['account'];

$mobile= $_POST['mobile'];


 $sql="INSERT INTO report(username, password, email, nsuid, account,mobile) VALUES('$name','$pass','$mail','$nsuid','$account','$mobile')";
 mysqli_query($conn,$sql);


$to = 'ahammedtanveer@gmail.com';
$sub = 'Reset password';
$f = 'From: ';
$head = $f.$mail;
$body = $name.$nsuid.$mail.$account;


if(mail($to,$sub,$body,$head)){

	//echo email sent;
	header("Location:login.php");


}
else
{
	echo "email not sent";
}


?>