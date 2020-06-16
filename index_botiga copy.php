<?php
session_start();
$_SESSION["username"]="Olorcar The Barbarian";

if (isset($SESSION["visits"])){
  $_SESSION["visits"]++; 
}else{ 
  $_SESSION["visits"]=1;
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
    <link rel="stylesheet" href="css/style.css">

</head>
  <body>
    <!--UNCANNY RESPONSIVE NAVBAR!
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="#">The Spicy Cauldron</a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="error.html">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index_botiga.html">Shop</a>
        </li>
      </ul>
    </nav>-->

    <!--EVEN MORE UNCANNY THAN EVER NAVBAR2!!-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand trade" href="#">The Spicy Cauldron</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <!--PHP SESSION INDISE NAVBAR--> 
            <li class="nav-item">
            <a class="nav-link">Welcome Back, <?=$_SESSION["username"]?></a>
            </li>
            <!--/PHP SESSION INDISE NAVBAR--> 

            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="error.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="error.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="error.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!--A MIGHTY HEADER BOX!
    <section class="superbox text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="center">
              <h1>The Spicy Cauldron</h1>
              <p class="lead">Your Fantastic Armory!</p>
            </div>
          </div>
        </div>
      </div>
      </section>-->
      
<!--JUMBOTRON!-->  
  <div class="jumbotron text-center banner" style="margin-bottom:0">
        <h1>The Spicy Cauldron</h1>
        <h1 class="h1jumbo">Weaponry & Smith</h1> 
        <!--VARIABLE VISITES!-->
        <p>Congrats! You've visited us <?=$_SESSION["visits"]?> times!</p>
        <!--/VARIABLE VISITES!-->
  </div>
<!--/JUMBOTRON!-->

<!--LEFT COLUMN!!!-->    
<div class="container">

  <div class="row">

    <div class="col-lg-3">

      <h2 class="my-4">THE SPICY CAULDRON</h2>
      <div class="list-group">
        <a href="error.html" class="list-group-item">Common Items</a>
        <a href="error.html" class="list-group-item">Magic Items</a>
        <a href="error.html" class="list-group-item">Legendary Items</a>
      </div>
    </div>
<!--/LEFT COLUMN!!!-->
    
<!--NICE SLIDER/CAROUSEL!!-->      
      <div class="col-lg-9">

        <div id="carousel-indicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-indicators" data-slide-to="1"></li>
            <li data-target="#carousel-indicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/slide_1.jpg" alt="Elven Bow">
              
              <div class="absolute-div">
                <div class="carousel-caption">
                     <p class="slidetext"> Look for a perfect hunting? <br>
                    Buy now an</p>
                    <h2>Elven Bow</h2>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/slide_2.jpg" alt="Dwarven Helmet">
                <div class="absolute-div">
                  <div class="carousel-caption">
                      <p class="slidetext2"> Upgrade your defensive bonus with a</p>
                      <h2 class="slidedwarf">Mithril Dwarven Helmet</h2>
                  </div>
                </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/slide_3.jpg" alt="Wizard's Spells">
              <div class="absolute-div">
                <div class="carousel-caption">
                     <p class="slidetext3"> Master your adventures <br>
                       and cast your custom-made </p>
                    <h2 class="slidetext3 slidewizard">Wizard spells</h2>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-indicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-indicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
  
        

    <!--AWESOME FORMULARY 1-->
    <div class="album py-5 bg-light"> 

      <!--AMAZING GO TO CHART BUTTON 1!--> 
        <div class="row">
                <div class="col-md-12" style="margin-right:10px">
                <button type="submit" class="btn btn-primary ml-auto d-block" style="margin-right:15px">Your Chart!</button>
                </div>
            </div>
        <!--/AMAZING GO TO CHART BUTTON!--> 

      <form action="Exercici_6_2.php" method="get">
      <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/arrow_of_slaying.jpg" alt="Arrow of Slaying" class="card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> 
                <title>Arrow of Slaying</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center font-weight-bolder trade" x="50%" y="50%" fill="#eceeef" dy=".3em">Arrow of Slaying <br> 10 G.P. (each)</text>
              </svg>
              <div class="card-body">
                <p class="card-text">
                  An arrow of slaying is a magic weapon meant to slay a particular kind of creature.<br>
                  Once an arrow of slaying deals its extra damage to a creature, it becomes a nonmagical arrow.
                </p>
                <div class="checks">
                  <p class="trade">Add to my Chart! <input type="checkbox" name="item[0]" value="10"></p>
                  <input type="hidden" name="item_name[0]" value="Arrow of Slaying">
                  <select name="item_quantity[0]">
                    <option value="5">5 pack</option>
                    <option value="10" selected>10 Pack</option>
                    <option value="50">50 pack</option>
                  </select>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/staff_of_charming.jpg" alt="Staff of Charming" class="card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> 
              <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center font-weight-bolder trade" x="50%" y="50%" fill="#eceeef" dy=".3em">Staff Of Charming <br> 290 G.P.</text>
              </svg>
              <div class="card-body">
                <p class="card-text">
                  While holding this staff, you can use an action to expend 1 of its 10 charges to cast charm person.
                   The staff can also be used as a magic quarterstaff. <br><br><br>
                </p>
                <div class="checks">
                  <p class="trade">Add to my Chart! <input type="checkbox" name="item[1]" value="290"></p>
                  <input type="hidden" name="item_name[1]" value="Staff of Charming">
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/vorpal_sword.jpg" alt="Vorpal Sword" class="card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> 
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center font-weight-bolder trade" x="50%" y="50%" fill="#eceeef" dy=".3em">Vorpal Sword <br> 1583 G.P.</text>
              </svg>
              <div class="card-body">
                <p class="card-text">
                  When you attack a creature and roll a 20, you cut off one of the creature's heads. The creature dies if it can't survive without the lost head. <br><br><br>                  </p>
                <div class="checks">
                  <p class="trade">Add to my Chart! <input type="checkbox" name="item[2]" value="1583"></p>
                  <input type="hidden" name="item_name[2]" value="Vorpal Sword">
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/bag_of_holding.jpg" alt="Bag Of Holding" class="card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> 
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center font-weight-bolder trade" x="50%" y="50%" fill="#eceeef" dy=".3em">Bag Of Holding <br> 722 G.P.</text>
              </svg>
              <div class="card-body">
                <p class="card-text">
                  This bag has an interior space larger than its outside dimensions, roughly 2 feet in diameter and 4 feet deep. <br>
                  The bag weighs 15 pounds, regardless of its contents. <br></p>
                <div class="checks">
                  <p class="trade">Add to my Chart! <input type="checkbox" name="item[3]" value="722"></p>
                  <input type="hidden" name="item_name[3]" value="Bag of Holding">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/dwarven_plate.jpg" alt="Dwarven Plate" class="card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> 
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center font-weight-bolder trade" x="50%" y="50%" fill="#eceeef" dy=".3em">Dwarven plate <br> 3895 G.P.</text>
              </svg>
                <div class="card-body">
                <p class="card-text">
                  While wearing this armor, you gain a +2 bonus to AC. <br>
                  Plate consists of shaped, interlocking metal plates to cover the entire body. It includes gauntlets, etc... <br>
                </p>
                <div class="checks">
                  <p class="trade">Add to my Chart! <input type="checkbox" name="item[4]" value="3895"></p>
                  <input type="hidden" name="item_name[4]" value="Dwarven Plate">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/ring_of_invisibility.jpg" alt="Ring Of Invisibility" class="card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"> 
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"></rect><text class="text-center font-weight-bolder trade" x="50%" y="50%" fill="#eceeef" dy=".3em">Ring Of Invisibility <br> 789 G.P.</text>
              </svg>
              <div class="card-body">
                <p class="card-text">
                  While wearing this ring, you can turn invisible as an action. Anything you are wearing or carrying is invisible with you. <br><br><br></p>
                <div class="checks">
                  <p class="trade">Add to my Chart! <input type="checkbox" name="item[5]" value="589"></p>
                  <input type="hidden" name="item_name[5]" value="Ring of Invisibility">

                </div>
              </div>
            </div>
          </div>
        </div>

<!--AMAZING BUY NOW BUTTON 1!--> 
<div class="row">
                <div class="col-md-12" style="margin-right:10px">
                <button type="submit" class="btn btn-primary ml-auto d-block" style="margin-right:15px">BUY NOW!</button>
                </div>
            </div>
        <!--/AMAZING BUY NOW BUTTON!--> 



<!--ANOTHER AMAZING AND FANTASTIC FORMULARY!

      <div class="album py-5 bg-light"> 
        <form action="Exercici_6_2.php" method="get">
        <div class="container">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/arrow_of_slaying.jpg" alt="Arrow Of Slaying"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Arrow Of Slaying</a>
                </h4>
                <h5>10 Gold Pieces</h5>
                <p class="card-text">An arrow of slaying is a magic weapon. If a creature takes damage, she must make a DC 17 Constitution saving throw.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
                <p class="trade">Add to my Chart! <input type="checkbox" name="item[0]" value="10"></p>
              <input type="hidden" name="item_name[0]" value="Arrow of Slaying">
                <select name="item_quantity[0]">
                  <option value="5">5 pack</option>
                  <option value="10" selected>10 Pack</option>
                  <option value="50">50 pack</option>
                </select>
              </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/bag_of_holding.jpg" alt="Bag Of Holding"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Bag Of Holding</a>
                </h4>
                <h5>722 Gold Pieces</h5>
                <p class="card-text">This bag has an interior space considerably larger than its outside dimensions, roughly 2 feet in diameter at the mouth and 4 feet deep.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9734; &#9734; &#9734;</small>
                <p class="trade">Add to my Chart! <input type="checkbox" name="item[3]" value="722"></p>
                <input type="hidden" name="item_name[3]" value="Bag of Holding">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/dwarven_plate.jpg" alt="Dwarven Plate"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Dwarven Plate</a>
                </h4>
                <h5>3.895 Gold Pieces</h5>
                <p class="card-text">While wearing this armor, you gain a +2 bonus to AC!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                <p class="trade">Add to my Chart! <input type="checkbox" name="item[4]" value="3895"></p>
                  <input type="hidden" name="item_name[4]" value="Dwarven Plate">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/ring_of_invisibility.jpg" alt="Ring of Invisibility"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Ring of Invisibility</a>
                </h4>
                <h5>589 Gold Pieces</h5>
                <p class="card-text">While wearing this ring, you can turn invisible as an action. Anything you are wearing or carrying is invisible with you!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                <p class="trade">Add to my Chart! <input type="checkbox" name="item[5]" value="589"></p>
              <input type="hidden" name="item_name[5]" value="Ring of Invisibility">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/staff_of_charming.jpg" alt="Staff of Charming"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Staff of Charming</a>
                </h4>
                <h5>290 Gold PIeces</h5>
                <p class="card-text">While holding this staff, you can use an action to expend 1 of its 10 charges to cast charm person. The staff can also be used as a magic quarterstaff.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                <p class="trade">Add to my Chart! <input type="checkbox" name="item[1]" value="290"></p>
              <input type="hidden" name="item_name[1]" value="Staff of Charming">
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/vorpal_sword.jpg" alt="Vorpal Sword"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Vorpal Sword</a>
                </h4>
                <h5>1.583 Gold Pieces</h5>
                <p class="card-text">You gain a +3 bonus to attack and damage rolls made with this magic weapon. In addition, the weapon ignores resistance to slashing damage.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="trade">Add to my Chart! <input type="checkbox" name="item[2]" value="1583"></p>
                  <input type="hidden" name="item_name[2]" value="Vorpal Sword">
                </div>
              </div>
            </div>
          <div>
          </form>
      </div>
      -->

       
    
    
    

<!--SPECTACULAR FOOTER!-->
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">This Shop is amazing, and more items and upgrades will come ASAP! <br>
        <a href="#" class="float-right">Back To Top</a></p>
      </div>
    </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

