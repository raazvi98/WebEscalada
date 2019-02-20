<?php
session_start();
include("cabecera.php");
include("pie.php");
if (!isset($_SESSION["usuario"]))
  header("location: ./login.php");

  if (isset($_REQUEST["modificar"]))
  $modificar = $_REQUEST["modificar"];
else
  $modificar = "";

  if (isset($_REQUEST["id"]))
  $id = $_REQUEST["id"];
else
  $id = 0;
 
 
 
  $link = $_POST["link"];

?>

<form  action="alta-publicacion.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4">
<p></p>
<h2>Nueva publicación</h2>
  <div class="form-group">
    <label for="formGroupExampleInput">Titulo: </label>
    <input type="text" name="titulo"class="form-control" id="formGroupExampleInput" placeholder="Titulo" required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción: </label>
    <textarea class="form-control" name="descripcion"id="exampleFormControlTextarea1" placeholder="Descripción" rows="7" required></textarea>
  </div>
  <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Subir imagen</label>
    <input type="file" name="imagen"class="form-control-file" id="exampleFormControlFile1">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Video: </label>
    <input type="text" name="link"class="form-control" id="formGroupExampleInput" placeholder="Video de YouTube" required>
  </div>
</form>

<button type="submit" class="btn btn-outline-dark">Enviar</button>
</div>
</form>
