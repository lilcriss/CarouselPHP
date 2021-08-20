<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <title>Projet carousel</title>
</head>

<body>

<?php

//Récupération du contenu de dossier
// Scandir () fonction qui scanne un dossier
// et qui retourne un tableau

echo "<pre>";
$scan = scandir ('images');
var_dump ($scan);
echo "</pre>";

// Utilisation foreach pour afficher les images
// Attention à "." et ".." qui ne sont pas les images
foreach ($scan as $v){
    if ($v!="." && $v!=".."){
        //echo "<img src='./images/$v' width='70%' alt='image'/>"; OU:
        ?>
        <!--- Ne pas oublier de rajouter <?=$v?> ------>
        <div>
        <img src="./images/<?=$v?>" width="70%" alt="image"/>
        </div>
        <?php
        
    }
}

?>
    


















<script src="bootstrap-5.0.1-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>