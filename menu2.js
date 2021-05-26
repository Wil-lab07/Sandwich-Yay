const hamburger = document.querySelector('.hamburger');
const navContent = document.querySelector('navbar#navbar .links');
const redLogo = document.querySelector('navbar#navbar img.logo.red');
const whiteLogo = document.querySelector('navbar#navbar img.logo');

hamburger.addEventListener('click', ()=>{
    navContent.classList.toggle('slide');
    hamburger.classList.toggle('slide');
})

$(document).ready(()=>{
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 200) {
          $("body").css("background-color" , "#fcf9f4");
          $("section#categories .row.title h1").css("color", "#E51636");
          $("section#title h1").css("color", "#E51636");
        }
        else{
            $("body").css("background-color" , "#E51636");
            $("section#categories .row.title h1").css("color", "#fcf9f4")
            $("section#title h1").css("color", "#fcf9f4");
        }
    })
})