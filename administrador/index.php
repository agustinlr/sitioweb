<?php include("../templeate/cabecera.php")?>

<?php

session_start();
if($_POST){
  if(($_POST['usuario']=="biblioteca")&&($_POST['contraseña']=="lectura")){

    $_SESSION['usuario']="ok";
    $_SESSION['nombreUsuario']="EL ARTE DE LEER";
    header('Location:inicio.php');
  }else{
    $mensaje="Error: El usuario o contraseña son incorrectos";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </head>
  <body>


    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
<br>  <br>  <br>
            <div class="card">
                <div class="card-header btn btn-success ">
                    Login
                </div>
                <div class="card-body">

               <?php if(isset($mensaje))  {?>
               <div class="alert alert-success" role="alert">
              <?php echo $mensaje; ?>
                   </div>
                   <?php }?>

                    <form method="POST">
                    <div class = "form-group my-2">

                    <label for="exampleInputEmail1">Usuario</label>

                    <input type="text" class="form-control" name="usuario" placeholder="Escribe tu contraseña">
                    <small id="email" class="form-text text-muted">Escribe tu usuario para poder ingresar</small>
                    </div>


                    <div class="form-group my-4">
                    <label for="exampleInputPassword1">Contraseña:</label>
                    <input type="password" class="form-control" name="contraseña"  id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-success d-block mx-auto">Entrar</button>
                    </form>
                    
                    
                    
                </div>
                
            </div>
                
            </div>
            
        </div>
    </div>
  </body>
</html>

<?php include("../templeate/pie.php")?>