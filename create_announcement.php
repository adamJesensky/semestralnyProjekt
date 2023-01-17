<?php
// include database connection file
include 'connection.php';

// check if the announcement_text input is not empty and is a string
if (!empty($_POST['announcement_text']) && is_string($_POST['announcement_text'])) {
    $announcement_text = filter_input(INPUT_POST, 'announcement_text', FILTER_SANITIZE_STRING);

    // insert the announcement into the database
    $query = "INSERT INTO announcements (announcement_text) VALUES (?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 's', $announcement_text);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) === 1) {
        echo json_encode(['status' => 'success', 'message' => 'Announcement created successfully.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'An error occurred while creating the announcement. Please try again.']);
    }

    mysqli_stmt_close($stmt);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid input. Please enter a valid announcement text.']);
}

// close the database connection
mysqli_close($con);