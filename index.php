<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pipoc gym</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/hospedajes/css/index.css">
    <script src="/hospedajes/js/exportpdf.js"></script>
</head>

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://img.freepik.com/fotos-premium/foto-enfoque-barra-sobre-acogedor-fondo-borroso-noche_980736-3001.jpg?w=360"
                alt="login form" style="width: 450px;" alt="logo">
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">GYM</span>
                  </div>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h3 fw-bold mb-0">INICIAR SESION</span>
                  </div>                  
                  <div class="form-outline mb-4">
                      <input type="text" name="nombre_usuario" id="form2Example17" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example17">Nombre de Empleado</label>
                  </div>
                  <div class="form-outline mb-4">
                      <input type="password" name="clave" id="form2Example27" class="form-control form-control-lg" />
                      <label class="form-label" for="form2Example27">Clave</label>
                  </div>
                  <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit">Iniciar sesión</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");
?>
