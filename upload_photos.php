<?php
  session_start();
  include ("connection.php");
  include ("functions.php");
  $user_data = check_login($con);

   // Check if the request is a POST request
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = array();
    $uploaded_files = array();
    // Get the uploaded files
    $files = $_FILES['file'];
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");
    // Loop through the uploaded files
    for ($i = 0; $i < count($files['name']); $i++) {
        // Get the current file
        $file = array(
            'name' => $files['name'][$i],
            'tmp_name' => $files['tmp_name'][$i],
            'size' => $files['size'][$i],
            'error' => $files['error'][$i],
            'type' => $files['type'][$i]
        );
        // Check if the file is of a valid type
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowed_extensions)) {
            $response = array(
                'success' => false,
                'message' => 'Invalid file type. Allowed types: jpg, jpeg, png, gif'
            );
            echo json_encode($response);
            return;
        }
        // Check if the file size is within the allowed limit
        if ($file['size'] > 5000000) {
            $response = array(
                'success' => false,
                'message' => 'File size is too large. Maximum size: 5MB'
            );
            echo json_encode($response);
            return;
        }
        // Check for any errors during the file upload
        if ($file['error'] !== UPLOAD_ERR_OK) {
            $response = array(
                'success' => false,
                'message' => 'An error occurred while uploading the file'
            );
            echo json_encode($response);
            return;
        }
        // Move the uploaded file to the uploads directory
        $new_file_name = uniqid() . '.' . $ext;
        $destination = 'sql_data/novinky_2020/' . $new_file_name;
        if (!move_uploaded_file($file['tmp_name'], $destination)) {
            $response = array(  
                'success' => false,
                'message' => 'An error occurred while saving the file'
            );
            echo json_encode($response);
            return;
        }
        // Get the file size
        $file_size = filesize($destination);
        // Add the uploaded file information to the array of uploaded files
        $uploaded_files[] = array(
          'file_name' => $new_file_name,
          'file_size' => $file_size 
        );
    }

    // Prepare the insert query
    $stmt = $con->prepare("INSERT INTO photos (file_name, file_size) VALUES (?,?)");
    $stmt->bind_param("sd", $file_name, $file_size);
    // Loop through the array of uploaded files
    foreach ($uploaded_files as $file) {
      // Bind the parameters and execute the query
      $file_name = $file['file_name'];
      $file_size = $file['file_size'] / (1024 * 1024);
      if (!$stmt->execute()) {
        $response = array(
        'success' => false,
        'message' => 'An error occurred while saving the file information to the database'
        );
        echo json_encode($response);
        return;
      }
    }
    // Close the statement
    $stmt->close();
    // Close the connection
    $con->close();
    // Set the response message
    $response = array(
      'success' => true
    );
    // Return the response
    echo json_encode($response);
  }

?>