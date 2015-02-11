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
                <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-briefcase"></i> Accessoires</a>
                </li>
                <li class=""><a href="#service-rwo" data-toggle="tab"><i class="fa fa-tablet"></i> Tablettes</a>
                </li>
                <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-laptop"></i> Portables</a>
                </li>
                <li class=""><a href="#service-four" data-toggle="tab"><i class="fa fa-hdd-o"></i> Fixes</a>
                </li>
                 <li class=""><a href="#service-five" data-toggle="tab"><i class="fa fa-desktop"></i> Ecrans</a>
                </li>
                <li class=""><a href="#service-six" data-toggle="tab"><i class="fa fa-print"></i> Imprimantes</a>
                </li>
                
            </ul>

            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="service-one">
                    <h4>Accessoires</h4>
                    <!-- Projects Row -->
                    <?php
                    global $connexion;
                    $listeProduit = $connexion->query(" SELECT idProduit, produit.libelle AS nom, marque.libelle AS marque, type.libelle AS type, prix, image, occasion
                                                        FROM produit, marque, type
                                                        WHERE produit.idMarque = marque.idMarque
                                                        AND produit.idType = type.idType
                                                        AND produit.idType = 1
                                                        ORDER BY produit.libelle ASC;");

                    foreach ($listeProduit as $produit) {

                        //Récupération des données dans la base
                        $idProduit = $produit['idProduit'];
                        $libelle = $produit['nom'];
                        $marque = $produit['marque'];
                        $prix = $produit['prix'];
                        $image = $produit['image'];
                        $occasion = $produit['occasion'];
                    }

                    echo "<div class = 'row'>";
                    echo "<div class = 'col-md-3 img-portfolio thumbnail text-center'>";
                    echo "<a href = 'portfolio-item.html'>";
                    echo "<img class = 'img-responsive img-hover' src = 'produits/" . $image . "' alt = ''>";
                    echo "</a>";
                    echo "<h3><span>" . $marque . " </span>";
                    echo "<span>" . $libelle . " </span>";
                    echo "<span class='label label-warning'>" . $prix . "€</span><h3>";
                    echo "</div>";
                    echo "</div>";
                    ?>
                    <!-- /.row -->
                </div>
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