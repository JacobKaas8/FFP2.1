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
            <div class="row mt-2">
                <div class="col-12 mt-2">
                    <span class="text-dark text-opacity-50"><a href="kategori.php" class="link-dark link-opacity-50 link-opacity-100-hover">Kategorier</a> / <a href="kurv.php" class="link-dark link-opacity-50 link-opacity-100-hover">Kurv</a></span>
                </div>
            </div>
            <div class="mt-4">
                <h2 class="pt-2 fw-semibold">Din kurv</h2>
                <div class="row mt-3">
                    <div class="col-8">
                        <div class="row position-relative">
                            <a href="#" class="stretched-link"></a>
                            <div class="col-3">
                                <img src="img/kirbys-dream-land-game-boy.webp"  alt="Kirby Dream Land" class="img-fluid w-100">
                            </div>
                            <div class="col-9">
                                <h2 class="fw-semibold pt-1">Kirby Dream Land</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pt-1">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-4">
                                <label for="antalInput2" class="form-label">Antal</label>
                                <input type="number" class="form-control w-75" min="1" step="1" placeholder="1" id="antalInput2">
                                <a href="#"><p class="pt-2">Fjern vare</p></a>
                            </div>
                            <div class="col-5 text-end">
                                <h2 class="fw-semibold pt-1">200,- DKK</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8">
                        <div class="row position-relative">
                            <a href="#" class="stretched-link"></a>
                            <div class="col-3">
                                <img src="img/kirbys-dream-land-game-boy.webp"  alt="Kirby Dream Land" class="img-fluid w-100">
                            </div>
                            <div class="col-9">
                                <h2 class="fw-semibold pt-1">Kirby Dream Land</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pt-1">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-4">
                                <label for="antalInput2" class="form-label">Antal</label>
                                <input type="number" class="form-control w-75" min="1" step="1" placeholder="1" id="antalInput2">
                                <a href="#"><p class="pt-2">Fjern vare</p></a>
                            </div>
                            <div class="col-5 text-end">
                                <h2 class="fw-semibold pt-1">200,- DKK</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-end">
                        <span>Subtotal</span>
                        <h2 class="fw-semibold pt-1">400,- DKK</h2>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a type="button" id="viewBtn" class="btn border border-2 border-primary link-primary fw-semibold px-5 py-2 me-3" data-bs-toggle="modal" data-bs-target="#viewProducts">Få fremvist varer</a>
                <a href="kategori.php" type="button" class="btn border border-2 border-primary link-primary fw-semibold px-5 py-2">Tilføj mere til kurv</a>
            </div>

        </div>
        <div class="col-2 mt-5">
            <?php include("menu.php"); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row mt-5 mb-4">
                <div class="col-12">
                    <h2 class="pt-2 fw-semibold">Andre køber også</h2>
                </div>
                <div class="col-4 p-3">
                    <div class="produkt-box position-relative">
                        <a href="#" class="stretched-link"><img src="img/kirbys-dream-land-game-boy.webp"
                                                                alt="Kirby Dream Land"></a>
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
        <div class="col2"></div>
    </div>
</div>

<div class="modal" id="viewProducts" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark bg-light">
            <div class="modal-header">
                <h5 class="modal-title">Dine varer er på vej</h5>
            </div>
            <div class="modal-body">
                <p>Din forespørgsel er nu sendt til vores lager. En medarbejder vil komme og betjene dig om et øjeblik.<br><br>Dette vindue kan nu lukkes.</p>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <a href="index.php" type="button" class="btn border border-2 border-primary link-primary fw-semibold px-5 py-2">Luk vindue</a>
            </div>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
