<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sistema de Admin | Selfish</title>
    <link rel="shortcut icon" href="https://cdn.selfish.com.mx/wp-content/uploads/2016/09/ico-2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://clientes.selfish.com.mx/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://clientes.selfish.com.mx/css/iniciosesion.css" />
  </head>
  <body>
      <!-- Circulos de fondo-->

    <div class="login">
      <div class="circulo" style="top: -55%; left: 60%;">
        <div class="circulo-banner"></div>
      </div>
      <div class="circulo" style="top: 55%; left: -15%;">
         <div class="circulo-banner"></div>
      </div> 
<!--/Circulos de fondo-->

        <!-- Container-->

      <div class="container">

           <!-- contenedor secundario derecho -->

          <div class="col-md-6 banner-sec">
              <img class="img-inicio" src="https://intranet.selfish.com.mx/assets/Collage.png" alt="Card image cap"/>
            </div>

           <!-- /contenedor secundario derecho -->

         <!-- contenedor secundario izquierdo -->

          <div class="col-md-6 login-sec">
            <div>
              <img class="img-logo" src="https://intranet.selfish.com.mx/assets/Selfish-logo.svg" alt="Card image cap" ></img>
              <h4>ADMIN</h4>
            </div>
            <div class="bienvenido">
              <h3>Bienvenido</h3>
              <div class="iniciar-sesion">
              <h5>Iniciar sesión</h5>
              </div>
            </div>
            <!-- formulario -->
            <form id="formulario_cliente" action="dashboard.php" class="formulario" method="POST">
              <div class="input">
                <label for="correo">CORREO ELECTRÓNICO</label>
                <span>
                  <input name="correo" type="email" placeholder="Correo electrónico" required autocomplete="on" value="" />
                </span>
              </div>
              <div class="input">
                <label for="contrasena">CONTRASEÑA</label>
                  <span>
                    <input id="password" name="password" type="password" placeholder="Contraseña" required autocomplete="off" value="" />
                      <i><img id="eyeicon" src="https://admin-clientes.selfish.com.mx/img/cerrar.png" width="32px"></i>
                  </span>
          </div>
          <input type="submit" class="btn" value="INICIAR SESIÓN" style="margin: 0px auto" />
        </form>
  
    <!-- /Formulario-->

      </div>

      <!-- /contenedor secundario izquierdo -->
      
    </div>

    <!-- Container-->

  </div>
  
  <!-- Funcion Inicio de Sesion -->
  <script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");

    eyeicon.onclick = function() {
      if (password.type == "password") {
        password.type = "text";
        eyeicon.src = "https://admin-clientes.selfish.com.mx/img/ver.png";
      } else {
        password.type = "password";
        eyeicon.src = "https://admin-clientes.selfish.com.mx/img/cerrar.png";
      }
    }
  </script>
  
  <!-- /Funcion Inicio de Sesion -->
  <script>
    history.pushState(null, null, 'https://admin-clientes.selfish.com.mx');
    window.addEventListener('popstate', function () {
        history.pushState(null, null, 'https://admin-clientes.selfish.com.mx');
    });
</script>
  </body>
</html>
