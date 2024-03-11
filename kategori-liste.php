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
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>

<body>

<div class="bg-noindex"></div>
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
                        <?php } ?>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <div class="d-flex flex-column gap-3 fs-2 fw-medium">
                            <?php
                            $lpgenre = "d-inline"; // Set default display to inline
                            $genres = $db->sql("SELECT * FROM genres ORDER BY genreId asc");
                            foreach ($genres as $genre) {
                                if (!empty($_GET["categoryId"])) {
                                    $categoryId = intval($_GET["categoryId"]); // Convert to integer
                                    if ($categoryId < 12 && $genre->genreId > 14) {
                                        $lpgenre = "d-none"; // Set display to none if conditions are met
                                    }
                                }
                                ?>
                                <div class="form-check <?php echo $lpgenre ?>">
                                    <input class="form-check-input" type="checkbox" value="" id="<?php echo $genre->genreId  ?>">
                                    <label class="form-check-label" for="<?php echo $genre->genreId  ?>">
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
                <?php include("global.php"); ?>
                <div class="row mt-2">
                    <div class="col-6 mt-2">
                        <span class="text-dark text-opacity-50"><a href="kategori.php"
                                                                   class="link-dark link-opacity-50 link-opacity-100-hover">Kategorier</a> / <a
                                    href="#" class="link-dark link-opacity-50 link-opacity-100-hover"><?php echo $category->categoryName ?></a></span>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="dropdown">
                            <button class="btn bg-white border border-2 border-dark border-opacity-25 rounded-3 text-start py-2 px-4 dropdown-toggle"
                                    style="min-width: 190px;" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" id="dropdown">
                                A-Å
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" id="sort-ascending">A-Å</a></li>
                                <li><a class="dropdown-item" href="#" id="sort-descending">Å-A</a></li>
                                <li><a class="dropdown-item" href="#" id="sort-price-low-to-high">Pris: Lav til Høj</a>
                                </li>
                                <li><a class="dropdown-item" href="#" id="sort-price-high-to-low">Pris: Høj til Lav</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row mt-5" id="prodList">
                    <?php
                    $sortOption = $_POST['sortOption'];
                    $products = $db->sql("SELECT * FROM products INNER JOIN genres ON productGenre1=genreId WHERE productCategoryId = $category->categoryId ORDER BY productName ASC"); //javascript for sorting tror jeg (order status)
                    foreach ($products as $product) {
                        $html .= '<div class="col-4 p-3">';
                        $html .= '<div class="produkt-box w-100 bg-white position-relative rounded-4 shadow pt-4 pb-1">';
                        $html .= '<div class="d-flex justify-content-center">';
                        $html .= '<a href="produkt.php?categoryId='. $category->categoryId. '&productId=' . $product->productId. '" class="stretched-link"><img class="img-fluid" src="productPics/' . $product->productPicture . '" alt="' . $product->productName . '"></a>';
                        $html .= '</div>';
                        $html .= '<div class="px-4">';
                        $html .= '<h2 class="pt-3">' . $product->productName . '</h2>';
                        $html .= '<span>' . $product->genreName . '</span>';
                        $html .= '<p class="fs-1 fw-semibold pt-2">' . $product->productPrice . ',- DKK</p>';
                        $html .= '</div>';
                        $html .= '</div>';
                        $html .= '</div>';
                    }
                    echo $html;
                    ?>
                </div>
            </div>
            <div class="col-2 mt-5">
                <?php include("menu.php"); ?>
            </div>
        </div>
    </div>
    <?php
    } ?>
</div>

<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>

   /* If genreID is not 12 (!12) {

        d-none
    }*/



    // Function to initialize the sorting functionality
    function initializeSorting() {
        const dropdown = document.querySelector("#dropdown");
        const productsContainer = document.querySelector(".col-8");

        const sortOptions = {
            "sort-ascending": "ORDER BY productName ASC",
            "sort-descending": "ORDER BY productName DESC",
            "sort-price-low-to-high": "ORDER BY productPrice ASC",
            "sort-price-high-to-low": "ORDER BY productPrice DESC"
        };

        dropdown.addEventListener("click", (event) => {
            const selectedOptionId = event.target.id;
            const selectedOption = sortOptions[selectedOptionId];
            if (selectedOption) {
                sortProducts(selectedOption);
            }
        });

        function sortProducts(sortOption) {
            fetch("kategori-liste.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({sortOption: sortOption})
            })
                .then(response => response.json())
                .then(data => {
                    // Update the products container with the sorted products
                    productsContainer.innerHTML = data;
                    // Reinitialize the sorting functionality after products are loaded
                    initializeSorting();
                })
                .catch(error => console.error("Error sorting products:", error));
        }
    }

    // Call the function to initialize the sorting functionality
    initializeSorting();


</script>
</body>
</html>
