<?php



$texto = $_REQUEST["texto"];
$db = new Db();
$sql = 'SELECT id, titulo, foto, contenido, idUsuario, idCategoria FROM publicaciones WHERE titulo'; 
$resutado = $db->lanzar_consulta($sql, array($texto));



if ($resultado->num_rows == 0){
    ?>

    <div class="alert alert-danger" style ="text-align: center;" role="alert">
        No hemos encontrado nada con la palabra ' <?=$texto ?> '
    </div>
    <?php
}

if ($texto == ""){
    ?> 
    <div class="alert alert-danger" style="text-align: center;" role="alert">
        No has introducido nada :(
    </div>

    <?php
}


else{
    while($fila = $resultado->fetch_assoc()){
        ?>
         <div class="col-md-4">
          <img style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width: 300px; height: 300px;"
               class="card-img-top" src="img/<?= $fila["foto"] ?>" alt="Card image cap">
          <div class="card-body">
              <h4 class="card-title"><?= $fila["titulo"] ?></h4>

              <a href="index.php?id=publicaciones&id_categoria=<?= $fila["idCategoria"] ?>"
                 class="btn btn-success">Ver &#8594</a>
          </div>
      </div>
<?php
  }
}
?>