<?php
include "connection.php";

// Get the form data
$username = $_POST['user_name'];
$password = $_POST['password'];
$id = $_POST['id'];

// Perform validation on the form data
if (empty($username) || empty($password)) {
    $response = array(
        'status' => 'error',
        'message' => 'Both username and password are required fields.'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}
else {
    
}
// Regular expression pattern to match against special characters
$pattern = '/[^a-zA-Z0-9]/';
// Check if the username or password contains special characters
if (preg_match($pattern, $username) || preg_match($pattern, $password)) {
    $response = array(
        'status' => 'error',
        'message' => 'Username and password can only contain letters and numbers.'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}
if (strlen($password) < 8) {
    $response = array(
        'status' => 'error',
        'message' => 'Password must be at least 8 characters long.'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

// Hash the password for security
$password = password_hash($password, PASSWORD_DEFAULT);

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