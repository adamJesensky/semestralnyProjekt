<?php
    include("connection.php");

    // Get the ID from the URL
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
       $id = $_GET['id'];

    // Validate the ID
    if(empty($id) || $id == false){
        die("Invalid ID");
    }

    // Prepare the SQL statement
    $stmt = $con->prepare("SELECT * FROM announcements WHERE id = ?");

    // Bind the ID parameter to the prepared statement
    $stmt->bind_param("i", $id);

    // Execute the SQL statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch the data
    $announcement = $result->fetch_assoc();

    // Close the statement
    $stmt->close();

    // Close the connection
    $con->close();

    // Return the data
    echo json_encode($announcement);
?>