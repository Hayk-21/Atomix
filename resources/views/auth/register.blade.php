<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preload" href="{{asset('assets/src/js/jquery.min.js')}}" as="script">
    <script src="{{asset('assets/src/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/src/js/intlTelInput.min.js')}}" defer></script>
    <script src="{{asset('assets/src/js/countrySelect.min.js')}}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preload" href="{{asset('assets/src/css/style.css')}}" as="style">
    <link rel="preload" href="{{asset('assets/src/css/intlTelInput.min.css')}}" as="style">
    <link rel="preload" href="{{asset('assets/src/css/countrySelect.min.css')}}" as="style">
    <link rel="stylesheet" href="{{asset('assets/src/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/src/css/intlTelInput.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/src/css/countrySelect.min.css')}}">

    <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css"
          type="text/css"/>
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css"
          type="text/css"/>

    <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
    <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
</head>
<body data-title="reg_page">
<div class="content" style="overflow-x: unset !important;">
    <div class="main" style="z-index: 1" style="overflow-x: hidden !important;">

        <div class="left__form" style="background:url('{{asset('assets/src/img/register/right.webp')}}')"></div>
        <div class="right__form"><!-- added style display flex -->

            <div class="register-container">
                <form method="POST" id="register" action="{{ route('register') }}">
                    @csrf
                    <span id="heading" class="register-heading">
            Register
            <a href="{{route('index')}}"> <svg width="42" height="37" viewBox="0 0 42 37" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
                <path d="M40.75 2.09104L4 18.5455L40.75 35" stroke="#FFDE2F" stroke-width="3"/>
              </svg></a>
          </span>

                    <!-- registration form inputs -->
                    <label class="first-name-label">
                        <span>First Name</span>

                        <input type="text" placeholder="First name" value="{{ old('first_name') }}" name="first_name"/>
                    </label>
                    @error('first_name')
                    <span class="errorMsg">{{ $message }}</span>
                    @enderror
                    <label class="last-name-label">
                        <span>Last Name</span>

                        <input type="text" placeholder="Last name" value="{{ old('last_name') }}" name="last_name"/>
                    </label>
                    @error('last_name')
                    <span class="errorMsg">{{ $message }}</span>
                    @enderror

                    <label class="country-label">
                        <span>Country</span>
                        <select class="selectpicker countrypicker countrySelect" name="country" data-flag="true"
                                title="select country"></select>
                    </label>

                    <span class="error-msg"></span>
                    <label class="mobile-label">
                        <span>Phone number</span>
                        <input type="tel" placeholder="+XX XXX XX XX XXX" name="phone">

                    </label>

                    <span class="error-msg" id="phone-error"></span>
                    <label class="email-label">
                        <span>Email</span>

                        <input type="email" name="email"/>
                    </label>
                    @error('email')
                    <span class="errorMsg">{{ $message }}</span>
                    @enderror

                    <label class="password-label">
                        <span>Password</span>

                        <input type="password" name="password"/>
                    </label>
                    @error('password')
                    <span class="errorMsg">{{ $message }}</span>
                    @enderror
                    <label class="reenter-password-label">
                        <span>Reenter password</span>

                        <input type="password" name="password_confirmation"/>
                    </label>
                    @error('password_confirmation')
                    <span class="errorMsg">{{ $message }}</span>
                    @enderror
                    <label class="refferal-label">
                        <span>Refferal ID</span>

                        <input type="text" name="referralid" value="{{ request()->get('r_id') }}"/>
                    </label>
                    @error('referralid')

                    <span class="errorMsg">{{ $message }}</span>

                    @enderror
                    <div class="final">
                        <div class="checkbox">
                            <input type="checkbox" name="" id="check"/>
                            <label for="check" id="label-check">
                                <span>I accept ATOMIX Found’s Terms of Use and Privacy Policy</span>
                            </label>
                        </div>
                        <span class="error-msg" id="check-error"></span>
                        <div class="g-recaptcha" data-sitekey="6LcSwTcaAAAAAEjbbf1NzY4BEtOl-tSlzEzuZPB0"></div>
                        <button class="register-button">Register</button>
                        <div>
                            Already have an account ? <a href="{{route('login')}}" id="signin"
                                                         style="color: #555555;text-decoration: underline">Sign in</a>
                        </div>
                    </div>

                </form>
                <div class="bottom-space">dvasdvdsvsdvdsa<br>dvasdvdsvsdvdsa<br>dvasdvdsvsdvdsa</div>


            </div>

        </div>

    </div>
</div>

<div class="login" id="modal1">
    <div class="content" id="modal1__content" style="overflow-x: unset !important;">
        <div class="main" style="z-index: 1" style="overflow-x: hidden !important;">
            <span id="close-login">&times;</span>
            <div class="left__form" style="background:url('{{asset('assets/src/img/register/right.webp')}}')"></div>
            <div class="right__form signin-container-register">
                <form action="" class="signin-container">


                    <div class="signin-email-password-container">
                        <span id="heading" class="heading-signin">Sign in</span>

                        <label>
                            <span>Email</span>
                            <input type="text" class="signin-email"/>
                        </label>

                        <label class="regpage-password-label">
                            <span>Password</span>
                            <input type="password" class="signin-password"/>
                        </label>

                        <div class="signin-regpage-b-container">
                            <div class="regpage-recapthca-container">
                                <div class="g-recaptcha homepage-recapthca"
                                     data-sitekey="6LcSwTcaAAAAAEjbbf1NzY4BEtOl-tSlzEzuZPB0"></div>
                            </div>
                            <div class="signin-regpage-question-container">
                                <div class="signin-regpage-button-container">
                                    <button class="signin-button">Sign in</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/src/js/script.js')}}"></script>

</body>

</html>
