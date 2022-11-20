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
        include './header.php';
        ?>
      <!-- <script>
        // ZDROJ: https://css-tricks.com/the-simplest-ways-to-handle-html-includes/
        fetch("header.php")
          .then(response => { return response.text() })
          .then(data => { document.querySelector("header").innerHTML = data; });
      </script> -->
    </header>

    <div id="breadcrumb">
      <div class="breadcrumb"><a href="index.php">Domov</a><span class="crumbs-separator"> &gt; </span>Svadobné šaty
      </div>
    </div>

    <section id="content">
      <div class="main-content">
        <header class="text-center">
          <h1>Spoločenské šaty</h1>
          <hr />
          <h4>Najnovšie modely svadobných a spoločenských šiat nájdete na našom <a
              href="https://www.facebook.com/Adriasvadobnysalon/">Facebooku</a> alebo priamo u nás v salóne
            Adria v Čadci.</h4>
          <h4>Zavolajte nám na
            <a href="tel:+421911932932">telefónne číslo</a> napíšte správu na
            <a href="https://www.facebook.com/Adriasvadobnysalon/">Facebooku</a> alebo nám napíšte
            <a href="mailto:info@salon-adria.sk">e-mail.</a>
          </h4>
          <hr />
          <p>Tešíme sa na Vašu návštevu!</p>
          <hr />
        </header>

        <form class="webform-client-form webform-client-form-10" action="POST" method="POST" id="webform-client-form-10"
          accept-charset="UTF-8">
          <div class="form-item webform-component webform-component-textfield webform-component--meno">

            <!-- <div class="d-flex justify-content-center align-self-center row row-cols-1 text-cente">
              <input class="webform-submit button-primary form-submit py-4" type="submit" name="btn3"
                value="novinky 2020" style=" margin: 0px 10px 0px 10px !important;width: 230px !important;" />
              <input class="webform-submit button-primary form-submit py-4" type="submit" name="btn1"
                value="novinky 2019" style=" margin: 0px 10px 0px 10px !important;width: 230px !important;" />
              <input class="webform-submit button-primary form-submit py-4" type="submit" name="btn2"
                value="novinky 2018" style=" margin: 0px 10px 0px 10px !important;width: 230px !important;" />
            </div> -->
          </div>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button class="btn btn-primary tlacidla" type="submit" data-bs-toggle="button">Novinky
              2022</button>
            <button class="btn btn-primary tlacidla" type="submit" data-bs-toggle="button">Kolekcia
              2021</button>
            <button class="btn btn-primary tlacidla" type="submit" data-bs-toggle="button">Kolekcia
              2020</button>
          </div>
        </form>
      </div>
    </section>

    <div class="obsah">
      <br>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 photos m-0 p-2">
        <div class=" item"><a href="sql_data/novinky_2020/1.jpg" data-lightbox="photos"><img class="img-fluid"
              src="sql_data/novinky_2020/1.jpg"></a></div>
        <div class=" item"><a href="sql_data/novinky_2020/2.jpg" data-lightbox="photos"><img class="img-fluid"
              src="sql_data/novinky_2020/2.jpg"></a></div>
        <div class=" item"><a href="sql_data/novinky_2020/3.jpg" data-lightbox="photos"><img class="img-fluid"
              src="sql_data/novinky_2020/3.jpg"></a></div>
      </div>
      <!-- lightbox kniznice-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

      <!-- <?php 
            if (isset($_POST['btn1'])||isset($_POST['btn2'])||isset($_POST['btn3'])) 
              { 
                if (isset($_POST['btn1'])) {include_once 'mysql/novinky_2019.php';}
                if (isset($_POST['btn2'])) {include_once 'mysql/novinky_2017.php';}
                if (isset($_POST['btn3'])) {include_once 'mysql/novinky_2020.php';}
                }
            else {  include_once 'mysql/novinky_2020.php';
                    include_once 'mysql/novinky_2019.php';
                    include_once 'mysql/novinky_2017.php';
                  }
                  // include_once 'connect.php';
                  // $query = $con->query("SELECT * FROM novinky_2020 ORDER BY id DESC");
              // if($query->num_rows > 0){
              //     while($row = $query->fetch_assoc()){
              //         $imageURL = 'uploads/novinky_2020/'.$row["file_name"];
              // <div class="prod-list col-md-4">
              //       <a href="">
              //       <span><img src="<?php echo $imageURL; ?>" width="709" height="1024" alt="" /></span>
              // <br>
              //       </a>
              //       <a href="<?php //echo $imageURL; ?>" data-lightbox="gallery" class="zoom" ><i class="fa fa-search-plus fa-lg"></i></a>
              //     </div> 
                  
              //  }
              // }
          ?> -->
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