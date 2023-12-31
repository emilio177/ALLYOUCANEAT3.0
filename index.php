<?php 
session_start();
if (isset($_SESSION['id_usuario'])) {
    header('location: vistas/productos.php');
    // You may want to remove this echo statement unless it's for debugging purposes
    // echo "sesion" . $_SESSION['id_usuario'];
} else {
    //echo "Sesión no iniciada";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="stylesheet" href="./assets/css/footer.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
  <header>
<div id="mostrarBarra"></div>
  </header>

  <main>
    <br />
    <br />
    <div class="container">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb">
                <img class="card-img-top" src="./assets/images/bar.png" alt="Card image cap">
                <div class="card-body mb">
                  <h5 class="card-title">Instalaciones</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptatem nostrum culpa pariatur blanditiis eligendi ea accusamus, est distinctio nihil. Officiis totam accusantium aperiam incidunt aliquam qui, odio dolore fugiat.</p>
                  <button type="button" class="btn btn-primary mb">button</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb">
                <img class="card-img-top" src="./assets/images/food.webp" alt="Card image cap">
                <div class="card-body mb">
                  <h5 class="card-title">Variacion de Comida</h5>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae quae consequatur rerum facere aliquam unde molestiae debitis voluptatem inventore fuga nesciunt, maiores, perferendis.</p>
                  <button type="button" class="btn btn-primary mb">button</button>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb">
                <img class="card-img-top" src="./assets/images/resta.jpg" alt="Card image cap">
                <div class="card-body mb">
                  <h5 class="card-title">Ambiente</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam consectetur vel excepturi ab recusandae qui perferendis illum est, doloribus, ipsam quisquam voluptatibus impedit.</p>
                  <button type="button" class="btn btn-primary mb">button</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </br>
  </main>


  <!--Aqui empieza el Footer-->
  <footer>
    <div class="container-fluid">
      <div class="row footer-top">
        <div class="col-sm-4 text-center">
          <h4 class="ft-text-title">Media Name</h4>
          <h6 class="ft-desp">Company Name
            <br>Country Name
          </h6>
          <h4 class="details">
            <a class="contact" href="#">
              <i class="fa fa-phone" aria-hidden="true"></i> +977-000000</a>
          </h4>
          <h4 class="details">
            <a class="contact" href="#">
              <i class="fa fa-phone" aria-hidden="true"></i> +977-000000</a>
          </h4>
        </div>
        <div class="col-sm-4 text-center border-left">
        </br>
        </br>
          <h4 class="ft-text-title">Sucursales</h4>
          <div class="address-member">
          </br>
            <p class="member">
              <b>Celaya, Gto.</b>: 111 Los Aztecas
            </p>
            <p class="member">
              <b>Celaya, Gto.</b>: 102 - San Miguel De Allende
            </p>
            <p class="member">
              <b>Celaya, Gto.</b>: 53 Caoba
            </p>
            <p class="member">
              <b>Salamanca, Gto.</b>: 473 C. Alvaro Obregón
            </p>
          </div>
        </div>
        <div class="col-sm-4 col-xs-12 text-center border-left">
          <h4 class="ft-text-title">About</h4>
          <div class="pspt-dtls">
            <a href="./vistas/nosotros.html" class="about">About</a>
            <a href="#" class="team">Team</a>
            <a href="#" class="advertise">Advertise</a>
            <br><br><br><br><br><br><br>
          </div>
          <div class="container">
            <hr>
            <div class="text-center center-block">
              <br />
              <a href="https://www.facebook.com/bootsnipp"><i id="social-fb"
                  class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://twitter.com/bootsnipp"><i id="social-tw"
                  class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp"
                  class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
            </div>
            <hr>
          </div>
          </br>
        </div>
      </div>
      <div class="row ft-copyright pt-2 pb-2" style="padding-left: 25px;">
        <div class="col-sm-4 text-pp-crt">cpoyright 2023 All Rights Reserved</div>
      </div>
    </div>
  </footer>
</body>

</html>

<script>
  $(document).ready(function() {
       
        barra();
  
    });
  function barra() {
        $.ajax({
            url: 'controller/user/ctrlUser.php?opc=6',
            type: 'GET',
            success: function(response) {
                $('#mostrarBarra').html(response);
            },
            error: function() {
                // Maneja errores si la solicitud AJAX falla
                $('#mostrarBarra').html('Error al cargar la barra de navegación');
            }
        });
    }
</script>