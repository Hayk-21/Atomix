<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/partners.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@500&display=swap" rel="stylesheet">
</head>

<body>

<div class="gridContainer">
    <div class="logoContainer">
        <a href="{{route('index')}}" class="logoLink"><img src="{{asset('assets/dashboard/newLogo.png')}}" alt="logo"></a>
        <div class="topRight">
            <div class="language" id="language">
                <button aria-label="language" class="languageButton">
                    <img src="https://atomix.wamys.org/assets/src/img/flags/GB.svg" alt="gb" class="flMr">
                    <img src="https://atomix.wamys.org/assets/src/img/icons/arrowdown.svg" alt="arrow">
                </button>
                <ul id="ul" class="languageList">
                    <li>
                        <a href="http://www.google.com">
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
                                <img src="{{asset('')}}assets/src/img/flags/ES.svg" alt="es">
                                Spanish
                            </div>
                            <div class="code">ES</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="whiteLineContainer">
        <div class="whiteLineContainerFirst">
            <img src="{{asset('assets/dashboard/images/Group 3 (1).png')}}">
            <div class="whiteLineContainerFirstText">
                <div>{{auth()->user()->first_name}} {{auth()->user()->last_name}}</div>
                <div><span clas='normalSpan'>Status</span><b>: User</b></div>
            </div>
        </div>
        <div class="whiteLineContainerFirstID">
            ID: {{auth()->user()->referral_id}}
        </div>
        <div class="whiteLineContainerFirstROI">
            ROI: X%
        </div>
        <div class="whiteLineContainerTotalBalance">
            Total Balance: 0.00 USD
        </div>
        <div>
            <a href="#" onclick="logout.submit()">
                <img src="{{asset('assets/dashboard/images/Vector (6).png')}}" alt="">
            </a>
            <form method="post" action="{{ route('logout') }}" id="logout">
                @csrf
            </form>
        </div>
    </div>

    <div class="obshiKontentContainer">
        <div class="wallet">
            <ul>
                <a href="{{route('partnersone')}}">
                    <li class="walletLi firstWalletLi">
                        <img src="{{asset('assets/dashboard/images/Wallet (1).png')}}">
                        <span class="walletLiSpan">WALLET</span>
                    </li>
                </a>
                <a href="{{route('partnersone')}}">
                    <li class="walletLi walletLiPartners" >
                        <img src="{{asset('assets/dashboard/images/Partners (1).png')}}">
                        <span class="partnersLiSpan">PARTNERS</span>
                    </li>
                </a>
                <li class="walletLi">
						<span id="navButton" class="servicesSpan"><!-- ste -->
						<img src="{{asset('assets/dashboard/images/Services (1).png')}}">
						<span class="servicesLiSpan">SERVICES</span>
						<img  class="navButton" src="{{asset('assets/dashboard/images/Polygon 3.png')}}">
						</span>
                    <ul class="hiddenLI" id="hideenLi">
                        <a class="opeNavLi" href="#">
                            <li class="walletLi">
                                <img src="{{asset('assets/dashboard/images/Group 4 (1).png')}}" class="investmentsImg">
                                <span class="investmentsLiSpan">Investments</span>
                            </li>
                        </a>
                        <a class="opeNavLi" href="#">
                            <li class="walletLi">
                                <img src="{{asset('assets/dashboard/images/Vector (7).png')}}" class="atomixImg">
                                <span class="atomixLifeLiSpan">AtmoixLife</span>
                            </li>
                        </a>
                    </ul>
                </li>
                <a href="{{route('partnersone')}}">
                    <li class="walletLi">
                        <img src="{{asset('assets/dashboard/images/My services (1).png')}}">
                        <span class="myServicesLiSpan">MY SERVICES</span>
                    </li>
                </a>
                <a href="{{route('partnersone')}}">
                    <li class="walletLi">
                        <img src="{{asset('assets/dashboard/images/Docs (1).png')}}">
                        <span class="myDocumentsLiSpan">MY DOCUMENTS</span>
                    </li>
                </a>
                <a href="{{route('partnersone')}}">
                    <li class="walletLi">
                        <img src="{{asset('assets/dashboard/images/Settings (1).png')}}">
                        <span class="settingsLiSpan">SETTINGS</span>
                    </li>
                </a>
            </ul>
        </div>


        <div class="content">
            <div class="partnerMainContent">
                <div class="partners1">
                    <div class="partnersHeading">PARTNERS</div>
                    <div>
                        <span class="partnersReferalLink">Your Referal Link</span>
                    </div>
                    <div class="copyDiv">
                        <input id="copyInput" class="refLinkInput" type="text" value="{{ route('register',['r_id'=>auth()->user()->referral_id]) }}">
                        <button class="copyButton" id="copyButton"></button>
                    </div>
                </div>
                <div class="partners2">
                    <div>Total Partners : 20</div>
                    <div>Partners Bonuse Income : 0.00 USD</div>
                </div>
                <div class="firstLinePartners">First Line Partners : 2</div>
                <div class="partnersLines">
                    <div><a class="partnersLineUnderlines" href="{{route('dashboardpartner')}}">1st line partners</a></div>
                    <div><a href="{{route('dashboardpartner')}}" class="partnersLineUnderlines">2nd line partners</a></div>
                    <div><a href="#" class="inactivePartners">3rd line partners</a></div>
                </div>
                <div class="partnersLines">
                    <div><a href="{{route('dashboardpartner')}}" class="inactivePartners">4th line partners</a></div>
                    <div><a href="{{route('dashboardpartner')}}"  class="inactivePartners">5th line partners</a></div>
                    <div><a href="{{route('dashboardpartner')}}" class="inactivePartners">6th line partners</a></div>
                </div>
                <div class="partnersLines">
                    <div><a href="{{route('dashboardpartner')}}" class="inactivePartners">7th line partners</a></div>
                    <div><a href="{{route('dashboardpartner')}}" class="inactivePartners">8th line partners</a></div>
                    <div><a href="{{route('dashboardpartner')}}" class="inactivePartners">9th line partners</a></div>
                </div>
                <div><a href="#" class="seeMore">see more</a></div>
            </div>
        </div>
    </div>

    <div class="footer">

        <div class="rules">
            <a href="/privacy">Privacy Policy</a>
            <a href="/kyc">KYC Policy</a>
            <a href="/aml">AML Policy</a>
            <a href="/terms">Terms of Use</a>
        </div>

        <div class="social">
            <div>
                <a href="http://instagram.com/atomix.group" class="socialLinks instagramLink" target="_blank" >
                    <img src="{{asset('assets/dashboard/images/instagramIcon.png')}}" alt="Instagram icon" class="instagramLogo" >
                </a>
            </div>
            <div>
                <a href="http://facebook.com/atomix.group" class="socialLinks fblink" target="_blank" >
                    <img src="{{asset('assets/dashboard/images/facebook.png')}}" alt="Facebook logo" class="facebookLogo" >
                </a>
            </div>
            <div>
                <a href="http://t.me/atomixgroup" class="socialLinks telegramLink" target="_blank" >
                    <img src="{{asset('assets/dashboard/images/telegramIcon.png')}}" alt="Telegram icon" class="telegramLogo" >
                </a>
            </div>
        </div>
    </div>

</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('assets/dashboard/js/partners1.js')}}"></script>
</body>

</html>
