<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kategorier</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="overlay bg-light bg-opacity-90">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <?php include("global.php"); ?>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row mt-5 px-3">
            <?php
            $sqlAdd = "";
            $bind = [];
            if (!empty($_GET["categoryId"])) {
                $sqlAdd = " AND categoryId = :categoryId";
                $bind["categoryId"] = $_GET["categoryId"];
            }
            $categories = $db->sql("SELECT * FROM categories$sqlAdd", $bind);
            foreach ($categories as $category) {
                ?>
            <div class="col-3 p-3">
                <div class="position-relative bg-<?php echo $category->catColor ?> rounded-4 shadow text-center w-100 ratio ratio-1x1">
                    <a href="kategori-liste.php?categoryId=<?php echo $category->categoryId ?>" class="stretched-link"></a>
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="catPics/<?php echo $category->categoryPicture; ?>" class="img-fluid opacity-15">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <p class="fs-1 fw-semibold text-light"><?php echo $category->categoryName; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>