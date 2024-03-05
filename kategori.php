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
</head>

<body>
<?php include("global.php");?>
<div class="row g-5 justify-content-center text-center mt-5 text-light mx-5">
    <?php
    $categories = $db->sql("SELECT * FROM categories");
    foreach($categories as $category) {
        //echo $category->categoryColor;
        ?>
        <div class="col-4 bg-success p-3">
            <img src="<?php echo $category->categoryPicture; ?>" class="opacity-75">
                    <?php
                    echo $category->categoryName;
                    ?>
        </div>
        <?php
    }
    ?>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>