<?php
include "connection.php"; // Using database connection file here

$id =  $_POST['id']; // get id through query string
echo $id;
$del = mysqli_query($con,"delete from registered_users where id = '$id'"); // delete query


// Prepare the update statement
$stmt = mysqli_prepare($con, "delete from registered_users where id = ?");

// Bind the parameters
mysqli_stmt_bind_param($stmt, "i",  $id);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    echo "User deleted successfully";
} else {
    echo "Error deleting user: " . mysqli_error($con);
}
// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);