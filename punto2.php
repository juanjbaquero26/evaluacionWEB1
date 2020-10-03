!DOCTYPE html>
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
    <div class=container>
        <div class="row ">
            <div class="col-4">
                <form class="mt-3" action="punto2.php" method="post">
                    <h2>calculadora de imc</h2>
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="peso en kilos" name="peso">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="altura en metros" name="altura">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 btn-block" name="calcular">calcular IMC</button>
                <?php  if(isset($_POST["calcular"])): ?>
                    <h4 class="text-danger text-center">
                        <?php 
                            $peso=$_POST["peso"];
                            $altura=$_POST["altura"];
                            $imc=$peso/($altura*$altura);
                            if ($imc<18.5) {
                                echo("su IMC es de: ".$imc." y es insuficiente");
                            }
                            elseif ($imc>=18.5  && $imc<25) {
                            
                                echo ("su IMC es de: ".$imc." y es peso normal");}
                            elseif ($imc>=25  && $imc<27) {
                            
                                echo ("su IMC es de: ".$imc." y es sobre peso grado 1");}
                            elseif ($imc>=27  && $imc<30) {
                                echo ("su IMC es de: ".$imc." y es sobre peso grado 2");}
                            elseif ($imc>=30  && $imc<35) {
                            
                                echo ("su IMC es de: ".$imc." y es obesidad tipo 1(preobesidad)");}
                            elseif ($imc>=35  && $imc<40) {
                                
                                echo ("su IMC es de: ".$imc." y es obesidad tipo 2");
                            }
                            elseif ($imc>=40  && $imc<50) {
                            
                                echo ("su IMC es de: ".$imc." y es obesidad Stipo 3(morbida)");
                            }
                            elseif ($imc>50) {
                            
                                echo ("su IMC es de: ".$imc." y es obesidad tipo 4(extrema)");
                            }
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