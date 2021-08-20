<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Projet Carousel</title>
</head>

<body>

<?php

$scan = scandir ('images');

?>
<div class="container">

       
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <!---<div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div> --->
        <div class="carousel-inner">

            <?php

                foreach ($scan as $k=>$v){

                    if ($v!="." && $v!=".."){

                    ?>

                    <div class="carousel-item <?php if($k==2){ echo "active";} ?>" data-bs-interval="1000">

                        <img src="./images/<?=$v?>" class="d-block w-100" alt="img 1">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>BAOBAB</h5>
                                <p>ENERGETIQUE</p>
                            </div>

                    </div>

                    <?php
                    }
                }
                            
            ?>
                
        </div>
    </div>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>