
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("navbar").classList.add("show");
    } else {
        document.getElementById("navbar").classList.remove("show");
    }
}

window.addEventListener('load', function () {
    setTimeout(function () {
        document.querySelector('.preloader').style.display = 'none';
    }, 500);
});

new WOW().init();


function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}


document.addEventListener("DOMContentLoaded", function () {
    const largeImage = document.querySelector('.large_image');
    const smallImages = document.querySelectorAll('.small_image');
    smallImages.forEach(smallImage => {
        smallImage.addEventListener('click', function () {
            largeImage.src = smallImage.src;
        });
    });
});


