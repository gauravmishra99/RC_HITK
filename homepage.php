<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>RC-HITK</title>
        <meta charset="UTF-8">
        <link rel="icon" href="image/rotaract logo 2019-20.png" type="image">
        <meta name="viewport" content="width=device-width, initial scale=1">
        <link rel="stylesheet" href="CSS/pop.css"/>
        <link rel="stylesheet" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <style>
        /* Make the image fully responsive */
            .carousel-inner{
              height: auto;
            }
        </style>
    </head>
    <body>
        <!Navigation bar>
        
        <div style="margin-bottom:10px;">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">

                <a class="navbar-brand" href="homepage.php">
                    <img src="image/rotaract logo 2019-20.png" alt="logo" style= "width: 40px;">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon">

                    </span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php" id="navigation-link">Gallery</a>
                        </li>
                        <li class="navbar-nav">
                            <a class="nav-link" href="Board_details.php" id="navigation-link">Board</a>
                        </li>
                        <li class="navbar-nav">
                            <a class="nav-link" href="#" id="navigation-link">Link</a>
                        </li>
                        <li class="navbar-nav">
                            <a class="nav-link" href="#" id="navigation-link">LINK</a>
                        </li>
                        <li class="navbar-nav">
                            <a class="nav-link" href="#" id="navigation-link">LINK</a>
                        </li>
                        <li class="navbar-nav">
                            <a class="nav-link" href="#" id="navigation-link">Contact</a>
                        </li>                
                    </ul>
                </div>
            </nav>
        </div>
       
        <!Carousel>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col myClassName">  <!-- myClassName is defined in my CSS as you defined your container -->
                    <div id="pic-slide" class="carousel slide" data-ride="carousel" data-interval="3500" data-pause="hover" 
                        data-keyboard="true">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                      <li data-target="#pic-slide" data-slide-to="0" class="active"></li>
                      <li data-target="#pic-slide" data-slide-to="1"></li>
                      <li data-target="#pic-slide" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/award.jpg" width="100%" height="auto" alt="District Conference Award">
                          <div class="carousel-caption">
                            <h3 style="font-size:3vw">District Awards</h3>
                            <p style="font-size:1.5vw">Best Club 2019-20</p>
                          </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/Chotu Olympics/hurdle.jpg" width="100%" height="auto" alt="Hurdle Race">
                        <div class="carousel-caption">
                          <h3 style="font-size:3vw">Chotu Olympics</h3>
                          <p style="font-size:1.5vw">Hurdle Race</p>
                        </div>
                    </div>
                    
                    <div class="carousel-item">
                        <img src="image/Chotu Olympics/sack.JPG" width="100%" height="auto" alt="Sack Race">
                        <div class="carousel-caption">
                          <h3 style="font-size:3vw">Chotu Olympics</h3>
                          <p style="font-size:1.5vw">Sack Race</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#pic-slide" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#pic-slide" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

            </div>
                </div>
            </div>
        </div>
        
        
        <div class="container-fluid" style="border: solid red 2px; margin-top: 8px">
            <div class="row">
                <div class="col-md">
                    <h3>1. Collapsible Navbar</h3>
                    <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
                    <p>Only when the button is clicked, the navigation bar will be displayed.</p>
                    <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler button.</p>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
