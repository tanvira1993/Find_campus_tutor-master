<?php
    session_start();
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db_name = "campus_tutor";
    
    $db = mysqli_connect($hostname, $username, $password);
    
    if ($db) {
        $select_db = mysqli_select_db($db, $db_name);
        
        if ($select_db) {
           $_SESSION['isFound'] = false;
            $email = false;

            if (isset($_POST['email'])) {
                $email = $_POST['email'];
            }

            $password = false;

            if (isset ($_POST['password'])) {
                $salt = "lolcum";
                $password =$salt.( $_POST['password']).$salt;
            }

            $query = "SELECT * FROM tutors  where email='$email' and password='$password'";
            

            $result = mysqli_query($db, $query);
            
            $data=mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result)>0)
                {
                    $attempt=(int)$data["attempt"];
                    if($attempt>4)
                    {
                        $error="";
                        if($attempt<5)
                            $error="Incorrect Username or password";


                        else
                            $error="You're Blocked, Please contact an administrator";
                        $_SESSION["error"]=$error;

                        header("location: login.php");
                    }
                    else{
                        mysqli_query($db,"UPDATE tutors set attempt='0' where email='$email'");
                        header("location: Tutor_profile.php");
                        $_SESSION['user']=$data;
                    }
                    die();
                } 
                else
                {
                    $quer = "SELECT * FROM tutors where email='$email'";
                    $result = mysqli_query($db, $quer);
                    $data=mysqli_fetch_assoc($result);
                    $attempt=(int)$data["attempt"];
                    if($attempt<6)
                        $attempt=$attempt+1;
                    mysqli_query($db,"UPDATE tutors set attempt='$attempt' where email='$email'");
                    $error="Incorrect";
                    if($attempt<5)
                        $error="Incorrect Username or password";

                    else
                        $error="You're Blocked, Please contact an administrator";

                    $_SESSION["error"]=$error;
                    header("location: login.php");

                }  




                //student table
                $quer = "SELECT * FROM students where email='$email' and password='$password' ";
                $resul = mysqli_query($db, $quer);
                $data=mysqli_fetch_assoc($resul);
                if(mysqli_num_rows($resul)>0)
                {
                    $attempt=(int)$data["attempt"];
                    if($attempt>4)
                    {
                        $error="";
                        if($attempt<5)
                            $error="Incorrect Username or password";
    

                        else
                            $error="You're Blocked, Please contact an administrator";


                        $_SESSION['error']=$error;
                        header("location: login.php");
                    }
                    else{

                    mysqli_query($db,"UPDATE students set attempt='0' where email='$email'");
                        header("location: Student_profile.php");
                        $_SESSION['user']=$data;
                    }
                    die();
                } 
                else
                {
                    $quer = "SELECT * FROM students where email='$email'";
                    $resul = mysqli_query($db, $quer);
                    $data=mysqli_fetch_assoc($resul);
                    $attempt=(int)$data["attempt"];
                    if($attempt<6)
                        $attempt=$attempt+1;
                    mysqli_query($db,"UPDATE students set attempt='$attempt' where email='$email'");
                    $error="";
                    if($attempt<5)
                        $error="Incorrect Username or password";

                    else
                        $error="You're Blocked, Please contact an administrator";

                    $_SESSION['error']=$error;
                    header("location: login.php");

                }  



                mysqli_close($db);


                exit;
            
        }
    }
        
    
?>