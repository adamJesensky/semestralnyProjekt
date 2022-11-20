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

    <section id="content">

      <div class="main-content">

        <h1 class="text-center">Blog</h1>


        <article>
          <div class="col-lg-3">
            <a href="svadobne-pripravy-krok-za-krokom.php"><img src="images/calendar-3073971_640.jpg" width="320"
                height="200" alt="" /></a>
          </div>
          <div class="col-lg-9"><strong><a href="svadobne-pripravy-krok-za-krokom.php">Svadobné
                prípravy krok
                za krokom</a></strong><br />Váš vyvolený sa konečne rozhýbal a prekvapil krásnym
            žiarivým prsteňom? Gratulujeme! Keď vytriezviete z radostného ošiaľu...<br /><small><span
                class="date-display-single">2. 1. 2022</span></small></div>
          <div class="clearfix"></div>
        </article>

        <article>
          <div class="col-lg-3">
            <a href="skuska-svadobnych-siat.php"><img src="images/Skuska_svadobnych_siat_-_ilustracny_obrazok_3.jpg"
                width="320" height="200" alt="" /></a>
          </div>
          <div class="col-lg-9"><strong><a href="skuska-svadobnych-siat.php">Skúška svadobných
                šiat</a></strong><br />Tie pravé svadobné šaty Ktoré sú tie správne šaty? Ktoré sú tie
            pravé? Spytuje sa mnoho budúcich neviest, ktorým sa niekedy krúti hlava z...<br /><small><span
                class="date-display-single">2. 1. 2022</span></small></div>
          <div class="clearfix"></div>
        </article>

        <article>
          <div class="col-lg-3">
            <a href="Ako-si-vybrat-svadobneho-fotografa.php"><img
                src="images/Ako-si-vybrat-svadobneho-fotografa/Ako_si_vybrat_svadobneho_fotografa_-_ilustracny_obrazok_2.jpg"
                width="320" height="200" alt="" /></a>
          </div>
          <div class="col-lg-9"><strong><a href="Ako-si-vybrat-svadobneho-fotografa.php">Ako si
                vybrať
                svadobného fotografa</a></strong><br />Zdá sa vám, že váš vysnívaný deň, ktorý ste tak
            dlho plánovali, uplynul, ani neviete ako? Nebojte sa, môžete sa k nemu kedykoľvek
            vrátiť...
            <br /><small><span class="date-display-single">2. 1. 2022</span></small>
          </div>
          <div class="clearfix"></div>
        </article>

        <article>
          <div class="col-lg-3">
            <a href="Ako-si-vybrat-spravneho-DJ-a.php"><img
                src="images/Ako-si-vybrat-spravneho-DJ-a/Ako_si_vybrat_spravneho_DJ-a_-_ilustracny_obrazok_2.jpg"
                width="320" height="200" alt="" /></a>
          </div>
          <div class="col-lg-9"><strong><a href="Ako-si-vybrat-spravneho-DJ-a.php">Ako si vybrať
                správneho
                DJ-a</a></strong><br />Hostia na parkete zanietene tancujú. Sukne sa vlnia vo víre
            tanca, páni povoľujú kravaty. Chytľavé melódie nenechajú nikoho nehybne...<br /><small><span
                class="date-display-single">2. 1. 2022</span></small></div>
          <div class="clearfix"></div>
        </article>

      </div>

      <div class="clearfix"></div>

    </section>

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