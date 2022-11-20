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
  <div class="container">
    <h1 class="text-center">Login panel </h1>
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

<script>
const setError = (element, message) => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = message;
  inputControl.classList.add('error');
  inputControl.classList.remove('success');
}
const setSuccess = element => {
  const inputControl = element.parentElement;
  const errorDisplay = inputControl.querySelector('.error');

  errorDisplay.innerText = '';
  inputControl.classList.add('success');
  inputControl.classList.remove('error');
}

function stripslashes(str) {
  return str.replace(/\\'/g, '\'').replace(/\"/g, '"').replace(/\\\\/g, '\\').replace(/\\0/g, '\0');
}

function escapeHtml(text) {
  var map = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };

  return text.replace(/[&<>"']/g, function(m) {
    return map[m];
  });
}

function formsubmit() {
  var user_name = document.getElementById('exampleInputEmail1').value;
  var pwd = document.getElementById('exampleInputPassword1').value;

  var username = document.getElementById('exampleInputEmail1');
  var password = document.getElementById('exampleInputPassword1');
  var usernameValue = username.value.trim();
  var passwordValue = password.value.trim();

  if (usernameValue === '') {
    setError(username, 'Nezadali ste žiadne používateľské meno');
    return false;
  } else {
    usernameValue = stripslashes(usernameValue);
    usernameValue = escapeHtml(usernameValue);
    setSuccess(username);
  }


  if (passwordValue === '') {
    setError(password, 'Nezadali ste žiadne heslo');
    return false;
  } else {
    setSuccess(password);
    passwordValue = stripslashes(passwordValue);
    passwordValue = escapeHtml(passwordValue);
    var formdata = '&user_name=' + usernameValue + '&password=' + passwordValue;
    // AJAX code to submit form.
    // console.log("AA");
    $.ajax({
      type: "POST",
      url: "login.Inc.php", //call storeemdata.php to store form data
      data: formdata,
      cache: false,

      success: function(html) {
        if (!$.trim(html)) {
          window.location.href = 'admin.php';
        } else {
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: html
          })
          //alert(html);
        }
      }
    });
  }
  return false;
}
</script>

<style>

</style>