<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<div>
	<meta charset="utf-8">


	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <div class="backgrounds-container"
         <img class="showing background" src="img/bg1.webp"
         <img class="background" src="img/bg2.webp"
         <img class="background" src="img/bg3.webp"
</div>


</head>

<body>
<div class="overlay on-index bg-light bg-opacity-85">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="text-center position-absolute top-20 start-50 translate-middle-x">
                    <img src="img/logo.webp" alt="Logo" class="logo">
                    <h1 class="fw-bold py-5">Velkommen til en verden af nostalgi og <br> retro spil, film og musik</h1>
                    <a href="kategori.php">
                        <button class="btn border border-3 border-primary rounded-4 link-primary fs-1 fw-semibold px-5 py-2">&nbsp;&nbsp;&nbsp;&nbsp;Start&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="position-absolute bottom-0 start-50 translate-middle-x">
                    <div class="position-relative opacity-75">
                        <div class="menu-circle position-relative border border-dark border-3 rounded-circle">
                            <div class="icon position-absolute top-50 start-50 translate-middle">
                                <i class="fa-regular fa-comments"></i>
                            </div>
                        </div>
                        <span type="button" id="assiBtn" class="stretched-link link-dark fw-semibold" data-bs-toggle="modal" data-bs-target="#assistance"><p class="pt-2">Assistance</p></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="assistance" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark bg-light">
            <div class="modal-header">
                <h5 class="modal-title">En medarbejder er på vej</h5>
            </div>
            <div class="modal-body">
                <p>Du har nu kaldt efter assistance. En medarbejder vil være hos dig om et øjeblik.<br><br>Dette vindue kan nu lukkes.</p>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <a href="index.php" type="button" class="btn border border-2 border-primary link-primary fw-semibold px-5 py-2">Luk vindue</a>
            </div>
        </div>
    </div>
</div>

<script src="main.js"></script>
<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
