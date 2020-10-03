<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desarrollo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">evaluacion web</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="punto1.php">punto 1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="punto2.php">punto 2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="punto3.php">punto 3 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="punto4.php">punto 4 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="punto5.php">punto 5 <span class="sr-only">(current)</span></a>
        </li>

        </ul>
    </div>
    </nav>
    </header>
<main>
<section class="colorfondo ">
        <div class="row justify-content-start margenes">
            <div class="col-12 col-md-12 ">
                <h2 class="espacio">BIENVENIDO</h2>
                <P class="espacio">aqui estan los puntos del taller</P>
            </div>
    <div class=container>
        <div class="row ">
            <div class="col-4">
                <form class="mt-3" action="index.php" method="post">
                    <h2>registro de compra</h2>
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="producto" name="producto">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="precio" name="precio">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 btn-block" name="boton calcular">calcular</button>
                </form>
                <?php  if(isset($_POST["botonCalcular"])): ?>
                    <h4 class="text-danger text-center">
                        <?php 
                            $precioProducto1=$_POST["precio1"];
                            $nombreProducto1=$_POST["producto1"];

                            $costoEnvio=5000;

                            $total=$precioProducto1+$costoEnvio;

                            echo("El total de la compra es de: ".$total);
                        ?>
                    </h4>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>
<footer>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>    
</body>
</html>