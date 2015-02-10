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
                <div class="fill" style="background-image:url('img/slide_web_1.png');"></div>
                <div class="carousel-caption ">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide_iphone.png');"></div>
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
                <h1 class="page-header">
                    Bienvenue sur le site A2DF Informatique
                </h1>
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
                        <li>Ordinateur Portables</li>
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
                    <p>1. Un service de qualité adaptés à vos besoins:</p>
                    <ul>
                        <li>Nous vous conseillons</li>
                        <li>Nous réalisons l'assemblage</li>
                        <li>Nous offrons un service de dépannage à domicile</li>
                        <li>Nous nous rendons disponible pour les professionnels</li>
                    </ul>
                    <p>2. Service après vente efficace et rapide</p>
                    <ul>
                        <li>Nos diagnostics et devis sont gratuits !</li>
                        <li>Notre équipe de spécialiste réalise toutes réparations</li>
                    </ul>
                    <p>3. Des points forts qui font la différence</p>
                    <ul>
                        <li>Diagnostic et Devis Gratuits</li>
                        <li>Un véritable conseil et avis de professionnel</li>
                        <li>Des garanties de 2 à 10 ans</li>
                        <li>Nous traitons le service après vente nous-mêmes</li>
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

        <!-- Footer -->
        <footer id="footer" class="midnight-blue">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; A2DF Informatique 2015</p>
                </div>
            </div>
        </footer>

    </div>
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