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

$id = filter_input(INPUT_GET, "id");

global $connexion;
$listeProduit = $connexion->query(" SELECT idProduit, produit.libelle AS nom, marque.libelle AS marque, type.libelle AS type, prix, image, etat, info1, info2, info3, info4, info5
                                    FROM produit, marque, type
                                    WHERE produit.idMarque = marque.idMarque
                                    AND produit.idType = type.idType
                                    AND produit.idProduit = $id;");

foreach ($listeProduit as $produit) {

    //Récupération des données dans la base
    $idProduit = $produit['idProduit'];
    $libelle = $produit['nom'];
    $marque = $produit['marque'];
    $prix = $produit['prix'];
    $image = $produit['image'];
    $etat = $produit['etat'];
    $info1 = $produit['info1'];
    $info2 = $produit['info2'];
    $info3 = $produit['info3'];
    $info4 = $produit['info4'];
    $info5 = $produit['info5'];
}
?>
<body>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Détails
                    <small>- <?= $marque . " " . $libelle ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="produits.php">Produits</a></li>
                    <li class="active">Details</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        
        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
                <img class="img-responsive center-block" src="produits/<?= $image ?>" style="max-height: 500px;">
            </div>

            <div class="col-md-6">
                <h2><b><?= $marque . " "?></b><?= $libelle ?></h2>
                <h3>Caracteristiques techniques</h3>
                <ul>
                    <li><?= $info1 ?></li>
                    <li><?= $info2 ?></li>
                    <li><?= $info3 ?></li>
                    <li><?= $info4 ?></li>
                    <li><?= $info5 ?></li>
                </ul>
                <h3><span class='label label-default'><?= $prix ?>€</span>
                <span class='label label-warning'>Occasion</span></h3>
            </div>

        </div>
        <!-- /.row -->
        
        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

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
