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
    <div class=container>
        <div class="row ">
            <div class="col-4">
                <form class="mt-3" action="punto1.php" method="post">
                    <h2>calculadora</h2>
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="numero 1" name="numero1">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="numero 2" name="numero2">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 btn-block" name="suma">suma</button>
            <button type="submit" class="btn btn-primary mt-3 btn-block" name="resta">resta</button>
            <button type="submit" class="btn btn-primary mt-3 btn-block" name="multiplicacion">multiplicacion</button>
            <button type="submit" class="btn btn-primary mt-3 btn-block" name="division">division</button>
                </form>
                <?php  if(isset($_POST["suma"])): ?>
                    <h4 class="text-danger text-center">
                        <?php 
                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];
                            $suma=$numero1+$numero2;

                            echo("El total de la suma es de: ".$suma);
                        ?>
                    </h4>
                <?php endif ?>
                <?php  if(isset($_POST["resta"])): ?>
                    <h4 class="text-danger text-center">
                        <?php 
                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];
                            $resta=$numero1-$numero2;

                            echo("El total de la resta es de: ".$resta);
                        ?>
                    </h4>
                <?php endif ?>
                <?php  if(isset($_POST["multiplicacion"])): ?>
                    <h4 class="text-danger text-center">
                        <?php 
                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];
                            $mult=$numero1*$numero2;

                            echo("El total de la multiplicacion es de: ".$mult);
                        ?>
                    </h4>
                <?php endif ?>
                <?php  if(isset($_POST["division"])): ?>
                    <h4 class="text-danger text-center">
                        <?php 
                            $numero1=$_POST["numero1"];
                            $numero2=$_POST["numero2"];
                            $div=$numero1/$numero2;

                            echo("El total de la divison es de: ".$div);
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