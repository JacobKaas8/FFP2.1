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
<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <?php include("global.php");?>
        </div>
        <div class="col-2"></div>
    </div>
</div>
<div class="row g-5 d-flex justify-content-center text-center mt-2 text-light mx-5">
    <?php
    $sqlAdd = "";
    $bind = [];
    if (!empty($_GET["categoryId"])) {
        $sqlAdd = " AND categoryId = :categoryId";
        $bind["categoryId"] = $_GET["categoryId"];
    }
    $categories = $db->sql("SELECT * FROM categories$sqlAdd", $bind);
    foreach($categories as $category) {
        ?>
        <div class="col-3">
            <div class="bg-<?php echo $category->catColor ?> p-5 m-auto" style="min-height: 200px; width: 200px">
            <img src="catPics/<?php echo $category->categoryPicture; ?>" class="img-fluid opacity-75">
                    <?php
                    echo $category->categoryName;
                    ?>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>