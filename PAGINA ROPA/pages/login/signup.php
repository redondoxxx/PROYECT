<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
     <form action="signup-check.php" method="post">
     	<h2>Registro</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Nombre</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Nombre"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Nombre"><br>
          <?php }?>

          <label>Correo</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="email" 
                      name="uname" 
                      placeholder="Correo"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="uname" 
                      placeholder="Correo"><br>
          <?php }?>


     	<label>Contraseña</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Contraseña"><br>

          <label>Contraseña</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Escribe de nuevo la contraseña"><br>

     	<button type="submit">Crear cuenta</button>
          <a href="index.php" class="ca">Ya tienes cuenta creada?</a>
     </form>
          </div>
</body>
</html>