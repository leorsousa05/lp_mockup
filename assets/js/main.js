import {tns} from '../../modules/TinySlider/src/tiny-slider.js'

const burgerMenuMobile = document.querySelector(".burger-menu");
const headerContainer = document.querySelector(".header-container");
const prevSliderButton = document.querySelector(".prev");
const nextSliderButton = document.querySelector(".next");

burgerMenuMobile.addEventListener("click", () => {
    headerContainer.classList.toggle("show")   
});

const slider = tns({
    container: '.slider-wrapper',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    mouseDrag: true,
    arrowKeys: true,
    controls: true,
});

prevSliderButton.addEventListener("click", () => {
    slider.goTo('prev');
});

nextSliderButton.addEventListener("click", () => {
    slider.goTo('next');
});
