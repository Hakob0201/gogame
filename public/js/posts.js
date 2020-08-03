
$.ajaxSetup({

    headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

});

// console.log($('meta[name="csrf-token"]').attr('content'))

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


	let title        = $('.post_title').val()
	let language     = $('.post_language').val()
    let access_limit = $('.access_limit').val()
	let text         = $('.post_text').val()
	let tags_url     = {};
	let tags_title   = {};
	let tags_u_t     = [];

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


    add_post.append('title', title);
    add_post.append('language', language);
    add_post.append('access_limit', access_limit);
    add_post.append('text', text);
    // add_post.append('tags_u_t',tags_u_t);
    for(var i = 0;i < photos.length; i++)
    {
        add_post.append('photos[]', photos[i])
    }

    for(var i = 0;i < tags_u_t.length; i++)
    {
        add_post.append('tags_u_t[]', tags_u_t[i])
    }

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





/* grab necessary elements */
// grab the .form
const form = document.querySelector(".form");
// grab the .time-input
const timeInput = 12;
// grab the select[name='format']
const format = "seconds";
// grab the .set-btn
const setBtn = document.querySelector(".set-btn");
// grab the .countdown
const countDown =$('.countdown');
// grab the .stop-btn
const stopBtn = document.querySelector(".stop-btn");
// grab the .reset-btn
const resetBtn = document.querySelector(".reset-btn");
/* grab necessary elements ends */

/* global variables and constants*/
// variable to store setInterval
let countDownInterval;

// secondsLeft in millisecond
let secondsLeftms;
// end time
let endTime;
// .stop-btn clicked or not
let stopBtnClicked = false;

function n(){

    console.log(format)

    // get the countdown time user typed
    let countDownTime = "24";

    console.log(countDownTime)

    // check if it is not zero
    if (countDownTime > 0) {
        // check which is the format, ie the <select> element's value
        if (format === "hours") {
            // convert hours to milliseconds
            // 1 hrs = 3600000 ms (5 zeros)
            countDownTime = countDownTime * 3600000;
        } else if (format === "minutes") {
            // 1 minute = 60000 ms (4 zeros)
            countDownTime = countDownTime * 60000;
        } else if (format === "seconds") {
            // 1 seconds = 1000 ms (3 zeros)
            countDownTime = countDownTime * 1000;
        }

        // get current time in milliseconds
        const now = Date.now();
        // calculate the ending time
        endTime = now + countDownTime;

        // activate the countdown at first
        setCountDown(endTime);

        countDownInterval = setInterval(() => {
            setCountDown(endTime);
        }, 1000);


    }
};
n()
/* .form submit listener ends */
/* .form submit listener ends */

/* setCountDown function */
function setCountDown(endTime){
    // calculate how many milliseconds is left to reach endTime from now
    secondsLeftms = endTime - Date.now();
    // convert it to seconds
    const secondsLeft = Math.round(secondsLeftms / 1000);

    // calculate the hours, minutes and seconds
    let hours = Math.floor(secondsLeft / 3600);
    let minutes = Math.floor(secondsLeft / 60) - hours * 60;
    let seconds = secondsLeft % 60;

    // adding an extra zero infront of digits if it is < 10
    if (hours < 10) {
        hours = `0${hours}`;
    }
    if (minutes < 10) {
        minutes = `0${minutes}`;
    }
    if (seconds < 10) {
        seconds = `0${seconds}`;
    }

    // stopping the timer if the time is up
    if (secondsLeft < 0) {
        return;
    }

    // set the .countdown text
    countDown.html(`${hours} : ${minutes} : ${seconds}`);
};
/* setCountDown function ends */

/* resetCountDown function */
const resetCountDown = () => {
    // destroy the setInterval()
    clearInterval(countDownInterval);
    // reset the countdown text
    countDown.html("00 : 00 : 00");
    // set stopBtnClicked = false
    stopBtnClicked = false;
    // change inner text to STOP


    // enable .set-btn
    setBtn.disabled = false;

    // disable .stop-btn and .reset-btn
    stopBtn.disabled = true;
    resetBtn.disabled = true;
};
/* resetCountDown function ends */














