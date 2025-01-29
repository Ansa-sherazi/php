<?php


// is tarhan bhi likh sakty han or jo nichy ha us tarhan bhi likh sakty han 
// $connection=mysqli_connect('localhost','root','','basicdb');
// if(!$connection){
//     die("Database connection failed");
// }
// else{
//     echo "<script>alert('Dtabase connect hugyaa!!')</script>";
// }

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