<?php
// $user_name = $_POST['user_name'];
$username = $_POST['username'];
$password = $_POST['password'];

session_start();
include("connection.php");
include("functions.php");
if (!empty($username) && !empty($password)) {
      //select from database
      $query = "SELECT * FROM registered_users WHERE username = '$username' limit 1";
      $result = mysqli_query($con, $query);
      if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
          $user_data = mysqli_fetch_assoc($result);
          if ($user_data['password'] == $password) {
            // echo "$password heslo\n";
            // echo  $user_data['usersPwd'];
            // echo  $user_data['usersName'];
            $_SESSION['username'] = $user_data['username'];
            //header("Location: admin.php");
            die;
          } else echo "Zadal si nespravne heslo";
        } else echo "Zadal si neplatne prihlasovacie meno alebo heslo";
      } else echo "Zadal si neplatne prihlasovacie udaje";
    }   