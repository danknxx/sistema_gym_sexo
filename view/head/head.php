<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM SUPREME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/sistema_gym/css/index.css">
    
    <script src="/sistema_gym/js/exportpdf.js"></script>
    
    
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/sistema_gym">GYM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/sistema_gym">Pagina principal</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Miembros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/sistema_gym/view/users/create.php">Agregar miembro</a></li>
            <li><a class="dropdown-item" href="/sistema_gym/view/users">Listado de miembros</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Empleados
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/sistema_gym/view/empleado/create.php">Agregar empleado</a></li>
            <li><a class="dropdown-item" href="/sistema_gym/view/empleado">Listado de empleados</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Roles
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/sistema_gym/view/roles/create.php">Agregar rol</a></li>
            <li><a class="dropdown-item" href="/sistema_gym/view/roles">Listado de roles</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inventario
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/sistema_gym/view/inventario/create.php">Agregar inventario</a></li>
            <li><a class="dropdown-item" href="/sistema_gym/view/inventario">Listado de inventario</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pagos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/sistema_gym/view/users/create.php">Agregar pagos</a></li>
            <li><a class="dropdown-item" href="/sistema_gym/view/users">Listado de pagos</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Horarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/sistema_gym/view/users/create.php">Agregar horario</a></li>
            <li><a class="dropdown-item" href="/sistema_gym/view/users">Listado de horario</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  
  
</nav>

    <style>
        /* Agrega estilos para la imagen de fondo */
        body {
            background-image: url('C:/wamp64/www/sistema_gym/img/gym.jpg'); /* Ruta de la imagen local */
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            margin: 0;
            padding: 0;
            height: 100vh;
        }
    </style>



