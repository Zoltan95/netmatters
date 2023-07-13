const headerSticky = document.getElementById("header-sticky");
const header = document.getElementById("header");
$('#header-sticky').css('display', 'none');
let lastScroll = 0;

window.addEventListener("scroll", () => {
    const currentScroll = window.scrollY;
    if (currentScroll <= 0) {
        headerSticky.classList.remove("sticky");
        $('#header-sticky').css('display', 'none') 
        return;
    }

    if (currentScroll > lastScroll) 
    {
        // down 
        $('#header-sticky').css('display', 'block')
        headerSticky.classList.add("slide-in");
        headerSticky.classList.remove("slide-out");

    } 
    else if (currentScroll < lastScroll) 
    {
        // up 
        headerSticky.classList.add("sticky");
        headerSticky.classList.add("slide-out");
        headerSticky.classList.remove("slide-in");
        
    }
    lastScroll = currentScroll;
});