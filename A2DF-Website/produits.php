<?php
include ('head.php');
include('private/conf.php');

define('USER', $mysql_user);
define('MDP', $mysql_pass);
define('DSN', $mysql_host);
try {
    $connexion = new PDO(DSN, USER, MDP);
    $connexion->query("SET CHARACTER SET utf8");
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage() . "<br />";
    $connexion = null;
}
?>

<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Produits
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Accueil</a>
                    </li>
                    <li class="active">Produits</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="col-lg-12">
            <ul id="myTab" class="nav nav-tabs nav-justified">
                <li class="active"><a href="#onglet-1" data-toggle="tab"><i class="fa fa-briefcase"></i> Accessoires</a>
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
                for ($i = 1; $i <= 6; $i++) {
                    ?>
                    <div class="tab-pane fade active in" id="onglet-<?= $i ?>">

                        <!-- Projects Row -->
                        <div class = 'row'>
                            <?php
                            global $connexion;
                            $listeProduit = $connexion->query(" SELECT idProduit, produit.libelle AS nom, marque.libelle AS marque, type.libelle AS type, prix, image, occasion
                                                                FROM produit, marque, type
                                                                WHERE produit.idMarque = marque.idMarque
                                                                AND produit.idType = type.idType
                                                                AND produit.idType = $i
                                                                ORDER BY produit.libelle ASC;");

                            foreach ($listeProduit as $produit) {

                                //Récupération des données dans la base
                                $idProduit = $produit['idProduit'];
                                $libelle = $produit['nom'];
                                $marque = $produit['marque'];
                                $prix = $produit['prix'];
                                $image = $produit['image'];
                                $occasion = $produit['occasion'];

                                echo "<div class = 'col-md-3 col-sm-4 col-xs-12 img-portfolio text-center'>";
                                echo "<img class = 'img-responsive img-hover' src = 'produits/" . $image . "' alt = ''>";
                                echo "<h3><span>" . $marque . " </span>";
                                echo "<span>" . $libelle . " </span>";
                                echo "<br />";
                                echo "<span class='label label-warning'>" . $prix . "€</span> ";

                                if ($occasion == 1) {
                                    echo "<span class='label label-danger'>Occasion</span><h3>";
                                }

                                echo "</div>";
                            }
                            ?>
                        </div>
                        <!-- /.row -->
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
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