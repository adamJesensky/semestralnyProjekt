<?php 
  include ("connection.php");

  // Connect to the database
  $query = "SELECT file_name, file_size, title, description, created_at FROM reviews ORDER BY created_at DESC";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_execute($stmt);

    // Bind the result to a variable
  mysqli_stmt_bind_result($stmt, $file_name, $file_size, $title, $description, $created_at);

  // Fetch the result
  while (mysqli_stmt_fetch($stmt)) {
    echo '<div class="col p-2"><div class="card h-100">';
    echo '<img src="sql_data/reviews/' . $file_name . '" class="card-img-top" alt="..."> <div class="card-body p-2 p-sm-3">';
    echo '<h5 class="card-title">' . $title . '</h5> <p class="card-text">' . $description . '</p></div></div></div>';
  }
  // Close the statement
  mysqli_stmt_close($stmt);
  // Close the connection
  mysqli_close($con); 

 