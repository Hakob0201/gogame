

<!-- Sign Up modal -->
<div class='_modal_group' style="@if($errors->first('sign_up_errors')) {{ 'opacity: 1; visibility: visible;' }} @else {{ 'opacity: 0; visibility: hidden;' }} @endif">

    <div class="sign_up_modal popup-event popup-event-information" style="@if($errors->first('sign_up_errors')) {{ 'opacity: 1; visibility: visible;' }} @else {{ 'opacity: 0; visibility: hidden;' }} @endif">
        
        <div class="popup-close-button popup-event-information-trigger">
            
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            
        </div>
        
        <form class="post-comment-list" action="{{ url('/sign_up') }}" method="post">

            {{ csrf_field() }}
            <div class="post-comment-form" style="padding: 26px 28px 20px 80px!important; border-top: none;border-top-left-radius: 12px;">
                
                <div class="user-avatar small no-outline">
                    
                </div>
                
                <div class="form">
                    
                    <div class="form-row">
                        
                        <div class="form-item">
                            <p class='errors_p'>{{ $errors->first('name') }}</p>
                            <div class="form-input small @if(old('name')) {{ 'active' }} @endif ">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}">
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
            
            </div>

            <div class="post-comment-form" style="padding: 0 28px 20px 80px!important; border-top: none;">
                
                <div class="user-avatar small no-outline">
                    
                </div>
                
                <div class="form">
                    
                    <div class="form-row">
                        
                        <div class="form-item">
                            <p class='errors_p'>{{ $errors->first('surname') }}</p>
                            <div class="form-input small @if(old('surname')) {{ 'active' }} @endif ">
                                <label for="surname">Surname</label>
                                <input type="text" id="surname" name="surname" value="{{ old('surname') }}">
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
            
            </div>
            
            <div class="post-comment-form" style="padding: 0 28px 20px 80px!important; border-top: none;">
                
                <div class="user-avatar small no-outline">
                    
                </div>
                
                <div class="form">
                    
                    <div class="form-row">
                        
                        <div class="form-item">
                            <p class='errors_p'>{{ $errors->first('email') }}</p>
                            <div class="form-input small @if(old('email')) {{ 'active' }} @endif ">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" value="{{ old('email') }}">
                            </div>
                            
                        </div>
                        
                    </div>

                </div>
            
            </div>

            <div class="post-comment-form" style="padding: 0 28px 20px 80px!important; border-top: none;">
                
                <div class="user-avatar small no-outline">
                    
                </div>
                
                <div class="form">
                    
                    <div class="form-row">
                        
                        <div class="form-item">
                            <p class='errors_p'>{{ $errors->first('password') }}</p>
                            <div class="form-input small @if(old('password')) {{ 'active' }} @endif ">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" value="{{ old('password') }}">
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>

            <div class="post-comment-form" style="padding: 0 28px 20px 80px!important; border-top: none;">
                
                <div class="user-avatar small no-outline">
                    
                </div>
                
                <div class="form">
                    
                    <div class="form-row">
                        
                        <div class="form-item">
                            <p class='errors_p'>{{ $errors->first('repeat_password') }}</p>
                            <div class="form-input small @if(old('repeat_password')) {{ 'active' }} @endif ">
                                <label for="repeat_password">Repeat Password</label>
                                <input type="password" id="repeat_password" name="repeat_password" value="{{ old('repeat_password') }}">
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>


            {{-- <div class="post-comment-form" style="padding: 0 28px 20px 80px!important; border-top: none;">
                            
                <div class="user-avatar small no-outline">
                    
                </div>

                <label class="radio-container" for="female">
      
                    <input type="radio" name="gender" id="female">
                    <div class="gender-radio">
                        <span>Female</span>
                    </div>

                  
                </label>

                <label class="radio-container" for="male">
                  
                    <input type="radio" name="gender" id="male">
                    <div class="gender-radio">
                        <span>Male</span>
                    </div>

                </label>
            </div>
             --}}
               
            <button class="post-option" style="justify-content: center!important; background-color: #1a1d26;  box-shadow: 3px 5px 20px 0 rgba(0,0,0,.1); margin: 10px auto;">
                
                <p class="post-option-text">Sign Up</p>
                
            </button>

        </form>
        
    </div>

</div>
<!-- /Sign Up modal -->