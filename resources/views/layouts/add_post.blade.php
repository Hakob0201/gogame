
<div class="quick-post">
    <!-- QUICK POST HEADER -->
    <div class="quick-post-header">
        <!-- OPTION ITEMS -->
        <div class="option-items">
            <!-- OPTION ITEM -->
            <div class="option-item active">
                <!-- OPTION ITEM ICON -->
                <svg class="option-item-icon icon-status">
                    <use xlink:href="#svg-status"></use>
                </svg>
                <!-- /OPTION ITEM ICON -->

                <!-- OPTION ITEM TITLE -->
                <p class="option-item-title">Status</p>
                <!-- /OPTION ITEM TITLE -->
            </div>
            <!-- /OPTION ITEM -->

            <!-- OPTION ITEM -->
            <div class="option-item">
                <!-- OPTION ITEM ICON -->
                <svg class="option-item-icon icon-blog-posts">
                    <use xlink:href="#svg-blog-posts"></use>
                </svg>
                <!-- /OPTION ITEM ICON -->

                <!-- OPTION ITEM TITLE -->
                <p class="option-item-title">Blog Post</p>
                <!-- /OPTION ITEM TITLE -->
            </div>
            <!-- /OPTION ITEM -->

            <!-- OPTION ITEM -->
            <div class="option-item">
                <!-- OPTION ITEM ICON -->
                <svg class="option-item-icon icon-poll">
                    <use xlink:href="#svg-poll"></use>
                </svg>
                <!-- /OPTION ITEM ICON -->

                <!-- OPTION ITEM TITLE -->
                <p class="option-item-title">Poll</p>
                <!-- /OPTION ITEM TITLE -->
            </div>
            <!-- /OPTION ITEM -->
        </div>
        <!-- /OPTION ITEMS -->
    </div>
    <!-- /QUICK POST HEADER -->

    <!-- QUICK POST BODY -->
    <div class="quick-post-body">
        <!-- FORM -->
        <div class="form">
            <!-- FORM ROW -->
            <div class="form-row">
                <!-- FORM ITEM -->
                <div class="form-item">

                    <div class="group_title_language">
                        <div class="post_title_parent">
                            <p class='errors_p'></p>
                            <div class="form-input small">
                                <label for="post_title">Title</label>
                                <input type="text" id="post_title" class="post_title" value="">
                            </div>
                        </div>

                        <div class="post_language_parent">
                            <!-- LANGUAGE SELECT -->
                            <p class='errors_p'></p>
                            <div class="form-select small">
                                <label for="items-filter-category">Language</label>
                                <select id="items-filter-category" class="post_language" value="">
                                    <option selected value="am">Am</option>
                                    <option value="ru">Ru</option>
                                </select>
                                <!-- LANGUAGE SELECT ICON -->
                                <svg class="form-select-icon icon-small-arrow language_svg">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                                <!-- /LANGUAGE SELECT ICON -->
                            </div>
                            <!-- /LANGUAGE SELECT -->
                        </div>
                    </div>

                    <div class="group_add_tag" style="color: #fff;">



                    </div>
                    <!-- FORM TEXTAREA -->
                    <div class="form-textarea">
                        <p class='errors_p'></p>
                        <textarea id="quick-post-text" class="post_text" placeholder="Hi Marina! Share your post here..." maxlength="500"></textarea>
                        <!-- FORM TEXTAREA LIMIT TEXT -->
                        <p class="form-textarea-limit-text">222/500</p>
                        <!-- /FORM TEXTAREA LIMIT TEXT -->
                    </div>
                    <!-- /FORM TEXTAREA -->
                </div>
                <!-- /FORM ITEM -->
            </div>
            <!-- /FORM ROW -->
        </div>
        <!-- /FORM -->
    </div>
    <!-- /QUICK POST BODY -->
    <!-- QUICK POST IMAGES -->
    <div class="post-images p_a_i">

    </div>
    <!-- /QUICK POST IMAGES -->

    <!-- QUICK POST FOOTER -->
    <div class="quick-post-footer">
        <!-- QUICK POST FOOTER ACTIONS -->
        <div class="quick-post-footer-actions">
            <!-- QUICK POST FOOTER ACTION -->
            <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert Photo">
                <!-- QUICK POST FOOTER ACTION ICON -->
                <svg class="quick-post-footer-action-icon icon-camera p_p_i">
                    <use xlink:href="#svg-camera"></use>
                </svg>
                <!-- /QUICK POST FOOTER ACTION ICON -->
            </div>
            <!-- /QUICK POST FOOTER ACTION -->

            <!-- QUICK POST FOOTER ACTION -->
            <div class="quick-post-footer-action text-tooltip-tft-medium" data-title="Insert GIF">
                <!-- QUICK POST FOOTER ACTION ICON -->
                <svg class="quick-post-footer-action-icon icon-gif">
                    <use xlink:href="#svg-gif"></use>
                </svg>
                <!-- /QUICK POST FOOTER ACTION ICON -->
            </div>
            <!-- /QUICK POST FOOTER ACTION -->

            <!-- QUICK POST FOOTER ACTION -->
            <div class="quick-post-footer-action text-tooltip-tft-medium tag_form_add" data-title="Insert Tag">
                <!-- QUICK POST FOOTER ACTION ICON -->
                <svg class="quick-post-footer-action-icon icon-tags p_a_t">
                    <use xlink:href="#svg-tags"></use>
                </svg>
                <!-- /QUICK POST FOOTER ACTION ICON -->
            </div>
            <!-- /QUICK POST FOOTER ACTION -->

        </div>
        <!-- LANGUAGE SELECT -->
        <p class='errors_p'></p>
        <div class="form-select small">
            <label for="items-filter-category">Access limit</label>
            <select id="items-filter-category" class="access_limit"  value="">
                <option value="my">Only I can see</option>
                <option value="frends">Can only be seen by my friends</option>
                <option selected value="public">Everyone can see</option>
            </select>
            <!-- LANGUAGE SELECT ICON -->
            <svg class="form-select-icon icon-small-arrow language_svg">
                <use xlink:href="#svg-small-arrow"></use>
            </svg>
            <!-- /LANGUAGE SELECT ICON -->
        </div>
        <!-- /LANGUAGE SELECT -->
        <!-- /QUICK POST FOOTER ACTIONS -->

       <!-- QUICK POST FOOTER ACTIONS -->
        <div class="quick-post-footer-actions">
            <!-- BUTTON -->
            <button class="button small void">Discard</button>
            <button class="button small secondary p_add_b">Post</button>
            <!-- /BUTTON -->
        </div>
        <!-- /QUICK POST FOOTER ACTIONS -->
    </div>
    <!-- /QUICK POST FOOTER -->
</div>
