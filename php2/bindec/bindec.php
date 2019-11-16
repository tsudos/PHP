<!-- ?php
if (($binaire = $_POST['binaire']) !== ""){
        echo convert($binaire);
    }
else {echo "BUG !";}
? -->

<!--fonction-->
<?php
function convert($decbin){
    $conv = base_convert($decbin, 10, 2);
    return $conv;
}
?>

<?php
function convert2($bindec){
    $conv2 = base_convert($bindec, 2, 10);
    return $conv2;
}
?>

<!--traitement-->
<?php
    if (($binaire = $_POST['binaire'])!==""){
        $convert = convert2($binaire);
        echo $convert;
        //fichier texte binaire
        $fp =fopen("binaire.txt", "a+");
            if (!$fp){
                echo " Echec de l'ouverture du document";
            }
            else {
                $Ligne=fwrite($fp, $binaire."\n");
            }
        //fichier texte decimal
        $fp2=fopen("decimal.txt", "a+");
            if (!$fp2){
                echo " Echec de l'ouverture du document";
            }
            else {

            $Ligne2=fwrite($fp2, $convert."\n");
            }
            fclose($fp);
            fclose($fp2);
    }
    else {echo "BUG !";}
?>