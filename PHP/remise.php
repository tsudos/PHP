<?php 
//$type = $_POST['type'];
$categorie = $_POST['type']; //Categ
$prix =$_POST['prix'];
//$_POST car on a utilisé method="post" sino,n $_GET

echo "INFORMATIONS SUR LA REMISE: <br/>";
echo "Categorie du produit : $categorie<br/>";
//echo "Type de produit: $type<br/>";
echo "prix du produit : $prix €<br/>";



if ($categorie == "PC" && $prix>=1000) {
    $prixRemise=$prix*0.85;
    echo "Grâce à la remise de 15% votre $categorie revient à ".round($prixRemise,2)."€ !";
}
else if ($categorie == "PC" && $prix<1000) {
    $prixRemise=$prix*0.90;
    echo "Grâce à la remise de 10% votre $categorie revient à ".round($prixRemise,2)."€ !";
}
else if ($categorie == "PC" && $prix<1000) {
    $prixRemise=$prix*0.90;
    echo "Grâce à la remise de 10% votre $categorie revient à ".round($prixRemise,2)."€ !";
}
else if($categorie == "Livres" ) {
    $prixRemise=$prix*0.95;
    echo "Grâce à la remise de 5% votre $categorie revient à ".round($prixRemise,2)."€ !";
}
else {
    $prixRemise=$prix*0.98;
    echo "Grâce à la remise de 2% votre $categorie revient à ".round($prixRemise,2)."€ !";
}





?>