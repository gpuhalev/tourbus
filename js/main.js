$(function () {
	$('#name').val('');
	$('#mail').val('');
	$('#message').val('');
})

function sendMail() {
	$('#contact_form').find('.error').removeClass('error');
	
	var name = $('#name').val();
	var mail = $('#mail').val();
	var message = $('#message').val();
	var toMail = $('#toMail').val();
	
	//Check Name field
	if (name != '' && name.length >= 3) {
		var checkName = 1;
	} else {
		$('#name').addClass('error');
		var checkName = 0;
	}
	
	//Check mail field
	if (mail != '' && mail.match("([a-z0-9\\+_\\-]+)(\\.[a-z0-9\\+_\\-]+)*@([a-z0-9\\-]+\\.)+[a-z]{2,6}$") != null) {
		var checkMail = 1;
	} else {
		$('#mail').addClass('error');
		var checkMail = 0;
	}
	
	//Check message Field
	if (message != '' && message.length >= 5) {
		var checkMessage = 1;
	} else {
		$('#message').addClass('error');
		var checkMessage = 0;
	}
	
	if (checkName != 0 && checkMail != 0 && checkMessage!= 0) {
		$.post('ajaxRequests.php',{ajax: 1,name: name, mail: mail, message: message, toMail: toMail},function (data){
			if (data == 'success') {
				$('#contact_form').fadeOut('fast');
				$('#success_msg').fadeIn('slow');
			}
		});
	}
}