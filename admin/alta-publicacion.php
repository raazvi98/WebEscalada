<?php
session_start();
if (!isset($_SESSION["usuario"]))
  header("location: ./login.php");

include("../config/db.php");
include("../include/funciones.php");





$buscar = "watch?v=";
$reemplazar = "embed/";
$linkdefinitivo = str_replace ($buscar, $reemplazar, $link);