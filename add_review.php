<?php 
  session_start();
  include ("connection.php");
  include ("functions.php");
  $user_data = check_login($con);
?>


<!DOCTYPE html>
<html>

<head>
  <title>Add Review</title>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <!-- <link rel="stylesheet" href="styles.css"> -->
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
<div class="container-fluid bg-dark d-flex align-items-center justify-content-center flex-column"
  id="addReviewContainer">
  <h2 class="text-light text-center mb-5">Pridať recenziu</h2>
  <form class="d-flex flex-column align-items-center text-light text-center" id="addReviewForm">
    <div class="form-group  mb-3">
      <label for="title">Meno zákazníka:</label>
      <input type="text" class="form-control same-size" name="title" id="title" required>
    </div>
    <div class="form-group  mb-3">
      <label for="description">Obsah:</label>
      <textarea class="form-control same-size" name="description" id="description" rows="3" required></textarea>
    </div>
    <div class="form-group  mb-3">
      <label for="image">Vybrať súbor</label>
      <input type="file" onchange="displayFileSizeReview()" class="form-control-file " name="image" id="addReviewInput"
        required>
      <p class="text-light d-flex align-items-center justify-content-center py-3" id="fileSize"></p>
    </div>
    <button type="button" class="btn btn-light btn-lg mb-3" id="addReviewBtn" onclick="uploadReview()">Nahrať</button>
  </form>
</div>

<body>


</body>

</html>
<style>
body {
  background-color: #1c1c1c;
  /* dark background color */
}

.container-fluid {
  height: 100vh;
}

#addReviewContainer {
  max-width: 800px;
}

#addReviewForm {
  max-width: 500px;
}

#addReviewInput {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 12px;
  box-shadow: inset 0 0 10px #ccc;
}

#addReviewBtn {
  background-color: #1c1c1c;
  border: 1px solid #1c1c1c;
  color: #fff;
  font-weight: bold;
  transition: all 0.3s ease;
}

#addReviewBtn:hover {
  background-color: #fff;
  color: #1c1c1c;
  border-color: #1c1c1c;
}

.same-size {
  width: 100%;
}
</style>