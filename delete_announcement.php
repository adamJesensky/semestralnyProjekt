<?php
// Connect to the database
include "connection.php";

  // Get the ID of the announcement to be deleted
  $id = $_GET['id'];

  // Delete the announcement from the database
  $query = "DELETE FROM announcements WHERE id = $id";
  $stmt = $con->prepare($query);
  $stmt->execute();

  // Check if the deletion was successful
  if ($stmt->affected_rows > 0) {
    $response = ['success' => true, 'message' => 'Announcement deleted successfully.'];
  } else {
    $response = ['success' => false, 'message' => 'Error deleting the announcement.'];
  }

  // Return the response in JSON format
  echo json_encode($response);
?>