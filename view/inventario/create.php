<?php
    require_once("c://wamp64/www/sistema_gym/view/head/head.php");
?>
    <form action="store.php" method="POST" autocomplete="off"> 
    
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" name="nombre" required class="form-control" id="nombre">
    </div>
    <div class="mb-3">
        <label for="nombre" class="form-label">Estado:</label>
        <input type="text" name="nombre" required class="form-control" id="nombre">
    </div>


    <button type="submit" class="btn btn-primary">Guardar</button> 
    <a class="btn btn-danger" href="/sistema_gym/view/personas">Cancelar</a>
    </form>

<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");  
?>