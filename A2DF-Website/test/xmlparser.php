
<html>


    <?php
    $xmlstring = file_get_contents('http://localhost/a2df/ws/produit.php');
    $produits = simplexml_load_string($xmlstring);
    echo "<ul id='produits'>n";
    foreach ($produits as $produit):
        $id = $produit->id;
        $libelle = $produit->libelle;
        echo "<li>", $id, "</li>";
        echo "<li>", $libelle, "</li>";
    endforeach;
    echo "</ul>";
    ?>


</html>