
$('.post_reply').keyup(function(event) {

	var code = (event.keyCode ? event.keyCode : event.which)
	if(code == 13){

		let p_id   = $(this).parent().parent().attr('data-value').split('_')[1]
		let p_text = $(this).val()

			if (p_id.length > 0 && p_text.length > 0) {
				let add_comm = new ajax_t_p(p_id, p_text, 'new_AddComment')
					add_comm.send_ajax()
			}
	}

});

$(document).on('click','.o_p_c',function () {
    new Comment( $(this).attr('value'), "gffh", 'print_comment','comment',$(this).parent().next())
})
