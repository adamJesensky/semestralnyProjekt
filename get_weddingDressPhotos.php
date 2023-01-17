<?php 
  include ("connection.php");

  // Connect to the database
  $query = "SELECT file_name, file_size, created_at FROM photos ORDER BY created_at DESC";
  $stmt = mysqli_prepare($con, $query);
  mysqli_stmt_execute($stmt);

    // Bind the result to a variable
  mysqli_stmt_bind_result($stmt, $file_name, $file_size, $created_at);

  // Fetch the result
  while (mysqli_stmt_fetch($stmt)) {
    // Display the announcement
    echo '<div class=" item py-3"><a href="sql_data/novinky_2020/' . $file_name . '" data-lightbox="photos"><img class="img-fluid" src="sql_data/novinky_2020/' . $file_name . '"></a></div>';
  }
  // Close the statement
  mysqli_stmt_close($stmt);
  // Close the connection
  mysqli_close($con); 

 