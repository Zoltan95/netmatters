let name_bool = false;
let email_bool = false;
let tel_bool = false;

// Contact form slider
$(document).on("click", ".question a", function(t) {
    t.preventDefault();
    var e = $(this).closest(".question")
      , i = e.find(".answer");
    return e.toggleClass("active"),
    i.slideToggle(),
    !0
});

$('#errormsg .close').on('click', function() {
  $("#errormsg").remove();
});

$(document).ready(function(){
  if ($('#name').val() != ""){
    name_bool = true;
  }
  if ($('#email').val() != ""){
    email_bool = true;
  }
});

$('#name').on('input', function() {
  var cname = $(this).val();
  if (cname.length >= 2) {
    $("#name").removeClass("has-error");
    name_bool = true;
  } else {
    $("#name").addClass("has-error");
    name_bool = false;
  }

});

$(".checkmark").on( "click tap", function() { 
  if (!$(".ckbox__button input").is(":checked")){
    //$(".ckbox__button").addClass('is-checked');
    $(".ckbox__button input").attr('value', 2);
    }else {
    //$(".ckbox__button").removeClass('is-checked');
    $(".ckbox__button input").attr('value', 1);
  }
});

$('#email').on('input', function() {
  var input = $(this).val();
  let re = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  var is_email = re.test(input);
  if (input === "")
  {
    $("#email").addClass("has-error");
    email_bool = false;
  }
  else if (!is_email)
  {
    $("#email").addClass("has-error");
    email_bool = false;
  }
  else
  {
    $("#email").removeClass("has-error");
    email_bool = true;
  }
});

// Contact form-handling
$(document).on("click", ".action-block button", function(t) {
  if (!email_bool || !name_bool) {
    t.preventDefault();
  }
});
