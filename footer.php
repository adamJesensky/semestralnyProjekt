<!DOCTYPE html>

<title>footer</title>
<!-- OFFER LIST -->
<!-- <ul class="list-group list-group-horizontal-md ">
    <li class=" flex-fill list-group-item p-0">
        <a href="nas_salon.php" class="offer_list">
            <img src="images/house.png" alt="Chicago" width="77">
            <strong>Navštívte nás</strong> Hviezdoslavova 1876 Čadca </a>
    </li>
    <li class=" flex-fill list-group-item p-0">
        <a href="https://www.google.com/maps/dir//Svadobn%C3%BD+sal%C3%B3n+ADRIA,+Hviezdoslavova+1876%2F11,+022+01+%C4%8Cadca/@49.4396465,18.7820927,15.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0x47144027f03fb2c5:0x47da42102f61471c!2m2!1d18.7831236!2d49.4400453"
            class="offer_list" target="_blank">
            <img src="images/map.png" alt="Chicago" width="77">
            <strong>Navigácia</strong>kliknite pre zobrazenie navigácie</a>
    </li>
    <li class=" flex-fill list-group-item p-0">
        <a href="blog.php" class="offer_list">
            <img src="images/blog.png" alt="Chicago" width="77">
            <strong>Náš blog</strong> kliknite pre zobrazenie Blogu </a>
    </li>
    <li class=" flex-fill list-group-item p-0">
        <a href="nase_nevesty.php" class="offer_list">
            <img src="images/husband.png" alt="Chicago" width="77">
            <strong>Naše nevesty</strong> kliknite pre galériu neviest </a>
    </li>
</ul> -->

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 m-0">
  <div class="col p-0 border"> <a href="nas_salon.php" class="offer_list">
      <img src="images/house.png" alt="Chicago" width="77">
      <strong>Navštívte nás</strong> Hviezdoslavova 1876 Čadca </a></div>
  <div class="col p-0 border"><a
      href="https://www.google.com/maps/dir//Svadobn%C3%BD+sal%C3%B3n+ADRIA,+Hviezdoslavova+1876%2F11,+022+01+%C4%8Cadca/@49.4396465,18.7820927,15.25z/data=!4m8!4m7!1m0!1m5!1m1!1s0x47144027f03fb2c5:0x47da42102f61471c!2m2!1d18.7831236!2d49.4400453"
      class="offer_list" target="_blank">
      <img src="images/map.png" alt="Chicago" width="77">
      <strong>Navigácia</strong>kliknite pre zobrazenie navigácie</a></div>
  <div class="col p-0 border"><a href="blog.php" class="offer_list">
      <img src="images/blog.png" alt="Chicago" width="77">
      <strong>Náš blog</strong> kliknite pre zobrazenie Blogu </a></div>
  <div class="col p-0 border "><a href="nase_nevesty.php" class="offer_list">
      <img src="images/husband.png" alt="Chicago" width="77">
      <strong>Naše nevesty</strong> kliknite pre galériu neviest </a></div>
</div>

<iframe
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5188.719988126429!2d18.780928525676952!3d49.439912659563646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47144027f03fb2c5%3A0x47da42102f61471c!2sSvadobn%C3%BD%20sal%C3%B3n%20-%20ADRIA!5e0!3m2!1ssk!2ssk!4v1665875407414!5m2!1ssk!2ssk"
  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
  referrerpolicy="no-referrer-when-downgrade"></iframe>

<div class="copy"><a href="https://gdpr-slovensko.sk/co-je-gdpr/">GDPR</a><br>Všetky práva vyhradené &copy; 2022
  <a href="/" target="_blank">Svadobný salón Adria</a><br>
  <!-- <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-default"
        style="width:auto;">Prihlásiť</button> -->
  <button type="button" class="btn btn-default" data-bs-toggle="modal" data-bs-target="#ModalForm">
    Prihlásiť
  </button>

  <div class="modal fade" id="ModalForm" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content prihlasenie">
        <div class="modal-header bg-dark  d-flex justify-content-center ">
          <h1 class="modal-title py-2" id="exampleModalLabel">Prihlásiť</h1>
          <button type="button" id="login_close_btn" class="btn-close btn-close-white position-absolute top-0 end-0"
            data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body bg-dark">
          <form action="login.inc.php" method="POST">
            <div class="mb-3 mt-4">
              <label for="exampleInputEmail1" class="form-label">Používateľské meno</label>
              <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Heslo</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-light mt-3" id="login_btn">LOGIN</button>
            <!-- <p>Not a member? <a href="#">Signup now</a></p> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div id="id01" class="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="myform bg-dark">
                <h1 class="text-center">Login Form</h1>
                <form>
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-light mt-3">LOGIN</button>
                    <p>Not a member? <a href="#">Signup now</a></p>
                </form>
            </div>
        </div>
    </div> -->
<!-- <form class="modal-content animate" action="/action_page.php" method="post">

        <div class="container">
            <div class="modal-header">
                <h5 class="modal-title">Prihlásiť</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <label for="uname"></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="psw"></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit">Login</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'"
                class="cancelbtn">Cancel</button>
        </div>
    </form> -->
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>