<?php
include ('head.php');
?>


<body>

    <!-- Navigation -->


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide7.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide2test.jpg');"></div>
                <div class="carousel-caption ">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slidecreation.jpg');"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h1> Bienvenue sur le site A2DF Informatique
                        <a href="https://www.facebook.com/pages/A2DFinformatique/570125046357439"><i class="fa fa-fw fa-facebook-square fa-1x pull-right"></i></a>
                        <a href="https://twitter.com/A2DFInformatiqu"><i class="fa fa-twitter-square fa-1x pull-right"></i></a></p>
                    </h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-clock-o"></i> Horaires d'ouvertures</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                        <li>Lundi: 14h - 19h</li>
                        <li>Du Mardi au Vendredi: 9h30 - 19h</li>
                        <li>Samedi: 10h - 12h</li>
                        <li>Fermé le dimanche</li>
                        </p>
                        <a href="contact.php" class="btn btn-warning">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-cogs"></i> Services</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                        <li>Diagnostic</li>
                        <li>Montage</li>
                        <li>Dépannage</li>
                        <li>Formation</li>
                        </p>
                        <a href="services.php" class="btn btn-warning">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-desktop"></i> Produits</h4>
                    </div>
                    <div class="panel-body">
                        <p>
                        <li>Ordinateurs Fixes</li>
                        <li>Ordinateurs Portables</li>
                        <li>Tablettes</li>
                        <li>Accessoires</li>
                        </p>
                        <a href="produits.php" class="btn btn-warning">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Pourquoi choisir A2DF ?</h2>
            </div>
            <div class="col-md-6">
                <div class="well">
                    <p>1. Un service de qualité adapté à vos besoins:</p>
                    <ul>
                        <li>Nous vous conseillons</li>
                        <li>Nous réalisons l'assemblage</li>
                        <li>Nous offrons un service de dépannage à domicile</li>
                        <li>Nous nous rendons disponible pour les professionnels</li>
                    </ul>
                    <p>2. Service après-vente efficace et rapide</p>
                    <ul>
                        <li>Nos diagnostics et devis sont gratuits !</li>
                        <li>Notre équipe de spécialiste réalise toutes réparations</li>
                    </ul>
                    <p>3. Des points forts qui font la différence</p>
                    <ul>
                        <li>Diagnostic et Devis Gratuits</li>
                        <li>Un véritable conseil et avis de professionnel</li>
                        <li>Des garanties de 2 à 10 ans</li>
                        <li>Nous traitons le service après-vente nous-mêmes</li>
                    </ul>
                    <img src="img/satisfait.PNG" class="media-left" width="15%" alt="Circular Image">
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/pic1.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; Hugo JEROME & Alexandre TALBOT 2015 - 
                        <a href="https://www.facebook.com/pages/A2DFinformatique/570125046357439"><i class="fa fa-facebook-square fa-2x pull-right"></i></a>
                        <a href="https://twitter.com/A2DFInformatiqu"><i class="fa fa-twitter-square fa-2x pull-right"></i></a>
                        <a href="conditions.php">Conditions générales de vente</a></p>
                </div>
            </div>
        </div>
    </footer>


    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>