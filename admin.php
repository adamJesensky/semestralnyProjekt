<?php 
  session_start();
  include ("connection.php");
  include ("functions.php");
  $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Admin Panel</title>
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
  <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
  <!-- querry for Fetching data-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


  <script src="functions.js"></script>
</head>

<body>
  <div class="container text-center">
    <header>
      <?php
        include 'header.php';
        ?>
      <!-- <script>
      // ZDROJ:
      // https://css-tricks.com/the-simplest-ways-to-handle-html-includes/
      fetch("header.php")
        .then(response => {
          return response.text()
        })
        .then(data => {
          document.querySelector("header").innerHTML = data;
        });
      </script> -->
    </header>


    <h1>Admin panel </h1>

    <div class="d-md-flex justify-content-center align-items-center">
      <h2 class="text-center mx-auto">Prihlásený úžívateľ: <?php echo $user_data['username'];?></h2>
    </div>
    <div class="d-grid gap-3 d-sm-block">
      <a href="logout.php" class="btn btn-dark align-self-center">Logout</a>
      <a href="add_photos.php" class="btn btn-info align-self-center" tabindex="-1" role="button">Pridať fotky</a>
      <a href="add_review.php" class="btn btn-info align-self-center" tabindex="-1" role="button">Pridať recenziu</a>
    </div>

    <!-- OZNAMY CEZ DATABAZU -->
    <h3 class="text-start fw-bold ms-3 py-2">Oznamy:</h3>
    <div class="table-responsive">
      <table class="table table-dark table-hover table-borderless align-middle announcement-table">
        <thead>
          <tr>
            <!-- <td scope="col">ID.</td> -->
            <td scope="col">Sprava</td>
            <td scope="col">Created at</td>
            <td scope="col">Edit</td>
            <td scope="col">Delete</td>
          </tr>
        </thead>
        <tbody>
          <script>
          fetchAnnouncements();
          </script>
        </tbody>
      </table>
    </div>

    <!-- Modal for creating a new announcement -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
      data-bs-target="#createAnnouncementModal">Vytvoriť oznam</button>

    <div class="modal fade" id="createAnnouncementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-dark d-flex justify-content-center ">
            <h5 class="modal-title" id="exampleModalLabel">Vytvoriť oznam</h5>
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0"
              data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-dark">
            <form id="createAnnouncementForm">
              <div class="form-group">
                <label for="announcement_text">Announcement</label>
                <textarea class="form-control" id="announcement_text" name="announcement_text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer bg-dark d-flex justify-content-center">
            <button type="button" class="btn btn-light mt-3" id="login_btn"
              onclick="createAnnouncement()">Create</button>
            <button type="button" class="btn btn-light mt-3" id="login_btn" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL edit announcement -->
    <div class="modal fade " id="editAnnouncementModal" tabindex="-1" role="dialog"
      aria-labelledby="editAnnouncementModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-dark d-flex justify-content-center ">
            <h5 class="modal-title text-white" id="editAnnouncementModalLabel">Edit Announcement</h5>
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0"
              data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </div>
          <div class="modal-body bg-dark">
            <form id="editAnnouncementForm">
              <!-- <form id="editAnnouncementForm" onsubmit="return editAnnouncement()"> -->
              <input type="hidden" id="editAnnouncementId" name="editAnnouncementId" value="">

              <div class="form-group">
                <textarea class="form-control mb-3" id="editAnnouncementText" name="editAnnouncementText"
                  rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer bg-dark d-flex justify-content-center">
            <button type="button" class="btn btn-light mt-3" id="login_btn" onclick="submitEditAnnouncementForm()">Save
              Changes</button>
            <button type="button" class="btn btn-light mt-3" id="login_btn" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- END- OZNAMY CEZ DATABAZU -->

    <br>
    <hr>
    <!-- REGISTER BUTTON + MODAL  -->
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
            <form method="POST" id="createForm">
              <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="text-white">Používateľské meno</label>
                <input type="name" name="user_name" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="text-white">Heslo</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="text-center">
                <!-- <button type="submit" name="submit" class="btn btn-light mt-3 " id="login_btn">Registrovat</button> -->
                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-light mt-3" id="login_btn"
                  onclick="createUser()">Registrovat</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- UPDATE MODAL  -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="false">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content prihlasenie">
          <div class="modal-header bg-dark d-flex justify-content-center ">
            <h1 class="modal-title py-2" id="exampleModalLabel">Edit User</h1>
            <button type="button" id="edit_close_btn" class="btn-close btn-close-white position-absolute top-0 end-0"
              data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body bg-dark">
            <form id="editForm">
              <div class=" form-group">
                <input type="hidden" class="form-control" id="id" name="id">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
            </form>
          </div>
          <div class="modal-footer bg-dark d-flex justify-content-center">
            <button type="button" class="btn btn-light mt-3" id="login_btn" onclick="submitEditForm()">Save
              changes</button>
            <button type="button" class="btn btn-light mt-3" id="login_btn" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>

    <!-- TABULKA UZIVATELOV -->
    <h3 class="text-start fw-bold ms-3 py-2">Tabuľka používateľov</h3>
    <div class="table-responsive">
      <table class="table table-dark table-hover table-borderless align-middle user_table" id="user_table">
        <thead>
          <tr>
            <td scope="col">ID.</td>
            <td scope="col">Používateľské meno</td>
            <td scope="col">Heslo</td>
            <td scope="col">Created at</td>
            <!-- <td scope="col">Last login</td> -->
            <td scope="col">Edit</td>
            <td scope="col">Delete</td>
          </tr>
          <thead>
          <tbody>
            <script>
            fetchData();
            </script>
          </tbody>
      </table>
    </div>
  </div>


</body>

</html>