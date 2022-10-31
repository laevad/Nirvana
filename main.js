$(document).ready(function () {
    $(".header").height($(window).height());
});

$(window).scroll(function () {
  $("nav").toggleClass("scrolled", $(this).scrollTop() > 200);
});

// //  searchbar autocomplete (jquery)
// $(function () {
//
//   var bdata = [
//     "Da Vinci Code",
//     "Dracula",
//     "Frankenstein",
//     "Howl's Moving Castle",
//     "IT",
//     "Lord of the Rings",
//     "Long Shadoes",
//     "Pride and Prejudice",
//     "Ring",
//     "Stardust",
//     "The Fault In Our Stars",
//     "The Hobbit",
//     "Who Fears Death"
//   ];
//
//   $("#textfield").autocomplete({
//     source:bdata
//   });
//
// });

//  faq accordion (jquery)
let faqs = $(".faq_details");
$(".faq_title").click(function () {
  faqs.slideUp();
  faqs.prev().removeClass("active");
  $(this).next().slideDown();
  $(this).addClass("active");
  return false;
});

//  login validation
var email = document.forms['form']['email']
var password = document.forms['form']['password']

email.addEventListener('textInput', email_verify)
password.addEventListener('textInput', password_verify)
						
function validated() {
	if (email.value.length < 9) {
		email.style.border = "1px solid red";
		email.focus();
		return false;	
	}

	if (password.value.length < 6) {
		password.style.border = "1px solid red";
		password.focus();
		return false;	
	}
}                    

function email_verify(){
	if (email.value.length >= 8) {
    email.style.border = "1px solid silver";
		return true;	
	}

	if (password.value.length >= 8) {
    password.style.border = "1px solid silver";
		return true;	
	}
}

// scroll to top (jquery)
var scrollAmountBeforeDisplay = 10;
var scrollTransitiontime = 1200;
var opacityTransitionTime = 150;

$(document).ready(function (e) {
  scrollTopFunction();
});

function scrollTopFunction() {
  console.log($(window).scrollTop());
  if ($(window).scrollTop() < scrollAmountBeforeDisplay) {
    $("#scrollTop").fadeOut();
  }
  $(window).scroll(function () {
    //If scroll amount is sufficient to display
    if ($(this).scrollTop() > scrollAmountBeforeDisplay) {
      if ($("#scrollTop").css("opacity") == "0") {
        $("#scrollTop").css("display", "block");
        setTimeout(function () {
          $("#scrollTop").css("opacity", "1");
        }, opacityTransitionTime);
      }
    } else {
      if ($("#scrollTop").css("opacity") !== "0") {
        $("#scrollTop").css("opacity", "0");
        setTimeout(function () {
          $("#scrollTop").css("display", "none");
        }, opacityTransitionTime);
      }
    }
  });
  $("#scrollTop").bind("click", function (e) {
    e.preventDefault();
    window.location.hash = "";
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      scrollTransitiontime
    );
  });
}
