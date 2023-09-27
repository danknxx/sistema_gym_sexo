<?php
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/view/head/head.php");
?>
    <form action="store.php" method="POST" autocomplete="off"> 
    
    <div class="mb-3">
        <label for="nombre_rol" class="form-label">Nombre del rol:</label>
        <input type="text" name="nombre_rol" required class="form-control" id="nombre_rol">
    </div>


    <button type="submit" class="btn btn-primary">Guardar</button> 
    <a class="btn btn-danger" href="/sistema_gym_github/sistema_gym/view/roles">Cancelar</a>
    </form>

<?php
    require_once("c://wamp64/www/sistema_gym_github/sistema_gym/view/head/footer.php");  
?>