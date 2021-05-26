const hamburger = document.querySelector('.hamburger');
const navContent = document.querySelector('navbar#navbar .links');
const redLogo = document.querySelector('navbar#navbar img.logo.red');
const whiteLogo = document.querySelector('navbar#navbar img.logo');

hamburger.addEventListener('click', ()=>{
    navContent.classList.toggle('slide');
    hamburger.classList.toggle('slide');
})