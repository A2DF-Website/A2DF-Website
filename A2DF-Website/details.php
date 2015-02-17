<?php
include ('head.php');

$id = filter_input(INPUT_GET, "id");

if ($id < 1) {
    header('Location: produits.php');
}

$xml = file_get_contents('http://localhost/a2df/ws/produit.php');
$produits = simplexml_load_string($xml);

foreach ($produits as $produit) {

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
    }
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
                <img class="img-responsive center-block" src="../A2DF/produits/<?= $image ?>" style="height: 500px;">
            </div>

            <div class="col-md-6">
                <h2><b><?= $marque . " " ?></b><?= $libelle ?></h2>
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
                <h3 class="page-header">Produits de la même catégorie</h3>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">

                <?php
                $xml_c1 = file_get_contents('http://localhost/a2df/ws/produit.php');
                $produits_c1 = simplexml_load_string($xml_c1);

                foreach ($produits_c1 as $produit_c1) {

                    $type_c1 = (int) $produit_c1->type;

                    if ($type == $type_c1) {

                        $idProduit_c1 = $produit_c1->id;
                        $image_c1 = $produit_c1->image;
                        ?>
                        <div class='col-sm-2 col-xs-6'>
                            <a href="details.php?id=<?= $idProduit_c1 ?>">
                                <img class='img-responsive img-hover img-related' src='../A2DF/produits/<?= $image_c1 ?>' style='height: 100px'>
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
