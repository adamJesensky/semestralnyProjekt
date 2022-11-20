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



    <div class="main-content-contact">
      <div class="col-lg-12 d-flex justify-content-center">
        <h1>Kontakt</h1>
        <hr>
      </div>

      <div class="row text-center">
        <div class="col-lg-6">
          <div class="rtecenter">
            <h2>Svadobný Salón ADRIA</h2>
            <p><a
                href="https://www.google.com/maps/place/Svadobn%C3%BD+sal%C3%B3n+ADRIA/@49.4402825,18.7841321,17z/data=!4m5!3m4!1s0x47144027f03fb2c5:0x47da42102f61471c!8m2!3d49.4400453!4d18.7831236">Hviezdoslavova
                1876</a> </p>
            <p>022 01, Čadca</p>
            <hr />
            <p><strong>Telefón:</strong><a href="tel:+421414322096">+421 414 322 096</a></p>
            <p><strong>Mobil: </strong><a href="tel:+421911932932">+421 911 932 932</a></p>
            <p><strong>E-mail: </strong><a href="mailto:info@salon-adria.sk">info@salon-adria.sk </a></p>
            <hr>
            <p><strong>OTVÁRACIE HODINY:</strong></p>
            <p><em><strong>Pondelok – Piatok:</strong></em></p>
            <p><em>9:00 - 12:00</em></p>
            <p><em>12:30 – 16:30</em></p>
            <p><em><strong>Sobota:</strong> 9:00 - 12:00</em></p>
            <p><em><strong>Nedeľa:</strong> zatvorené!</em></p>
          </div>
        </div>
        <div class="col-lg-6">
          <h2>Kontaktný formulár</h2>
          <form class="webform-client-form webform-client-form-10" action="/kontakt" method="post"
            id="webform-client-form-10" accept-charset="UTF-8">
            <div class="col-lg-12 flex-fill ">
              <div class="lg-form mb-0">
                <input type="text" id="name" name="name" placeholder="Meno" class="form-control">
                <input type="text" id="email" name="email" placeholder="E-mail" class="form-control">
                <textarea type="text" id="message" name="message" rows="5" placeholder="Správa"
                  class="form-control md-textarea"></textarea>
              </div>
            </div>
            <div class="form-actions"><input class="webform-submit button-primary form-submit" type="submit" name="op"
                value="Odoslať" /></div>
          </form>
        </div>
      </div>
      <div class="text-center px-3">
        <hr>
        <p><strong>OZNAM:</strong></p>
        <p><em><strong>Pripomíname, že na skúšku svadobných šiat je potrebné sa vopred objednať !</strong></em>
        </p>
        <p><em>Pri zarezervovani svadobných šiat na Váš termín svadby sa platí záloha v hodnote 100€.</em></p>
        <p><em>Pri skúšaní svadobných šiat je skúšanie troch modelov grátis.</em></p>
        <hr>
        <p><strong>Fakturačná adresa</strong></p>
        <p>Anna Buková – ADRIA</p>
        <p>Oščadnica 932, 023 01</p>
        <p>IČO: 477 401 08</p>
        <p>DIČ: 1025968944</p>
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