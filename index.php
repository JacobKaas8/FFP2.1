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

</head>

<body>
<div class="slide" id="scroll-image">
    <img src="../ffp2.1/img/bg2.webp" class="slider img-fluid" />
    <img src="../ffp2.1/img/bg3.webp" class="slider img-fluid" />
    <img src="../ffp2.1/img/bg4.webp" class="slider img-fluid" />
    <img src="../ffp2.1/img/bg1.webp" class="slider img-fluid" />
</div>
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


<script>

    startImageTransition();

    function startImageTransition() {

        // images stores list of all images of
        // class test. This is the list of images
        // that we are going to iterate
        let images = document.getElementsByClassName("slider");

        // Set opacity of all images to 1
        for (let i = 0; i < images.length; ++i) {
            images[i].style.opacity = 1;
        }

        // Top stores the z-index of top most image
        let top = -9999;

        // cur stores the index of the image currently
        // on top images list contain images in the
        // same order they appear in HTML code
        /* The tag with class test which appears last
           will appear on top of all the images thus,
           cur is set to last index of images list*/
        let cur = images.length - 1;

        // Call changeImage function every 3 second
        // changeImage function changes the image
        setInterval(changeImage, 4000);

        // Function to transitions from one image to other
        async function changeImage() {

            // Stores index of next image
            let nextImage = (1 + cur) % images.length;

            // First set the z-index of current image to top+1
            // then set the z-index of nextImage to top
            /* Doing this make sure that the image below
               the current image is nextImage*/
            // if this is not done then during transition
            // we might see some other image appearing
            // when we change opacity of the current image
            images[cur].style.zIndex = top + 1;
            images[nextImage].style.zIndex = top;

            // await is used to make sure
            // the program waits till transition()
            // is completed
            // before executing the next line of code
            await transition();

            // Now, the transition function is completed
            // thus, we can say that the opacity of the
            // current image is now 0

            // Set the z-index of current image to top
            images[cur].style.zIndex = top;

            // Set the z-index of nextImage to top+1
            images[nextImage].style.zIndex = top + 1;

            // Increment top
            top = top + 1;

            // Change opacity of current image back to 1
            // since zIndex of current is less than zIndex
            // of nextImage
            /* changing it's opacity back to 1 will not
               make the image appear again*/
            images[cur].style.opacity = 1;

            // Set cur to nextImage
            cur = nextImage;
        }

        /* This function changes the opacity of
        current image at regular intervals*/
        function transition() {
            return new Promise(function (resolve) {

                // del is the value by which opacity is
                // decreased every interval
                let del = 0.01;

                // id stores ID of setInterval
                // this ID will be used later
                // to clear/stop setInterval
                // after we are done changing opacity
                let id = setInterval(changeOpacity, 10);

                // changeOpacity() decreasing opacity of
                // current image by del
                // when opacity reaches to 0, we stops/clears
                // the setInterval and resolve the function
                function changeOpacity() {
                    images[cur].style.opacity -= del;
                    if (images[cur].style.opacity <= 0) {
                        clearInterval(id);
                        resolve();
                    }
                }
            })
        }
    }







/*
    const headBg = document.querySelector('body');
    const headBgChange = document.querySelector('.bg-change');
    let imageindex = 0;

    function changeBg() {

        if (imageindex === 0) {
            headBg.style.setProperty('background-image', 'url("../ffp2.1/img/bg1.webp")');
            headBgChange.classList.remove(".bg-change");
            imageindex++;
        } else if (imageindex === 1) {
            headBgChange.classList.remove(".bg-change");
            headBgChange.style.setProperty('background-color', '#000000');
            headBg.style.setProperty('background-image', 'url("../ffp2.1/img/bg2.webp")');
            imageindex++;
        } else if (imageindex === 2) {
            headBg.style.setProperty('background-image', 'url("../ffp2.1/img/bg3.webp")');
            imageindex++;
        } else {
            headBg.style.setProperty('background-image', 'url("../ffp2.1/img/bg4.webp")');
            imageindex = 0;
        }
    }

    setInterval(changeBg, 2500);
*/
</script>

<script src="https://kit.fontawesome.com/73a430866d.js" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
