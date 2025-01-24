<?php

require("connection.php");
if($_GET['Id']){

    $id = $_GET['Id'];

    $delete = "DELETE FROM `studentinfo` where Id = `$id`;";
    $result = mysqli_query($connection , $delete) or die("failed to delete querry");

    if($result){
        echo "<script>alert('from row deleted successfully.')</script>";
        header("location: index.php");
    }else{
        echo "<script>alert('sorry  failed  to delete it.')</script>";
    }
}
?>