 <?php
    session_start();
    $data=$_SESSION['user'];

  if (!isset($_SESSION['user']))
    {
      header("location: login.php");
    }

?>

 <link rel="stylesheet" href="css/bootstrap.min.css">

<script src="jquery-3.3.1.min.js"></script> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!------ Include the above in your HEAD tag ---------->


<body class="bg-danger">
 <nav class="navbar navbar-inverse">
    <center><h1><font color="white">CAMPUS TUTOR</font></h1></center></nav>

       

       

    <div class="container">
  <div class="row">

       <div class="col-md-12 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 ><?=$data['username']?> Profile</h4>
     
  </div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center">  <img alt="<?=$data['username']?> Pic" src="tuploads/<?=$id?>.jpg" id="profile-image1" class="img-circle img-responsive"> 
                <input id="profile-image-upload" class="hidden" type="file"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
<div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
           
               
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?=$data['username']?> </h4></span>
              <span><p>Tutor</p></span>  
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">

            <div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:70%">
    70%
  </div>
</div>
    
              
<div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "><?=$data['username']?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>


<div class="col-sm-5 col-xs-6 tital " >Department:</div><div class="col-sm-7"><?=$data['department']?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >NSU ID:</div><div class="col-sm-7"><?=$data['nsuid']?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?=$data['email']?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Gender:</div><div class="col-sm-7"><?=$data['gender']?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Mobile Number:</div><div class="col-sm-7"><?=$data['mobile']?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>


<div class="col-sm-5 col-xs-6 tital " >Experties Courses:</div><div class="col-sm-7"><?=$data['expert']?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

          <form id="tutor" action="update_tutor_expert_process.php" method="POST" > 
          <div class="col-sm-5 col-xs-6 tital " >Update Courses for tution:</div><div><textarea rows="4" cols="20" required="required" name="expert"></textarea></div>
          <div class="clearfix"></div>
<div class="bot-border"></div>

                       <input type="submit" value="Update"/> 

</form>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 

              <script src="jquery-3.3.1.min.js"></script> 
        
    <script>

        

     $("#tutor").submit(function(){
    alert("Courses Updated");
});
    </script>
       
       
       
       
       
       
       
       
       
   </div>
</div>
      <div class="col-md-5">
          
        </div>
        <div >
             <a href="update_tutor_info.php"> <button type="button" class="btn btn-info">Update Info</button></a>       
              <a href="Tutor_logout.php"><button type="button" class="btn btn-info">Logout</button></a>     
            </div>


    </body>