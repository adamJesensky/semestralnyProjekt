<?php
//check if user is logged in
function check_login($con){

  if(isset($_SESSION['usersName'])){
    $id = $_SESSION['usersName'];
    $query = "SELECT * FROM users where usersName = '$id' limit 1";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0){
      $user_data = mysqli_fetch_assoc($result);
      return $user_data;
    }
    //else echo "No users found";
  }
  //redirect to login page
  header('Location: login.php');
  die;
}

function emptyInputSignup($name, $password) {
  
  if (empty($name) || empty($password)){
    $result=true;
  }
  else {  
    $result = false; 
  }
  return $result;
}


function invalidName($name) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $name)){
    $result = true;
  }
  else {  
    $result = false; 
  }
  return $result;
}

function nameExists($conn, $name) {
  $sql = "SELECT * FROM users WHERE usersName = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../index.php?error=stmtfailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $name);
  mysqli_stmt_execute($stmt);
  $resultData = mysqli_stmt_get_result($stmt);

  if (mysqli_fetch_assoc($resultData)){

  }
  else{
    $result = false;
    return $result;
  }
}

function createUser (){};

function validate_input($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}