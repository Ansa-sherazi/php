<?php
$servername="localhost";
$username="root";
$dbpassword="";
$dbname="students";

$connection=mysqli_connect($servername,$username,$dbpassword,$dbname);
if(!$connection){
    die("Database connection failed");
}
else{
    echo "<script>alert('Dtabase connect hugyaa!!')</script>";
}

?>