<!DOCTYPE html>
<html>

<head>
  <title>Svadobný salón ADRIA</title>
  <meta charset="utf-8">

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

    <header>
      <?php
        include 'header.php';
        ?>
      <!-- <script>
        // ZDROJ: https://css-tricks.com/the-simplest-ways-to-handle-html-includes/
        fetch("header.php")
          .then(response => { return response.text() })
          .then(data => { document.querySelector("header").innerHTML = data; });
      </script> -->
    </header>

    <div id="breadcrumb">
      <div class="breadcrumb"><a href="/">Domov</a><span class="crumbs-separator"> &gt; </span>Naše nevesty</div>
    </div>


    <div class="main-content-contact p-2 p-sm-3 p-lg-4">
      <div class="col-lg-12 d-flex justify-content-center">
        <h1>Naše nevesty</h1>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 m-0 text-center">

        <div class="col p-2">
          <div class="card h-100">
            <img src="sql_data/nase_nevesty/gallery.5e5ed111f190a1.29179286.jpg" class="card-img-top " alt="...">
            <div class="card-body p-2 p-sm-3">
              <h5 class="card-title">Zuzanka</h5>
              <p class="card-text">Úplná topka.</p>
            </div>
          </div>
        </div>

        <div class="col p-2">
          <div class="card h-100">
            <img src="sql_data/nase_nevesty/gallery.5e5ed1424989e7.04507107.jpg" class="card-img-top" alt="...">
            <div class="card-body p-2 p-sm-3">
              <h5 class="card-title">Janka</h5>
              <p class="card-text">Vznikajuci servis a obsluha.</p>
            </div>
          </div>
        </div>
        <div class="col p-2">
          <div class="card h-100">
            <img src="sql_data/nase_nevesty/gallery.5e5ed1c83d0138.65395526.jpg" class="card-img-top" alt="...">
            <div class="card-body p-2 p-sm-3">
              <h5 class="card-title">Petra</h5>
              <p class="card-text">Neviem si viac vynachvalit</p>
            </div>
          </div>
        </div>
        <div class="col p-2">
          <div class="card h-100 ">
            <img src="sql_data/nase_nevesty/gallery.5e5ed21d7a0271.52070836.jpg" class="card-img-top" alt="...">
            <div class="card-body p-2 p-sm-3">
              <h5 class="card-title">Jolanda</h5>
              <p class="card-text">Najlepšia noc mojho života!</p>
            </div>
          </div>
        </div>
        <div class="col p-2">
          <div class="card h-100">
            <img src="sql_data/nase_nevesty/gallery.5e5ed111f190a1.29179286.jpg" class="card-img-top" alt="...">
            <div class="card-body p-2 p-sm-3">
              <h5 class="card-title">Zuzanka</h5>
              <p class="card-text">Úplná topka.</p>
            </div>
          </div>
        </div>

        <div class="col p-2">
          <div class="card h-100">
            <img src="sql_data/nase_nevesty/gallery.5e5ed1424989e7.04507107.jpg" class="card-img-top" alt="...">
            <div class="card-body p-2 p-sm-3">
              <h5 class="card-title">Janka</h5>
              <p class="card-text">Vznikajuci servis a obsluha.</p>
            </div>
          </div>
        </div>
        <div class="col p-2">
          <div class="card h-100">
            <img src="sql_data/nase_nevesty/gallery.5e5ed1c83d0138.65395526.jpg" class="card-img-top" alt="...">
            <div class="card-body p-2 p-sm-3">
              <h5 class="card-title">Petra</h5>
              <p class="card-text">Neviem si viac vynachvalit</p>
            </div>
          </div>
        </div>
        <div class="col p-2">
          <div class="card h-100">
            <img src="sql_data/nase_nevesty/gallery.5e5ed21d7a0271.52070836.jpg" class="card-img-top" alt="...">
            <div class="card-body p-2 p-sm-3">
              <h5 class="card-title">Jolanda</h5>
              <p class="card-text">Najlepšia noc mojho života!</p>
            </div>
          </div>
        </div>


      </div>
    </div>


    <footer>
      <script>
      fetch("footer.php")
        .then(response => {
          return response.text()
        })
        .then(data => {
          document.querySelector("footer").innerHTML = data;
        });
      </script>
    </footer>
  </div>

</body>

</html>