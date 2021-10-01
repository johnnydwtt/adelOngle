// NAVBAR +++
$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

$(window).scroll(function() {
	if ($(document).scrollTop() > 50) {
		$('.nav').addClass('affix');
	} else {
		$('.nav').removeClass('affix');
	}
});

let password = document.querySelector('.verif');
let togglePassword = document.querySelector('.toggle-password');

togglePassword.addEventListener("click", toggleClicked);

function toggleClicked() {
  if (password.type == "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}
//FIN NAVBAR +++