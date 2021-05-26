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
          $("navbar#navbar").css("background" , "#E51636");
        }
        else{
            $("navbar#navbar").css("background" , "transparent");  	
        }
    })
})

