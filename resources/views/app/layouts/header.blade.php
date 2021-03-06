<div class="forStick">
    <div class="header">
        <div class="upWrapper">
            <a href="../">
                <img class='logoMain' src="{{asset('assets/src/img/header/Frame.png')}}" alt="logo">
            </a>
            <div class="language">
                <button aria-label="language" onclick="toggle('ul')">
                    <img src="{{asset('assets/src/img/flags/GB.svg')}}" alt="gb">
                    <img src="{{asset('assets/src/img/icons/arrowdown.svg')}}" alt="arrow">
                </button>
                <ul id="ul">
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/GB.svg')}}" alt="gb">
                                English
                            </div>
                            <div class="code">GB</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/RU.svg')}}" alt="ru">
                                Russian
                            </div>
                            <div class="code">RU</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/CN.svg')}}" alt="cn">
                                Chinese
                            </div>
                            <div class="code">CN</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/FR.svg')}}" alt="fr">
                                French
                            </div>
                            <div class="code">FR</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/VN.svg')}}" alt="vn">
                                Vietnamese
                            </div>
                            <div class="code">VN</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/DE.svg')}}" alt="de">
                                German
                            </div>
                            <div class="code">DE</div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="lang">
                                <img src="{{asset('assets/src/img/flags/ES.svg')}}" alt="es">
                                Spanish
                            </div>
                            <div class="code">ES</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="menu">
            <div class="hamburger">
                <svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1.5" y1="1.94513" x2="28.5" y2="1.94513" stroke="#C4C4C4" stroke-width="3"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <line x1="1.5" y1="9.94513" x2="28.5" y2="9.94513" stroke="#C4C4C4" stroke-width="3"
                          stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M1.5 17.4451H28.5" stroke="#C4C4C4" stroke-width="3" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="form">
                @auth
                    <a href="{{route('partnersone')}}">
                        <i class="icon-user"></i>Dashboard</a>
                    <a href="#" onclick="logout.submit()">
                        <i class="icon-user"></i>Logout</a>
                    <form method="post" action="{{ route('logout') }}" id="logout">
                        @csrf
                    </form>
                @else
                    <a href="{{route('login')}}" id="signin">Sign in</a>
                    <a href="{{route('register')}}" class="reg">Register</a>
            @endauth
            <!-- auth exac user
                 <a class="logged-user">My account
                  <svg width="36" height="42" viewBox="0 0 36 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="17.619" cy="12.5714" r="12.5714" fill="#C4C4C4" />
                    <path d="M34 41.1429C34 32.3063 26.8366 25.1429 18 25.1429C9.16344 25.1429 2 32.3063 2 41.1429"
                      stroke="#C4C4C4" stroke-width="3" />
                  </svg>
                </a>
                 auth exac user -->
            </div>

            <ul class="my_menu">
                <li class="dropdown">
                    <a href="#">About</a>
                    <div class="dropdown__content">
                        <a href="{{route('aboute')}}"> <span>About Us</span> </a>
                        <a href="{{route('news')}}">News</a>
                        <a href="{{route('rodmap')}}">Road Map</a>
                        <a href="#">Contacts</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="{{route('service')}}">Services</a>
                    <div class="dropdown__content hide-desktop">
                        <a href="">Investment program</a>
                        <a href="">Living program</a>
                        <a href="">Loan closing program</a>
                        <a href="">Lifestyle</a>
                    </div>
                </li>
                <li>
                    <a href="{{route('dashboardpartner')}}">Partnership</a>
                </li>
                <li>
                    <a href="../faq">FAQ</a>
                </li>
            </ul>

        </div>
    </div>
</div>
