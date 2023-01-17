<?php
include "connection.php";

// Get the data from the request
$id = $_POST["id"];
$username = $_POST["username"];
$password = $_POST["password"];

// Prepare and execute the query
$query = "UPDATE registered_users SET username = ?, password = ? WHERE id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("ssi", $username, $password, $id);
$stmt->execute();

// Check if the update was successful
if ($stmt->affected_rows == 1) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error"));
}

// Close the connection
mysqli_close($con);