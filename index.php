<!DOCTYPE html>
<html>


<head>
  <title>Svadobný salón ADRIA</title>
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


    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/titulneFoto.png" alt="Los Angeles" class="d-block" style="width:100%">
          <div class="carousel-caption ">
            <h4>SVADOBNÁ SEZÓNA 2022 JE OTVORENÁ !</h4>
            <p>Svadobné šaty ponúkame na predaj alebo na prenájom, nech sa páči, prezrite si našu ponuku
              svadobných šiat. </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slider1.jpg" alt="Chicago" class="d-block" style="width:100%">
          <div class="carousel-caption ">
            <h4>NEVIEŠ ČO PONÚKAME ?</h4>
            <p>Prečítaj si viac o nás, naších službách a našom salóne.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/becca-mchaffie-Fzde_6ITjkw-unsplash.jpg" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h4>NÁJDI TIE PRAVÉ SPOLOČENSKÉ ŠATY ! </h4>
            <p>Spoločenské šaty ponúkame na predaj alebo na prenájom, nech sa páči, prezrite si našu ponuku
              spoločenkých šiat.</p>
          </div>
        </div>
      </div>
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>


    <section id="offer">

      <h1>TVOJ SVADOBNÝ SALÓN</h1>
      <div class="offer-list col-lg-4">
        <a href="svadobne_saty.php" class="img">
          <span>Svadobné šaty</span>
          <img src="images/saty_icon.PNG" alt="Chicago" width="262" height="220">
        </a>
      </div>
      <div class="offer-list col-lg-4">
        <a href="nas_salon.php" class="img">
          <span>Náš salón</span>
          <img src="images/salo.PNG" alt="Chicago" width="262" height="220">
        </a>
      </div>
      <div class="offer-list col-lg-4">
        <a href="kontakt.php" class="img">
          <span>Kontakt</span>
          <img src="images/kontakt_icon.png" alt="Chicago" width="262" height="220">
        </a>
      </div>

      <div class="clearfix"></div>
    </section>

    <hr>
    <div class="text-center px-3">
      <p><strong>OZNAM:</strong></p>
      <p><em><strong>Pripomíname, že na skúšku svadobných šiat je potrebné sa vopred objednať !</strong></em> </p>
      <p><em>Pri zarezervovani svadobných šiat na Váš termín svadby sa platí záloha v hodnote 100€.</em></p>
      <p><em>Pri skúšaní svadobných šiat je skúšanie troch modelov grátis.</em></p>
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