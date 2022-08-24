"use stricts"

window.addEventListener("scroll", function(){
    var navbar_sticky = document.querySelector("navigation_bar");
    navbar_sticky.classList.toggle("fixed-top", window.scrollY > 100)
})

window.addEventListener("scroll", function(){
    var navbar_logo = document.querySelector("navbar-brand");
    navbar_logo.classList.toggle("content", window.scrollY > 700)
})