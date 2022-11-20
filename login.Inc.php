<?php
if (isset($_POST['login_btn'])){

  $name = $_POST['exampleInputEmail1'];
  $password = $_POST['exampleInputPassword1'];

  require_once 'dbh.Inc.php';

  if (emptyInputSignup($name, $password) !== false){
    header("location: ../index.php?error=emptyinput");
    exit();
  }
  if (invalidName($name) !== false){
    header("location: ../index.php?error=invalidName");
    exit();
  }
  if (nameExists($conn, $name) !== false){
    header("location: ../index.php?error=usernametaken");
    exit();
  }
  createUser($conn, $name, $password);

} else {
  header("location: ../index.php");
  exit();
}