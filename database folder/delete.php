<?php

require("connection.php");
if($_GET['Id']){

    $id = $_GET['Id'];

   

    // Agar column ka naam 'id' hai to query ko update karo
    $delete = "DELETE FROM `studentinfo` WHERE Id = '$id';";
    $result = mysqli_query($connection, $delete)or die("failed to delete qurey");

    if($result){
        echo "<script>alert('Record delete ho gaya.')</script>";
        header("location: index.php");
    } else {
        echo "<script>alert('Sorry, delete nahi ho sakta.')</script>";
    }
}
?>