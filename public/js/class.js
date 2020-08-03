// comment and like

class ajax_t_p {


	constructor(id = null, text = '', url, arjeq,cll_id_appent,formdata = new FormData(), functionName='') {
		this.id       = id;
		this.text     = text || '';
		this.url      = url;
        this.formdata = formdata;
        this.functionName = functionName;
        this.arjeq = arjeq;
        this.cll_id_appent = cll_id_appent;
        this.init()
	}


	init() {
        let response = this.send_ajax()
        console.log(Object.keys(response))
        console.log(Object.values(response))
        console.log(response)
        console.log(response.responseJSON)
        //this.testComment(response.responseJSON)
        //this[this.functionName](response.responseJSON)
        this['testComment'](response.responseJSON)

    }

    testComment(cll_id)
    {
        console.log(cll_id)
	   $(cll_id).append(`<div class="post-comment-list">









                        <!-- POST COMMENT -->
                        <div class="post-comment">
                            <!-- USER AVATAR -->
                            <a class="user-avatar small no-outline" href="profile-timeline.html">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->

                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                    <!-- USER AVATAR BADGE BORDER -->
                                    <div class="user-avatar-badge-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE BORDER -->

                                    <!-- USER AVATAR BADGE CONTENT -->
                                    <div class="user-avatar-badge-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE CONTENT -->

                                    <!-- USER AVATAR BADGE TEXT -->
                                    <p class="user-avatar-badge-text">26</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- POST COMMENT TEXT -->
                            <p class="post-comment-text">
                                <a class="post-comment-text-author" href="profile-timeline.html">Sarah Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time playing the game's
                                open demo.
                            </p>
                            <!-- /POST COMMENT TEXT -->

                            <!-- CONTENT ACTIONS -->
                            <div class="content-actions">
                                <!-- CONTENT ACTION -->
                                <div class="content-action">
                                    <!-- META LINE -->
                                    <div class="meta-line" style="position: relative;">
                                        <!-- META LINE LINK -->
                                        <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                        <!-- /META LINE LINK -->

                                        <!-- REACTION OPTIONS -->
                                        <div class="reaction-options small reaction-options-small-dropdown" style="position: absolute; z-index: 9999; bottom: 30px; left: -80px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Like" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -22px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Like</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Love" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Love</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Dislike" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -28px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Dislike</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Happy" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -27.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Happy</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Funny" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -27px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Funny</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Wow" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Wow</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Angry" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Angry</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Sad" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -21.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Sad</p></div></div>
                                            <!-- /REACTION OPTION -->
                                        </div>
                                        <!-- /REACTION OPTIONS -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LINK -->
                                        <p class="meta-line-link light">Reply</p>
                                        <!-- /META LINE LINK -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE TIMESTAMP -->
                                        <p class="meta-line-timestamp">39 minutes ago</p>
                                        <!-- /META LINE TIMESTAMP -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line settings">
                                        <!-- POST SETTINGS WRAP -->
                                        <div class="post-settings-wrap" style="position: relative;">
                                            <!-- POST SETTINGS -->
                                            <div class="post-settings post-settings-dropdown-trigger">
                                                <!-- POST SETTINGS ICON -->
                                                <svg class="post-settings-icon icon-more-dots">
                                                    <use xlink:href="#svg-more-dots"></use>
                                                </svg>
                                                <!-- /POST SETTINGS ICON -->
                                            </div>
                                            <!-- /POST SETTINGS -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown post-settings-dropdown" style="position: absolute; z-index: 9999; bottom: 30px; right: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN LINK -->
                                                <p class="simple-dropdown-link">Report Post</p>
                                                <!-- /SIMPLE DROPDOWN LINK -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /POST SETTINGS WRAP -->
                                    </div>
                                    <!-- /META LINE -->
                                </div>
                                <!-- /CONTENT ACTION -->
                            </div>
                            <!-- /CONTENT ACTIONS -->
                        </div>
                        <!-- /POST COMMENT -->

                        <!-- POST COMMENT HEADING -->
                        <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
                        <!-- /POST COMMENT HEADING -->

                        <!-- POST COMMENT FORM -->
                        <div class="post-comment-form">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->

                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                    <!-- USER AVATAR BADGE BORDER -->
                                    <div class="user-avatar-badge-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE BORDER -->

                                    <!-- USER AVATAR BADGE CONTENT -->
                                    <div class="user-avatar-badge-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE CONTENT -->

                                    <!-- USER AVATAR BADGE TEXT -->
                                    <p class="user-avatar-badge-text">24</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- FORM -->
                            <div class="form">
                                <!-- FORM ROW -->
                                <div class="form-row">
                                    <!-- FORM ITEM -->
                                    <div data-value="p_eyJpdiI6ImhEY3NlSWt2VVBhTlNtZ1JKT1RLM2c9PSIsInZhbHVlIjoiR1hsYW52RXYveVkrSWVNcURFR3h1QT09IiwibWFjIjoiZTk2ZGUzMGQzZDA1ZGY5MGM2ZDQ2MjgxNzRiZWJhMzRiMjc2NWNlYTk2MTk1MDQxZDBhZjhmZjk4ZDYxNjNiZiJ9" class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="post-reply">Your Reply</label>
                                            <input type="text" id="post-reply" class="post_reply">
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->
                            </div>
                            <!-- /FORM -->
                        </div>
                        <!-- /POST COMMENT FORM -->
                    </div>`)

    }

