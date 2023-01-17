<?php
include "connection.php";

// Get the form data
$username = $_POST['user_name'];
$password = $_POST['password'];
$id = $_POST['id'];
// Prepare the SQL statement
$query = "INSERT INTO registered_users (id,username, password) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($con, $query);

// Bind the parameters
mysqli_stmt_bind_param($stmt, "iss",$id, $username, $password);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    $response = array(
        'status' => 'success',
        'message' => 'User created successfully!'
    );
} else {
    $response = array(
        'status' => 'error',
        'message' => 'An error occurred while creating the user. Please try again.'
    );
}

// Return the response in JSON format
header('Content-Type: application/json');
echo json_encode($response);

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);