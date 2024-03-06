<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kategori Liste</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <div class="sticky-top">
                <div class="d-flex justify-content-center">
                    <div class="d-flex position-relative justify-content-center bookmark bg-catCol1 w-75">
                        <a href="#" class="stretched-link"></a>
                        <div class="position-absolute bottom-0 pb-4">
                            <h3 class="text-light fw-semibold">Playstation</h3>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <div class="d-flex flex-column gap-3 fs-2 fw-medium">
                        <?php
                        $genres = $db->sql("SELECT * FROM genres ORDER BY genreName asc");
                        foreach ($genres as $genre) {
                            ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    <?php echo $genre->genreName ?>
                                </label>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <?php include("global.php");?>
            <div class="col-12 d-flex justify-content-end mt-2">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdown">
                        A-Å
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Å-A</a></li>
                        <li><a class="dropdown-item" href="#">Pris: Lav til Høj</a></li>
                        <li><a class="dropdown-item" href="#">Pris: Høj til Lav</a></li>
                    </ul>
                </div>
            </div>
            <?php

            $products = $db->sql("SELECT * FROM products INNER JOIN genres ON productGenre1=genreId"); //javascript for sorting tror jeg (order status)
            foreach ($products as $product) {

            ?>
            <div class="col-4">
                <div class="produkt-box">
                    <a href="#" class="stretched-link"><img class="img-fluid" src="img/<?php echo $product->productPicture ?>" alt=" <?php echo $product->productName ?> "></a>
                    <h2 class="pt-2"> <?php echo $product->productName ?></h2>
                    <span> <?php echo $product->genreName //echo $product->genreName . ", " .  $product->productGenre2 .", ". $product->productGenre3 . "<br>";?> </span>
                    <p class="fs-1 fw-semibold pt-2"> <?php echo $product->productPrice . ",- DKK"; ?> </p>
            </div>
        </div>
                <?php
            }
            ?>
        </div>
        <div class="col-2 mt-5">
            <?php include("menu.php");?>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>

    const dropdown = document.querySelector("#dropdown");
    const sort = "ORDER BY productName ASC";

    function changeSort(){

    }
    function productType(){

    }

</script>
</body>
</html>
