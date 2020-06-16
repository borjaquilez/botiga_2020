<?php
session_start();
if (isset($_SESSION["username"])){
    header('location:../index_botiga copy.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>The Spicy Cauldron</title>
    <link rel="icon" href="https://img.pngio.com/halloween-black-cauldron-png-clipart-image-gallery-yopriceville-cauldron-png-4122_3481.png" type="image/gif" sizes="16x16">
    <!-- Required meta tags Aquí un comentari de prova!!!-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="El Caldero Caliente: ¡Los mejores productos para la vida en el medievo!">
    <meta name="keywords" content="weapons,armors,helmets,potions,shields,robes.">
    <meta name="author" content="Franz Hauser">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Trade+Winds&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_login.css">
  </head>


  <body>
        <!--UNCANNY THAN EVER NAVBAR2!!-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand trade" href="#">The Spicy Cauldron</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../error.html">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../error.html">Services</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="../error.html">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        <!--/UNCANNY THAN EVER NAVBAR2!!-->

        <!--JUMBOTRON!-->  
        <div class="jumbotron text-center banner" style="margin-bottom:0">
                <h1>The Spicy Cauldron</h1>
                <h1 class="h1jumbo">Weaponry & Smith</h1> 
        </div>
        <!--/JUMBOTRON!-->

        <!--alert!-->
        <?php
        if (isset($_GET['m'])){
            if ($_GET['m']=='1'){
                ?>
                <div class="alert alert-danger" role="alert">
                Username and Pasword not valid!
                </div>  <?php
            }else if ($_GET['m']=='2'){
                ?>
                <div class="alert alert-warning" role="alert">
                Your session has been DESTROYED!
                </div>     
                <?php
            }
        }?>
        
        <!--!alert!-->

        <!--LOGIN FORMULARY-->
        <form action="checklogin.php" method="get">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="email@example.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!--/LOGIN FORMULARY-->
        
        <!--LOGIN FORMULARY 2
        <div class="dropdown-menu">
            <form class="px-4 py-3">
                <div class="form-group">
                <label for="exampleDropdownFormEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                </div>
                <div class="form-group">
                <label for="exampleDropdownFormPassword1">Password</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck">
                    Remember me
                </label>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">New around here? Sign up</a>
            <a class="dropdown-item" href="#">Forgot password?</a>
        </div>
        /LOGIN FORMULARY 2-->






  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>