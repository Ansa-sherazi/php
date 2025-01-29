<?php
require('connection.php');
if(isset($_POST['std_details'])){
    $sname=$_POST['sname'];
    $semail=$_POST['semail'];
    $scity=$_POST['scity'];
    $insert ="INSERT INTO `studentinfo`(`name`,`email`,`city`)VALUES('$sname','$semail','$scity')";
    $result=mysqli_query($connection,$insert);

    if($result){
        echo"<script>alert('Data inserted successfully')</script>";
    }
    else{
        echo"<script>alert('Data  not inserted ')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container">
<h1>Students detail form insert</h1>
<form action="" method="post" class ="form-group">
<input type="text"name="sname" class="form-control my-3"  placeholder="Enter Student Name" required>
<input type="email"name="semail"  class="form-control my-3" placeholder="Enter email " required>
<input type="text"name="scity"  class="form-control my-3" placeholder="Enter city name" required>
<input type="submit" value="submit" name="std_details" class =" form-control btn btn-primary">
</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/boots<trap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>