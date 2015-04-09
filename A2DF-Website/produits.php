<?php
include ('head.php');
?>
<div id="container">
    <body>
        <div id="body">
            <!-- Page Content -->
            <div class="container">

                <!-- Page Heading/Breadcrumbs -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Produits
                            <small>- Disponibles en magasin (sous 72h selon stock)</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="index.php">Accueil</a>
                            </li>
                            <li class="active">Produits</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <?php
                $xml = file_get_contents('http://gestinter.a2dfinformatique.com/ws/produit.php');
                $magasin = simplexml_load_string($xml);
                $online = $magasin->online;

                if ($online == 1) {
                    ?>
                    <div class="col-lg-12">
                        <ul id="myTab" class="nav nav-tabs nav-justified">
                            <li class=""><a href="#onglet-1" data-toggle="tab"><i class="fa fa-briefcase"></i> Accessoires</a>
                            </li>
                            <li class=""><a href="#onglet-2" data-toggle="tab"><i class="fa fa-tablet"></i> Tablettes</a>
                            </li>
                            <li class=""><a href="#onglet-3" data-toggle="tab"><i class="fa fa-laptop"></i> Portables</a>
                            </li>
                            <li class=""><a href="#onglet-4" data-toggle="tab"><i class="fa fa-hdd-o"></i> Fixes</a>
                            </li>
                            <li class=""><a href="#onglet-5" data-toggle="tab"><i class="fa fa-desktop"></i> Ecrans</a>
                            </li>
                            <li class=""><a href="#onglet-6" data-toggle="tab"><i class="fa fa-print"></i> Imprimantes</a>
                            </li>
                        </ul>
                        <hr>
                        <div id="myTabContent" class="tab-content">
                            <?php
                            for ($i = 1; $i < 7; $i++) {
                                ?>
                                <div class="tab-pane fade active in" id="onglet-<?= $i ?>">

                                    <!-- Projects Row -->
                                    <div class = 'row'>
                                        <?php
                                        foreach ($magasin->produits->produit as $produit) {

                                            $type = $produit->type;
                                            if ($type == $i) {
                                                //Récupération des données dans la base
                                                $idProduit = $produit->id;
                                                $libelle = $produit->libelle;
                                                $marque = $produit->marque;
                                                $prix = $produit->prix;
                                                $image = $produit->image;
                                                $etat = $produit->etat;

                                                echo "<div class = 'col-md-3 col-sm-6 col-xs-12 img-portfolio text-center'>";
                                                echo "  <div class='panel panel-default text-center'>";
                                                echo "      <div class='panel-body' style='height: 200px;'>";
                                                ?>          <a href="details.php?id=<?= $idProduit ?>"><img class='img-responsive img-hover center-block' src='../A2DF/produits/<?= $image ?>' onError="this.onerror=null;this.src='../A2DF/produits/notfound.png';" style="max-height: 170px;"></a><?php
                                                echo "      </div>";
                                                echo "      <div class='panel-heading' style='height: 130px;'>";
                                                echo "          <h3>";
                                                echo "              <span><b>" . $marque . " </b></span>";
                                                echo "              <span>" . $libelle . " </span>";
                                                echo "              <br />";
                                                echo "              <span class='label label-default'>" . $prix . "€</span> ";

                                                if ($etat == 1) {
                                                    echo "          <span class='label label-warning'>Occasion</span>";
                                                } else if ($etat == 2) {
                                                    echo "          <span class='label label-danger'>Destockage</span>";
                                                }

                                                echo "          </h3>";
                                                echo "      </div>";
                                                echo "  </div>";
                                                echo "</div>";
                                            }
                                        }
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                    echo "</div>";
                                    echo "</div>";
                                } else {
                                    ?>

                                    <div class="col-lg-12">
                                        <div class="alert alert-warning text-center">
                                            <span class="alert-link"><i class="fa fa-exclamation-triangle"></i> Catalogue en maintenance, merci de réessayer ultérieurement <i class="fa fa-exclamation-triangle"></i></span>
                                        </div>
                                    </div>
                                    <br/>
                                    <?php
                                }
                                ?>
                                <hr>
                            </div>
                        </div>
                        <!-- Footer -->
                        <footer class="footer" id = "footer">
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
                    </div>

                    <!-- /.container -->

                    <!-- jQuery -->
                    <script src="js/jquery.js"></script>

                    <!-- Bootstrap Core JavaScript -->
                    <script src="js/bootstrap.min.js"></script>

                    </body>
                    </html>