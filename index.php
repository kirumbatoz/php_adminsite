<?php require './inc/header.php'; 
?>

<div class="row text-center">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-centro caja">
        <form action="admin.php" method="post">
            <legend>Inicio</legend>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" aria-describedby="helpId" placeholder="El email">
                <div class="form-group">
                    <label for="contrasena">Password</label>
                    <input type="password" class="form-control" name="contrasena" placeholder="La contraseña">
                </div>
                <button type="submit" class="btn btn-primary float-left">Submit</button>
                <a href="registrarse.php" class="float-right">Aun no registrado?</a>
            </div>
        </form>
    </div>
</div>


 



<?php require './inc/footer.php'; ?>