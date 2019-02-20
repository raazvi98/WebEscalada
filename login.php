<?php
if (isset($_REQUEST["mensaje"]))
    $mensaje = $_REQUEST["mensaje"];
else
    $mensaje = "";
?>


    <!doctype html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
    
        <title>Login</title>
    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
         <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">
       <style>
            body {
              background:url(img/escalada2.jpg), #000;
              background-size:cover;
            }
       </style>
       
    
      </head>
    
      <body  class>
      
        <div class="container">
    
          <form class="form-signin " action="check_login.php" method="post">
            <h2 class="form-signin-heading">Inicia sesión</h2>
            <label for="inputEmail" class="sr-only">Usuario</label>
            <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="&#128104 Usuario" required autofocus>
            <p></p>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="contrasena" id="inputPassword" class="form-control" placeholder="&#128272 Contraseña" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Recordarme
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-dark" type="submit">Entrar</button>
            
          </form>
            <?php
            if ($mensaje != "") {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?= $mensaje ?>
                </div>
            <?php
            }
            ?>
        </div> <!-- /container -->
        
      </body>
    </html>
    
