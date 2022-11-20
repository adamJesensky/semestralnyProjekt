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
        // ZDROJ: https://css-tricks.com/the-simplest-ways-to-handle-html-includes/
        fetch("header.php")
          .then(response => { return response.text() })
          .then(data => { document.querySelector("header").innerHTML = data; });
      </script> -->
    </header>


    <!-- <div id="breadcrumb">
      <div class="breadcrumb"><a href="index.php">Domov</a><span class="crumbs-separator"> &gt; </span>Náš salón</div>
    </div> -->


    <div class="text-center row justify-content-center rtecenter m-0">
      <div class="px-5 col-lg-8 ">
        <h1>Svadobný salón ADRIA</h1>
        <hr>
        <h5>Ak sa blíži Váš svadobný deň, ples, stužková alebo iná významná udalosť vo Vašom
          živote, sme tu vždy pre Vás.</h5>
        <h5>Ponúkame široký výber svadobných a spoločenských
          šiat na zapožičanie aj na kúpu.</h5>
        <hr>
        <p>Svadobné šaty Vám vieme objednať aj na mieru, prípadne podľa Vaších predstáv.</p>
        <p>Zavolajte nám na
          <a href="tel:+421911932932">telefónne číslo</a> napíšte správu na
          <a href="https://www.facebook.com/Adriasvadobnysalon/">Facebooku</a> alebo nám napíšte
          <a href="mailto:info@salon-adria.sk">e-mail.</a>
        </p>
        <!-- <hr /> -->
      </div>

      <img src="images/Salon_ADRIA_-_interier.jpg" class="p-0" alt="obrazok">
      <div class="row justify-content-center">
        <h3>Náš salón ponúka aj:</h3>
        <!-- <hr> -->
        <div class="col-md-4 p-0">
          <ul class="list-unstyled d-grid gap-1">
            <li>závoje, bolerká, kabátiky,</li>
            <li>svadobné ozdoby do vlasov,</li>
            <li>šperky k Vaším šatám,</li>
            <li>svadobné poháre, oznámenia, </li>
            <li>svadobné topánky,</li>
            <li>pierka pre hostí,</li>
            <li>svadobné podbradníčky,</li>
            <li>detské obleky na zapožičanie, </li>
            <li>šaty na 1. sv. prijímanie,</li>
            <li>košle a viazanky pre mladých pánov.</li>
          </ul>
        </div>
        <div class="col-md-4 d-flex align-self-center justify-content-center p-0">
          <img src="images/onas/1506092056_00010.jpg" class="img-fluid" alt="obrazok_siat_v_salone">
        </div>
      </div>

      <div class="row d-flex align-self-center justify-content-center py-4">
        <h3>Tešíme sa na Vašu návštevu!</h3>
        <img class="img-responsive" style="width:80%" src="images/onas/1506092056_00001.jpg" alt="obrazok">
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