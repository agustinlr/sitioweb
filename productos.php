<?php include("templeate/cabecera.php");?>
<?php

include ("administrador/config/bd.php");

$sentenciaSQL=$conexion->prepare("SELECT * FROM  Libros  ");
$sentenciaSQL->execute();
$Listadelibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>

<?php foreach($Listadelibros as $Libro  ) { ?>
<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="./img/<?php echo $Libro['imagen'];?>" alt="">
    <div class="card-body">
        <h4 class="card-title"><?php echo $Libro['nombre'];?></h4>
        <a name="" id="" class="btn btn-success" href="https://openlibrary.org//" role="button"> Ver más</a>
    </div>
</div>
</div>
<?php  }?>





<?php include("templeate/pie.php");?>