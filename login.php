<?php
session_start();
include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //niekto vyplnil formular
  $user_name = $_POST['user_name'];
  $password =  $_POST['password'];

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
          header("Location: admin.php");
          die;
        } else echo "Zadal si nespravne heslo";
      } else echo "Zadal si neplatne prihlasovacie meno alebo heslo";
    } else echo "Prosim zadaj nejake spravne informacie";
  } 
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap Font Icon CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400&display=swap" rel="stylesheet">

</head>

<body>
  <div class="container">
    <h1>Login panel </h1>
    <a href="logout.php">Logout</a>
    <button type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#ModalForm">
      Prihlásiť
    </button>
    <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content prihlasenie">
          <div class="modal-header bg-dark  d-flex justify-content-center ">
            <h1 class="modal-title py-2" id="exampleModalLabel">Prihlásiť</h1>
            <button type="button" id="login_close_btn" class="btn-close btn-close-white position-absolute top-0 end-0"
              data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body bg-dark text-center">
            <form id="form" method="post">
              <div class="mb-3 mt-4 input-control">
                <label for="exampleInputEmail1" class="form-label">Používateľské meno</label>
                <input type="name" name="user_name" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                <div class="error"></div>
              </div>
              <div class="mb-3 input-control">
                <label for="exampleInputPassword1" class="form-label">Heslo</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                <div class="error"></div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-light mt-3" id="login_btn">LOGIN</button>
                <!-- <p>Not a member? <a href="#">Signup now</a></p> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</body>

</html>