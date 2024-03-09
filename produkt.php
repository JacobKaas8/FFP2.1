<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Produkt navn</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>

<body>

<div class="overlay bg-light bg-opacity-90">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="sticky-top">
                    <div class="d-flex justify-content-center">
                        <?php
                        $sqlAdd = "";
                        $bind = [];
                        if (!empty($_GET["categoryId"])) {
                            $sqlAdd = " AND categoryId = :categoryId";
                            $bind["categoryId"] = $_GET["categoryId"];
                        }
                        $categories = $db->sql("SELECT * FROM categories WHERE 1=1 $sqlAdd", $bind);
                        foreach ($categories as $category) {
                        if (!empty($_GET["categoryId"])) {
                            ?>
                            <div class="d-flex position-relative justify-content-center bookmark bg-<?php echo $category->catColor ?> w-75">
                                <a href="kategori.php" class="stretched-link"></a>
                                <div class="position-absolute bottom-0 pb-4">

                                    <h3 class="text-light fw-semibold"> <?php echo $category->categoryName ?> </h3>

                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <div class="col-8">
                <?php include("global.php"); ?>
                <div class="row mt-2">
                    <?php
                    $sqlAdd = "";
                    $bind = [];
                    if (!empty($_GET["productId"])) {
                        $sqlAdd = " AND productId = :productId";
                        $bind["productId"] = $_GET["productId"];
                    }
                    $products = $db->sql("SELECT * FROM products INNER JOIN categories ON productId=categoryId WHERE 1=1 $sqlAdd", $bind);
                    foreach ($products as $product) {
                    ?>
                    $products = $db->sql("SELECT * FROM products INNER JOIN genres ON productGenre1=genreId WHERE 1=1 $sqlAdd", $bind);
                    foreach ($products as $product) { ?>
                    <div class="col-12 mt-2">
                        <span class="text-dark text-opacity-50"><a href="kategori.php" class="link-dark link-opacity-50 link-opacity-100-hover">Kategorier</a> / <a href="kategori-liste.php?categoryId=<?php echo $category->categoryId ?>" class="link-dark link-opacity-50 link-opacity-100-hover"><?php echo $category->categoryName ?></a> / <a href="#" class="link-dark link-opacity-50 link-opacity-100-hover"><?php echo $product->productName ?></a></span>
                        <?php }
                        }?>
                    </div>
                </div>
                <div class="row mt-5">


                    <?php
                    }
                    ?>
                    <div class="col-12 mt-2">
                        <span class="text-dark text-opacity-50"><a href="kategori.php" class="link-dark link-opacity-50 link-opacity-100-hover">Kategorier</a> / <a href="kategori-liste.php" class="link-dark link-opacity-50 link-opacity-100-hover"><?php echo $category->categoryName ?></a> / <a href="produkt.php" class="link-dark link-opacity-50 link-opacity-100-hover"><?php echo $product->productName ?></a></span>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-4 p-3">
                        <a href="#"><img src="productPics/<?php echo $product->productPicture ?>" alt="Kirby Dream Land" class="w-100"></a>
                    </div>
                    <div class="col-8 p-3">
                        <h2 class="pt-2 fw-semibold"><?php echo $product->productName ?></h2>
                        <span><a href="#"><?php echo $product->genreName ?></a></span>
                        <p class="pt-2"><?php echo $product->productDescription ?></p>
                        <a href="#beskrivelse" class="link-primary">Læs mere</a>
                        <p class="fs-1 fw-semibold pt-2"><?php echo $product->productPrice ?>,- DKK</p>
                        <button id="addToBasket" class="btn border border-2 border-primary text-primary fw-semibold px-5 py-2 me-3">Læg i kurv</button>
                        <a href="#"><button class="btn border border-2 border-primary link-primary fw-semibold px-5 py-2">Prøv spillet</button></a>
                    </div>
                        <?php
                    }
                    ?>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <h2 class="pt-2 fw-semibold">Information</h2>
                        <table>
                            <tr>
                                <td class="pt-2">Udgivelsesår:</td>
                                <td class="pt-2 ps-3">1999</td>
                            </tr>
                            <tr>
                                <td class="pt-2">Udgiver:</td>
                                <td class="pt-2 ps-3">Navn</td>
                            </tr>
                            <tr>
                                <td class="pt-2">Udvikler:</td>
                                <td class="pt-2 ps-3">Navn</td>
                            </tr>
                            <tr>
                                <td class="pt-2">Stand:</td>
                                <td class="pt-2 ps-3">Brugt</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-8">
                        <h2 class="pt-2 fw-semibold" id="beskrivelse">Beskrivelse</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting.</p>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col-12">
                        <h2 class="pt-2 fw-semibold">Relaterede produkter</h2>
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
                            <a href="#" class="stretched-link"><img src="img/kirbys-dream-land-game-boy.webp"
                                                                    alt="Kirby Dream Land"></a>
                            <h2 class="pt-2">Kirby Dream Land</h2>
                            <span>Action, Adventure,</span>
                            <p class="fs-1 fw-semibold pt-2">200,- DKK</p>
                        </div>
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
                </div>
            </div>
            <div class="col-2 mt-5">
                <?php include("menu.php"); ?>
            </div>
        </div>
    </div>
</div>

<script>
    const addToBasket = document.querySelector('#addToBasket');

    addToBasket.addEventListener('click', () => {
        toggleStatus(true);
    })

    function toggleStatus(isAdded) {
        addToBasket.classList.remove('text-success');
        addToBasket.classList.add('text-primary');
        addToBasket.classList.remove('border-success');
        addToBasket.classList.add('border-primary');
        addToBasket.innerHTML = 'Læg i kurv';

        if (isAdded) {
            addToBasket.classList.remove('text-primary');
            addToBasket.classList.add('text-success');
            addToBasket.classList.remove('border-primary');
            addToBasket.classList.add('border-success');
            addToBasket.innerHTML = 'Gå til kurv';

            addToBasket.addEventListener('click', () => {
                window.location = 'kurv.php';
            })
        }
    }

    toggleStatus(isAdded(false));
</script>
<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
