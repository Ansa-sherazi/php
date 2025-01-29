<?php
include('header.php');
require('connection.php');
// if($connection){
//     echo "<script>alert('connection established')</script>";
// }
// else{
//     echo "<script>alert('connection not established')</script>"; 
// }


if ($connection) {
    $read = "SELECT * FROM `studentinfo`;";
    $result = mysqli_query($connection, $read);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
           
            ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Student</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['Id'] . "</td>"; //id
                        echo "<td>" . $row['name'] . "</td>"; // Name
                        echo "<td>" . $row['email'] . "</td>"; // Email
                        echo "<td>" . $row['city'] . "</td>"; // City
                        echo '<td>
                            <a href="update.php?Id=' . $row["Id"] . '" class="btn btn-success px-2 mx-2">Edit</a>
                            <a href="delete.php?Id=' . $row["Id"] . '" class="btn btn-danger">Delete</a>
                            </td>';
                             //delete.php?id=2
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "<script>alert('No records found')</script>";
        }
    } else {
        echo "<script>alert('Failed to execute query')</script>";
    }
} else {
    die("Failed to connect to the database");
}
?>