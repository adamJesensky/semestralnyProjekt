<?php 
//  session_start();
 include ("connection.php");
//  include ("functions.php");
//  $user_data = check_login($con);

// Prepare the SELECT statement
$query = "SELECT * FROM announcements";
$stmt = mysqli_prepare($con, $query);

// Execute the statement
mysqli_stmt_execute($stmt);

// Bind the result to a variable
mysqli_stmt_bind_result($stmt, $id, $announcement_text, $created_at);

// Fetch the result
while (mysqli_stmt_fetch($stmt)) {
    // Display the announcement
    echo '<p><em>'.$announcement_text.'</em></p>';
}

// Close the statement
mysqli_stmt_close($stmt);

// Close the connection
mysqli_close($con);