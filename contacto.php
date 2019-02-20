<?php
session_start();
include("include/funciones.php");
include("cabecera.php");
include("config/db.php");

?>

<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>

<p class="font-weight-bolder"><h1> Contacto</h1></p>
        
<p class="font-weight-bolder">Si tienes alguna sugerencia, escríbeme a través del siguiente formulario de contacto</p>

<form action="envia.php" method="post" class="form-consulta">
  <div class="form-group">
    <label>Nombre: </label>
    <input type="text" class="form-control" name="nombre"  placeholder="Nombre">
  </div>
  <div class="form-group">
    <label>Apellidos: </label>
    <input type="text" class="form-control" name="apellido"  placeholder="Apellidos">
  </div>
  <div class="form-group">
    <label>Email: </label>
    <input type="email" class="form-control" name="email"  placeholder="email">
  </div>
  <div class="form-group">
    <label>Mensaje: </label>
    <textarea class="form-control" name="mensaje"  rows="7"></textarea>
  </div>
  <input type="submit" value="Enviar" class="btn-form btn-outline-dark">
</form>



 <div class="social-bar">
    <a href="#" class="icon icon-facebook" target="_blank"></a>
    <a href="#" class="icon icon-twitter" target="_blank"></a>
    <a href="#" class="icon icon-youtube" target="_blank"></a>
    <a href="#" class="icon icon-instagram" target="_blank"></a>
  </div>




  <?php

include("pie.php");

?>
