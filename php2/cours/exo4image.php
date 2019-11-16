<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="folder.php?type=C">chiens</a>
    <a href="folder.php?type=P">Poney</a>
    <a href="folder.php?type=G">girafe</a>
    <?php
    $type =isset($_GET['type']) ? $_GET['type']:'';
    //$type = $_GET['type'];
if (!empty($type)){
    switch($type){
    case 'C':
    $dossier = '../images/chien';
    $title = 'voici les chiens';
    break;
    case 'P':
    $dossier = '../images/poney';
    $title = 'voici les poneys';
    break;
    case 'G':
    $dossier = '../images/girafe';
    $title = 'voici les girafes';
    break;
    default:
    $dossier = '';
    $title = '';

}//fin du switch
}// fin if
?>
</body>
</html>