	to_object() {

	    console.log(this)

		let result = false

			if (this.id.length > 0 && this.text.length > 0) {
				this.formdata.append('p_i', this.id)
				this.formdata.append('p_t_or_s', this.text)
				result = this.formdata
			}else{
				result = null
			}

		return result
	}

	send_ajax() {

		if (this.to_object() === null) {
			return 'null id or text parameter'
		}else if (this.url == '') {
			return 'null url parameter'
		}else {
			return $.ajax({
				        type: 'POST',
				        url: '/' + this.url,
				        data: this.to_object(),
				        contentType: false,
				        cache: false,
				        processData: false,
                        async: false,
                        dataType:'json',
				        success: function (data) {
                        }
				    })

		}

	}


}




// comment and like

class Comment {


    constructor(id = null, text = '', url, arjeq,cll_id_appentd,formdata = new FormData(), functionName='') {
        this.id       = id;
        this.text     = text || '';
        this.url      = url;
        this.formdata = formdata;
        this.functionName = functionName;
        this.arjeq = arjeq;
        this.cll_id_appentd = cll_id_appentd;
        this.init()
    }


    init() {
        let response = this.send_ajax()
        console.log(Object.keys(response))
        console.log(Object.values(response))
        console.log(response)
        console.log(response.responseJSON)
        //this.testComment(response.responseJSON)
        //this[this.functionName](response.responseJSON)
        this['testComment'](this.cll_id_appentd,response.responseJSON)

    }

