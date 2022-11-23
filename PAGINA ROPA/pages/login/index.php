<!DOCTYPE html>
<html>
<head>
	<title>Inicio Sesion / Registro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/ecd9bd597b.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="arriba">
	<div class="ecabecera">
        <div class="cabecera">
            <h1>ENVIOS GRATUITOS A PARTIR DE 60€ A TODA EUROPA.</h1>
        </div>
    </div>

    <div class="vintage">
        <div class="text">VINTAGE SHOP</div>
        </div>
</div>
<div class="engloba">
     <form action="login.php" method="post">
     	<h2>Inicio Sesion</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Usuario</label>
     	<input type="email" name="uname" placeholder="Usuario"><br>

     	<label>Contraseña</label>
     	<input type="password" name="password" placeholder="Contraseña"><br>

     	<button type="submit">Inicio Sesion</button>
          <a href="signup.php" class="ca">Crear una cuenta</a>
     </form>
		</div>

</body>
</html>