<?php 
    // session_start();
    include ("connection.php");

// Get the form data
// $id = $_POST['editAnnouncementId'];
// $text = $_POST['editAnnouncementText'];

 // Get the form data
 $id = mysqli_real_escape_string($con, $_POST['editAnnouncementId']);
 $text = mysqli_real_escape_string($con, $_POST['editAnnouncementText']);
 
// Validate the form data
if (empty($text)) {
  echo json_encode(["success" => false, "message" => "Text oznámenia nemôže byť prázdny"]);
  exit();
}
// Prepare the SQL statement
$stmt = $con->prepare("UPDATE announcements SET announcement_text = ? WHERE id = ?");

// Bind the parameters to the statement
$stmt->bind_param("si", $text, $id);

// Execute the statement
$stmt->execute();

// Check if the update was successful
if ($stmt->affected_rows === 1) {
    // Return a success message
    $response = [
        "success" => true,
        "message" => "Oznámenie bolo úspešne aktualizované."
    ];
} else {
    // Return an error message
    $response = [
        "success" => false,
        "message" => "Chyba: Oznámenie sa nepodarilo aktualizovať."
    ];
}

// Close the statement and connection
$stmt->close();
$con->close();

// Return the response as JSON
header("Content-Type: application/json");
echo json_encode($response);

?>