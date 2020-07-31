@extends('layouts.app')

@section('content')

    <!-- FLOATY BAR -->
    <aside class="floaty-bar">
        <!-- BAR ACTIONS -->
        <div class="bar-actions">
            <!-- PROGRESS STAT -->
            <div class="progress-stat">
                <!-- BAR PROGRESS WRAP -->
                <div class="bar-progress-wrap">
                    <!-- BAR PROGRESS INFO -->
                    <p class="bar-progress-info">Next: <span class="bar-progress-text"></span></p>
                    <!-- /BAR PROGRESS INFO -->
                </div>
                <!-- /BAR PROGRESS WRAP -->

                <!-- PROGRESS STAT BAR -->
                <div id="logged-user-level-cp" class="progress-stat-bar"></div>
                <!-- /PROGRESS STAT BAR -->
            </div>
            <!-- /PROGRESS STAT -->
        </div>
        <!-- /BAR ACTIONS -->

        <!-- BAR ACTIONS -->
        <div class="bar-actions">
            <!-- ACTION LIST -->
            <div class="action-list dark">
                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="marketplace-cart.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-shopping-bag">
                        <use xlink:href="#svg-shopping-bag"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="hub-profile-requests.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-friend">
                        <use xlink:href="#svg-friend"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item" href="hub-profile-messages.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-messages">
                        <use xlink:href="#svg-messages"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->

                <!-- ACTION LIST ITEM -->
                <a class="action-list-item unread" href="hub-profile-notifications.html">
                    <!-- ACTION LIST ITEM ICON -->
                    <svg class="action-list-item-icon icon-notification">
                        <use xlink:href="#svg-notification"></use>
                    </svg>
                    <!-- /ACTION LIST ITEM ICON -->
                </a>
                <!-- /ACTION LIST ITEM -->
            </div>
            <!-- /ACTION LIST -->

            <!-- ACTION ITEM WRAP -->
            <a class="action-item-wrap" href="hub-profile-info.html">
                <!-- ACTION ITEM -->
                <div class="action-item dark">
                    <!-- ACTION ITEM ICON -->
                    <svg class="action-item-icon icon-settings">
                        <use xlink:href="#svg-settings"></use>
                    </svg>
                    <!-- /ACTION ITEM ICON -->
                </div>
                <!-- /ACTION ITEM -->
            </a>
            <!-- /ACTION ITEM WRAP -->
        </div>
        <!-- /BAR ACTIONS -->
    </aside>
    <!-- /FLOATY BAR -->

