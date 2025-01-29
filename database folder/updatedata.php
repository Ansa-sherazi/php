<?php 
//print_r($_POST);
require("connection.php");


$id=$_POST['Id'];
 $name=$_POST['name'];
 $email=$_POST['email'];
 $city=$_POST['city'];
 $update = "UPDATE `studentinfo` set `name`='$name',`email`='$email',`city`='$city' where Id = '$id';";
 $result = mysqli_query($connection , $update) or die("failed to update query");
 if($result){
    echo "<script>alert('students`s Details Update.')</script>;";
    header("location:index.php");
 }
 else{
     echo "<script>alert('Sorry, Failed to update this record.')</script>";
 }
 
 ?>