$( ".hamburger" ).on( "click tap", function() {
    $("body").toggleClass('menu-active');
    $("#header-sticky").toggleClass('menu-active');  
    $("#sidepanel").toggleClass('is-sidepanel');
    $("button.hamburger").toggleClass('is-active');
    $("#main-inner").css("pointer-events", "none")
    $("#main-outer").css("display", "block")
});
    
$("#main-outer").on( "click tap", function() { 
    $("body").toggleClass('menu-active');
    $("#header-sticky").toggleClass('menu-active');  
    $("#sidepanel").toggleClass('is-sidepanel');
    $("button.hamburger").toggleClass('is-active');
    $("#main-inner").css("pointer-events", "all");
    $("#main-outer").css("display", "none")
});

