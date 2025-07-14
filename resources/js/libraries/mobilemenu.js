let hamburger = document.getElementById("hamburger")
let MobileNav = document.getElementById("mobile-menu")

hamburger.onclick= function(){
    MobileNav.classList.toggle("block")
    MobileNav.classList.toggle("hidden")
};
