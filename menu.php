<div class="d-flex justify-content-center text-center">
    <div class="d-flex flex-column position-fixed gap-3">
        <div class="position-relative opacity-75">
            <div class="menu-circle position-relative border border-dark border-3 rounded-circle">
                <div class="icon position-absolute top-50 start-50 translate-middle">
                    <i class="fa-solid fa-house"></i>
                </div>
            </div>
            <a href="kategori.php" class="stretched-link link-dark fw-semibold"><p class="pt-2">Hjem</p></a>
        </div>
        <div class="position-relative opacity-75">
            <div class="menu-circle position-relative border border-dark border-3 rounded-circle">
                <div class="icon position-absolute top-50 start-50 translate-middle">
                    <i class="fa-solid fa-basket-shopping"></i>
                </div>
            </div>
            <a href="kurv.php" class="stretched-link link-dark fw-semibold"><p class="pt-2">Kurv</p></a>
        </div>
        <div class="position-relative opacity-75">
            <div class="menu-circle position-relative border border-dark border-3 rounded-circle">
                <div class="icon position-absolute top-50 start-50 translate-middle">
                    <i class="fa-solid fa-info"></i>
                </div>
            </div>
            <span type="button" id="infoBtn" class="stretched-link link-dark fw-semibold" data-bs-toggle="modal" data-bs-target="#info"><p class="pt-2">Info</p></span>
        </div>
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

<div class="modal" id="info" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark bg-light">
            <div class="modal-header">
                <h5 class="modal-title">Information</h5>
            </div>
            <div class="modal-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn border border-2 border-primary link-primary fw-semibold px-5 py-2" data-bs-dismiss="modal" aria-label="Close">Luk vindue</button>
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