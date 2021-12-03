
// ****************************
// ********* DEBUT NAVBAR *****
// ****************************
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


// ****************************
// ********* FIN NAVBAR *******
// ****************************

// ****************************
// **** MODAL CONFIRMATION ****
// ****************************

var customer_id;
var myModalEl = document.getElementById('modalDelete');
var confirmation = document.getElementById('confirm')



myModalEl.addEventListener('show.bs.modal', function (event) {
    customer_id = event.relatedTarget.dataset.id;
    console.log(myModalEl);
})


confirmation.addEventListener('click', function (){
    document.location.href = '/controllers/admin/delete-patientCtrl.php?id='+customer_id;
    console.log(confirmation);
})


