<?php
    require_once("c://wamp64/www/sistema_gym/view/head/head.php");
?>
    <form action="store.php" method="POST" autocomplete="off"> 
    
    <div class="mb-3">
        <label for="cedula" class="form-label">Cédula:</label>
        <input type="number" name="cedula" required class="form-control" id="cedula">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" name="nombre" required class="form-control" id="nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" name="apellido" required class="form-control" id="apellido">
    </div>
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha nacimiento:</label>
        <input type="date" name="fecha" required class="form-control" id="fecha">
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">Correo electrónico:</label>
        <input type="email" name="correo" required class="form-control" id="correo">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono:</label>
        <input type="tel" name="telefono" required class="form-control" id="telefono">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button> 
    <a class="btn btn-danger" href="/sistema_gym/view/personas">Cancelar</a>
    </form>

<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");  
?>