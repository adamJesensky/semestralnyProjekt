<?php
session_start();
include("connection.php");
include("functions.php");
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

  <!-- Latest compiled JavaScript, ajax, sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- https://sweetalert2.github.io -->
  <script src="sweetalert2.all.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">

  <!-- Bootstrap Font Icon CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400&display=swap" rel="stylesheet">

</head>

<body>
  <div class="container bg-dark">
    <!-- <h1 class="text-center">Login panel </h1> -->
    <!-- <a href="logout.php">Logout</a>
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
                <label for="exampleInputEmail1" class="text-white">Používateľské meno</label>
                <input type="name" name="user_name" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                <div class=" text-danger font-weight-bold error" id="error"></div>
              </div>
              <div class="mb-3 input-control">
                <label for="exampleInputPassword1" class="text-white">Heslo</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                <div class=" font-weight-bold text-danger error"></div>
              </div>
              <div class="text-center">
                <button type="button" class="btn btn-light mt-3" id="login_btn" onclick="formsubmit()">LOGIN</button>
              
              </div>
            </form>
          </div>

        </div>
      </div>
    </div> -->
    <div class="row py-5">
      <div class="col-md-8 mx-auto text-center">
        <h1 class="py-2">Prihlásiť</h1>
        <form id="form" method="post">
          <div class="mb-3 mt-4 input-control ">
            <!-- <label for="exampleInputEmail1 username" class="text-white">Používateľské meno</label>
            <input type="name" name="user_name" class="form-control" id=" username" aria-describedby="emailHelp"> -->

            <label for="username" class="text-white">Používateľské meno</label>
            <input type="text" class="form-control" id="username" aria-describedby="usernameHelp">


          </div>
          <div class="mb-3 input-control">
            <!-- <label for="exampleInputPassword1 password" class="text-white">Heslo</label>
            <input type="password" name="password" class="form-control" id=" password"> -->

            <label for="password" class="text-white">Heslo</label>
            <input type="password" class="form-control" id="password">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-light my-3" id="login_btn">LOGIN</button>
            <br>
            <a href="logout.php" class="btn btn-light  my-3 " id="logout_btn">LOGOUT</a>
          </div>
        </form>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-6 offset-md-3">
        <form>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" aria-describedby="usernameHelp">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password">
          </div>
          <button type="submit" class="btn btn-primary" id="login-btn">Login</button>
          <div class="form-group" id="error-message" style="display: none;"></div>
        </form>
      </div>
    </div>
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-6 offset-md-3 text-center">
        <a href="logout.php" class="btn btn-danger">Logout</a>
      </div>
    </div>
  </div>
  </div> -->

</body>

</html>

<script>
// JavaScript validation and form submission
$("form").on("submit", function(e) {
  e.preventDefault();
  // validation for empty fields
  if ($("#username").val() == "" || $("#password").val() == "") {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Zadajte používateľské meno aj heslo',
    });
    return;
  }
  // validation for username length
  if ($("#username").val().length < 3) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Užívateľské meno by malo mať aspoň 3 znaky',
    });
    return;
  }
  // validation for password length
  // if ($("#password").val().length < 8) {
  //    Swal.fire({
  // icon: 'error',
  //             title: 'Oops...',
  //             text: 'Heslo by malo mať aspoň 8 znakov',
  //         });
  //   return;
  // }

  // validation for special characters, whitespaces, slashes, HTML tags in the username field
  var pattern = new RegExp(/[^a-zA-Z0-9]/);
  if (pattern.test($("#username").val()) || /\s/.test($("#username").val())) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Užívateľské meno by nemalo obsahovať žiadne špeciálne znaky, medzery, lomky ani HTML tagy',
    });
    return;
  }

  // validation for special characters, whitespaces, slashes, HTML tags in the password field
  if (pattern.test($("#password").val()) || /\s/.test($("#password").val())) {
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Heslo by nemalo obsahovať žiadne špeciálne znaky, medzery, lomky ani HTML tagy',
    });
    return;
  }

  // login process using ajax call
  $.ajax({
    type: "POST",
    url: "login.Inc.php",
    data: {
      username: $("#username").val(),
      password: $("#password").val()
    },
    // data: formdata,
    cache: false,
    success: function(data) {
      if (!$.trim(data)) {
        window.location.href = 'admin.php';
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: data
        })
      }
    },
    error: function(xhr, status, error) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Error: ' + xhr.status + ' - ' + error,
      });
    }
  });
});
</script>