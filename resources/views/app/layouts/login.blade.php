<div class="login" id="modal1">
    <div class="content" id="modal1__content" style="overflow-x: unset !important;">
        <div class="main" style="overflow-x: hidden !important; z-index: 1">
            <span id="close-login">&times;</span>
            <div class="left__form" style="background:url('{{asset('assets/src/img/right.webp')}}')"></div>
            <div class="right__form signin-form-container">

                <form method="POST" action="{{ route('login') }}" class="homepage-signin"><!-- home page sign in form -->
                    @csrf
                    <div class="homepage-signin-email-password-container">
                        <span id="heading" class="heading-signin">Sign in</span>

                        <label class="homepage-email-label">
                            @error('email')
                            <span class="errorMsg">{{ $message }}</span>
                            @enderror
                            <span>Email</span>
                            <input type="email" name="email" class="signin-email @error('email') is-invalid @enderror" value="{{ old('email') }}"  />
                        </label>
                        <label class="homepage-password-label">

                            <span>Password</span>
                            <input type="password" name="password"  class="homepage-signin-password @error('password') is-invalid @enderror"  />
                        </label>
                        @error('password')
                        <span class="errorMsg">{{ $message }}</span>
                        @enderror

                        <div class="signin-b-container">
                            <div class="homepage-recapthca-container">
                                <div class="g-recaptcha homepage-recapthca"
                                     data-sitekey="6LcSwTcaAAAAAEjbbf1NzY4BEtOl-tSlzEzuZPB0"></div>
                            </div>
                            <div class="signin-question-container">
                                <div class="signin-button-container ">
                                    <button class="signin-button signin-button-homepage">Sign in</button>
                                </div>
                                <div class="registration-offer">
                                    Don’t have an account?
                                    <a href="{{route('register')}}" class="registration-offer-link">Register</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

