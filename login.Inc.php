<?php
// $user_name = $_POST['user_name'];
$username = $_POST['username'];
$password = $_POST['password'];

session_start();
include("connection.php");
include("functions.php");
if (!empty($username) && !empty($password)) {
  if (preg_match("/^[a-zA-Z0-9]+$/", $username) && preg_match("/^[a-zA-Z0-9]+$/", $password)) {
    //select from database
    $query = "SELECT * FROM registered_users WHERE username = '$username' limit 1";
    $result = mysqli_query($con, $query);
    if ($result) {
      if ($result && mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
        // if ($user_data['password'] == $password) {
        if (password_verify($password, $user_data['password'])) {
          $_SESSION['username'] = $user_data['username'];
          //header("Location: admin.php");
          die;
        } else echo "Zadal si nespravne heslo";
      } else echo "Zadal si neplatne prihlasovacie meno alebo heslo";
    } else echo "Zadal si neplatne prihlasovacie udaje";
  } else echo "Meno a heslo by nemalo obsahovať žiadne špeciálne znaky, medzery, lomky ani HTML tagy";
}   
        // echo "$password heslo\n";
        // echo  $user_data['password'];
        // echo  $user_data['username'];