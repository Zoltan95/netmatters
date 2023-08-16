
function getHeight() {
 
    divElement = document.querySelector(".answer");

    elemHeight = divElement.offsetHeight;

}

/*
$(".question a").on( "click tap",  function() {

    $(".answer").slideToggle();
    
    return false
});
*/
$(document).on("click", ".question a", function(t) {
    t.preventDefault();
    var e = $(this).closest(".question")
      , i = e.find(".answer");
    return e.toggleClass("active"),
    i.slideToggle(),
    !0
});
/*
$(document).on("click", ".question > h4 > a", function(t) {
    t.preventDefault();
    var e = $(this).closest(".question")
      , i = e.find(".answer");
    return e.toggleClass("active"),
    i.slideToggle(),
    !0
});*/