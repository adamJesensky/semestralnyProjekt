<?php
include "connection.php";

// Prepare the SQL statement
$query = "SELECT max(id) as highest_id FROM registered_users";
$stmt = mysqli_prepare($con, $query);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_bind_result($stmt, $highest_id);
    mysqli_stmt_fetch($stmt);
    $response = array(
        'status' => 'success',
        'highest_id' => $highest_id
    );
} else {
    $response = array(
        'status' => 'error',
        'message' => 'An error occurred while fetching the highest id. Please try again.'
    );
}

// Return the response in JSON format
header('Content-Type: application/json');
echo json_encode($response);

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);