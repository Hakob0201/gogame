$('._smail').click(function(event) {

	let p_id    = $(this).parent().attr('data-value').split('_')[1]
	let p_smail = $(this).attr('data-value')

		if (p_id.length > 0 && p_smail.length > 0) {
			let add_like = new ajax_t_p(p_id, p_smail, 'new_AddLike') 
				add_like.send_ajax()
		}

});