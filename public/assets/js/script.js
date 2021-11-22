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


//FIN NAVBAR +++
window.addEventListener('DOMContentLoaded',function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'fr',
    events: [{
      title:'test',
      start:'2021-11-01'
    }
    ]
  });
  calendar.render();
});


let password = document.getElementById('verif');
let togglePassword = document.getElementById('toggle-password');

togglePassword.addEventListener("click", toggleClicked);

function toggleClicked() {
  if (password.type == "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
};

let passwordVerif = document.getElementById('verifPass');
let togglePasswordVerif = document.getElementById('toggle-verifPass');

togglePasswordVerif.addEventListener("click", toggleClickedverif);

function toggleClickedverif() {
  if (passwordVerif.type == "password") {
    passwordVerif.type = "text";
  } else {
    passwordVerif.type = "password";
  }
};