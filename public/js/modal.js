$('.login_modal_open').click(function() {
	$('.login_modal').css({
		opacity: '1',
		visibility: 'visible'
	});

	$('.login_modal').parent().css({
		opacity: '1',
		visibility: 'visible'
	});
});

$('.sign_up_modal_open').click(function() {
	$('.sign_up_modal').css({
		opacity: '1',
		visibility: 'visible'
	});

	$('.sign_up_modal').parent().css({
		opacity: '1',
		visibility: 'visible'
	});
});

$('.popup-close-button').click(function() {
	$(this).parent().css({
		opacity: '0',
		visibility: 'hidden'
	});
	$(this).parent().parent().css({
		opacity: '0',
		visibility: 'hidden'
	});
});