
$.ajaxSetup({

    headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

});

console.log($('meta[name="csrf-token"]').attr('content'))

var add_post = new FormData();
var photos   = [];
var button   = $('.p_p_i')
var uploader = $('<input type="file" accept="image/*">')
var images   = $('.p_a_i')
button.on('click', function () {
    uploader.click()
})

uploader.on('change', function () {
    var reader = new FileReader()
    reader.onload = function(event) {
        // $(".img.editpersonalinformation").remove()
        images.prepend('<div class="img editpersonalinformation" style="background-image: url(\'' + event.target.result + '\');"><span class="post_photo_remove p_i_r"><svg class="icon-cross"><use xlink:href="#svg-cross"></use></span></div>')
    }
    reader.readAsDataURL(uploader[0].files[0])
    photos.push(uploader[0].files[0])
    console.log(photos);
})

$(document).on('click', '.p_i_r', function () {
    let removed = photos.findIndex(item => item.name == $(this).parent().attr('value'))
    photos.splice(removed)
    $(this).parent().remove()
    // FileReader remove item
})


// add tag
let cont = 1;
$('.p_a_t').click(function() {

	$('.group_add_tag').append(`
		<div class="add_tage_show">
            <div class="tag_url_parent">
                <p class='p_err_url'></p>
                <div class="form-input small ">
                    <label for="post_tag_url">url </label>
                    <input type="text" class="p_tag_url" id="post_tag_url">
                </div>
            </div>

            <div class="tag_title_parent">
                <p class='p_err_tttle'></p>
                <div class="form-input small ">
                    <label for="post_tag_title">Tag title</label>
                    <input type="text" class="p_tag_title" id="post_tag_title_">
                </div>
            </div>
        </div>
	`)

	cont++;

});



$('.p_add_b').click(function() {


	let title      = $('.post_title').val()
	let language   = $('.post_language').val()
    let access_limit   = $('.access_limit').val()
	let text       = $('.post_text').val()
	let tags_url   = {};
	let tags_title = {};
	let tags_u_t   = [];

	if ($('.add_tage_show').length > 0) {

		$.each($('.add_tage_show').find('.p_tag_url'), function(index, val) {
			tags_url.url = $(this).val()
		});

		$.each($('.add_tage_show').find('.p_tag_title'), function(index, val) {
			tags_title.title = $(this).val()
		});

	}
	tags_u_t.tags_url   = tags_url;
	tags_u_t.tags_title = tags_title;


    add_post.append('title',title);
    add_post.append('language',language);
    add_post.append('access_limit',access_limit);
    add_post.append('text',text);
    // add_post.append('tags_u_t',tags_u_t);
    for(var i = 0;i<photos.length;i++)
    {
        add_post.append('photos[]', photos[i])
    }

    for(var i = 0;i<tags_u_t.length;i++)
    {
        add_post.append('tags_u_t[]', tags_u_t[i])
    }

    console.log(add_post)

    $.ajax({

        type: 'POST',

        url: '/new_AddPost',

        data: add_post,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            // if (data.product){
            //     autoDequeueSavehref('The product has been added',`product/not/${data.product}`)
            //     $('.modal.a-p').remove()
            // }
            // else
            // {
            //     if (data.length > 0)
            //     {
            //         for (var i = 0;i<data.length;i++){
            //             autoDequeueEror(data[i])
            //         }
            //     }
            // }
            console.log(data)
        }
    })


    })














