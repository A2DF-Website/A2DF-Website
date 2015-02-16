<html>

    <?php
    $xmlstring = file_get_contents('http://localhost/a2df/ws/produit.php');
    $produits = simplexml_load_string($xmlstring);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Libelle</th>";
    echo "<tr>";
    foreach ($produits as $produit):
        $id = $produit->id;
        $libelle = $produit->libelle;

        echo "<tr>";
        echo "<td>", $id, "</td>";
        echo "<td>", $libelle, "</td>";
        echo "</tr>";
    endforeach;
    echo "</ul>";
    ?>

</html>