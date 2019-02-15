<?php
$conn = mysqli_connect("localhost", "root", "", "campus_tutor");

$query = "SELECT * FROM bbas ";

$name = ['name'];
$office = ['office'];
$time = ['time'];
$course = ['course'];

$result = mysqli_query($conn, $query);
            
 $data=mysqli_fetch_assoc($result);
 //$data1=;
 $rowcount=mysqli_num_rows($result);
 $data1=$rowcount+ 1;
 $data12=mysqli_fetch_assoc($result);
 mysqli_close($conn);

?>


<!DOCTYPE html>
<html>
<head>
    <title>Faculty Time</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">


  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
    color: black;
}

tr:nth-child(odd) {
    background-color: black;
    color: white;
}
</style>
</head>
<body class="bg-primary">

  <div>
  <nav class="navbar navbar-inverse">
    <center><h1>CAMPUS TUTOR</h1></center>
  </nav>
  

  </div>

<table>
  <tr>
    <th>Faculty</th>
    <th>Office room</th>
    <th>Office hours</th>
    <th>courses</th>

  </tr>
  <tr>
    <td><?=$data['name']?></td>
    <td><?=$data['office']?></td>
    <td><?=$data['time']?></td>
    <td><?=$data['course']?></td>
  </tr>

    <tr>
    <td><?=$data12['name']?></td>
    <td><?=$data12['office']?></td>
    <td><?=$data12['time']?></td>
    <td><?=$data12['course']?></td>
  </tr>

  
  
</table>

</body>
</html>