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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                            <label class="form-check-label" for="flexCheckDefault1">
                                Action
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                Adventure
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <?php include("global.php"); ?>
            <div class="row mt-5">
                <div class="col-4 p-3">
                    <div class="produkt-box position-relative">
                        <a href="#" class="stretched-link"><img src="img/kirbys-dream-land-game-boy.webp" alt="Kirby Dream Land"></a>
                        <h2 class="pt-2">Kirby Dream Land</h2>
                        <span>Action, Adventure,</span>
                        <p class="fs-1 fw-semibold pt-2">200,- DKK</p>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="produkt-box position-relative">
                        <a href="#" class="stretched-link"><img src="img/kirbys-dream-land-game-boy.webp" alt="Kirby Dream Land"></a>
                        <h2 class="pt-2">Kirby Dream Land</h2>
                        <span>Action, Adventure,</span>
                        <p class="fs-1 fw-semibold pt-2">200,- DKK</p>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="produkt-box position-relative">
                        <a href="#" class="stretched-link"><img src="img/kirbys-dream-land-game-boy.webp" alt="Kirby Dream Land"></a>
                        <h2 class="pt-2">Kirby Dream Land</h2>
                        <span>Action, Adventure,</span>
                        <p class="fs-1 fw-semibold pt-2">200,- DKK</p>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="produkt-box position-relative">
                        <a href="#" class="stretched-link"><img src="img/kirbys-dream-land-game-boy.webp" alt="Kirby Dream Land"></a>
                        <h2 class="pt-2">Kirby Dream Land</h2>
                        <span>Action, Adventure,</span>
                        <p class="fs-1 fw-semibold pt-2">200,- DKK</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2 mt-5">
            <?php include("menu.php");?>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
