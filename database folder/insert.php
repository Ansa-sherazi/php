<?php
require('connection.php');
if(isset($_POST['stdDetails'])){
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
    <title>Document</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">students details</h1>
        <form action="" method="post" class="form-group">
        <input type="text" name="sname" class="form-control my-3" placeholder="Enter your name" required>
        <input type="email" name="semail"  class="form-control my-3" placeholder="Enter your email" required>
        <input type="text" name="scity"  class="form-control my-3" placeholder="Enter your city" required>
        <input type="submit" value="Submit"  class="form-control btn btn-primary" name="stdDetails">
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>