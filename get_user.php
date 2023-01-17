<?php
include "connection.php";

// Get the id from the query string
$id = $_GET['id'];

// Prepare and execute the query
$query = "SELECT id, username, password FROM registered_users WHERE id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();

// Fetch the results
$result = $stmt->get_result();

// Fetch the data
$user = $result->fetch_assoc();

// Close the connection
mysqli_close($con);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($user);
?>