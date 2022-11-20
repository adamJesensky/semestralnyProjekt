<?php
$user_name = $_POST['user_name'];
$password = $_POST['password'];

session_start();
include("connection.php");
include("functions.php");
if (!empty($user_name) && !empty($password)) {
      //select from database
      $query = "SELECT * FROM users WHERE usersName = '$user_name' limit 1";
      $result = mysqli_query($con, $query);
      if ($result) {
        if ($result && mysqli_num_rows($result) > 0) {
          $user_data = mysqli_fetch_assoc($result);
          if ($user_data['usersPwd'] == $password) {
            // echo "$password heslo\n";
            // echo  $user_data['usersPwd'];
            // echo  $user_data['usersName'];
            $_SESSION['usersName'] = $user_data['usersName'];
            //header("Location: admin.php");
            die;
          } else echo "Zadal si nespravne heslo";
        } else echo "Zadal si neplatne prihlasovacie meno alebo heslo";
      } else echo "Prosim zadaj nejake spravne informacie";
    } 