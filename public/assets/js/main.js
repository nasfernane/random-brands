const logos = document.querySelectorAll('.brandLogo');

console.log(logos);

window.addEventListener('load', function () {
    logos.forEach(element => {
        const path = element.getAttribute('data-logo');
        console.log(path);
        element.style.backgroundImage = `url('/public/assets/img/${path}.png')`;
    });
});
