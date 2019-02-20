<?php
session_start();
include("cabecera.php");
include("pie.php");
include("../config/db.php");
include("../include/funciones.php");
if (!isset($_SESSION["usuario"]))
  header("location: ./login.php");
?>

  <body>
 

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="nueva-publicacion.php">
                
                  Nueva publicación 
                </a>
              </li>
             
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
         
          <h2>Publicaciones</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Titulo</th>
                  <th>Contenido</th>
                  <th>Fecha</th>
                  <th>Modificar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $db = new Db();
                $sql = "SELECT * FROM publicaciones WHERE idUsuario = ?";
                $resultado = $db->lanzar_consulta($sql, array($_SESSION["id"]));
                $db->desconectar();

                while ($fila = $resultado->fetch_assoc()) {

               ?>
                <tr>
                  <td><?= $fila["id"]?></td>
                  <td><?= $fila["titulo"]?></td>
                  <td><?= $fila["contenido"]?></td>
                  <td><?= $fila["fecha"]?></td>
                  <td><a class="btn btn-warning btn-sm" href="?id=nueva_publicacion&modificar=true&id_publicacion=<?= $fila["id"] ?>">Modificar</a></td>
                <td><a class="btn btn-danger btn-sm" href="eliminar_publicacion.php?publicacion=<?= $fila["id"]?>"
                       onclick="return confirm('¿Estás seguro?');">Eliminar</a></td>
                </tr>
                <?php
        }

        ?>
             
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    