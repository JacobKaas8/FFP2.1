let headerBackgrounds = document.querySelectorAll(".background");

let imageindex = 0;

function changeBackground() {
    // Remove .showing class from current background
    headerBackgrounds[imageindex].classList.remove("showing");

    // Increment the image index by one
    imageindex++;

    // If the image index is more than there are elements, set it to 0
    if (imageindex>= headerBackgrounds.length) {
        imageindex = 0
    }

    // Add the .showing class to the next background
    headerBackgrounds[imageindex].classList.add("showing")
}

setInterval(changeBackground, 5000)