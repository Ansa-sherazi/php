<?php
include "header.php";
require "connection.php";
if($_GET['Id']){
    $id = $_GET['Id'];
    
    $getdata = "SELECT * from `studentinfo` where Id = '$id';";

    $result = mysqli_query($connection , $getdata) or die("failed to run query");

    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);

        $name=$row['name'];
        $email=$row['email'];
        $city=$row['city'];
  
?>
    <div class="container my-4">
    <h1 class="text-center">Enter Student Details</h1>
<form action="updatedata.php" method="post" class="form-group">
<input type="hidden" name="Id" class="form-control my-2" value="<?php echo $id ?>">
<input type="text" name="name" class="form-control my-2" placeholder="Enter student name" value="<?php echo $name ?>">
<input type="email" name="email"  class="form-control my-2" placeholder="Enter your email no"value="<?php echo $email ?>">
<input type="text" name="city" class="form-control my-2" placeholder="Enter student city"value="<?php echo $city ?>">
<input type="submit" name="Add"  class="form-control btn btn-primary my-2">
</form>
</div>
<?php
}
}
else{
    echo"id not found";
}
?>