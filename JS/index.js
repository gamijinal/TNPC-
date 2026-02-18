// document.addEventListener("DOMContentLoaded", function () {

//     let slidesContainer = document.querySelector(".slides");
//     let slides = document.querySelectorAll(".slide");
//     let dots = document.querySelectorAll(".dot");

//     let index = 0;

//     function updateSlider() {
//         slidesContainer.style.transform = `translateX(-${index * 100}%)`;

//         dots.forEach(dot => dot.classList.remove("active"));
//         dots[index].classList.add("active");
//     }

//     dots.forEach((dot, i) => {
//         dot.addEventListener("click", function () {
//             index = i;
//             updateSlider();
//         });
//     });

//     function autoSlide() {
//         index++;
//         if (index >= slides.length) {
//             index = 0;
//         }
//         updateSlider();
//     }

//     setInterval(autoSlide, 4000);
// });

document.addEventListener("DOMContentLoaded", function () {

    const slidesContainer = document.querySelector(".slides");
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");

    let index = 0;
    let direction = 1; // 1 = forward, -1 = backward

    function showSlide(i) {
        slidesContainer.style.transform = "translateX(-" + i * 100 + "%)";

        dots.forEach(dot => dot.classList.remove("active"));
        dots[i].classList.add("active");
    }

    dots.forEach((dot, i) => {
        dot.addEventListener("click", function () {
            index = i;
            showSlide(index);
        });
    });

    setInterval(function () {

        index += direction;

        // If reached last slide → reverse
        if (index === slides.length - 1) {
            direction = -1;
        }

        // If reached first slide → forward
        if (index === 0) {
            direction = 1;
        }

        showSlide(index);

    }, 4000);

});



window.addEventListener("scroll", function() {
    let navbar = document.querySelector(".nav_bar");

    if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