    testComment(cll_id,arr)
    {
        console.log(cll_id)
        $(cll_id).prepend(`<div class="post-comment-list">











                        <!-- POST COMMENT HEADING -->
                        <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
                        <!-- /POST COMMENT HEADING -->

                        <!-- POST COMMENT FORM -->
                        <div class="post-comment-form">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->

                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                    <!-- USER AVATAR BADGE BORDER -->
                                    <div class="user-avatar-badge-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE BORDER -->

                                    <!-- USER AVATAR BADGE CONTENT -->
                                    <div class="user-avatar-badge-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE CONTENT -->

                                    <!-- USER AVATAR BADGE TEXT -->
                                    <p class="user-avatar-badge-text">24</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </div>
                            <!-- /USER AVATAR -->

                            <!-- FORM -->
                            <div class="form">
                                <!-- FORM ROW -->
                                <div class="form-row">
                                    <!-- FORM ITEM -->
                                    <div data-value="p_eyJpdiI6ImhEY3NlSWt2VVBhTlNtZ1JKT1RLM2c9PSIsInZhbHVlIjoiR1hsYW52RXYveVkrSWVNcURFR3h1QT09IiwibWFjIjoiZTk2ZGUzMGQzZDA1ZGY5MGM2ZDQ2MjgxNzRiZWJhMzRiMjc2NWNlYTk2MTk1MDQxZDBhZjhmZjk4ZDYxNjNiZiJ9" class="form-item">
                                        <!-- FORM INPUT -->
                                        <div class="form-input small">
                                            <label for="post-reply">Your Reply</label>
                                            <input type="text" id="post-reply" class="post_reply">
                                        </div>
                                        <!-- /FORM INPUT -->
                                    </div>
                                    <!-- /FORM ITEM -->
                                </div>
                                <!-- /FORM ROW -->
                            </div>
                            <!-- /FORM -->
                        </div>
                        <!-- /POST COMMENT FORM -->
                    </div>`)

        arr.forEach(function (item) {
            $(cll_id).find('.post-comment-list').append(` <!-- POST COMMENT -->
                        <div class="post-comment">
                            <!-- USER AVATAR -->
                            <a class="user-avatar small no-outline" href="profile-timeline.html">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg" style="width: 30px; height: 32px; position: relative;"><canvas width="30" height="32" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-progress-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-border-40-44" style="width: 40px; height: 44px; position: relative;"><canvas width="40" height="44" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->

                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                    <!-- USER AVATAR BADGE BORDER -->
                                    <div class="user-avatar-badge-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24" style="width: 22px; height: 24px; position: relative;"><canvas width="22" height="24" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE BORDER -->

                                    <!-- USER AVATAR BADGE CONTENT -->
                                    <div class="user-avatar-badge-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-dark-16-18" style="width: 16px; height: 18px; position: relative;"><canvas width="16" height="18" style="position: absolute; top: 0px; left: 0px;"></canvas></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE CONTENT -->

                                    <!-- USER AVATAR BADGE TEXT -->
                                    <p class="user-avatar-badge-text">26</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </a>
                            <!-- /USER AVATAR -->

                            <!-- POST COMMENT TEXT -->
                            <p class="post-comment-text">
                                <a class="post-comment-text-author" href="profile-timeline.html">Sarah Diamond</a>${item.text}
                            </p>
                            <!-- /POST COMMENT TEXT -->

                            <!-- CONTENT ACTIONS -->
                            <div class="content-actions">
                                <!-- CONTENT ACTION -->
                                <div class="content-action">
                                    <!-- META LINE -->
                                    <div class="meta-line" style="position: relative;">
                                        <!-- META LINE LINK -->
                                        <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                        <!-- /META LINE LINK -->

                                        <!-- REACTION OPTIONS -->
                                        <div class="reaction-options small reaction-options-small-dropdown" style="position: absolute; z-index: 9999; bottom: 30px; left: -80px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Like" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -22px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Like</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Love" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Love</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Dislike" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -28px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Dislike</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Happy" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -27.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Happy</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Funny" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -27px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Funny</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Wow" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -24.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Wow</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Angry" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -26.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Angry</p></div></div>
                                            <!-- /REACTION OPTION -->

                                            <!-- REACTION OPTION -->
                                            <div class="reaction-option text-tooltip-tft" data-title="Sad" style="position: relative;">
                                                <!-- REACTION OPTION IMAGE -->
                                                <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad">
                                                <!-- /REACTION OPTION IMAGE -->
                                            <div class="xm-tooltip" style="white-space: nowrap; position: absolute; z-index: 99999; top: -28px; left: 50%; margin-left: -21.5px; opacity: 0; visibility: hidden; transform: translate(0px, 10px); transition: all 0.3s ease-in-out 0s;"><p class="xm-tooltip-text">Sad</p></div></div>
                                            <!-- /REACTION OPTION -->
                                        </div>
                                        <!-- /REACTION OPTIONS -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LINK -->
                                        <p class="meta-line-link light">Reply</p>
                                        <!-- /META LINE LINK -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE TIMESTAMP -->
                                        <p class="meta-line-timestamp">39 minutes ago</p>
                                        <!-- /META LINE TIMESTAMP -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line settings">
                                        <!-- POST SETTINGS WRAP -->
                                        <div class="post-settings-wrap" style="position: relative;">
                                            <!-- POST SETTINGS -->
                                            <div class="post-settings post-settings-dropdown-trigger">
                                                <!-- POST SETTINGS ICON -->
                                                <svg class="post-settings-icon icon-more-dots">
                                                    <use xlink:href="#svg-more-dots"></use>
                                                </svg>
                                                <!-- /POST SETTINGS ICON -->
                                            </div>
                                            <!-- /POST SETTINGS -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown post-settings-dropdown" style="position: absolute; z-index: 9999; bottom: 30px; right: 0px; opacity: 0; visibility: hidden; transform: translate(0px, 16px); transition: transform 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;">
                                                <!-- SIMPLE DROPDOWN LINK -->
                                                <p class="simple-dropdown-link">Report Post</p>
                                                <!-- /SIMPLE DROPDOWN LINK -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /POST SETTINGS WRAP -->
                                    </div>
                                    <!-- /META LINE -->
                                </div>
                                <!-- /CONTENT ACTION -->
                            </div>
                            <!-- /CONTENT ACTIONS -->
                        </div>
                        <!-- /POST COMMENT -->`)
        })



    }

    to_object() {

        console.log(this)

        let result = false

        if (this.id.length > 0 && this.text.length > 0) {
            this.formdata.append('p_i', this.id)
            this.formdata.append('p_t_or_s', this.text)
            result = this.formdata
        }else{
            result = null
        }

        return result
    }

    send_ajax() {

        if (this.to_object() === null) {
            return 'null id or text parameter'
        }else if (this.url == '') {
            return 'null url parameter'
        }else {
            return $.ajax({
                type: 'POST',
                url: '/' + this.url,
                data: this.to_object(),
                contentType: false,
                cache: false,
                processData: false,
                async: false,
                dataType:'json',
                success: function (data) {
                }
            })

        }

    }


}

