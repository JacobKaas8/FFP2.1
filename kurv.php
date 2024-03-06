<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kurv</title>

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
        <div class="col-2"></div>
        <div class="col-8">
            <?php include("global.php"); ?>
            <div class="mt-4">
                <h2 class="pt-2 fw-semibold">Din kurv</h2>
                <div class="row mt-3">
                    <div class="col-2">
                        <a href="#"><img src="img/kirbys-dream-land-game-boy.webp" alt="Kirby Dream Land" class="w-100"></a>
                    </div>
                    <div class="col-5">
                        <a href="#" class="link-dark"><h2 class="fw-semibold pt-1">Kirby Dream Land</h2></a>
                    </div>
                    <div class="col-2">
                        <h2 class="fw-semibold pt-1">200,- DKK</h2>
                    </div>
                    <div class="col-1 pt-1">
                        <input type="number" class="form-control" min="0" step="1" placeholder="1" id="amountInput">
                    </div>
                    <div class="col-2 pt-1 text-end">
                        <a href="#">Fjern vare</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <a href="#"><img src="img/kirbys-dream-land-game-boy.webp" alt="Kirby Dream Land" class="w-100"></a>
                    </div>
                    <div class="col-5">
                        <a href="#" class="link-dark"><h2 class="fw-semibold pt-1">Kirby Dream Land</h2></a>
                    </div>
                    <div class="col-2">
                        <h2 class="fw-semibold pt-1">200,- DKK</h2>
                    </div>
                    <div class="col-1 pt-1">
                        <input type="number" class="form-control" min="0" step="1" placeholder="1" id="amountInput">
                    </div>
                    <div class="col-2 pt-1 text-end">
                        <a href="#">Fjern vare</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="#"><button class="btn border border-2 border-primary link-primary fw-semibold px-5 py-2 me-3">Få fremvist varer</button></a>
                <a href="#"><button class="btn border border-2 border-primary link-primary fw-semibold px-5 py-2">Tilføj mere til kurv</button></a>
            </div>

        </div>
        <div class="col-2 mt-5">
            <?php include("menu.php"); ?>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
