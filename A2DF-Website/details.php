<?php
include ('head.php');

$id = filter_input(INPUT_GET, "id");

$xml = file_get_contents('http://localhost/a2df/ws/produit.php');
$magasin = simplexml_load_string($xml);
$online = $magasin->online;

$listeIdProduits = array();
foreach ($magasin->produits->produit as $idproduit) {
    $idprod = $idproduit->id;
    array_push($listeIdProduits, $idprod);
}

if ((!in_array($id, $listeIdProduits)) || ($online == 0)) {
    header('Location: produits.php');
}

foreach ($magasin->produits->produit as $produit) {

    $idProduit = $produit->id;

    if ($idProduit == $id) {
        //Récupération des données dans la base
        $libelle = $produit->libelle;
        $type = (int) $produit->type;
        $marque = $produit->marque;
        $prix = $produit->prix;
        $image = $produit->image;
        $etat = $produit->etat;
        $info1 = $produit->info1;
        $info2 = $produit->info2;
        $info3 = $produit->info3;
        $info4 = $produit->info4;
        $info5 = $produit->info5;
        $info6 = $produit->info6;
        $info7 = $produit->info7;
        $info8 = $produit->info8;
    }
}
?>
<body>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Produits
                    <small>- Disponibles en magasin (sous 72h selon stock)</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="produits.php">Produits</a></li>
                    <li class="active"><?= $marque . " " . $libelle ?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
                <img class="img-responsive center-block" src="../A2DF/produits/<?= $image ?>" onError="this.onerror=null;this.src='../A2DF/produits/notfound.png';">
            </div>

            <div class="col-md-6">
                <h2><b><?= $marque . " " ?></b><?= $libelle ?></h2>
                <h3>Caracteristiques techniques</h3>
                <ul>
                    <?php
                    if ($info1 <> "") {
                        echo "<li>" . $info1 . "</li>";
                    }
                    if ($info2 <> "") {
                        echo "<li>" . $info2 . "</li>";
                    }
                    if ($info3 <> "") {
                        echo "<li>" . $info3 . "</li>";
                    }
                    if ($info4 <> "") {
                        echo "<li>" . $info4 . "</li>";
                    }
                    if ($info5 <> "") {
                        echo "<li>" . $info5 . "</li>";
                    }
                    if ($info6 <> "") {
                        echo "<li>" . $info6 . "</li>";
                    }
                    if ($info7 <> "") {
                        echo "<li>" . $info7 . "</li>";
                    }
                    if ($info8 <> "") {
                        echo "<li>" . $info8 . "</li>";
                    }
                    ?>
                </ul>
                <h3><span class='label label-default'><?= $prix ?>€</span>

<?php
if ($etat == 1) {
    echo "<span class='label label-warning'>Occasion</span></h3>";
} else if ($etat == 2) {
    echo "<span class='label label-danger'>Destockage</span></h3>";
}
?>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Derniers produits ajoutés</h3>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 container">

                <?php
                $xml_c = file_get_contents('http://localhost/a2df/ws/produit.php');
                $magasin_c = simplexml_load_string($xml_c);
                $nb_objet = 0;

                foreach ($magasin_c->produits->produit as $produit_c) {

                    $type_c = (int) $produit_c->type;
                    $nb_objets_max = 6;

                    if (($type == $type_c) && ($nb_objet < $nb_objets_max)) {
                        $nb_objet++;
                        $idProduit_c = $produit_c->id;
                        $marque_c = $produit_c->marque;
                        $libelle_c = $produit_c->libelle;
                        $image_c = $produit_c->image;
                        ?>
                        <div class='col-lg-2 col-sm-4 col-xs-6'>
                            <a href="details.php?id=<?= $idProduit_c ?>">
                                <img class='img-responsive img-hover img-related center-block' src='../A2DF/produits/<?= $image_c ?>' title="<?= $marque_c . " " . $libelle_c ?>" onError="this.onerror=null;this.src='../A2DF/produits/notfound.png';" style='height: 100px'>
                            </a>
                        </div>
        <?php
    }
}
?>

            </div>
        </div>
    </div>
</div>
<!-- /.row -->

</div>

<!-- Footer -->
<footer class="footer">
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

</body>

</html>
