<?php require "functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/V.ico">
    <title>Voltage - Homepage</title>
</head>

<body>
    <div class="container-fluid p-0 main-image5 ">
        <nav class="navbar navbar-expand-lg translucent">
            <div class="container col-12">
                <a class="navbar-brand krinkesDecor fs-1 text-light" href="index.html">Voltage</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active text-light hovereffect dafont" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light dafont" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Models
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item dafont" href="Dynamo.html">Dynamo</a></li>
                                <li><a class="dropdown-item dafont" href="Lumina.html">Lumina</a></li>
                                <li><a class="dropdown-item dafont" href="Lythi.html">Lythi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light dafont" href="Prototype.html">Prototype</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light dafont" href="OurStory.html">Our Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light dafont" href="News/News.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light dafont" href="Contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="d-flex divinfront2 align-items-center justify-content-center">
                <h1 class="text-light dafont">News and Headlines</h1>
            </div>
        </div>
        <div class="container">
            <?php
            if (extension_loaded('mysqli')) {
                echo 'MySQLi extension is enabled.';
            } else {
                echo 'MySQLi extension is not enabled.';
            }
            ?>
            <div class="row d-flex justify-content-center ">
                <?php $news = getnews(4) ?>
                <?php foreach ($news as $new) {
                ?>
                    <div class="card m-2 pt-2" style="width: 18rem;">
                        <img src="<?php echo $new['imagem'] ?>" class="card-img-top image-row" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $new['Titulo'] ?></h5>
                            <p class="card-text"><?php echo $new['peqtexto'] ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
        </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-6">
                    <div class="single-box">
                        <h2>Models</h2>
                    <ul>
                        <li><a href="Dynamo.html">Dynamo</a></li>
                        <li><a href="Lumina.html">Lumina</a></li>
                        <li><a href="Lythi.html">Lythi</a></li>
                        <li><a href="Prototype.html">GT3 Prototype</a></li>
                    </ul>
                    </div> 
                </div>              
                <div class="col-lg-2 col-sm-6">
                    <div class="single-box">
                        <h2>News</h2>
                    <ul>
                        <li><a href="News/News.php">News</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single-box">
                        <h2>About</h2>
                    <ul>
                        <li><a href="OurStory.html">Our Story</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single-box">
                        <h2>Contact</h2>
                    <ul>
                        <li><a href="Contact.html">See Contacts</a></li>
                        <li><a href="https://maps.app.goo.gl/NtiWcBVVeTSigS6VA" target="_blank">Location</a></li>
                    </ul>
                    </div>                    
                </div>
                <div class="col-lg-2 d-flex footer2 ">
                    
                    <img src="images/Group 2.png" class="logofooter mx-auto mt-2">
                </div>
            </div>
        </div>
    </footer> 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>