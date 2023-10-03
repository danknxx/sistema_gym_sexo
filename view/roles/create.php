<?php
    require_once("c://wamp64/www/sistema_gym/view/head/head.php");
?>
    <form action="store.php" method="POST" autocomplete="off"> 
    <div class="mb-3">
        <label for="rol" class="form-label">Agregar nuevo rol</label>
        <input type="text" name="nombre" required class="form-control" id="rol">

    </div>

    <button type="submit" class="btn btn-primary">Guardar</button> 
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://wamp64/www/sistema_gym/view/head/footer.php");  
?>