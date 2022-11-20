<?php 
  session_start();
  include ("connection.php");
  include ("functions.php");
  $user_data = check_login($con);
  //registracia clena
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //niekto vyplnil formular
  $user_name = $_POST['user_name'] ;
  $password =  $_POST['password'];
  if (!empty($user_name) && !empty($password)){
    //save to database
    $query = "INSERT INTO users (usersName,usersPwd ) values('$user_name', '$password')";
    mysqli_query($con, $query);
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>admin panel</title>
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

  <!-- https://sweetalert2.github.io -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<body>
  <div class="container text-center">
    <h1>Admin panel </h1>
    <h2>Prihlásený úžívateľ: <?php echo $user_data['usersName'];?></h2>
    <a href="logout.php" class="btn btn-secondary">Logout</a>

    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalForm">
      Registrovat uzivatela
    </button>
    <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content prihlasenie">
          <div class="modal-header bg-dark  d-flex justify-content-center ">
            <h1 class="modal-title py-2" id="exampleModalLabel">Registracia</h1>
            <button type="button" id="login_close_btn" class="btn-close btn-close-white position-absolute top-0 end-0"
              data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body bg-dark">
            <form method="POST">
              <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label">Používateľské meno</label>
                <input type="name" name="user_name" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Heslo</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="text-center">
                <button type="submit" name="submit" class="btn btn-light mt-3 " id="login_btn">Registrovat</button>
                <!-- <p>Not a member? <a href="#">Signup now</a></p> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <p class="text-start fw-bold ms-3">Tabuľka používateľov</p>
    <div class="table-responsive">
      <table class="table table-dark table-hover table-borderless align-middle">
        <thead>
          <tr>
            <td scope="col">ID.</td>
            <td scope="col">Používateľské meno</td>
            <td scope="col">Heslo</td>
            <!-- <td scope="col">Edit</td> -->
            <td scope="col">Delete</td>
          </tr>
          <thead>
          <tbody>
            <?php
              $records = mysqli_query($con,"select * from users"); // fetch data from database

              while($data = mysqli_fetch_array($records))
              {
              ?>
            <tr>
              <th scope="row"><?php echo $data['usersId']; ?></td>
              <td><?php echo $data['usersName']; ?></td>
              <td><?php echo $data['usersPwd']; ?></td>
              <!-- <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td> -->
              <!-- <td><a href="delete.php?id=<?php echo $data['id']; ?>"></a></td> -->
              <!-- <td><input type='checkbox' name='keyToDelete' value="<?php echo $query_row['topic_id'];?>" required></td>
              <td><input type="submit" name="submitDeleteBtn" class="btn btn-danger"></td> -->
              <!-- <td><a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a></td> -->
              <td><a href="delete.php?id=<?php echo $data['usersId']; ?>" class="del_btn btn btn-danger  btn-sm">Vymazať
                  užívateľa</a></td>
            </tr>
            <?php
              }
              ?>
          </tbody>
      </table>
    </div>
  </div>

</body>

</html>

<?php 


?>