<!-- CONTENT GRID -->
    <div class="content-grid">
        <!-- SECTION BANNER -->
        <div class="section-banner">
            <!-- SECTION BANNER ICON -->
            <img class="section-banner-icon" src="img/banner/newsfeed-icon.png" alt="newsfeed-icon" />
            <!-- /SECTION BANNER ICON -->

            <!-- SECTION BANNER TITLE -->
            <p class="section-banner-title">Newsfeed</p>
            <!-- /SECTION BANNER TITLE -->

            <!-- SECTION BANNER TEXT -->
            <p class="section-banner-text">Check what your friends have been up to!</p>
            <!-- /SECTION BANNER TEXT -->
        </div>
        <!-- /SECTION BANNER -->

        @if(Auth::id())
            @include('layouts.search_filter_post')
        @endif

        <!-- GRID -->
        <div class="grid grid-3-6-3 mobile-prefer-content">
            <!-- GRID COLUMN -->
            <div class="grid-column">

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- SIDEBAR BOX -->
                    <div class="sidebar-box">
                        <!-- SIDEBAR BOX TITLE -->
                        <p class="sidebar-box-title">Categories</p>
                        <!-- /SIDEBAR BOX TITLE -->

                        <!-- SIDEBAR BOX ITEMS -->
                        <div class="sidebar-box-items">
                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap">
                                    <input type="checkbox" id="category-all" name="category_all" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box">
                                        <!-- ICON CROSS -->
                                        <svg class="icon-cross">
                                            <use xlink:href="#svg-cross"></use>
                                        </svg>
                                        <!-- /ICON CROSS -->
                                    </div>
                                    <!-- /CHECKBOX BOX -->
                                    <label for="category-all">All Categories</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">1207</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap">
                                    <input type="checkbox" id="category-psd" name="category_psd" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box">
                                        <!-- ICON CROSS -->
                                        <svg class="icon-cross">
                                            <use xlink:href="#svg-cross"></use>
                                        </svg>
                                        <!-- /ICON CROSS -->
                                    </div>
                                    <!-- /CHECKBOX BOX -->
                                    <label for="category-psd">PSD Templates</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">134</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap">
                                    <input type="checkbox" id="category-html" name="category_html" checked />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box">
                                        <!-- ICON CROSS -->
                                        <svg class="icon-cross">
                                            <use xlink:href="#svg-cross"></use>
                                        </svg>
                                        <!-- /ICON CROSS -->
                                    </div>
                                    <!-- /CHECKBOX BOX -->
                                    <label for="category-html">HTML Templates</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">566</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap">
                                    <input type="checkbox" id="category-wp" name="category_wp" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box">
                                        <!-- ICON CROSS -->
                                        <svg class="icon-cross">
                                            <use xlink:href="#svg-cross"></use>
                                        </svg>
                                        <!-- /ICON CROSS -->
                                    </div>
                                    <!-- /CHECKBOX BOX -->
                                    <label for="category-wp">WP Templates</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">209</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap">
                                    <input type="checkbox" id="category-illustrations" name="category_illustrations" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box">
                                        <!-- ICON CROSS -->
                                        <svg class="icon-cross">
                                            <use xlink:href="#svg-cross"></use>
                                        </svg>
                                        <!-- /ICON CROSS -->
                                    </div>
                                    <!-- /CHECKBOX BOX -->
                                    <label for="category-illustrations">Illustrations</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">80</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap">
                                    <input type="checkbox" id="category-logos-and-badges" name="category_logos-and-badges" checked />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box">
                                        <!-- ICON CROSS -->
                                        <svg class="icon-cross">
                                            <use xlink:href="#svg-cross"></use>
                                        </svg>
                                        <!-- /ICON CROSS -->
                                    </div>
                                    <!-- /CHECKBOX BOX -->
                                    <label for="category-logos-and-badges">Logos and Badges</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">21</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap">
                                    <input type="checkbox" id="category-stream-packs" name="category_stream-packs" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box">
                                        <!-- ICON CROSS -->
                                        <svg class="icon-cross">
                                            <use xlink:href="#svg-cross"></use>
                                        </svg>
                                        <!-- /ICON CROSS -->
                                    </div>
                                    <!-- /CHECKBOX BOX -->
                                    <label for="category-stream-packs">Stream Packs</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">197</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->
                        </div>
                        <!-- /SIDEBAR BOX ITEMS -->

                        <!-- SIDEBAR BOX TITLE -->
                        <p class="sidebar-box-title">Price Range</p>
                        <!-- /SIDEBAR BOX TITLE -->

                        <!-- SIDEBAR BOX ITEMS -->
                        <div class="sidebar-box-items small-space">
                            <!-- FORM ITEM -->
                            <div class="form-item split">
                                <!-- FORM INPUT -->
                                <div class="form-input small active always-active currency-decorated">
                                    <label for="price-from">From</label>
                                    <input type="text" id="price-from" name="price_from" />
                                </div>
                                <!-- /FORM INPUT -->

                                <!-- FORM INPUT -->
                                <div class="form-input small active always-active currency-decorated">
                                    <label for="price-to">To</label>
                                    <input type="text" id="price-to" name="price_to" />
                                </div>
                                <!-- /FORM INPUT -->
                            </div>
                            <!-- /FORM ITEM -->
                        </div>
                        <!-- /SIDEBAR BOX ITEMS -->

                        <!-- BUTTON -->
                        <p class="button small primary">Apply Price Filter!</p>
                        <!-- /BUTTON -->

                        <!-- SIDEBAR BOX TITLE -->
                        <p class="sidebar-box-title">Reviews</p>
                        <!-- /SIDEBAR BOX TITLE -->

                        <!-- SIDEBAR BOX ITEMS -->
                        <div class="sidebar-box-items">
                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap">
                                    <input type="radio" id="reviews-all" name="reviews-rating" value="reviews-all" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box round"></div>
                                    <!-- /CHECKBOX BOX -->
                                    <label for="reviews-all">All Reviews</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">1207</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap checkbox-rating">
                                    <input type="radio" id="reviews-4-up" name="reviews-rating" value="reviews-4-up" checked />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box round"></div>
                                    <!-- /CHECKBOX BOX -->

                                    <!-- RATING LIST -->
                                    <div class="rating-list">
                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->
                                    </div>
                                    <!-- /RATING LIST -->

                                    <label for="reviews-4-up">4 +</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">964</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap checkbox-rating">
                                    <input type="radio" id="reviews-3-up" name="reviews-rating" value="reviews-3-up" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box round"></div>
                                    <!-- /CHECKBOX BOX -->

                                    <!-- RATING LIST -->
                                    <div class="rating-list">
                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->
                                    </div>
                                    <!-- /RATING LIST -->

                                    <label for="reviews-3-up">3 +</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">214</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap checkbox-rating">
                                    <input type="radio" id="reviews-2-up" name="reviews-rating" value="reviews-2-up" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box round"></div>
                                    <!-- /CHECKBOX BOX -->

                                    <!-- RATING LIST -->
                                    <div class="rating-list">
                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->
                                    </div>
                                    <!-- /RATING LIST -->

                                    <label for="reviews-2-up">2 +</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">102</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->

                            <!-- CHECKBOX LINE -->
                            <div class="checkbox-line">
                                <!-- CHECKBOX WRAP -->
                                <div class="checkbox-wrap checkbox-rating">
                                    <input type="radio" id="reviews-1-up" name="reviews-rating" value="reviews-1-up" />
                                    <!-- CHECKBOX BOX -->
                                    <div class="checkbox-box round"></div>
                                    <!-- /CHECKBOX BOX -->

                                    <!-- RATING LIST -->
                                    <div class="rating-list">
                                        <!-- RATING -->
                                        <div class="rating filled">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->

                                        <!-- RATING -->
                                        <div class="rating">
                                            <!-- RATING ICON -->
                                            <svg class="rating-icon icon-star">
                                                <use xlink:href="#svg-star"></use>
                                            </svg>
                                            <!-- /RATING ICON -->
                                        </div>
                                        <!-- /RATING -->
                                    </div>
                                    <!-- /RATING LIST -->

                                    <label for="reviews-1-up">1 +</label>
                                </div>
                                <!-- /CHECKBOX WRAP -->

                                <!-- CHECKBOX LINE TEXT -->
                                <p class="checkbox-line-text">76</p>
                                <!-- /CHECKBOX LINE TEXT -->
                            </div>
                            <!-- /CHECKBOX LINE -->
                        </div>
                        <!-- /SIDEBAR BOX ITEMS -->
                    </div>
                    <!-- /SIDEBAR BOX -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- PROGRESS ARC SUMMARY -->
                    <div class="progress-arc-summary">
                        <!-- PROGRESS ARC WRAP -->
                        <div class="progress-arc-wrap">
                            <!-- PROGRESS ARC -->
                            <div class="progress-arc">
                                <canvas id="profile-completion-chart"></canvas>
                            </div>
                            <!-- PROGRESS ARC -->

                            <!-- PROGRESS ARC INFO -->
                            <div class="progress-arc-info">
                                <!-- PROGRESS ARC TITLE -->
                                <p class="progress-arc-title">59%</p>
                                <!-- /PROGRESS ARC TITLE -->
                            </div>
                            <!-- /PROGRESS ARC INFO -->
                        </div>
                        <!-- /PROGRESS ARC WRAP -->

                        <!-- PROGRESS ARC SUMMARY INFO -->
                        <div class="progress-arc-summary-info">
                            <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-title">Profile Completion</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE -->

                            <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-subtitle">Marina Valentine</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE -->

                            <!-- PROGRESS ARC SUMMARY TITLE -->
                            <p class="progress-arc-summary-text">Complete your profile by filling profile info fields, completing quests &amp; unlocking badges</p>
                            <!-- /PROGRESS ARC SUMMARY TITLE -->
                        </div>
                        <!-- /PROGRESS ARC SUMMARY INFO -->
                    </div>
                    <!-- /PROGRESS ARC SUMMARY -->

                    <!-- ACHIEVEMENT STATUS LIST -->
                    <div class="achievement-status-list">
                        <!-- ACHIEVEMENT STATUS -->
                        <div class="achievement-status">
                            <!-- ACHIEVEMENT STATUS PROGRESS -->
                            <p class="achievement-status-progress">11/30</p>
                            <!-- /ACHIEVEMENT STATUS PROGRESS -->

                            <!-- ACHIEVEMENT STATUS INFO -->
                            <div class="achievement-status-info">
                                <!-- ACHIEVEMENT STATUS TITLE -->
                                <p class="achievement-status-title">Quests</p>
                                <!-- /ACHIEVEMENT STATUS TITLE -->

                                <!-- ACHIEVEMENT STATUS TEXT -->
                                <p class="achievement-status-text">Completed</p>
                                <!-- /ACHIEVEMENT STATUS TEXT -->
                            </div>
                            <!-- /ACHIEVEMENT STATUS INFO -->

                            <!-- ACHIEVEMENT STATUS IMAGE -->
                            <img class="achievement-status-image" src="img/badge/completedq-s.png" alt="bdage-completedq-s" />
                            <!-- /ACHIEVEMENT STATUS IMAGE -->
                        </div>
                        <!-- /ACHIEVEMENT STATUS -->

                        <!-- ACHIEVEMENT STATUS -->
                        <div class="achievement-status">
                            <!-- ACHIEVEMENT STATUS PROGRESS -->
                            <p class="achievement-status-progress">22/46</p>
                            <!-- /ACHIEVEMENT STATUS PROGRESS -->

                            <!-- ACHIEVEMENT STATUS INFO -->
                            <div class="achievement-status-info">
                                <!-- ACHIEVEMENT STATUS TITLE -->
                                <p class="achievement-status-title">Badges</p>
                                <!-- /ACHIEVEMENT STATUS TITLE -->

                                <!-- ACHIEVEMENT STATUS TEXT -->
                                <p class="achievement-status-text">Unlocked</p>
                                <!-- /ACHIEVEMENT STATUS TEXT -->
                            </div>
                            <!-- /ACHIEVEMENT STATUS INFO -->

                            <!-- ACHIEVEMENT STATUS IMAGE -->
                            <img class="achievement-status-image" src="img/badge/unlocked-badge.png" alt="bdage-unlocked-badge" />
                            <!-- /ACHIEVEMENT STATUS IMAGE -->
                        </div>
                        <!-- /ACHIEVEMENT STATUS -->
                    </div>
                    <!-- /ACHIEVEMENT STATUS LIST -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX CONTROLS -->
                    <div class="widget-box-controls">
                        <!-- SLIDER CONTROLS -->
                        <div id="badge-stat-slider-controls" class="slider-controls">
                            <!-- SLIDER CONTROL -->
                            <div class="slider-control left">
                                <!-- SLIDER CONTROL ICON -->
                                <svg class="slider-control-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                                <!-- /SLIDER CONTROL ICON -->
                            </div>
                            <!-- /SLIDER CONTROL -->

                            <!-- SLIDER CONTROL -->
                            <div class="slider-control right">
                                <!-- SLIDER CONTROL ICON -->
                                <svg class="slider-control-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                                <!-- /SLIDER CONTROL ICON -->
                            </div>
                            <!-- /SLIDER CONTROL -->
                        </div>
                        <!-- /SLIDER CONTROLS -->
                    </div>
                    <!-- /WIDGET BOX CONTROLS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Featured Badges</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- WIDGET BOX CONTENT SLIDER -->
                        <div id="badge-stat-slider-items" class="widget-box-content-slider">
                            <!-- WIDGET BOX CONTENT SLIDER ITEM -->
                            <div class="widget-box-content-slider-item">
                                <!-- BADGE ITEM STAT -->
                                <div class="badge-item-stat void">
                                    <!-- TEXT STICKER -->
                                    <p class="text-sticker">
                                        <!-- TEXT STICKER ICON -->
                                        <svg class="text-sticker-icon icon-plus-small">
                                            <use xlink:href="#svg-plus-small"></use>
                                        </svg>
                                        <!-- TEXT STICKER ICON -->
                                        20 EXP
                                    </p>
                                    <!-- /TEXT STICKER -->

                                    <!-- BADGE ITEM STAT IMAGE -->
                                    <img class="badge-item-stat-image" src="img/badge/uexp-b.png" alt="badge-uexp-b" />
                                    <!-- /BADGE ITEM STAT IMAGE -->

                                    <!-- BADGE ITEM STAT TITLE -->
                                    <p class="badge-item-stat-title">Universe Explorer</p>
                                    <!-- /BADGE ITEM STAT TITLE -->

                                    <!-- BADGE ITEM STAT TEXT -->
                                    <p class="badge-item-stat-text">Joined and posted on 20 different groups</p>
                                    <!-- /BADGE ITEM STAT TEXT -->

                                    <!-- PROGRESS STAT -->
                                    <div class="progress-stat medium">
                                        <!-- PROGRESS STAT BAR -->
                                        <div id="badge-uexp" class="progress-stat-bar"></div>
                                        <!-- /PROGRESS STAT BAR -->

                                        <!-- BAR PROGRESS WRAP -->
                                        <div class="bar-progress-wrap">
                                            <!-- BAR PROGRESS INFO -->
                                            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
                                            <!-- /BAR PROGRESS INFO -->
                                        </div>
                                        <!-- /BAR PROGRESS WRAP -->
                                    </div>
                                    <!-- /PROGRESS STAT -->
                                </div>
                                <!-- /BADGE ITEM STAT -->
                            </div>
                            <!-- /WIDGET BOX CONTENT SLIDER ITEM -->

                            <!-- WIDGET BOX CONTENT SLIDER ITEM -->
                            <div class="widget-box-content-slider-item">
                                <!-- BADGE ITEM STAT -->
                                <div class="badge-item-stat void">
                                    <!-- TEXT STICKER -->
                                    <p class="text-sticker">
                                        <!-- TEXT STICKER ICON -->
                                        <svg class="text-sticker-icon icon-plus-small">
                                            <use xlink:href="#svg-plus-small"></use>
                                        </svg>
                                        <!-- TEXT STICKER ICON -->
                                        40 EXP
                                    </p>
                                    <!-- /TEXT STICKER -->

                                    <!-- BADGE ITEM STAT IMAGE -->
                                    <img class="badge-item-stat-image" src="img/badge/verifieds-b.png" alt="badge-verifieds-b" />
                                    <!-- /BADGE ITEM STAT IMAGE -->

                                    <!-- BADGE ITEM STAT TITLE -->
                                    <p class="badge-item-stat-title">Verified Streamer</p>
                                    <!-- /BADGE ITEM STAT TITLE -->

                                    <!-- BADGE ITEM STAT TEXT -->
                                    <p class="badge-item-stat-text">Has linked a stream that was verified by the staff</p>
                                    <!-- /BADGE ITEM STAT TEXT -->

                                    <!-- PROGRESS STAT -->
                                    <div class="progress-stat medium">
                                        <!-- PROGRESS STAT BAR -->
                                        <div id="badge-verifieds" class="progress-stat-bar"></div>
                                        <!-- /PROGRESS STAT BAR -->

                                        <!-- BAR PROGRESS WRAP -->
                                        <div class="bar-progress-wrap">
                                            <!-- BAR PROGRESS INFO -->
                                            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
                                            <!-- /BAR PROGRESS INFO -->
                                        </div>
                                        <!-- /BAR PROGRESS WRAP -->
                                    </div>
                                    <!-- /PROGRESS STAT -->
                                </div>
                                <!-- /BADGE ITEM STAT -->
                            </div>
                            <!-- /WIDGET BOX CONTENT SLIDER ITEM -->

                            <!-- WIDGET BOX CONTENT SLIDER ITEM -->
                            <div class="widget-box-content-slider-item">
                                <!-- BADGE ITEM STAT -->
                                <div class="badge-item-stat void">
                                    <!-- TEXT STICKER -->
                                    <p class="text-sticker">
                                        <!-- TEXT STICKER ICON -->
                                        <svg class="text-sticker-icon icon-plus-small">
                                            <use xlink:href="#svg-plus-small"></use>
                                        </svg>
                                        <!-- TEXT STICKER ICON -->
                                        40 EXP
                                    </p>
                                    <!-- /TEXT STICKER -->

                                    <!-- BADGE ITEM STAT IMAGE -->
                                    <img class="badge-item-stat-image" src="img/badge/qconq-b.png" alt="badge-qconq-b" />
                                    <!-- /BADGE ITEM STAT IMAGE -->

                                    <!-- BADGE ITEM STAT TITLE -->
                                    <p class="badge-item-stat-title">Quest Conqueror</p>
                                    <!-- /BADGE ITEM STAT TITLE -->

                                    <!-- BADGE ITEM STAT TEXT -->
                                    <p class="badge-item-stat-text">Succesfully completed at least 10 quests at 100%</p>
                                    <!-- /BADGE ITEM STAT TEXT -->

                                    <!-- PROGRESS STAT -->
                                    <div class="progress-stat medium">
                                        <!-- PROGRESS STAT BAR -->
                                        <div id="badge-qconq" class="progress-stat-bar"></div>
                                        <!-- /PROGRESS STAT BAR -->

                                        <!-- BAR PROGRESS WRAP -->
                                        <div class="bar-progress-wrap">
                                            <!-- BAR PROGRESS INFO -->
                                            <p class="bar-progress-info negative center"><span class="bar-progress-text no-space"></span></p>
                                            <!-- /BAR PROGRESS INFO -->
                                        </div>
                                        <!-- /BAR PROGRESS WRAP -->
                                    </div>
                                    <!-- /PROGRESS STAT -->
                                </div>
                                <!-- /BADGE ITEM STAT -->
                            </div>
                            <!-- /WIDGET BOX CONTENT SLIDER ITEM -->
                        </div>
                        <!-- /WIDGET BOX CONTENT SLIDER -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Members</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- FILTERS -->
                        <div class="filters">
                            <!-- FILTER -->
                            <p class="filter">Newest</p>
                            <!-- /FILTER -->

                            <!-- FILTER -->
                            <p class="filter active">Popular</p>
                            <!-- /FILTER -->

                            <!-- FILTER -->
                            <p class="filter">Active</p>
                            <!-- /FILTER -->
                        </div>
                        <!-- /FILTERS -->

                        <!-- USER STATUS LIST -->
                        <div class="user-status-list">
                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/07.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">26</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Sarah Diamond</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">24.5K profile views</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">16</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">20.1K profile views</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/23.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">19</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Rosie Sakura</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">19.7K profile views</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/15.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">22</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Peter Stark</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">16.5K profile views</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">6</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Bearded Wonder</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">9.8K profile views</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-add-friend">
                                            <use xlink:href="#svg-add-friend"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /USER STATUS LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- BANNER PROMO -->
                <a class="banner-promo" href="https://themeforest.net/user/odin_design" target="_blank">
                    <img src="img/banner/banner-promo.jpg" alt="banner-promo" />
                </a>
                <!-- /BANNER PROMO -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Open Quests</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- QUEST PREVIEW LIST -->
                        <div class="quest-preview-list">
                            <!-- QUEST PREVIEW -->
                            <div class="quest-preview">
                                <!-- QUEST PREVIEW INFO -->
                                <div class="quest-preview-info">
                                    <!-- QUEST PREVIEW IMAGE -->
                                    <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s" />
                                    <!-- /QUEST PREVIEW IMAGE -->

                                    <!-- QUEST PREVIEW TITLE -->
                                    <p class="quest-preview-title">Nothing to hide</p>
                                    <!-- /QUEST PREVIEW TITLE -->

                                    <!-- QUEST PREVIEW TEXT -->
                                    <p class="quest-preview-text">You have completed all your profile information fields</p>
                                    <!-- /QUEST PREVIEW TEXT -->
                                </div>
                                <!-- /QUEST PREVIEW INFO -->

                                <!-- PROGRESS STAT -->
                                <div class="progress-stat">
                                    <!-- PROGRESS STAT BAR -->
                                    <div id="quest-preview-nth" class="progress-stat-bar"></div>
                                    <!-- /PROGRESS STAT BAR -->
                                </div>
                                <!-- /PROGRESS STAT -->
                            </div>
                            <!-- /QUEST PREVIEW -->

                            <!-- QUEST PREVIEW -->
                            <div class="quest-preview">
                                <!-- QUEST PREVIEW INFO -->
                                <div class="quest-preview-info">
                                    <!-- QUEST PREVIEW IMAGE -->
                                    <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s" />
                                    <!-- /QUEST PREVIEW IMAGE -->

                                    <!-- QUEST PREVIEW TITLE -->
                                    <p class="quest-preview-title">Social King</p>
                                    <!-- /QUEST PREVIEW TITLE -->

                                    <!-- QUEST PREVIEW TEXT -->
                                    <p class="quest-preview-text">You have linked at least 8 social networks to your profile</p>
                                    <!-- /QUEST PREVIEW TEXT -->
                                </div>
                                <!-- /QUEST PREVIEW INFO -->

                                <!-- PROGRESS STAT -->
                                <div class="progress-stat">
                                    <!-- PROGRESS STAT BAR -->
                                    <div id="quest-preview-sk" class="progress-stat-bar"></div>
                                    <!-- /PROGRESS STAT BAR -->
                                </div>
                                <!-- /PROGRESS STAT -->
                            </div>
                            <!-- /QUEST PREVIEW -->

                            <!-- QUEST PREVIEW -->
                            <div class="quest-preview">
                                <!-- QUEST PREVIEW INFO -->
                                <div class="quest-preview-info">
                                    <!-- QUEST PREVIEW IMAGE -->
                                    <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s" />
                                    <!-- /QUEST PREVIEW IMAGE -->

                                    <!-- QUEST PREVIEW TITLE -->
                                    <p class="quest-preview-title">Buffed Profile</p>
                                    <!-- /QUEST PREVIEW TITLE -->

                                    <!-- QUEST PREVIEW TEXT -->
                                    <p class="quest-preview-text">You have posted every day for at least 30 days in a row</p>
                                    <!-- /QUEST PREVIEW TEXT -->
                                </div>
                                <!-- /QUEST PREVIEW INFO -->

                                <!-- PROGRESS STAT -->
                                <div class="progress-stat">
                                    <!-- PROGRESS STAT BAR -->
                                    <div id="quest-preview-bp" class="progress-stat-bar"></div>
                                    <!-- /PROGRESS STAT BAR -->
                                </div>
                                <!-- /PROGRESS STAT -->
                            </div>
                            <!-- /QUEST PREVIEW -->

                            <!-- QUEST PREVIEW -->
                            <div class="quest-preview">
                                <!-- QUEST PREVIEW INFO -->
                                <div class="quest-preview-info">
                                    <!-- QUEST PREVIEW IMAGE -->
                                    <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s" />
                                    <!-- /QUEST PREVIEW IMAGE -->

                                    <!-- QUEST PREVIEW TITLE -->
                                    <p class="quest-preview-title">Hear the People</p>
                                    <!-- /QUEST PREVIEW TITLE -->

                                    <!-- QUEST PREVIEW TEXT -->
                                    <p class="quest-preview-text">You have created and posted your first poll</p>
                                    <!-- /QUEST PREVIEW TEXT -->
                                </div>
                                <!-- /QUEST PREVIEW INFO -->

                                <!-- PROGRESS STAT -->
                                <div class="progress-stat">
                                    <!-- PROGRESS STAT BAR -->
                                    <div id="quest-preview-htp" class="progress-stat-bar"></div>
                                    <!-- /PROGRESS STAT BAR -->
                                </div>
                                <!-- /PROGRESS STAT -->
                            </div>
                            <!-- /QUEST PREVIEW -->

                            <!-- QUEST PREVIEW -->
                            <div class="quest-preview">
                                <!-- QUEST PREVIEW INFO -->
                                <div class="quest-preview-info">
                                    <!-- QUEST PREVIEW IMAGE -->
                                    <img class="quest-preview-image" src="img/quest/openq-s.png" alt="openq-s" />
                                    <!-- /QUEST PREVIEW IMAGE -->

                                    <!-- QUEST PREVIEW TITLE -->
                                    <p class="quest-preview-title">Store Manager</p>
                                    <!-- /QUEST PREVIEW TITLE -->

                                    <!-- QUEST PREVIEW TEXT -->
                                    <p class="quest-preview-text">You have uploaded at least 10 items in your shop</p>
                                    <!-- /QUEST PREVIEW TEXT -->
                                </div>
                                <!-- /QUEST PREVIEW INFO -->

                                <!-- PROGRESS STAT -->
                                <div class="progress-stat">
                                    <!-- PROGRESS STAT BAR -->
                                    <div id="quest-preview-sm" class="progress-stat-bar"></div>
                                    <!-- /PROGRESS STAT BAR -->
                                </div>
                                <!-- /PROGRESS STAT -->
                            </div>
                            <!-- /QUEST PREVIEW -->
                        </div>
                        <!-- /QUEST PREVIEW LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->

                    <!-- WIDGET BOX BUTTON -->
                    <a class="widget-box-button button small white" href="quests.html">See all Quests!</a>
                    <!-- /WIDGET BOX BUTTON -->
                </div>
                <!-- /WIDGET BOX -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                @if(Auth::id())
                    <!-- QUICK POST -->
                    @include('layouts.add_post')
                    <!-- /QUICK POST -->
                @endif
                <!-- WIDGET BOX -->
                <div class="widget-box no-padding">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Edit Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Delete Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Make it Featured</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report Author</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->
                     @foreach($data as $key)
                    <!-- WIDGET BOX STATUS -->
                    <div class="widget-box-status">
                        <!-- WIDGET BOX STATUS CONTENT -->
                        <div class="widget-box-status-content">
                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src=""></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">12</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Neko Bebop</a> uploaded a <span class="bold">video</span></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">2 minutes ago</p>
                                <!-- /USER STATUS TEXT -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- WIDGET BOX STATUS TEXT -->
                            <p class="widget-box-status-text">{{$key->title}}</p>
                            <!-- /WIDGET BOX STATUS TEXT -->
                            <!-- WIDGET BOX STATUS TEXT -->
                            <p class="widget-box-status-text">{{$key->text}}</p>
                            <!-- /WIDGET BOX STATUS TEXT -->
                            <div class="picture-collage">


                                <!-- PICTURE COLLAGE ROW -->
                                <div class="picture-collage-row">
                                @foreach($key->post_photo as $photo)

                                    <!-- PICTURE COLLAGE ITEM -->
                                    <div class="picture-collage-item popup-picture-trigger">
                                        <!-- PHOTO PREVIEW -->
                                        <div class="photo-preview">
                                            <!-- PHOTO PREVIEW IMAGE -->
                                            <figure class="photo-preview-image liquid" style="background: url(&quot;img/cover/16.jpg&quot;) center center / cover no-repeat;">
                                                <img src=" {{$photo->name}}" alt="photo-preview-16" style="display: none;">
                                            </figure>
                                            <!-- /PHOTO PREVIEW IMAGE -->


                                        </div>
                                        <!-- /PHOTO PREVIEW -->
                                    </div>
                                    <!-- /PICTURE COLLAGE ITEM -->
                                @endforeach
                                    <!-- PICTURE COLLAGE ITEM -->
                                    <div class="picture-collage-item popup-picture-trigger">
                                        <!-- PHOTO PREVIEW -->
                                        <div class="photo-preview">
                                            <!-- PHOTO PREVIEW IMAGE -->
                                            <figure class="photo-preview-image liquid" style="background: url(&quot;img/cover/08.jpg&quot;) center center / cover no-repeat;">
                                                <img src="img/cover/08.jpg" alt="photo-preview-08" style="display: none;">
                                            </figure>
                                            <!-- /PHOTO PREVIEW IMAGE -->

                                            <!-- PHOTO PREVIEW INFO -->
                                            <div class="photo-preview-info">
                                                <!-- REACTION COUNT LIST -->
                                                <div class="reaction-count-list">
                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-thumbs-up">
                                                            <use xlink:href="#svg-thumbs-up"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">2</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->

                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-comment">
                                                            <use xlink:href="#svg-comment"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">5</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->
                                                </div>
                                                <!-- /REACTION COUNT LIST -->
                                            </div>
                                            <!-- /PHOTO PREVIEW INFO -->
                                        </div>
                                        <!-- /PHOTO PREVIEW -->
                                    </div>
                                    <!-- /PICTURE COLLAGE ITEM -->

                                    <!-- PICTURE COLLAGE ITEM -->
                                    <div class="picture-collage-item">
                                        <!-- PICTURE COLLAGE ITEM OVERLAY -->
                                        <a class="picture-collage-item-overlay" href="profile-photos.html">
                                            <!-- PICTURE COLLAGE ITEM OVERLAY TEXT -->
                                            <p class="picture-collage-item-overlay-text">+22</p>
                                            <!-- /PICTURE COLLAGE ITEM OVERLAY TEXT -->
                                        </a>
                                        <!-- /PICTURE COLLAGE ITEM OVERLAY -->

                                        <!-- PHOTO PREVIEW -->
                                        <div class="photo-preview">
                                            <!-- PHOTO PREVIEW IMAGE -->
                                            <figure class="photo-preview-image liquid" style="background: url(&quot;img/cover/14.jpg&quot;) center center / cover no-repeat;">
                                                <img src="img/cover/14.jpg" alt="photo-preview-14" style="display: none;">
                                            </figure>
                                            <!-- /PHOTO PREVIEW IMAGE -->

                                            <!-- PHOTO PREVIEW INFO -->
                                            <div class="photo-preview-info">
                                                <!-- REACTION COUNT LIST -->
                                                <div class="reaction-count-list">
                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-thumbs-up">
                                                            <use xlink:href="#svg-thumbs-up"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">2</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->

                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-comment">
                                                            <use xlink:href="#svg-comment"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">5</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->
                                                </div>
                                                <!-- /REACTION COUNT LIST -->
                                            </div>
                                            <!-- /PHOTO PREVIEW INFO -->
                                        </div>
                                        <!-- /PHOTO PREVIEW -->
                                    </div>
                                    <!-- /PICTURE COLLAGE ITEM -->
                                </div>
                                <!-- /PICTURE COLLAGE ROW -->
                            </div>
                        </div>
                        <!-- /WIDGET BOX STATUS CONTENT -->

                        <!-- IFRAME WRAP -->
                        <div class="iframe-wrap">
                            <iframe src="https://www.youtube.com/embed/rk-wIgg9fNk" allowfullscreen></iframe>
                        </div>
                        <!-- /IFRAME WRAP -->

                        <!-- WIDGET BOX STATUS CONTENT -->
                        <div class="widget-box-status-content">
                            <!-- TAG LIST -->
                            <div class="tag-list">
                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">Stream</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">Stream</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">Stream</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">Stream</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">StrikerGO</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">Outlaws</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">Gaming</a>
                                <!-- /TAG ITEM -->
                            </div>
                            <!-- /TAG LIST -->

                            <!-- CONTENT ACTIONS -->
                            <div class="content-actions">
                                <!-- CONTENT ACTION -->
                                <div class="content-action">
                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LIST -->
                                        <div class="meta-line-list reaction-item-list">
                                            <!-- REACTION ITEM -->
                                            <div class="reaction-item">
                                                <!-- REACTION IMAGE -->
                                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/love.png" alt="reaction-love" />
                                                <!-- /REACTION IMAGE -->

                                                <!-- SIMPLE DROPDOWN -->
                                                <div class="simple-dropdown padded reaction-item-dropdown">
                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/love.png" alt="reaction-love" /> <span class="bold">Love</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Matt Parker</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">The Green Goo</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                                </div>
                                                <!-- /SIMPLE DROPDOWN -->
                                            </div>
                                            <!-- /REACTION ITEM -->

                                            <!-- REACTION ITEM -->
                                            <div class="reaction-item">
                                                <!-- REACTION IMAGE -->
                                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png" alt="reaction-happy" />
                                                <!-- /REACTION IMAGE -->

                                                <!-- SIMPLE DROPDOWN -->
                                                <div class="simple-dropdown padded reaction-item-dropdown">
                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy" /> <span class="bold">Happy</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Jane Rodgers</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                                </div>
                                                <!-- /SIMPLE DROPDOWN -->
                                            </div>
                                            <!-- /REACTION ITEM -->

                                            <!-- REACTION ITEM -->
                                            <div class="reaction-item">
                                                <!-- REACTION IMAGE -->
                                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like" />
                                                <!-- /REACTION IMAGE -->

                                                <!-- SIMPLE DROPDOWN -->
                                                <div class="simple-dropdown padded reaction-item-dropdown">
                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like" /> <span class="bold">Like</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Neko Bebop</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Nick Grissom</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Sarah Diamond</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Marcus Jhonson</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><span class="bold">and 6 more...</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                                </div>
                                                <!-- /SIMPLE DROPDOWN -->
                                            </div>
                                            <!-- /REACTION ITEM -->
                                        </div>
                                        <!-- /META LINE LIST -->

                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">16</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LIST -->
                                        <div class="meta-line-list user-avatar-list">
                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/07.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/13.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/22.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/10.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/08.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->
                                        </div>
                                        <!-- /META LINE LIST -->

                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">19 Participants</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->
                                </div>
                                <!-- /CONTENT ACTION -->

                                <!-- CONTENT ACTION -->
                                <div class="content-action">
                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LINK -->
                                        <p class="meta-line-link">2 Comments</p>
                                        <!-- /META LINE LINK -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">0 Shares</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->
                                </div>
                                <!-- /CONTENT ACTION -->
                            </div>
                            <!-- /CONTENT ACTIONS -->
                        </div>
                        <!-- /WIDGET BOX STATUS CONTENT -->
                    </div>
                    <!-- /WIDGET BOX STATUS -->
                    @endforeach

                        <!-- POST OPTIONS -->
                        <div class="post-options">
                            <!-- POST OPTION WRAP -->
                            <div class="post-option-wrap">
                                <!-- POST OPTION -->
                                <div class="post-option reaction-options-dropdown-trigger">
                                    <!-- POST OPTION ICON -->
                                    <svg class="post-option-icon icon-thumbs-up">
                                        <use xlink:href="#svg-thumbs-up"></use>
                                    </svg>
                                    <!-- /POST OPTION ICON -->

                                    <!-- POST OPTION TEXT -->
                                    <p class="post-option-text">React!</p>
                                    <!-- /POST OPTION TEXT -->
                                </div>
                                <!-- /POST OPTION -->

                                <!-- REACTION OPTIONS -->
                                <div class="reaction-options reaction-options-dropdown">
                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->
                                </div>
                                <!-- /REACTION OPTIONS -->
                            </div>
                            <!-- /POST OPTION WRAP -->

                            <!-- POST OPTION -->
                            <div class="post-option">
                                <!-- POST OPTION ICON -->
                                <svg class="post-option-icon icon-comment">
                                    <use xlink:href="#svg-comment"></use>
                                </svg>
                                <!-- /POST OPTION ICON -->

                                <!-- POST OPTION TEXT -->
                                <p class="post-option-text">Comment</p>
                                <!-- /POST OPTION TEXT -->
                            </div>
                            <!-- /POST OPTION -->

                            <!-- POST OPTION -->
                            <div class="post-option">
                                <!-- POST OPTION ICON -->
                                <svg class="post-option-icon icon-share">
                                    <use xlink:href="#svg-share"></use>
                                </svg>
                                <!-- /POST OPTION ICON -->

                                <!-- POST OPTION TEXT -->
                                <p class="post-option-text">Share</p>
                                <!-- /POST OPTION TEXT -->
                            </div>
                            <!-- /POST OPTION -->
                        </div>
                        <!-- /POST OPTIONS -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box no-padding">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Edit Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Delete Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Make it Featured</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report Author</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX STATUS -->
                    <div class="widget-box-status">
                        <!-- WIDGET BOX STATUS CONTENT -->
                        <div class="widget-box-status-content">
                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">19</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Destroy Dex</a> uploaded <span class="bold">26 new photos</span></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">17 minutes ago</p>
                                <!-- /USER STATUS TEXT -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- WIDGET BOX STATUS TEXT -->
                            <p class="widget-box-status-text">Here are some of the photos from my last visit to StreamCon 2019!!</p>
                            <!-- /WIDGET BOX STATUS TEXT -->

                            <!-- PICTURE COLLAGE -->
                            <div class="picture-collage">
                                <!-- PICTURE COLLAGE ROW -->
                                <div class="picture-collage-row medium">
                                    <!-- PICTURE COLLAGE ITEM -->
                                    <div class="picture-collage-item popup-picture-trigger">
                                        <!-- PHOTO PREVIEW -->
                                        <div class="photo-preview">
                                            <!-- PHOTO PREVIEW IMAGE -->
                                            <figure class="photo-preview-image liquid">
                                                <img src="img/cover/10.jpg" alt="photo-preview-10" />
                                            </figure>
                                            <!-- /PHOTO PREVIEW IMAGE -->

                                            <!-- PHOTO PREVIEW INFO -->
                                            <div class="photo-preview-info">
                                                <!-- REACTION COUNT LIST -->
                                                <div class="reaction-count-list">
                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-thumbs-up">
                                                            <use xlink:href="#svg-thumbs-up"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">2</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->

                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-comment">
                                                            <use xlink:href="#svg-comment"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">5</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->
                                                </div>
                                                <!-- /REACTION COUNT LIST -->
                                            </div>
                                            <!-- /PHOTO PREVIEW INFO -->
                                        </div>
                                        <!-- /PHOTO PREVIEW -->
                                    </div>
                                    <!-- /PICTURE COLLAGE ITEM -->

                                    <!-- PICTURE COLLAGE ITEM -->
                                    <div class="picture-collage-item popup-picture-trigger">
                                        <!-- PHOTO PREVIEW -->
                                        <div class="photo-preview">
                                            <!-- PHOTO PREVIEW IMAGE -->
                                            <figure class="photo-preview-image liquid">
                                                <img src="img/cover/12.jpg" alt="photo-preview-12" />
                                            </figure>
                                            <!-- /PHOTO PREVIEW IMAGE -->

                                            <!-- PHOTO PREVIEW INFO -->
                                            <div class="photo-preview-info">
                                                <!-- REACTION COUNT LIST -->
                                                <div class="reaction-count-list">
                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-thumbs-up">
                                                            <use xlink:href="#svg-thumbs-up"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">2</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->

                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-comment">
                                                            <use xlink:href="#svg-comment"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">5</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->
                                                </div>
                                                <!-- /REACTION COUNT LIST -->
                                            </div>
                                            <!-- /PHOTO PREVIEW INFO -->
                                        </div>
                                        <!-- /PHOTO PREVIEW -->
                                    </div>
                                    <!-- /PICTURE COLLAGE ITEM -->
                                </div>
                                <!-- /PICTURE COLLAGE ROW -->

                                <!-- PICTURE COLLAGE ROW -->
                                <div class="picture-collage-row">
                                    <!-- PICTURE COLLAGE ITEM -->
                                    <div class="picture-collage-item popup-picture-trigger">
                                        <!-- PHOTO PREVIEW -->
                                        <div class="photo-preview">
                                            <!-- PHOTO PREVIEW IMAGE -->
                                            <figure class="photo-preview-image liquid">
                                                <img src="img/cover/16.jpg" alt="photo-preview-16" />
                                            </figure>
                                            <!-- /PHOTO PREVIEW IMAGE -->

                                            <!-- PHOTO PREVIEW INFO -->
                                            <div class="photo-preview-info">
                                                <!-- REACTION COUNT LIST -->
                                                <div class="reaction-count-list">
                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-thumbs-up">
                                                            <use xlink:href="#svg-thumbs-up"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">2</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->

                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-comment">
                                                            <use xlink:href="#svg-comment"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">5</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->
                                                </div>
                                                <!-- /REACTION COUNT LIST -->
                                            </div>
                                            <!-- /PHOTO PREVIEW INFO -->
                                        </div>
                                        <!-- /PHOTO PREVIEW -->
                                    </div>
                                    <!-- /PICTURE COLLAGE ITEM -->

                                    <!-- PICTURE COLLAGE ITEM -->
                                    <div class="picture-collage-item popup-picture-trigger">
                                        <!-- PHOTO PREVIEW -->
                                        <div class="photo-preview">
                                            <!-- PHOTO PREVIEW IMAGE -->
                                            <figure class="photo-preview-image liquid">
                                                <img src="img/cover/08.jpg" alt="photo-preview-08" />
                                            </figure>
                                            <!-- /PHOTO PREVIEW IMAGE -->

                                            <!-- PHOTO PREVIEW INFO -->
                                            <div class="photo-preview-info">
                                                <!-- REACTION COUNT LIST -->
                                                <div class="reaction-count-list">
                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-thumbs-up">
                                                            <use xlink:href="#svg-thumbs-up"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">2</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->

                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-comment">
                                                            <use xlink:href="#svg-comment"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">5</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->
                                                </div>
                                                <!-- /REACTION COUNT LIST -->
                                            </div>
                                            <!-- /PHOTO PREVIEW INFO -->
                                        </div>
                                        <!-- /PHOTO PREVIEW -->
                                    </div>
                                    <!-- /PICTURE COLLAGE ITEM -->

                                    <!-- PICTURE COLLAGE ITEM -->
                                    <div class="picture-collage-item">
                                        <!-- PICTURE COLLAGE ITEM OVERLAY -->
                                        <a class="picture-collage-item-overlay" href="profile-photos.html">
                                            <!-- PICTURE COLLAGE ITEM OVERLAY TEXT -->
                                            <p class="picture-collage-item-overlay-text">+22</p>
                                            <!-- /PICTURE COLLAGE ITEM OVERLAY TEXT -->
                                        </a>
                                        <!-- /PICTURE COLLAGE ITEM OVERLAY -->

                                        <!-- PHOTO PREVIEW -->
                                        <div class="photo-preview">
                                            <!-- PHOTO PREVIEW IMAGE -->
                                            <figure class="photo-preview-image liquid">
                                                <img src="img/cover/14.jpg" alt="photo-preview-14" />
                                            </figure>
                                            <!-- /PHOTO PREVIEW IMAGE -->

                                            <!-- PHOTO PREVIEW INFO -->
                                            <div class="photo-preview-info">
                                                <!-- REACTION COUNT LIST -->
                                                <div class="reaction-count-list">
                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-thumbs-up">
                                                            <use xlink:href="#svg-thumbs-up"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">2</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->

                                                    <!-- REACTION COUNT -->
                                                    <div class="reaction-count negative">
                                                        <!-- REACTION COUNT ICON -->
                                                        <svg class="reaction-count-icon icon-comment">
                                                            <use xlink:href="#svg-comment"></use>
                                                        </svg>
                                                        <!-- /REACTION COUNT ICON -->

                                                        <!-- REACTION COUNT TEXT -->
                                                        <p class="reaction-count-text">5</p>
                                                        <!-- /REACTION COUNT TEXT -->
                                                    </div>
                                                    <!-- /REACTION COUNT -->
                                                </div>
                                                <!-- /REACTION COUNT LIST -->
                                            </div>
                                            <!-- /PHOTO PREVIEW INFO -->
                                        </div>
                                        <!-- /PHOTO PREVIEW -->
                                    </div>
                                    <!-- /PICTURE COLLAGE ITEM -->
                                </div>
                                <!-- /PICTURE COLLAGE ROW -->
                            </div>
                            <!-- /PICTURE COLLAGE -->

                            <!-- TAG LIST -->
                            <div class="tag-list">
                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">Photos</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">StreamCon</a>
                                <!-- /TAG ITEM -->

                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="newsfeed.html">StarGirl</a>
                                <!-- /TAG ITEM -->
                            </div>
                            <!-- /TAG LIST -->

                            <!-- CONTENT ACTIONS -->
                            <div class="content-actions">
                                <!-- CONTENT ACTION -->
                                <div class="content-action">
                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LIST -->
                                        <div class="meta-line-list reaction-item-list">
                                            <!-- REACTION ITEM -->
                                            <div class="reaction-item">
                                                <!-- REACTION IMAGE -->
                                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/wow.png" alt="reaction-wow" />
                                                <!-- /REACTION IMAGE -->

                                                <!-- SIMPLE DROPDOWN -->
                                                <div class="simple-dropdown padded reaction-item-dropdown">
                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/wow.png" alt="reaction-wow" /> <span class="bold">Wow</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Matt Parker</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                                </div>
                                                <!-- /SIMPLE DROPDOWN -->
                                            </div>
                                            <!-- /REACTION ITEM -->

                                            <!-- REACTION ITEM -->
                                            <div class="reaction-item">
                                                <!-- REACTION IMAGE -->
                                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like" />
                                                <!-- /REACTION IMAGE -->

                                                <!-- SIMPLE DROPDOWN -->
                                                <div class="simple-dropdown padded reaction-item-dropdown">
                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like" /> <span class="bold">Like</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Jane Rodgers</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                                </div>
                                                <!-- /SIMPLE DROPDOWN -->
                                            </div>
                                            <!-- /REACTION ITEM -->
                                        </div>
                                        <!-- /META LINE LIST -->

                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">3</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LIST -->
                                        <div class="meta-line-list user-avatar-list">
                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/03.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/15.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/14.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/07.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->
                                        </div>
                                        <!-- /META LINE LIST -->

                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">4 Participants</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->
                                </div>
                                <!-- /CONTENT ACTION -->

                                <!-- CONTENT ACTION -->
                                <div class="content-action">
                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LINK -->
                                        <p class="meta-line-link">3 Comments</p>
                                        <!-- /META LINE LINK -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">0 Shares</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->
                                </div>
                                <!-- /CONTENT ACTION -->
                            </div>
                            <!-- /CONTENT ACTIONS -->
                        </div>
                        <!-- /WIDGET BOX STATUS CONTENT -->
                    </div>
                    <!-- /WIDGET BOX STATUS -->
                    <!-- POST OPTIONS -->
                        <div class="post-options">
                            <!-- POST OPTION WRAP -->
                            <div class="post-option-wrap">
                                <!-- POST OPTION -->
                                <div class="post-option reaction-options-dropdown-trigger">
                                    <!-- POST OPTION ICON -->
                                    <svg class="post-option-icon icon-thumbs-up">
                                        <use xlink:href="#svg-thumbs-up"></use>
                                    </svg>
                                    <!-- /POST OPTION ICON -->

                                    <!-- POST OPTION TEXT -->
                                    <p class="post-option-text">React!</p>
                                    <!-- /POST OPTION TEXT -->
                                </div>
                                <!-- /POST OPTION -->

                                <!-- REACTION OPTIONS -->
                                <div class="reaction-options reaction-options-dropdown">
                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->
                                </div>
                                <!-- /REACTION OPTIONS -->
                            </div>
                            <!-- /POST OPTION WRAP -->

                            <!-- POST OPTION -->
                            <div class="post-option">
                                <!-- POST OPTION ICON -->
                                <svg class="post-option-icon icon-comment">
                                    <use xlink:href="#svg-comment"></use>
                                </svg>
                                <!-- /POST OPTION ICON -->

                                <!-- POST OPTION TEXT -->
                                <p class="post-option-text">Comment</p>
                                <!-- /POST OPTION TEXT -->
                            </div>
                            <!-- /POST OPTION -->

                            <!-- POST OPTION -->
                            <div class="post-option">
                                <!-- POST OPTION ICON -->
                                <svg class="post-option-icon icon-share">
                                    <use xlink:href="#svg-share"></use>
                                </svg>
                                <!-- /POST OPTION ICON -->

                                <!-- POST OPTION TEXT -->
                                <p class="post-option-text">Share</p>
                                <!-- /POST OPTION TEXT -->
                            </div>
                            <!-- /POST OPTION -->
                        </div>
                        <!-- /POST OPTIONS -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box no-padding">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Edit Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Delete Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Make it Featured</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report Post</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report Author</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX STATUS -->
                    <div class="widget-box-status">
                        <!-- WIDGET BOX STATUS CONTENT -->
                        <div class="widget-box-status-content">
                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">12</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <div class="user-status-title medium">
                                    <a class="bold" href="profile-timeline.html">Neko Bebop</a> replied to the discussion <a class="bold" href="forums-discussion.html">In your opinion, who has the best Cosplay?</a> in the forum
                                    <!-- USER AVATAR -->
                                    <a class="user-avatar micro no-stats" href="group-timeline.html">
                                        <!-- USER AVATAR BORDER -->
                                        <div class="user-avatar-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-22-24"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR BORDER -->

                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-18-20" data-src="img/avatar/24.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </a>
                                    <!-- /USER AVATAR -->
                                    <a class="bold" href="group-timeline.html">Cosplayers of the World</a>
                                </div>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">42 minutes ago</p>
                                <!-- /USER STATUS TEXT -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- QUOTE BOX -->
                            <blockquote class="quote-box">
                                <!-- QUOTE BOX ICON -->
                                <svg class="quote-box-icon icon-quote">
                                    <use xlink:href="#svg-quote"></use>
                                </svg>
                                <!-- /QUOTE BOX ICON -->

                                <!-- QUOTE BOX TEXT -->
                                <p class="quote-box-text">I've been cosplaying for 9 years now and I've never seen a more perfect cosplay like the Samurai Robot one from Rosie Sakura.</p>
                                <!-- /QUOTE BOX TEXT -->
                            </blockquote>
                            <!-- /QUOTE BOX -->

                            <!-- CONTENT ACTIONS -->
                            <div class="content-actions">
                                <!-- CONTENT ACTION -->
                                <div class="content-action">
                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LIST -->
                                        <div class="meta-line-list reaction-item-list">
                                            <!-- REACTION ITEM -->
                                            <div class="reaction-item">
                                                <!-- REACTION IMAGE -->
                                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/love.png" alt="reaction-love" />
                                                <!-- /REACTION IMAGE -->

                                                <!-- SIMPLE DROPDOWN -->
                                                <div class="simple-dropdown padded reaction-item-dropdown">
                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/love.png" alt="reaction-love" /> <span class="bold">Love</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Matt Parker</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Destroy Dex</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">The Green Goo</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                                </div>
                                                <!-- /SIMPLE DROPDOWN -->
                                            </div>
                                            <!-- /REACTION ITEM -->

                                            <!-- REACTION ITEM -->
                                            <div class="reaction-item">
                                                <!-- REACTION IMAGE -->
                                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/happy.png" alt="reaction-happy" />
                                                <!-- /REACTION IMAGE -->

                                                <!-- SIMPLE DROPDOWN -->
                                                <div class="simple-dropdown padded reaction-item-dropdown">
                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/happy.png" alt="reaction-happy" /> <span class="bold">Happy</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Sandra Strange</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                                </div>
                                                <!-- /SIMPLE DROPDOWN -->
                                            </div>
                                            <!-- /REACTION ITEM -->

                                            <!-- REACTION ITEM -->
                                            <div class="reaction-item">
                                                <!-- REACTION IMAGE -->
                                                <img class="reaction-image reaction-item-dropdown-trigger" src="img/reaction/like.png" alt="reaction-like" />
                                                <!-- /REACTION IMAGE -->

                                                <!-- SIMPLE DROPDOWN -->
                                                <div class="simple-dropdown padded reaction-item-dropdown">
                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><img class="reaction" src="img/reaction/like.png" alt="reaction-like" /> <span class="bold">Like</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Neko Bebop</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Nick Grissom</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Sarah Diamond</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Jett Spiegel</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Marcus Jhonson</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text">Jane Rodgers</p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->

                                                    <!-- SIMPLE DROPDOWN TEXT -->
                                                    <p class="simple-dropdown-text"><span class="bold">and 6 more...</span></p>
                                                    <!-- /SIMPLE DROPDOWN TEXT -->
                                                </div>
                                                <!-- /SIMPLE DROPDOWN -->
                                            </div>
                                            <!-- /REACTION ITEM -->
                                        </div>
                                        <!-- /META LINE LIST -->

                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">16</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LIST -->
                                        <div class="meta-line-list user-avatar-list">
                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/07.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/13.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/22.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/10.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->

                                            <!-- USER AVATAR -->
                                            <div class="user-avatar micro no-stats">
                                                <!-- USER AVATAR BORDER -->
                                                <div class="user-avatar-border">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-22-24"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR BORDER -->

                                                <!-- USER AVATAR CONTENT -->
                                                <div class="user-avatar-content">
                                                    <!-- HEXAGON -->
                                                    <div class="hexagon-image-18-20" data-src="img/avatar/08.jpg"></div>
                                                    <!-- /HEXAGON -->
                                                </div>
                                                <!-- /USER AVATAR CONTENT -->
                                            </div>
                                            <!-- /USER AVATAR -->
                                        </div>
                                        <!-- /META LINE LIST -->

                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">19 Participants</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->
                                </div>
                                <!-- /CONTENT ACTION -->

                                <!-- CONTENT ACTION -->
                                <div class="content-action">
                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE LINK -->
                                        <p class="meta-line-link">2 Comments</p>
                                        <!-- /META LINE LINK -->
                                    </div>
                                    <!-- /META LINE -->

                                    <!-- META LINE -->
                                    <div class="meta-line">
                                        <!-- META LINE TEXT -->
                                        <p class="meta-line-text">0 Shares</p>
                                        <!-- /META LINE TEXT -->
                                    </div>
                                    <!-- /META LINE -->
                                </div>
                                <!-- /CONTENT ACTION -->
                            </div>
                            <!-- /CONTENT ACTIONS -->
                        </div>
                        <!-- /WIDGET BOX STATUS CONTENT -->
                    </div>
                    <!-- /WIDGET BOX STATUS -->
                        <!-- POST OPTIONS -->
                        <div class="post-options">
                            <!-- POST OPTION WRAP -->
                            <div class="post-option-wrap">
                                <!-- POST OPTION -->
                                <div class="post-option reaction-options-dropdown-trigger">
                                    <!-- POST OPTION ICON -->
                                    <svg class="post-option-icon icon-thumbs-up">
                                        <use xlink:href="#svg-thumbs-up"></use>
                                    </svg>
                                    <!-- /POST OPTION ICON -->

                                    <!-- POST OPTION TEXT -->
                                    <p class="post-option-text">React!</p>
                                    <!-- /POST OPTION TEXT -->
                                </div>
                                <!-- /POST OPTION -->

                                <!-- REACTION OPTIONS -->
                                <div class="reaction-options reaction-options-dropdown">
                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Like">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/like.png" alt="reaction-like" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Love">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/love.png" alt="reaction-love" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/dislike.png" alt="reaction-dislike" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/happy.png" alt="reaction-happy" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/funny.png" alt="reaction-funny" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/wow.png" alt="reaction-wow" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/angry.png" alt="reaction-angry" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->

                                    <!-- REACTION OPTION -->
                                    <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                        <!-- REACTION OPTION IMAGE -->
                                        <img class="reaction-option-image" src="img/reaction/sad.png" alt="reaction-sad" />
                                        <!-- /REACTION OPTION IMAGE -->
                                    </div>
                                    <!-- /REACTION OPTION -->
                                </div>
                                <!-- /REACTION OPTIONS -->
                            </div>
                            <!-- /POST OPTION WRAP -->

                            <!-- POST OPTION -->
                            <div class="post-option">
                                <!-- POST OPTION ICON -->
                                <svg class="post-option-icon icon-comment">
                                    <use xlink:href="#svg-comment"></use>
                                </svg>
                                <!-- /POST OPTION ICON -->

                                <!-- POST OPTION TEXT -->
                                <p class="post-option-text">Comment</p>
                                <!-- /POST OPTION TEXT -->
                            </div>
                            <!-- /POST OPTION -->

                            <!-- POST OPTION -->
                            <div class="post-option">
                                <!-- POST OPTION ICON -->
                                <svg class="post-option-icon icon-share">
                                    <use xlink:href="#svg-share"></use>
                                </svg>
                                <!-- /POST OPTION ICON -->

                                <!-- POST OPTION TEXT -->
                                <p class="post-option-text">Share</p>
                                <!-- /POST OPTION TEXT -->
                            </div>
                            <!-- /POST OPTION -->
                        </div>
                        <!-- /POST OPTIONS -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- LOADER BARS -->
                <div class="loader-bars">
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                    <div class="loader-bar"></div>
                </div>
                <!-- /LOADER BARS -->
            </div>
            <!-- /GRID COLUMN -->

            <!-- GRID COLUMN -->
            <div class="grid-column">
                <!-- WIDGET BOX -->
                <div class="widget-box no-padding">
                    <!-- WIDGET BOX CONTROLS -->
                    <div class="widget-box-controls">
                        <!-- SLIDER CONTROLS -->
                        <div class="slider-controls">
                            <!-- SLIDER CONTROL -->
                            <div class="slider-control left">
                                <!-- SLIDER CONTROL ICON -->
                                <svg class="slider-control-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                                <!-- /SLIDER CONTROL ICON -->
                            </div>
                            <!-- /SLIDER CONTROL -->

                            <!-- SLIDER CONTROL -->
                            <div class="slider-control right">
                                <!-- SLIDER CONTROL ICON -->
                                <svg class="slider-control-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                                <!-- /SLIDER CONTROL ICON -->
                            </div>
                            <!-- /SLIDER CONTROL -->
                        </div>
                        <!-- /SLIDER CONTROLS -->
                    </div>
                    <!-- /WIDGET BOX CONTROLS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">August 2019</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- CALENDAR -->
                        <div class="calendar small">
                            <!-- CALENDAR WEEK -->
                            <div class="calendar-week">
                                <!-- CALENDAR WEEK DAY -->
                                <p class="calendar-week-day"><span class="week-day-short">Sun</span><span class="week-day-long">Sunday</span></p>
                                <!-- /CALENDAR WEEK DAY -->

                                <!-- CALENDAR WEEK DAY -->
                                <p class="calendar-week-day"><span class="week-day-short">Mon</span><span class="week-day-long">Monday</span></p>
                                <!-- /CALENDAR WEEK DAY -->

                                <!-- CALENDAR WEEK DAY -->
                                <p class="calendar-week-day"><span class="week-day-short">Tue</span><span class="week-day-long">Tuesday</span></p>
                                <!-- /CALENDAR WEEK DAY -->

                                <!-- CALENDAR WEEK DAY -->
                                <p class="calendar-week-day"><span class="week-day-short">Wed</span><span class="week-day-long">Wednesday</span></p>
                                <!-- /CALENDAR WEEK DAY -->

                                <!-- CALENDAR WEEK DAY -->
                                <p class="calendar-week-day"><span class="week-day-short">Thu</span><span class="week-day-long">Thursday</span></p>
                                <!-- /CALENDAR WEEK DAY -->

                                <!-- CALENDAR WEEK DAY -->
                                <p class="calendar-week-day"><span class="week-day-short">Fri</span><span class="week-day-long">Friday</span></p>
                                <!-- /CALENDAR WEEK DAY -->

                                <!-- CALENDAR WEEK DAY -->
                                <p class="calendar-week-day"><span class="week-day-short">Sat</span><span class="week-day-long">Saturday</span></p>
                                <!-- /CALENDAR WEEK DAY -->
                            </div>
                            <!-- /CALENDAR WEEK -->

                            <!-- CALENDAR DAYS -->
                            <div class="calendar-days">
                                <!-- CALENDAR DAY ROW -->
                                <div class="calendar-day-row">
                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day inactive">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">29</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day inactive">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">30</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day inactive">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">31</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">1</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">2</p>
                                        <!-- /CALENDAR DAY NUMBER -->

                                        <!-- CALENDARY DAY EVENTS -->
                                        <div class="calendar-day-events">
                                            <!-- CALENDAR DAY EVENT -->
                                            <p class="calendar-day-event primary"><span class="calendar-day-event-text">Dex's Birthday</span></p>
                                            <!-- /CALENDAR DAY EVENT -->

                                            <!-- CALENDAR DAY EVENT -->
                                            <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Sara's Big Stream</span></p>
                                            <!-- /CALENDAR DAY EVENT -->

                                            <!-- CALENDAR DAY EVENT -->
                                            <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Striker GO Release</span></p>
                                            <!-- /CALENDAR DAY EVENT -->
                                        </div>
                                        <!-- /CALENDARY DAY EVENTS -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">3</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">4</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->
                                </div>
                                <!-- /CALENDAR DAY ROW -->

                                <!-- CALENDAR DAY ROW -->
                                <div class="calendar-day-row">
                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">5</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">6</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day current">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">7</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">8</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">9</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">10</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">11</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->
                                </div>
                                <!-- /CALENDAR DAY ROW -->

                                <!-- CALENDAR DAY ROW -->
                                <div class="calendar-day-row">
                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">12</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day active">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">13</p>
                                        <!-- /CALENDAR DAY NUMBER -->

                                        <!-- CALENDARY DAY EVENTS -->
                                        <div class="calendar-day-events">
                                            <!-- CALENDAR DAY EVENT -->
                                            <p class="calendar-day-event secondary"><span class="calendar-day-event-text">Breakfast with Neko</span></p>
                                            <!-- /CALENDAR DAY EVENT -->

                                            <!-- CALENDAR DAY EVENT -->
                                            <p class="calendar-day-event primary"><span class="calendar-day-event-text">Streaming Party</span></p>
                                            <!-- /CALENDAR DAY EVENT -->
                                        </div>
                                        <!-- /CALENDAR DAY EVENTS -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">14</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">15</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">16</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">17</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">18</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->
                                </div>
                                <!-- /CALENDAR DAY ROW -->

                                <!-- CALENDAR DAY ROW -->
                                <div class="calendar-day-row">
                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">19</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">20</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">21</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">22</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">23</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">24</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">25</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->
                                </div>
                                <!-- /CALENDAR DAY ROW -->

                                <!-- CALENDAR DAY ROW -->
                                <div class="calendar-day-row">
                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">26</p>
                                        <!-- /CALENDAR DAY NUMBER -->

                                        <!-- CALENDARY DAY EVENTS -->
                                        <div class="calendar-day-events">
                                            <!-- CALENDAR DAY EVENT -->
                                            <p class="calendar-day-event primary"><span class="calendar-day-event-text">CosWorld 2019 After...</span></p>
                                            <!-- /CALENDAR DAY EVENT -->
                                        </div>
                                        <!-- /CALENDARY DAY EVENTS -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">27</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">28</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">29</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">30</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day inactive">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">1</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->

                                    <!-- CALENDAR DAY -->
                                    <div class="calendar-day inactive">
                                        <!-- CALENDAR DAY NUMBER -->
                                        <p class="calendar-day-number">2</p>
                                        <!-- /CALENDAR DAY NUMBER -->
                                    </div>
                                    <!-- /CALENDAR DAY -->
                                </div>
                                <!-- /CALENDAR DAY ROW -->
                            </div>
                            <!-- /CALENDAR DAYS -->
                        </div>
                        <!-- /CALENDAR -->

                        <!-- CALENDAR EVENTS PREVIEW -->
                        <div class="calendar-events-preview small">
                            <!-- CALENDAR EVENTS PREVIEW TITLE -->
                            <p class="calendar-events-preview-title">Monday 13th</p>
                            <!-- /CALENDAR EVENTS PREVIEW TITLE -->

                            <!-- CALENDAR EVENT PREVIEW LIST -->
                            <div class="calendar-event-preview-list">
                                <!-- CALENDAR EVENT PREVIEW -->
                                <div class="calendar-event-preview small secondary">
                                    <!-- CALENDAR EVENT PREVIEW START TIME -->
                                    <div class="calendar-event-preview-start-time">
                                        <!-- CALENDAR EVENT PREVIEW START TIME TITLE -->
                                        <p class="calendar-event-preview-start-time-title">8:30</p>
                                        <!-- /CALENDAR EVENT PREVIEW START TIME TITLE -->

                                        <!-- CALENDAR EVENT PREVIEW START TIME TEXT -->
                                        <p class="calendar-event-preview-start-time-text">AM</p>
                                        <!-- /CALENDAR EVENT PREVIEW START TIME TEXT -->
                                    </div>
                                    <!-- /CALENDAR EVENT PREVIEW START TIME -->

                                    <!-- CALENDAR EVENT PREVIEW INFO -->
                                    <div class="calendar-event-preview-info">
                                        <!-- CALENDAR EVENT PREVIEW TITLE -->
                                        <p class="calendar-event-preview-title">Breakfast with Neko</p>
                                        <!-- /CALENDAR EVENT PREVIEW TITLE -->

                                        <!-- CALENDAR EVENT PREVIEW TEXT -->
                                        <p class="calendar-event-preview-text">Hi Neko! I'm creating this event to invite you to have breakfast before work. Meet me at Coffebucks.</p>
                                        <!-- /CALENDAR EVENT PREVIEW TEXT -->
                                    </div>
                                    <!-- /CALENDAR EVENT PREVIEW INFO -->
                                </div>
                                <!-- /CALENDAR EVENT PREVIEW -->

                                <!-- CALENDAR EVENT PREVIEW -->
                                <div class="calendar-event-preview small primary">
                                    <!-- CALENDAR EVENT PREVIEW START TIME -->
                                    <div class="calendar-event-preview-start-time">
                                        <!-- CALENDAR EVENT PREVIEW START TIME TITLE -->
                                        <p class="calendar-event-preview-start-time-title">10:00</p>
                                        <!-- /CALENDAR EVENT PREVIEW START TIME TITLE -->

                                        <!-- CALENDAR EVENT PREVIEW START TIME TEXT -->
                                        <p class="calendar-event-preview-start-time-text">PM</p>
                                        <!-- /CALENDAR EVENT PREVIEW START TIME TEXT -->
                                    </div>
                                    <!-- /CALENDAR EVENT PREVIEW START TIME -->

                                    <!-- CALENDAR EVENT PREVIEW INFO -->
                                    <div class="calendar-event-preview-info">
                                        <!-- CALENDAR EVENT PREVIEW TITLE -->
                                        <p class="calendar-event-preview-title">Streaming Party</p>
                                        <!-- /CALENDAR EVENT PREVIEW TITLE -->

                                        <!-- CALENDAR EVENT PREVIEW TEXT -->
                                        <p class="calendar-event-preview-text">The biggest party for Twitch streamers! Come and join us at Shenron Arena.</p>
                                        <!-- /CALENDAR EVENT PREVIEW TEXT -->
                                    </div>
                                    <!-- /CALENDAR EVENT PREVIEW INFO -->
                                </div>
                                <!-- /CALENDAR EVENT PREVIEW -->
                            </div>
                            <!-- /CALENDAR EVENT PREVIEW LIST -->
                        </div>
                        <!-- /CALENDAR EVENTS PREVIEW -->
                    </div>
                    <!-- /WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Friends Activity</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- USER STATUS LIST -->
                        <div class="user-status-list">
                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">12</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a> commented on Destroy Dex's <a class="highlighted" href="profile-timeline.html">photo</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">3 minutes ago</p>
                                <!-- /USER STATUS TIMESTAMP -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">16</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> liked Marina Valentine's <a class="highlighted" href="profile-timeline.html">status update</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">12 minutes ago</p>
                                <!-- /USER STATUS TIMESTAMP -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">5</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a> liked Nick Grissom's <a class="highlighted" href="profile-timeline.html">video</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">17 minutes ago</p>
                                <!-- /USER STATUS TIMESTAMP -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">16</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a> changed his <a class="highlighted" href="profile-timeline.html">profile picture</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">33 minutes ago</p>
                                <!-- /USER STATUS TIMESTAMP -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="profile-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-outline">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->

                                        <!-- USER AVATAR PROGRESS -->
                                        <div class="user-avatar-progress">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-progress-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS -->

                                        <!-- USER AVATAR PROGRESS BORDER -->
                                        <div class="user-avatar-progress-border">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-border-40-44"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR PROGRESS BORDER -->

                                        <!-- USER AVATAR BADGE -->
                                        <div class="user-avatar-badge">
                                            <!-- USER AVATAR BADGE BORDER -->
                                            <div class="user-avatar-badge-border">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-22-24"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE BORDER -->

                                            <!-- USER AVATAR BADGE CONTENT -->
                                            <div class="user-avatar-badge-content">
                                                <!-- HEXAGON -->
                                                <div class="hexagon-dark-16-18"></div>
                                                <!-- /HEXAGON -->
                                            </div>
                                            <!-- /USER AVATAR BADGE CONTENT -->

                                            <!-- USER AVATAR BADGE TEXT -->
                                            <p class="user-avatar-badge-text">19</p>
                                            <!-- /USER AVATAR BADGE TEXT -->
                                        </div>
                                        <!-- /USER AVATAR BADGE -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a> commented on Rosie Sakura's <a class="highlighted" href="profile-timeline.html">profile</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TIMESTAMP -->
                                <p class="user-status-timestamp">41 minutes ago</p>
                                <!-- /USER STATUS TIMESTAMP -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /USER STATUS LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->

                <!-- WIDGET BOX -->
                <div class="widget-box">
                    <!-- WIDGET BOX SETTINGS -->
                    <div class="widget-box-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Widget Settings</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- /WIDGET BOX SETTINGS -->

                    <!-- WIDGET BOX TITLE -->
                    <p class="widget-box-title">Groups</p>
                    <!-- /WIDGET BOX TITLE -->

                    <!-- WIDGET BOX CONTENT -->
                    <div class="widget-box-content">
                        <!-- FILTERS -->
                        <div class="filters">
                            <!-- FILTER -->
                            <p class="filter">Newest</p>
                            <!-- /FILTER -->

                            <!-- FILTER -->
                            <p class="filter active">Popular</p>
                            <!-- /FILTER -->

                            <!-- FILTER -->
                            <p class="filter">Active</p>
                            <!-- /FILTER -->
                        </div>
                        <!-- /FILTERS -->

                        <!-- USER STATUS LIST -->
                        <div class="user-status-list">
                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/29.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Twitch Streamers</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">265 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/24.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Cosplayers of the World</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">139 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/25.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Stream Designers</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">466 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/28.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Street Artists</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">951 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request decline">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-leave-group">
                                            <use xlink:href="#svg-leave-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->

                            <!-- USER STATUS -->
                            <div class="user-status request-small">
                                <!-- USER STATUS AVATAR -->
                                <a class="user-status-avatar" href="group-timeline.html">
                                    <!-- USER AVATAR -->
                                    <div class="user-avatar small no-border">
                                        <!-- USER AVATAR CONTENT -->
                                        <div class="user-avatar-content">
                                            <!-- HEXAGON -->
                                            <div class="hexagon-image-40-44" data-src="img/avatar/27.jpg"></div>
                                            <!-- /HEXAGON -->
                                        </div>
                                        <!-- /USER AVATAR CONTENT -->
                                    </div>
                                    <!-- /USER AVATAR -->
                                </a>
                                <!-- /USER STATUS AVATAR -->

                                <!-- USER STATUS TITLE -->
                                <p class="user-status-title"><a class="bold" href="group-timeline.html">Gaming Watchtower</a></p>
                                <!-- /USER STATUS TITLE -->

                                <!-- USER STATUS TEXT -->
                                <p class="user-status-text small">2.365 members</p>
                                <!-- /USER STATUS TEXT -->

                                <!-- ACTION REQUEST LIST -->
                                <div class="action-request-list">
                                    <!-- ACTION REQUEST -->
                                    <div class="action-request accept">
                                        <!-- ACTION REQUEST ICON -->
                                        <svg class="action-request-icon icon-join-group">
                                            <use xlink:href="#svg-join-group"></use>
                                        </svg>
                                        <!-- /ACTION REQUEST ICON -->
                                    </div>
                                    <!-- /ACTION REQUEST -->
                                </div>
                                <!-- ACTION REQUEST LIST -->
                            </div>
                            <!-- /USER STATUS -->
                        </div>
                        <!-- /USER STATUS LIST -->
                    </div>
                    <!-- WIDGET BOX CONTENT -->
                </div>
                <!-- /WIDGET BOX -->
            </div>
            <!-- /GRID COLUMN -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->

@endsection

