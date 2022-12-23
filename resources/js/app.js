import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

// NEVE
const snowContainer = document.getElementById("snow-container");
const snowContent = ['&#10053', '&#10054', 'Buon Natale']

const random = (num) => {
    return Math.floor(Math.random() * num);
}

const getRandomStyles = () => {
    const top = random(100);
    const left = random(100);
    const dur = random(10) + 10;
    const size = random(25) + 25;
    return `
    top: -${top}%;
    left: ${left}%;
    font-size: ${size}px;
    animation-duration: ${dur}s;
  `;
}

const createSnow = (num) => {
    for (var i = num; i > 0; i--) {
        var snow = document.createElement("div");
        snow.className = "snow";
        snow.style.cssText = getRandomStyles();
        snow.innerHTML = snowContent[random(3)]
        snowContainer.append(snow);
    }
}

window.addEventListener("load", () => {
    createSnow(40)
});

// FINE NEVE


// ALBERO

