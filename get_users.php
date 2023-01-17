<?php
include "connection.php";


// Fetch data
$sql = "SELECT id, username, password, created_at, last_login FROM registered_users";

// Prepare statement
$stmt = mysqli_prepare($con, $sql);

// Bind parameters
// mysqli_stmt_bind_param($stmt, "s", $username);

// Execute statement
if (mysqli_stmt_execute($stmt)) {
    // Bind results
  mysqli_stmt_bind_result($stmt, $id, $username, $password, $created_at, $last_login);
    
    $data = array();
    while (mysqli_stmt_fetch($stmt)) {
        $data[] = array(
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'created_at' => $created_at,
            'last_login' => $last_login
        );
    }
    echo json_encode($data);
} else {
    echo "Error fetching data: " . mysqli_error($conn);
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);