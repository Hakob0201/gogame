

<!-- Login modal -->
<div class='_modal_group' style="@if($errors->first('login_errors') || $errors->first('login_errors_second')) {{ 'opacity: 1; visibility: visible;' }} @else {{ 'opacity: 0; visibility: hidden;' }} @endif">
    
    <div class="login_modal popup-event popup-event-information" style="@if($errors->first('login_errors') || $errors->first('login_errors_second')) {{ 'opacity: 1; visibility: visible;' }} @else {{ 'opacity: 0; visibility: hidden;' }} @endif">
        
        <div class="popup-close-button popup-event-information-trigger">
            
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            
        </div>
        
        <form class="post-comment-list" action="{{ url('/login') }}" method="post">

            {{ csrf_field() }}
            <p class='errors_p' style="width: 80%; margin: auto; padding-top: 15px;">{{ $errors->first('login_errors_second') }}</p>
            <div class="post-comment-form" style="padding: 26px 28px 20px 80px!important; border-top: none; border-top-left-radius: 12px;">
                
                <div class="user-avatar small no-outline">
                    <i class="fas fa-at"></i>
                </div>
                
                <div class="form">
                    
                    <div class="form-row">
                        
                        <div class="form-item">
                            <p class='errors_p'>{{ $errors->first('email_login') }}</p>
                            <div class="form-input small @if(old('email_login')) {{ 'active' }} @endif ">
                                <label for="email_login">Email</label>
                                <input type="text" id="email_login" name="email_login" value="{{ old('email_login') }}">
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
                
            </div>
            <div class="post-comment-form" style="padding: 0 28px 20px 80px!important; border-top: none;">
                
                <div class="user-avatar small no-outline">
                    <i class="fas fa-lock"></i>
                </div>
                
                <div class="form">
                    
                    <div class="form-row">
                        
                        <div class="form-item">
                            <p class='errors_p'>{{ $errors->first('password_login') }}</p>
                            <div class="form-input small @if(old('password_login')) {{ 'active' }} @endif ">
                                <label for="password_login">Password</label>
                                <input type="password" id="password_login" name="password_login" value="{{ old('password_login') }}">
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            
            <button class="post-option log_sin">
                
                <p class="post-option-text">Login</p>
                
            </button>


        </form>
        
    </div>
    
</div>
<!-- /Login modal -->