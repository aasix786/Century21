<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('user/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('user/favicon/apple-icon-60x60.')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('user/favicon/apple-icon-72x72.')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('user/favicon/apple-icon-76x76.')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('user/favicon/apple-icon-114x114.')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('user/favicon/apple-icon-120x120.')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('user/favicon/apple-icon-144x144.')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('user/favicon/apple-icon-152x152.')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('user/favicon/apple-icon-180x180.')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('user/favicon/android-icon-192x192.')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('user/favicon/favicon-32x32.')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('user/favicon/favicon-96x96.')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('user/favicon/favicon-16x16.')}}">
    <link rel="manifest" href="{{asset('user/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Title -->
    <title>Agence immobilière à Braine-L&#039;Alleud, Braine-le-Château et Genappe - Cedimmo Immobilier</title>

    <!-- Font Families -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('user/assets/front/app/assets/css/icons.css')}}" />
    <link rel="stylesheet" href="{{asset('user/assets/front/app/assets/fonts/stylesheet.css')}}" />

    <!-- Vendors -->
    <link rel="stylesheet" href="{{asset('user/assets/front/app/assets/vendors/vendors.min.css')}}" />
    <link rel="stylesheet"
        href="../maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/css/line-awesome.min.css">

    <!-- App Stylesheet -->
    <link rel="stylesheet" href="{{asset('user/assets/util/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('user/assets/front/app/assets/css/app.css')}}" />
    <style>
        .grecaptcha-badge {
            opacity: 0;
            pointer-events: none;
        }
    </style>
    <meta property="og:title"
        content="Agence immobilière à Braine-L'Alleud, Braine-le-Château et Genappe - Cedimmo Immobilier" />
    <meta property="og:description"
        content="L'agence immobilière CEDIMMO est le spécialiste immobilier du Brabant Wallon, avec ses agences à Braine-l'Alleud, Braine-le-Château et Genappe. Passionnés par l'immobilier et élus deux fois &quot;agence de l'année&quot; du Brabant Wallon, nous sommes les partenaires privilégiés pour répondre à toutes demandes relatives à l'immobilier." />
    <meta name="title"
        content="Agence immobilière à Braine-L'Alleud, Braine-le-Château et Genappe - Cedimmo Immobilier" />
    <meta name="description"
        content="L'agence immobilière CEDIMMO est le spécialiste immobilier du Brabant Wallon, avec ses agences à Braine-l'Alleud, Braine-le-Château et Genappe. Passionnés par l'immobilier et élus deux fois &quot;agence de l'année&quot; du Brabant Wallon, nous sommes les partenaires privilégiés pour répondre à toutes demandes relatives à l'immobilier." />
    <meta property="og:url" content="https://cedimmo.be" />
    <meta name="keywords"
        content="Cedimmo, Braine-L&#39;alleud, agence immobili&#232;re Braine-L&#39;Alleud, Agence immobili&#232;re Braine-Le-Ch&#226;teau, Agence immobili&#232;re Waterloo, Agence immobili&#232;re Genappe, home, immobilier, vente, location" />

    <!--[if lt IE 11]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
		<![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-88196288-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-88196288-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1400787236730603');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
            src="https://www.facebook.com/tr?id=1400787236730603&amp;ev=PageView&amp;noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body class="home-page">
    <div class="preloader-wrapper">
        <div class="preloader-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="200.372" height="111.94" viewBox="0 0 200.372 111.94">
                <g id="cedimmo-logo" transform="translate(650.562 -135.572)">
                    <g id="Group_74" data-name="Group 74" transform="translate(-650.562 208.476)">
                        <path id="Path_104" data-name="Path 104"
                            d="M-628.159,366.938c-.3-3.334-2.286-5.307-5.468-5.4-3.652-.107-5.9,3.094-5.9,9.5,0,4.654.993,9,6.288,8.843,3.26-.1,4.778-2.5,5.159-5.572l9.221-.11c-.829,8.032-6.193,13.165-14.207,13.616-10.674.6-17.5-5.985-17.5-17.147,0-11.114,7.473-17.613,16.5-17.108,9.3.52,14.261,5.5,15.013,13.494Z"
                            transform="translate(650.562 -351.182)" fill="#fff" />
                        <path id="Path_105" data-name="Path 105"
                            d="M-545.832,389.666V359.135L-525,360.244v6.606l-12.077-.342v4.232l10.291.137v6.651l-10.291.122v4.645l12.538-.357v6.594Z"
                            transform="translate(581.652 -354.871)" fill="#fff" />
                        <path id="Path_106" data-name="Path 106"
                            d="M-473.171,390.887V363l9.71.517c6.686.357,10.659,4.425,10.659,12.891,0,9.679-4.169,13.613-10.837,13.97Zm7.321-6.716,1.5-.042c3.239-.092,4.969-2.27,4.969-7.26,0-5.5-1.412-7.01-5.117-7.114l-1.349-.042Z"
                            transform="translate(533.843 -357.414)" fill="#fff" />
                        <path id="Path_107" data-name="Path 107"
                            d="M-342.705,389.7V363.991l7.955-.36,3.691,16.529,3.786-16.87,8.861-.4v27.919l-6.642-.3v-8.347l.092-4.25.368-4.939h-.059l-3.973,17.372-4.826-.217-3.744-16.992h-.056l.279,3.857.143,4.083v8.9Z"
                            transform="translate(447.999 -357.34)" fill="#fff" />
                        <path id="Path_108" data-name="Path 108"
                            d="M-260.321,388.058V359.786l9.643-.44,4.493,18.228,4.618-18.641,10.864-.493V389.4l-8.148-.369V379.8l.116-4.7.449-5.462h-.074l-4.856,19.2-5.884-.267-4.55-18.736h-.068l.342,4.249.172,4.5v9.8Z"
                            transform="translate(393.792 -354.413)" fill="#fff" />
                        <path id="Path_109" data-name="Path 109"
                            d="M-128.872,370.284c0,11.69-7.827,17.9-17.464,17.438-9.694-.464-15.884-6.85-15.884-17.506,0-9.83,6.273-16.525,15.884-16.986C-134.643,352.674-128.872,361.22-128.872,370.284Zm-23.574.012c0,4.116,1.2,9.292,6.11,9.417,4.55.116,6.368-3.911,6.368-9.423,0-4.538-1.819-9.3-6.457-9.049C-151.076,361.36-152.446,366.228-152.446,370.3Z"
                            transform="translate(329.244 -350.968)" fill="#fff" />
                        <path id="Path_110" data-name="Path 110" d="M-401.239,383.361V349.012l8.558-2.345V385.7Z"
                            transform="translate(486.513 -346.667)" fill="#fff" />
                        <path id="Path_111" data-name="Path 111" d="M-366.436,354.722l-5.471-1.064v-2.169l5.471,1.221Z"
                            transform="translate(467.213 -349.84)" fill="#fff" />
                        <path id="Path_112" data-name="Path 112" d="M-366.436,366.3l-5.471-.776v-2.169l5.471.933Z"
                            transform="translate(467.213 -357.649)" fill="#fff" />
                        <path id="Path_113" data-name="Path 113" d="M-366.436,377.886l-5.471-.493v-2.166l5.471.648Z"
                            transform="translate(467.213 -365.458)" fill="#fff" />
                        <path id="Path_114" data-name="Path 114" d="M-366.436,389.463l-5.471-.208v-2.169l5.471.366Z"
                            transform="translate(467.213 -373.261)" fill="#fff" />
                        <path id="Path_115" data-name="Path 115" d="M-366.436,400.93l-5.471.077v-2.166l5.471.077Z"
                            transform="translate(467.213 -380.996)" fill="#fff" />
                        <path id="Path_116" data-name="Path 116" d="M-366.436,411.992l-5.471.363v-2.166l5.471-.208Z"
                            transform="translate(467.213 -388.325)" fill="#fff" />
                        <path id="Path_117" data-name="Path 117" d="M-366.436,423.023l-5.471.651V421.5l5.471-.49Z"
                            transform="translate(467.213 -395.585)" fill="#fff" />
                        <path id="Path_118" data-name="Path 118" d="M-366.436,434.055l-5.471.933v-2.169l5.471-.779Z"
                            transform="translate(467.213 -402.84)" fill="#fff" />
                        <path id="Path_119" data-name="Path 119" d="M-366.436,445.08l-5.471,1.218v-2.169l5.471-1.064Z"
                            transform="translate(467.213 -410.095)" fill="#fff" />
                    </g>
                    <path id="Union_4" data-name="Union 4"
                        d="M0,64.238V61.72H64.689v2.517Zm50.265-5.573V34.974L32.161,19.66V2.12h0V19.66l-.014-.011L14.424,34.579V58.665H0V27.1L32.16,0h0l0,0L34.01,1.56,49.994,15.046V10.358h8.742V22.473l5.953,5.035V58.665ZM21.033,53.32V38.261l11.044-8.7,11.21,8.869V53.32Z"
                        transform="translate(-589.074 136.643)" fill="#ff5c00" stroke="rgba(0,0,0,0)"
                        stroke-width="1" />
                </g>
            </svg>

            <div class="preloader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div class="cookiebar" id="cookieBar">
        <div class="cookiebar-wrapper">
            <div class="container container-xl">
                <div class="cookiebar-container">
                    <p>En poursuivant votre navigation sur ce site vous acceptez <a href="Cookies.html">l’utilisation de
                            cookies</a>.</p>
                    <a href="#" class="btn btn-outlined-danger btn-xs" id="acceptCookieBtn">J’accepte</a>
                </div>
            </div>
        </div>
    </div>


    <header class="">
        <div class="pre-header" id="preHeader">
            <div class="pre-header-wrapper">
                <a href="#" class="close-btn" data-fn-toggle="#preHeader"><span class="la la-times"></span></a>
                <div class="container container-xl">
                    <div class="pre-header-container">
                        <p>Envie de recevoir nos biens en avant première, avant toute publication publique ?</p>
                        <a href="#" class="btn btn-outlined-danger btn-xs" data-toggle="modal"
                            data-target="#registrationForm">INSCRIVEZ-VOUS</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-container">
            <div class="container container-xl">
                <div class="navbar-wrapper">

                    <button class="hamburger hamburger--vortex" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>

                    <div class="logo-wrapper">
                        <a href="index.blade.php" class="logo-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="200.372" height="111.94"
                                viewBox="0 0 200.372 111.94">
                                <g id="cedimmo-logo" transform="translate(650.562 -135.572)">
                                    <g id="Group_74" data-name="Group 74" transform="translate(-650.562 208.476)">
                                        <path id="Path_104" data-name="Path 104"
                                            d="M-628.159,366.938c-.3-3.334-2.286-5.307-5.468-5.4-3.652-.107-5.9,3.094-5.9,9.5,0,4.654.993,9,6.288,8.843,3.26-.1,4.778-2.5,5.159-5.572l9.221-.11c-.829,8.032-6.193,13.165-14.207,13.616-10.674.6-17.5-5.985-17.5-17.147,0-11.114,7.473-17.613,16.5-17.108,9.3.52,14.261,5.5,15.013,13.494Z"
                                            transform="translate(650.562 -351.182)" fill="#fff" />
                                        <path id="Path_105" data-name="Path 105"
                                            d="M-545.832,389.666V359.135L-525,360.244v6.606l-12.077-.342v4.232l10.291.137v6.651l-10.291.122v4.645l12.538-.357v6.594Z"
                                            transform="translate(581.652 -354.871)" fill="#fff" />
                                        <path id="Path_106" data-name="Path 106"
                                            d="M-473.171,390.887V363l9.71.517c6.686.357,10.659,4.425,10.659,12.891,0,9.679-4.169,13.613-10.837,13.97Zm7.321-6.716,1.5-.042c3.239-.092,4.969-2.27,4.969-7.26,0-5.5-1.412-7.01-5.117-7.114l-1.349-.042Z"
                                            transform="translate(533.843 -357.414)" fill="#fff" />
                                        <path id="Path_107" data-name="Path 107"
                                            d="M-342.705,389.7V363.991l7.955-.36,3.691,16.529,3.786-16.87,8.861-.4v27.919l-6.642-.3v-8.347l.092-4.25.368-4.939h-.059l-3.973,17.372-4.826-.217-3.744-16.992h-.056l.279,3.857.143,4.083v8.9Z"
                                            transform="translate(447.999 -357.34)" fill="#fff" />
                                        <path id="Path_108" data-name="Path 108"
                                            d="M-260.321,388.058V359.786l9.643-.44,4.493,18.228,4.618-18.641,10.864-.493V389.4l-8.148-.369V379.8l.116-4.7.449-5.462h-.074l-4.856,19.2-5.884-.267-4.55-18.736h-.068l.342,4.249.172,4.5v9.8Z"
                                            transform="translate(393.792 -354.413)" fill="#fff" />
                                        <path id="Path_109" data-name="Path 109"
                                            d="M-128.872,370.284c0,11.69-7.827,17.9-17.464,17.438-9.694-.464-15.884-6.85-15.884-17.506,0-9.83,6.273-16.525,15.884-16.986C-134.643,352.674-128.872,361.22-128.872,370.284Zm-23.574.012c0,4.116,1.2,9.292,6.11,9.417,4.55.116,6.368-3.911,6.368-9.423,0-4.538-1.819-9.3-6.457-9.049C-151.076,361.36-152.446,366.228-152.446,370.3Z"
                                            transform="translate(329.244 -350.968)" fill="#fff" />
                                        <path id="Path_110" data-name="Path 110"
                                            d="M-401.239,383.361V349.012l8.558-2.345V385.7Z"
                                            transform="translate(486.513 -346.667)" fill="#fff" />
                                        <path id="Path_111" data-name="Path 111"
                                            d="M-366.436,354.722l-5.471-1.064v-2.169l5.471,1.221Z"
                                            transform="translate(467.213 -349.84)" fill="#fff" />
                                        <path id="Path_112" data-name="Path 112"
                                            d="M-366.436,366.3l-5.471-.776v-2.169l5.471.933Z"
                                            transform="translate(467.213 -357.649)" fill="#fff" />
                                        <path id="Path_113" data-name="Path 113"
                                            d="M-366.436,377.886l-5.471-.493v-2.166l5.471.648Z"
                                            transform="translate(467.213 -365.458)" fill="#fff" />
                                        <path id="Path_114" data-name="Path 114"
                                            d="M-366.436,389.463l-5.471-.208v-2.169l5.471.366Z"
                                            transform="translate(467.213 -373.261)" fill="#fff" />
                                        <path id="Path_115" data-name="Path 115"
                                            d="M-366.436,400.93l-5.471.077v-2.166l5.471.077Z"
                                            transform="translate(467.213 -380.996)" fill="#fff" />
                                        <path id="Path_116" data-name="Path 116"
                                            d="M-366.436,411.992l-5.471.363v-2.166l5.471-.208Z"
                                            transform="translate(467.213 -388.325)" fill="#fff" />
                                        <path id="Path_117" data-name="Path 117"
                                            d="M-366.436,423.023l-5.471.651V421.5l5.471-.49Z"
                                            transform="translate(467.213 -395.585)" fill="#fff" />
                                        <path id="Path_118" data-name="Path 118"
                                            d="M-366.436,434.055l-5.471.933v-2.169l5.471-.779Z"
                                            transform="translate(467.213 -402.84)" fill="#fff" />
                                        <path id="Path_119" data-name="Path 119"
                                            d="M-366.436,445.08l-5.471,1.218v-2.169l5.471-1.064Z"
                                            transform="translate(467.213 -410.095)" fill="#fff" />
                                    </g>
                                    <path id="Union_4" data-name="Union 4"
                                        d="M0,64.238V61.72H64.689v2.517Zm50.265-5.573V34.974L32.161,19.66V2.12h0V19.66l-.014-.011L14.424,34.579V58.665H0V27.1L32.16,0h0l0,0L34.01,1.56,49.994,15.046V10.358h8.742V22.473l5.953,5.035V58.665ZM21.033,53.32V38.261l11.044-8.7,11.21,8.869V53.32Z"
                                        transform="translate(-589.074 136.643)" fill="#ff5c00" stroke="rgba(0,0,0,0)"
                                        stroke-width="1" />
                                </g>
                            </svg>
                        </a>
                    </div>

                    <div class="navbar-inner-wrapper  headerNavBar">

                        <ul class="nav-links">
                            <li class=""><a href="nos-biens/a-vendre.html" class="link-item">A Vendre</a></li>
                            <li class=""><a href="nos-biens/a-louer.html" class="link-item">A Louer</a></li>
                            <li class=""><a href="immobilier-neuf.html" class="link-item">Immobilier Neuf</a></li>
                            <li class=""><a href="estimation.blade.php" class="link-item">Services</a></li>
                        </ul>

                        <ul class="nav-links">
                            <li class=""><a href="{{url('agence-cedimmo')}}" class="link-item">L'agence</a></li>
                            <li><a href="#" class="link-item" data-toggle="modal" data-target="#contactForm">Contact</a>
                            </li>
                            <li><a href="#" class="link-item link-btn btn btn-outlined-danger on-hover-white"
                                    data-toggle="modal" data-target="#propertyForm">EstimeR MON bien</a></li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="banner-container banner-gradient-01 layout-secondary"
            style="background-image: url('assets/front/app/assets/images/cedimmo.jpg')">
            <div class="container container-xl">
                <div class="banner-wrapper">
                    <h1>Innovation - <span class="text-danger">Excellence</span> - Famille</h1>
                    <div class="banner-actions">
                        <a href="#reviewSection" class="btn btn-theme-white smoothScroll">
                            <i class="icon arrow-down"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="7"
                                    viewBox="0 0 13 7">
                                    <path id="arrow-down-icon" d="M12,0,6,6ZM0,0,6,6Z" transform="translate(0.5 0.5)"
                                        fill="none" stroke="#0d1354" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1" /> </svg>
                            </i>
                            Découvrez
                        </a>
                        <a href="#" data-toggle="modal" data-target="#propertyForm"
                            class="btn btn-outlined-danger btn-danger-filled on-hover-primary">EstimeR MON bien</a>
                    </div>
                </div>
            </div>
            <a href="#reviewSection" class="smooth-scroll smoothScroll">
                <svg xmlns="http://www.w3.org/2000/svg" width="18.828" height="53.914" viewBox="0 0 18.828 53.914">
                    <g id="scroll-down-icon" transform="translate(-3227.086 -6437)">
                        <g id="Group_236" data-name="Group 236">
                            <line id="Line_145" data-name="Line 145" x2="8" y2="8" transform="translate(3228.5 6481.5)"
                                fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                            <line id="Line_146" data-name="Line 146" x1="8" y2="8" transform="translate(3236.5 6481.5)"
                                fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2" />
                        </g>
                        <g id="Group_237" data-name="Group 237" transform="translate(0 -10)">
                            <line id="Line_145-2" data-name="Line 145" x2="8" y2="8"
                                transform="translate(3228.5 6481.5)" fill="none" stroke="#fff" stroke-linecap="round"
                                stroke-width="2" />
                            <line id="Line_146-2" data-name="Line 146" x1="8" y2="8"
                                transform="translate(3236.5 6481.5)" fill="none" stroke="#fff" stroke-linecap="round"
                                stroke-width="2" />
                        </g>
                        <rect id="Rectangle_209" data-name="Rectangle 209" width="15" height="24" rx="6"
                            transform="translate(3229 6438)" fill="none" stroke="#fff" stroke-width="2" />
                        <line id="Line_147" data-name="Line 147" y2="5" transform="translate(3236.5 6442.5)" fill="none"
                            stroke="#fff" stroke-linecap="round" stroke-width="2" />
                    </g>
                </svg>
            </a>
        </section>
        <!-- banner-container -->
        <section class="review-container" id="reviewSection">
            <div class="container container-xl">

                <div class="review-wrapper">

                    <a href="https://www.google.com/search?ei=-uS6XZqgNYyykwWfh4aYAg&amp;q=Cedimmo%20-%20Agence%20Immobili%C3%A8re&amp;oq=Cedimmo+-+Agence+Immobili%C3%A8re&amp;gs_l=psy-ab.3..0i22i30l2j38.8649.11238..11418...0.2..0.233.442.3j0j1......0....1..gws-wiz.......0i71j0i7i30.P65vaSw0hgY&amp;ved=2ahUKEwiZt6vM0MblAhWJwAIHHRp8BQoQvS4wAHoECAoQIA&amp;uact=5&amp;npsic=0&amp;rflfq=1&amp;rlha=0&amp;rllag=50637919,4361372,8321&amp;tbm=lcl&amp;rldimm=5699058540085607548&amp;rldoc=1&amp;tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2&amp;rlst=f#rlfi=hd:;si:5699058540085607548;mv:[[50.686322000000004,4.4693711],[50.5895164,4.253373700000001]];tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2"
                        target="_blank" class="review-block">

                        <div class="review-logo">
                            <svg id="google-logo" xmlns="http://www.w3.org/2000/svg" width="138" height="45.427"
                                viewBox="0 0 138 45.427">
                                <path id="Path_44" data-name="Path 44"
                                    d="M94.025,36.352A11.387,11.387,0,1,1,82.637,25,11.212,11.212,0,0,1,94.025,36.352Zm-4.985,0a6.419,6.419,0,1,0-12.805,0,6.419,6.419,0,1,0,12.805,0Z"
                                    transform="translate(-34.969 -12.446)" fill="#ea4335" />
                                <path id="Path_45" data-name="Path 45"
                                    d="M142.025,36.352A11.387,11.387,0,1,1,130.637,25,11.212,11.212,0,0,1,142.025,36.352Zm-4.985,0a6.419,6.419,0,1,0-12.805,0,6.419,6.419,0,1,0,12.805,0Z"
                                    transform="translate(-58.403 -12.446)" fill="#fbbc05" />
                                <path id="Path_46" data-name="Path 46"
                                    d="M188.991,25.686v20.38c0,8.383-4.944,11.807-10.789,11.807a10.81,10.81,0,0,1-10.062-6.689l4.34-1.807A6.27,6.27,0,0,0,178.2,53.4c3.741,0,6.06-2.308,6.06-6.653V45.119h-.174a7.729,7.729,0,0,1-5.978,2.579A11.237,11.237,0,0,1,167.23,36.393c0-6.408,5.2-11.393,10.876-11.393a7.866,7.866,0,0,1,5.978,2.539h.174V25.691h4.734Zm-4.381,10.707c0-4-2.666-6.919-6.06-6.919-3.439,0-6.321,2.922-6.321,6.919a6.515,6.515,0,0,0,6.321,6.838C181.944,43.23,184.611,40.349,184.611,36.393Z"
                                    transform="translate(-81.827 -12.446)" fill="#4285f4" />
                                <path id="Path_47" data-name="Path 47" d="M220.362,3V36.267H215.5V3Z"
                                    transform="translate(-105.393 -1.705)" fill="#34a853" />
                                <path id="Path_48" data-name="Path 48"
                                    d="M245.943,40.083l3.869,2.579a11.3,11.3,0,0,1-9.458,5.031A11.107,11.107,0,0,1,229.09,36.342c0-6.751,4.857-11.352,10.707-11.352,5.891,0,8.772,4.688,9.714,7.221l.517,1.29-15.175,6.285a5.777,5.777,0,0,0,5.5,3.439A6.479,6.479,0,0,0,245.943,40.083ZM234.034,36l10.144-4.212a4.395,4.395,0,0,0-4.212-2.405A6.227,6.227,0,0,0,234.034,36Z"
                                    transform="translate(-112.027 -12.441)" fill="#ea4335" />
                                <path id="Path_49" data-name="Path 49"
                                    d="M18.237,21.423V16.607H34.466a15.958,15.958,0,0,1,.241,2.907c0,3.613-.988,8.081-4.171,11.265a16.118,16.118,0,0,1-12.293,4.944A17.874,17.874,0,0,1,.36,18.1,17.874,17.874,0,0,1,18.242.47,16.8,16.8,0,0,1,30.32,5.327l-3.4,3.4a12.276,12.276,0,0,0-8.685-3.439A12.644,12.644,0,0,0,5.6,18.1a12.644,12.644,0,0,0,12.641,12.81,11.792,11.792,0,0,0,8.9-3.526,9.982,9.982,0,0,0,2.61-5.962Z"
                                    transform="translate(-0.36 -0.47)" fill="#4285f4" /> </svg>
                        </div>
                        <div class="review-bar">
                            <p class="review"><span>4.9</span> / 5</p>
                            <div class="star-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>
                            </div>
                        </div>
                    </a>
                    <!-- review-block -->




                    <div class="review-center">

                        <img src="assets/front/app/assets/images/review-center.png" alt="" class="img-responsive">

                    </div>

                    <a href="https://fr-fr.facebook.com/pg/Cedimmo/reviews/?ref=page_internal" target="_blank"
                        class="review-block inverse">
                        <div class="review-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="138" height="27.633"
                                viewBox="0 0 138 27.633">
                                <g id="facebook-logo" transform="translate(-1468 -981)">
                                    <g id="g3452" transform="translate(1468 981)">
                                        <path id="path10"
                                            d="M71.922,13.429a6.382,6.382,0,0,0-2.828.764v8.72a18.373,18.373,0,0,0,2.037.077c2.769,0,3.148-1.268,3.148-3.039V15.786c0-1.307-.434-2.357-2.357-2.357Zm-18.388-.476c-1.921,0-2.36,1.055-2.36,2.361v.734h4.717v-.734c0-1.306-.438-2.361-2.357-2.361ZM17.913,22.03a1.377,1.377,0,0,0,1.563,1.57,5.732,5.732,0,0,0,2.68-.763V20.768H19.633c-1.194,0-1.719.222-1.719,1.262Zm71.9-8.6c-1.924,0-2.591,1.05-2.591,2.357v4.771c0,1.311.667,2.364,2.591,2.364S92.4,21.868,92.4,20.557V15.786c0-1.307-.672-2.357-2.591-2.357ZM8.484,27.379H2.827V13.688H0V8.97H2.827V6.138C2.827,2.289,4.423,0,8.956,0h3.775V4.719H10.372c-1.765,0-1.881.659-1.881,1.89L8.483,8.97h4.274l-.5,4.718H8.483V27.379Zm19.331.035H23.1l-.2-1.192a10.807,10.807,0,0,1-5.341,1.385c-3.457,0-5.3-2.31-5.3-5.5,0-3.768,2.147-5.113,5.989-5.113h3.91v-.815c0-1.923-.22-2.488-3.178-2.488H14.142l.473-4.718H19.9c6.491,0,7.914,2.05,7.914,7.244v11.2ZM43.846,14.034a27,27,0,0,0-5.188-.613c-2.536,0-3.3.559-3.3,2.712v4.073c0,2.153.766,2.715,3.3,2.715a26.909,26.909,0,0,0,5.188-.618v4.6a25.019,25.019,0,0,1-5.659.727c-6.073,0-8.487-3.194-8.487-7.807v-3.3C29.7,11.9,32.114,8.7,38.187,8.7a24.915,24.915,0,0,1,5.659.731v4.6Zm17.7,5.792H51.175v.38c0,2.153.767,2.715,3.3,2.715a32.966,32.966,0,0,0,6.6-.618v4.6a29.751,29.751,0,0,1-7.067.727c-6.073,0-8.489-3.194-8.489-7.807V16.048c0-4.037,1.792-7.343,8.015-7.343s8.013,3.268,8.013,7.343v3.779Zm18.387.087c0,4.459-1.274,7.711-8.995,7.711a42.672,42.672,0,0,1-7.5-.719V1.417L69.094.473V9.389A12.835,12.835,0,0,1,73.337,8.7c5.655,0,6.6,2.535,6.6,6.609v4.6Zm18.126.1c0,3.847-1.588,7.577-8.233,7.577s-8.266-3.731-8.266-7.577V16.3c0-3.849,1.618-7.58,8.266-7.58s8.233,3.731,8.233,7.58Zm18.114,0c0,3.847-1.59,7.577-8.233,7.577s-8.266-3.731-8.266-7.577V16.3c0-3.849,1.618-7.58,8.266-7.58s8.233,3.731,8.233,7.58Zm18.589,7.369h-6.129l-5.184-8.653v8.653h-5.656V1.417l5.656-.944V17.187l5.184-8.216h6.129L129.1,17.937Zm-26.841-13.95c-1.921,0-2.588,1.05-2.588,2.357v4.771c0,1.311.667,2.364,2.588,2.364s2.6-1.053,2.6-2.364V15.786c0-1.307-.679-2.357-2.6-2.357Z"
                                            transform="translate(-0.001 0)" fill="#1977f3" />
                                        <path id="path12"
                                            d="M1005.341,183.3a1.357,1.357,0,1,1-.005,0h.005Zm-.005.213a1.16,1.16,0,0,0,.005,2.317,1.16,1.16,0,0,0,0-2.317Zm-.255,1.952h-.243v-1.527a2.79,2.79,0,0,1,.431-.036.811.811,0,0,1,.474.115.369.369,0,0,1,.138.316.38.38,0,0,1-.3.372v.012c.133.025.224.145.255.37a1.26,1.26,0,0,0,.1.378h-.255a1.152,1.152,0,0,1-.1-.39.285.285,0,0,0-.328-.267h-.169Zm0-.845h.176c.2,0,.369-.073.369-.262,0-.134-.1-.267-.369-.267a1.2,1.2,0,0,0-.176.012Z"
                                            transform="translate(-868.681 -158.598)" fill="#1977f3" />
                                    </g>
                                </g>
                            </svg>
                        </div>

                        <div class="review-bar">
                            <p class="review"><span>4.9</span> / 5</p>
                            <div class="star-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" width="12.552" height="12"
                                    viewBox="0 0 12.552 12">
                                    <path id="star-icon"
                                        d="M8.385,2.57,9.98,5.8l3.568.518A.635.635,0,0,1,13.9,7.4L11.317,9.92l.61,3.553a.635.635,0,0,1-.92.669L7.816,12.465,4.625,14.142a.634.634,0,0,1-.92-.669l.61-3.553L1.732,7.4a.634.634,0,0,1,.352-1.082L5.651,5.8l1.6-3.233A.635.635,0,0,1,8.385,2.57Z"
                                        transform="translate(-1.54 -2.217)" fill="#ff5c00" /> </svg>

                            </div>
                        </div>

                    </a>
                    <!-- review-block-invert -->

                </div>
                <!-- review-wrapper -->
            </div>
        </section>
        <section class="main-slider-container" id="mainSection">

            <div class="slider-title-wrapper">
                <div class="container container-xl">
                    <ul class="main-links">
                        <li><a href="#" class="link-item" data-index="0">Technologique</a></li>
                        <li><a href="#" class="link-item" data-index="1">Professionnel</a></li>
                        <li><a href="#" class="link-item" data-index="2">Familial</a></li>
                    </ul>
                </div>
            </div>

            <div class="main-slider">
                <div class="slide-wrapper"
                    style="background-image: url('assets/front/app/assets/images/features/bg-technologique.jpg')">
                    <div class="container container-xl">
                        <div class="main-content">

                            <h1>Technologique</h1>
                            <p class="tag-line">Offrez-vous un vrai service de qualité</p>

                            <a href="#" data-toggle="modal" data-target="#propertyForm"
                                class="btn btn-outlined-danger">EstimeR MON bien</a>

                        </div>
                    </div>
                </div>

                <div class="slide-wrapper"
                    style="background-image: url('assets/front/app/assets/images/features/bg-professionnel.jpg')">
                    <div class="container container-xl">
                        <div class="main-content">

                            <h1>Professionnel</h1>
                            <p class="tag-line">Votre partenaire immobilier professionnel proche de vous</p>

                            <a href="#" data-toggle="modal" data-target="#propertyForm"
                                class="btn btn-outlined-danger">EstimeR MON bien</a>

                        </div>
                    </div>
                </div>

                <div class="slide-wrapper"
                    style="background-image: url('assets/front/app/assets/images/features/bg-familial.jpg')">
                    <div class="container container-xl">
                        <div class="main-content">

                            <h1>Familial</h1>
                            <p class="tag-line">Vos agences immobilières à Braine-L'Alleud, Braine-Le-Château et Genappe
                            </p>

                            <a href="#" data-toggle="modal" data-target="#propertyForm"
                                class="btn btn-outlined-danger">EstimeR MON bien</a>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- main-slider-container -->
        <section class="sub-slider-wrapper cntVideoSlider">
            <div class="sub-slider-container">
                <div class="container container-xl">
                    <ul class="slider-links">
                        <li>
                            <a href="#" class="link-item active" data-index="0">
                                <span class="icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                        <g id="video-professionnelle-icon" transform="translate(-2956 -6592)">
                                            <g id="Ellipse_58" data-name="Ellipse 58" transform="translate(2956 6592)"
                                                fill="none" stroke="#0d1354" stroke-width="1">
                                                <circle cx="14" cy="14" r="14" stroke="none" />
                                                <circle cx="14" cy="14" r="13.5" fill="none" />
                                            </g>
                                            <g id="Polygon_2" data-name="Polygon 2"
                                                transform="translate(2976 6601.5) rotate(90)" fill="none">
                                                <path d="M5,0l5,10H0Z" stroke="none" />
                                                <path
                                                    d="M 5 2.236070156097412 L 1.618035316467285 9 L 8.381964683532715 9 L 5 2.236070156097412 M 5 0 L 10 10 L 0 10 L 5 0 Z"
                                                    stroke="none" fill="#0d1354" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="link-text">
                                    Vidéo professionnelle
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link-item" data-index="1">
                                <span class="icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="21" viewBox="0 0 29 21">
                                        <g id="mise-en-scene-icon" transform="translate(-2955.5 -6596.5)">
                                            <rect id="Rectangle_208" data-name="Rectangle 208" width="28" height="20"
                                                transform="translate(2956 6597)" fill="none" stroke="#0d1354"
                                                stroke-width="1" />
                                            <line id="Line_138" data-name="Line 138" y1="7" x2="7"
                                                transform="translate(2956.5 6609.5)" fill="none" stroke="#0d1354"
                                                stroke-linecap="square" stroke-width="1" />
                                            <line id="Line_139" data-name="Line 139" x1="7" y1="7"
                                                transform="translate(2963.5 6609.5)" fill="none" stroke="#0d1354"
                                                stroke-linecap="square" stroke-width="1" />
                                            <line id="Line_142" data-name="Line 142" y1="11" x2="11"
                                                transform="translate(2967.5 6601.5)" fill="none" stroke="#0d1354"
                                                stroke-linecap="square" stroke-width="1" />
                                            <line id="Line_143" data-name="Line 143" x1="5" y1="5"
                                                transform="translate(2978.5 6601.5)" fill="none" stroke="#0d1354"
                                                stroke-linecap="square" stroke-width="1" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="link-text">
                                    Mise en scène
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link-item" data-index="2">
                                <span class="icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="31" viewBox="0 0 29 31">
                                        <g id="visite-3d-icon" transform="translate(-252.469 -160.594)">
                                            <path id="Path_85" data-name="Path 85" d="M252.969,183.094l14-8v-14l-14,8Z"
                                                fill="none" stroke="#0d1354" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1" stroke-dasharray="3" />
                                            <path id="Path_86" data-name="Path 86" d="M266.969,191.094l-14-8v-10l14,8Z"
                                                fill="none" stroke="#0d1354" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1" />
                                            <path id="Path_87" data-name="Path 87" d="M280.969,183.094l-14-8v-14l14,8Z"
                                                fill="none" stroke="#0d1354" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1" stroke-dasharray="3" />
                                            <path id="Path_88" data-name="Path 88" d="M266.969,191.094l14-8v-10l-14,8Z"
                                                fill="none" stroke="#0d1354" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1" />
                                        </g>
                                    </svg>

                                </span>
                                <span class="link-text">
                                    Visite 3d
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="link-item" data-index="3">
                                <span class="icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24.524" height="27.023"
                                        viewBox="0 0 24.524 27.023">
                                        <g id="juridique-icon" transform="translate(-2956.402 -6592.107)">
                                            <g id="Group_211" data-name="Group 211"
                                                transform="translate(3699.601 -596.366) rotate(30)">
                                                <g id="Rectangle_207" data-name="Rectangle 207"
                                                    transform="translate(2961 6591)" fill="none" stroke="#0d1354"
                                                    stroke-width="1">
                                                    <path
                                                        d="M3,0H3A3,3,0,0,1,6,3V19.4a.6.6,0,0,1-.6.6H.9a.9.9,0,0,1-.9-.9V3A3,3,0,0,1,3,0Z"
                                                        stroke="none" />
                                                    <path
                                                        d="M3,.5H3A2.5,2.5,0,0,1,5.5,3V19.105a.395.395,0,0,1-.395.395H1.158A.658.658,0,0,1,.5,18.842V3A2.5,2.5,0,0,1,3,.5Z"
                                                        fill="none" />
                                                </g>
                                                <g id="Polygon_1" data-name="Polygon 1"
                                                    transform="translate(2967 6615) rotate(180)" fill="none">
                                                    <path
                                                        d="M2.143,1.429a1,1,0,0,1,1.715,0L5.091,3.486A1,1,0,0,1,4.234,5H1.766A1,1,0,0,1,.909,3.486Z"
                                                        stroke="none" />
                                                    <path
                                                        d="M 2.999845504760742 1.943915605545044 L 1.766190052032471 3.999997615814209 L 4.233810424804688 4.000007629394531 L 2.999845504760742 1.943915605545044 M 3.000000238418579 0.9436526298522949 C 3.331645250320435 0.9436526298522949 3.66329026222229 1.105487823486328 3.857490301132202 1.429157733917236 L 5.091300010681152 3.485507726669312 C 5.491220474243164 4.152027606964111 5.011100292205811 4.999997615814209 4.233810424804688 4.999997615814209 L 1.766190052032471 4.999997615814209 C 0.9889001846313477 4.999997615814209 0.5087800025939941 4.152027606964111 0.9087004661560059 3.485507726669312 L 2.142510175704956 1.429157733917236 C 2.336710214614868 1.105487823486328 2.668355226516724 0.9436526298522949 3.000000238418579 0.9436526298522949 Z"
                                                        stroke="none" fill="#0d1354" />
                                                </g>
                                            </g>
                                            <path id="Path_229" data-name="Path 229"
                                                d="M2991.513,6620.815c-5.708-3.3-3.742-13.228-5.747-5.747s-3.506,7.988-5.747,5.747-8.924,0-8.924,0"
                                                transform="translate(-11.271 -3.341)" fill="none" stroke="#0d1354"
                                                stroke-linecap="round" stroke-width="1" />
                                        </g>
                                    </svg>

                                </span>
                                <span class="link-text">
                                    Juridique
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="slider-inner-wrapper">
                    <div class="slider-inner-media-wrapper">
                        <div class="slider-inner-media-container videoSliderSync">
                            <div class="sub-media-slide">
                                <div class="media-wrapper">
                                    <div class="media-container">
                                        <a href="#" data-theVideo="https://www.youtube.com/embed/nGIhSMGiHm8?rel=0"
                                            class="play videoModalToggler" data-toggle="modal"
                                            data-target="#videoModal">
                                            <svg id="play-button-icon" xmlns="http://www.w3.org/2000/svg" width="84.1"
                                                height="59.3" viewBox="0 0 84.1 59.3">
                                                <path id="Path_348" data-name="Path 348"
                                                    d="M84.1,26.4v6.3c0,2.8-.2,6-.4,9.4-.1,1.7-.3,3.1-.4,4.3l-.2,1c-.2.8-.4,1.5-.6,2.3a11.985,11.985,0,0,1-2.6,5.2,10.909,10.909,0,0,1-4.8,2.9,11.211,11.211,0,0,1-2.1.4c-.8.1-1.3.2-1.6.2-4.9.4-11.3.6-19.1.8-2.4,0-4.9.1-7.3.1H42c-3.6,0-7.5-.1-11.8-.2-8.4-.2-14-.4-16.9-.7q-.15,0-1.8-.3c-.9-.1-1.7-.3-2.3-.4A10.692,10.692,0,0,1,4,54.8a13.191,13.191,0,0,1-2.6-5.2,15.536,15.536,0,0,1-.5-2.3l-.2-.9C.6,45.3.4,43.9.3,42.1Q0,37,0,32.8V26.5c0-2.8.1-5.9.4-9.3l.4-4.3c.2-1,.4-2.1.7-3.3A13.4,13.4,0,0,1,4.1,4.5a12.16,12.16,0,0,1,4.8-3A11.211,11.211,0,0,1,11,1.1c.4-.1.9-.1,1.6-.2C17.5.6,23.9.3,31.8.2,35.6,0,39.1,0,42,0h3c2.5,0,4.9,0,7.4.1,7.8.1,14.2.4,19.1.7.3,0,.8.1,1.6.2a15.525,15.525,0,0,1,2.1.4,12.16,12.16,0,0,1,4.8,3,12.128,12.128,0,0,1,2.6,5.1,26.055,26.055,0,0,1,.8,3.3l.4,4.3q.3,5.1.3,9.3Zm-50.8,15L56,29.6,33.3,17.8Z"
                                                    fill="#ff5c00" />
                                                <path id="Path_349" data-name="Path 349" d="M33.3,41.4V17.8L56,29.6"
                                                    fill="#fff" /> </svg>
                                        </a>
                                        <img src="assets/front/app/assets/images/homepage-cedimmo.jpg" alt=""
                                            class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="sub-media-slide">
                                <div class="media-wrapper">
                                    <div class="media-container">
                                        <div class="twentytwenty-container--" data-twentytwenty>
                                            <img src="assets/front/app/assets/images/properties/retouche_photo.jpg"
                                                class="img-responsive" />
                                            <img src="assets/front/app/assets/images/properties/retouche.jpg"
                                                class="img-responsive" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-media-slide">
                                <div class="media-wrapper">
                                    <div class="media-container">
                                        <a href="#" class="play external-play visitVideo">
                                            <span class="play-icon-wrapper">
                                                <div class="play-icon"></div>
                                            </span>
                                            <p>Explorer la visite 3D</p>
                                        </a>
                                        <img src="assets/front/app/assets/images/3d_visite_ss.jpg" alt=""
                                            class="img-responsive">
                                    </div>
                                </div>
                            </div>
                            <div class="sub-media-slide">
                                <div class="media-wrapper">
                                    <div class="media-container">
                                        <img src="assets/front/app/assets/images/juridique.jpg" alt=""
                                            class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-inner-content-outer">
                        <div class="container container-xl">
                            <div class="slider-inner-content-wrapper">
                                <div class="slider-inner-content-container videoSliderSync">
                                    <div class="sub-slide">
                                        <div class="sub-slide-inner">
                                            <div class="sub-slide-content">
                                                <h1>Vidéo professionnelle</h1>
                                                <p>Vous aussi, vous souhaitez rendre votre bien le plus attractif
                                                    possible ? Grâce à la réalisation d’une vidéo immobilière
                                                    professionnelle, nous rendons votre bien unique et différent aux
                                                    yeux du marché immobilier. Cette vidéo permet de mettre en valeur
                                                    votre bien auprès des candidats et réduire ainsi le délai de vente.
                                                </p>
                                                <a href="estimation.blade.php"
                                                    class="btn btn-outlined-danger btn-text-primary">Plus
                                                    d'informations</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sub-slide">
                                        <div class="sub-slide-inner">
                                            <div class="sub-slide-content">
                                                <h1>Mise en scène</h1>
                                                <p>Le saviez-vous ? Il ne faut que quelques secondes à un
                                                    candidat-acheteur pour qu’il se décide à cliquer sur une annonce
                                                    immobilière ou non. Chez Cedimmo, nous investissons dans la
                                                    technologie pour rendre votre intérieur le plus attractif et neutre
                                                    possible afin de faciliter la vente de votre bien.</p>
                                                <a href="estimation.blade.php"
                                                    class="btn btn-outlined-danger btn-text-primary">Plus
                                                    d'informations</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-slide">
                                        <div class="sub-slide-inner">
                                            <div class="sub-slide-content">
                                                <h1>Visite 3d</h1>
                                                <p>Bien plus réel qu’une visite 360°, la visite virtuelle 3D permet aux
                                                    candidats-acheteurs de visiter virtuellement votre bien dans les
                                                    moindres détails. Ainsi, ils pourront comprendre comment se compose
                                                    le bien, et seront donc déjà séduit avant de visiter le bien.</p>
                                                <a href="estimation.blade.php"
                                                    class="btn btn-outlined-danger btn-text-primary">Plus
                                                    d'informations</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sub-slide">
                                        <div class="sub-slide-inner">
                                            <div class="sub-slide-content">
                                                <h1>Juridique</h1>
                                                <p>Cedimmo est aujourd’hui bien plus qu’une agence immobilière, votre
                                                    partenaire immobilier vous accompagne dans toutes vos démarches
                                                    juridiques. C’est pourquoi nous rédigeons, en collaboration avec
                                                    votre notaire, les compromis que nous signons en nos bureaux. Nous
                                                    souhaitons ainsi que votre projet immobilier soit le plus agréable
                                                    possible.</p>
                                                <a href="estimation.blade.php"
                                                    class="btn btn-outlined-danger btn-text-primary">Plus
                                                    d'informations</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="statstics-container">
            <div class="container container-xl">

                <div class="statstics-wrapper">
                    <div class="row">
                        <div class="cs-col col-sm-4">
                            <div class="stats-block">
                                <p class="heading-text"><span class="counter">97</span>%</p>
                                <p class="desc-text">Taux de satisfaction</p>
                            </div>
                        </div>
                        <div class="cs-col col-sm-4">
                            <div class="stats-block">
                                <p class="heading-text"><span class="counter">53</span> Jours</p>
                                <p class="desc-text">de temps moyen de vente</p>
                            </div>
                        </div>
                        <div class="cs-col col-sm-4">
                            <div class="stats-block">
                                <p class="heading-text"><span class="counter">98</span>%</p>
                                <p class="desc-text">Taux de réussite de l’agence</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="testimonial-container">

            <div class="container container-xl">

                <div class="testimonial-wrapper">
                    <div class="top-content">
                        <h4>Témoignages des propriétaires</h4>

                        <div class="slick-slider-dots-container"></div>
                    </div>

                    <div class="testimonial-inner-wrapper">

                        <div class="testimonial-block-wrapper">
                            <div class="testimonial-block">
                                <p class="testimonial">"Un accueil excellent, une belle connaissance du bien présenté,
                                    conseils et suivi impeccables ! Belle transparence sur les qualités et rénovations
                                    du bien. Les conseillers n’hésitent pas à prendre du temps pour bien informer
                                    l’acheteur et pour le conseiller au mieux."</p>
                                <p class="author">
                                    <strong>Guillaume D</strong> <span>via</span>
                                    <a href="https://www.google.com/search?ei=-uS6XZqgNYyykwWfh4aYAg&amp;q=Cedimmo%20-%20Agence%20Immobili%C3%A8re&amp;oq=Cedimmo+-+Agence+Immobili%C3%A8re&amp;gs_l=psy-ab.3..0i22i30l2j38.8649.11238..11418...0.2..0.233.442.3j0j1......0....1..gws-wiz.......0i71j0i7i30.P65vaSw0hgY&amp;ved=2ahUKEwiZt6vM0MblAhWJwAIHHRp8BQoQvS4wAHoECAoQIA&amp;uact=5&amp;npsic=0&amp;rflfq=1&amp;rlha=0&amp;rllag=50637919,4361372,8321&amp;tbm=lcl&amp;rldimm=5699058540085607548&amp;rldoc=1&amp;tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2&amp;rlst=f#rlfi=hd:;si:5699058540085607548;mv:[[50.686322000000004,4.4693711],[50.5895164,4.253373700000001]];tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2"
                                        target="_blank">
                                        <svg id="google-icon" xmlns="http://www.w3.org/2000/svg" width="23.99"
                                            height="23.99" viewBox="0 0 23.99 23.99">
                                            <path id="Path_329" data-name="Path 329"
                                                d="M5.317,146.287,4.482,149.4l-3.052.065a12.016,12.016,0,0,1-.088-11.2h0l2.717.5,1.19,2.7a7.159,7.159,0,0,0,.067,4.82Z"
                                                transform="translate(0 -131.789)" fill="#fbbb00" />
                                            <path id="Path_330" data-name="Path 330"
                                                d="M273.15,208.176a11.99,11.99,0,0,1-4.276,11.6h0l-3.423-.175-.484-3.024a7.149,7.149,0,0,0,3.076-3.651h-6.414v-4.745H273.15Z"
                                                transform="translate(-249.369 -198.422)" fill="#518ef8" />
                                            <path id="Path_331" data-name="Path 331"
                                                d="M48.583,316.26h0a12,12,0,0,1-18.075-3.67l3.887-3.182a7.134,7.134,0,0,0,10.28,3.653Z"
                                                transform="translate(-29.079 -294.911)" fill="#28b446" />
                                            <path id="Path_332" data-name="Path 332"
                                                d="M46.934,2.762,43.048,5.943A7.133,7.133,0,0,0,32.532,9.678l-3.908-3.2h0a12,12,0,0,1,18.31-3.717Z"
                                                transform="translate(-27.283)" fill="#f14336" />
                                        </svg>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="testimonial-block-wrapper">
                            <div class="testimonial-block">
                                <p class="testimonial">"Pas facile de se décider à vendre sa maison d'enfance!!! J'y ai
                                    habité pendant 63 ans. Quelques larmes ont coulé ;) J'ai trouvé chez Cedimmo, des
                                    personnes d'une très grande valeur humaine. L'accueil, la patience, les sourires
                                    encourageants, les conseils, l'accompagnement psychologique, le soucis et
                                    l'accomplissement du travail bien fait, le sérieux des services et du travail,
                                    rapidité des actions, la ponctualité, la politesse, le respect des clients,
                                    l'écoute, la patience de chacun ...et même, en temps qu'institutrice j'ai pu admirer
                                    l'accueil réservé aux enfants. Vous êtes une équipe formidable et je suis heureuse
                                    de vous avoir rencontré sur mon chemin."</p>
                                <p class="author">
                                    <strong>Monique U</strong>
                                    <span>via</span>
                                    <a href="https://www.facebook.com/pg/Cedimmo/reviews" target="_blank">
                                        <svg enable-background="new 0 0 48 48" id="Layer_1" version="1.1"
                                            viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <circle cx="24" cy="24" fill="#4E71A8" r="24" />
                                            <path
                                                d="M29.9,19.5h-4v-2.6c0-1,0.7-1.2,1.1-1.2c0.5,0,2.8,0,2.8,0v-4.4l-3.9,0c-4.4,0-5.3,3.3-5.3,5.3v2.9h-2.5V24  h2.5c0,5.8,0,12.7,0,12.7h5.3c0,0,0-7,0-12.7h3.6L29.9,19.5z"
                                                fill="#FFFFFF" /></svg>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="testimonial-block-wrapper">
                            <div class="testimonial-block">
                                <p class="testimonial">"Équipe professionnelle, fiable, rapide. Cedimmo sait répondre à
                                    nos attentes et ils sont à l'écoute de leur client. (tant vendeur qu'acheteur.) Si
                                    nous devions conseiller une agence immobilière, ce serait eux les yeux fermés !"</p>
                                <p class="author">
                                    <strong>Morgane W</strong>
                                    <span>via</span>
                                    <a href="https://www.google.com/search?ei=-uS6XZqgNYyykwWfh4aYAg&amp;q=Cedimmo%20-%20Agence%20Immobili%C3%A8re&amp;oq=Cedimmo+-+Agence+Immobili%C3%A8re&amp;gs_l=psy-ab.3..0i22i30l2j38.8649.11238..11418...0.2..0.233.442.3j0j1......0....1..gws-wiz.......0i71j0i7i30.P65vaSw0hgY&amp;ved=2ahUKEwiZt6vM0MblAhWJwAIHHRp8BQoQvS4wAHoECAoQIA&amp;uact=5&amp;npsic=0&amp;rflfq=1&amp;rlha=0&amp;rllag=50637919,4361372,8321&amp;tbm=lcl&amp;rldimm=5699058540085607548&amp;rldoc=1&amp;tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2&amp;rlst=f#rlfi=hd:;si:5699058540085607548;mv:[[50.686322000000004,4.4693711],[50.5895164,4.253373700000001]];tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2"
                                        target="_blank">
                                        <svg id="google-icon" xmlns="http://www.w3.org/2000/svg" width="23.99"
                                            height="23.99" viewBox="0 0 23.99 23.99">
                                            <path id="Path_329" data-name="Path 329"
                                                d="M5.317,146.287,4.482,149.4l-3.052.065a12.016,12.016,0,0,1-.088-11.2h0l2.717.5,1.19,2.7a7.159,7.159,0,0,0,.067,4.82Z"
                                                transform="translate(0 -131.789)" fill="#fbbb00" />
                                            <path id="Path_330" data-name="Path 330"
                                                d="M273.15,208.176a11.99,11.99,0,0,1-4.276,11.6h0l-3.423-.175-.484-3.024a7.149,7.149,0,0,0,3.076-3.651h-6.414v-4.745H273.15Z"
                                                transform="translate(-249.369 -198.422)" fill="#518ef8" />
                                            <path id="Path_331" data-name="Path 331"
                                                d="M48.583,316.26h0a12,12,0,0,1-18.075-3.67l3.887-3.182a7.134,7.134,0,0,0,10.28,3.653Z"
                                                transform="translate(-29.079 -294.911)" fill="#28b446" />
                                            <path id="Path_332" data-name="Path 332"
                                                d="M46.934,2.762,43.048,5.943A7.133,7.133,0,0,0,32.532,9.678l-3.908-3.2h0a12,12,0,0,1,18.31-3.717Z"
                                                transform="translate(-27.283)" fill="#f14336" />
                                        </svg>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="callout-container">
            <div class="container container-xl">
                <div class="callout-wrapper">
                    <h3>Vous aussi, faites-nous confiance</h3>
                    <div class="callout-actions">
                        <ul class="list-inline justify-content-center">
                            <li><a href="#" data-toggle="modal" data-target="#contactForm"
                                    class="btn btn-outlined-danger btn-danger-filled on-hover-primary">Prenez
                                    rendez-vous</a></li>
                            <li class="divider">OU</li>
                            <li><a href="tel:+32 2 385 02 65"
                                    class="btn btn-outlined-danger btn-text-primary">Appelez-nous</a></li>
                        </ul>
                    </div>
                    <div class="callout-bg">
                        <img src="assets/front/app/assets/images/Lady-Picture.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="container container-xl">
                <div class="footer-inner-wrapper">
                    <div class="col-footer col-footer-brand" data-mh="footer-col">
                        <div class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="200.372" height="111.94"
                                viewBox="0 0 200.372 111.94">
                                <g id="cedimmo-logo" transform="translate(650.562 -135.572)">
                                    <g id="Group_74" data-name="Group 74" transform="translate(-650.562 208.476)">
                                        <path id="Path_104" data-name="Path 104"
                                            d="M-628.159,366.938c-.3-3.334-2.286-5.307-5.468-5.4-3.652-.107-5.9,3.094-5.9,9.5,0,4.654.993,9,6.288,8.843,3.26-.1,4.778-2.5,5.159-5.572l9.221-.11c-.829,8.032-6.193,13.165-14.207,13.616-10.674.6-17.5-5.985-17.5-17.147,0-11.114,7.473-17.613,16.5-17.108,9.3.52,14.261,5.5,15.013,13.494Z"
                                            transform="translate(650.562 -351.182)" fill="#fff" />
                                        <path id="Path_105" data-name="Path 105"
                                            d="M-545.832,389.666V359.135L-525,360.244v6.606l-12.077-.342v4.232l10.291.137v6.651l-10.291.122v4.645l12.538-.357v6.594Z"
                                            transform="translate(581.652 -354.871)" fill="#fff" />
                                        <path id="Path_106" data-name="Path 106"
                                            d="M-473.171,390.887V363l9.71.517c6.686.357,10.659,4.425,10.659,12.891,0,9.679-4.169,13.613-10.837,13.97Zm7.321-6.716,1.5-.042c3.239-.092,4.969-2.27,4.969-7.26,0-5.5-1.412-7.01-5.117-7.114l-1.349-.042Z"
                                            transform="translate(533.843 -357.414)" fill="#fff" />
                                        <path id="Path_107" data-name="Path 107"
                                            d="M-342.705,389.7V363.991l7.955-.36,3.691,16.529,3.786-16.87,8.861-.4v27.919l-6.642-.3v-8.347l.092-4.25.368-4.939h-.059l-3.973,17.372-4.826-.217-3.744-16.992h-.056l.279,3.857.143,4.083v8.9Z"
                                            transform="translate(447.999 -357.34)" fill="#fff" />
                                        <path id="Path_108" data-name="Path 108"
                                            d="M-260.321,388.058V359.786l9.643-.44,4.493,18.228,4.618-18.641,10.864-.493V389.4l-8.148-.369V379.8l.116-4.7.449-5.462h-.074l-4.856,19.2-5.884-.267-4.55-18.736h-.068l.342,4.249.172,4.5v9.8Z"
                                            transform="translate(393.792 -354.413)" fill="#fff" />
                                        <path id="Path_109" data-name="Path 109"
                                            d="M-128.872,370.284c0,11.69-7.827,17.9-17.464,17.438-9.694-.464-15.884-6.85-15.884-17.506,0-9.83,6.273-16.525,15.884-16.986C-134.643,352.674-128.872,361.22-128.872,370.284Zm-23.574.012c0,4.116,1.2,9.292,6.11,9.417,4.55.116,6.368-3.911,6.368-9.423,0-4.538-1.819-9.3-6.457-9.049C-151.076,361.36-152.446,366.228-152.446,370.3Z"
                                            transform="translate(329.244 -350.968)" fill="#fff" />
                                        <path id="Path_110" data-name="Path 110"
                                            d="M-401.239,383.361V349.012l8.558-2.345V385.7Z"
                                            transform="translate(486.513 -346.667)" fill="#fff" />
                                        <path id="Path_111" data-name="Path 111"
                                            d="M-366.436,354.722l-5.471-1.064v-2.169l5.471,1.221Z"
                                            transform="translate(467.213 -349.84)" fill="#fff" />
                                        <path id="Path_112" data-name="Path 112"
                                            d="M-366.436,366.3l-5.471-.776v-2.169l5.471.933Z"
                                            transform="translate(467.213 -357.649)" fill="#fff" />
                                        <path id="Path_113" data-name="Path 113"
                                            d="M-366.436,377.886l-5.471-.493v-2.166l5.471.648Z"
                                            transform="translate(467.213 -365.458)" fill="#fff" />
                                        <path id="Path_114" data-name="Path 114"
                                            d="M-366.436,389.463l-5.471-.208v-2.169l5.471.366Z"
                                            transform="translate(467.213 -373.261)" fill="#fff" />
                                        <path id="Path_115" data-name="Path 115"
                                            d="M-366.436,400.93l-5.471.077v-2.166l5.471.077Z"
                                            transform="translate(467.213 -380.996)" fill="#fff" />
                                        <path id="Path_116" data-name="Path 116"
                                            d="M-366.436,411.992l-5.471.363v-2.166l5.471-.208Z"
                                            transform="translate(467.213 -388.325)" fill="#fff" />
                                        <path id="Path_117" data-name="Path 117"
                                            d="M-366.436,423.023l-5.471.651V421.5l5.471-.49Z"
                                            transform="translate(467.213 -395.585)" fill="#fff" />
                                        <path id="Path_118" data-name="Path 118"
                                            d="M-366.436,434.055l-5.471.933v-2.169l5.471-.779Z"
                                            transform="translate(467.213 -402.84)" fill="#fff" />
                                        <path id="Path_119" data-name="Path 119"
                                            d="M-366.436,445.08l-5.471,1.218v-2.169l5.471-1.064Z"
                                            transform="translate(467.213 -410.095)" fill="#fff" />
                                    </g>
                                    <path id="Union_4" data-name="Union 4"
                                        d="M0,64.238V61.72H64.689v2.517Zm50.265-5.573V34.974L32.161,19.66V2.12h0V19.66l-.014-.011L14.424,34.579V58.665H0V27.1L32.16,0h0l0,0L34.01,1.56,49.994,15.046V10.358h8.742V22.473l5.953,5.035V58.665ZM21.033,53.32V38.261l11.044-8.7,11.21,8.869V53.32Z"
                                        transform="translate(-589.074 136.643)" fill="#ff5c00" stroke="rgba(0,0,0,0)"
                                        stroke-width="1" />
                                </g>
                            </svg>
                        </div>

                        <p class="text">
                            <span>Du lundi au vendredi </span>
                            <span>De <strong>9h30</strong> à <strong>18h</strong></span>
                        </p>

                        <p class="text">
                            <span>Samedi </span>
                            <span>De <strong>10h</strong> à <strong>14h</strong></span>
                        </p>

                        <p class="text">
                            <span>Dimanche sur rendez-vous</span>
                        </p>

                    </div>
                    <div class="footer-text-wrapper" data-mh="footer-col">
                        <div class="col-footer-wrapper">
                            <div class="col-footer">
                                <div class="footer-text-container">
                                    <a href="tel:+32 2 385 02 65" class="btn btn-outlined-danger">Appelez-nous</a>
                                    <a href="mailto:info@cedimmo.be" class="footer-link">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="12"
                                            viewBox="0 0 16 12">
                                            <defs>
                                                <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5"
                                                    gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ff5c00" />
                                                    <stop offset="1" stop-color="#ff8500" />
                                                </linearGradient>
                                            </defs>
                                            <path id="email-icon"
                                                d="M319.5,136.625h-14a1,1,0,0,0-1,1v10a1,1,0,0,0,1,1h14a1,1,0,0,0,1-1v-10A1,1,0,0,0,319.5,136.625Zm-.9,3.441-5.322,3.975a1.3,1.3,0,0,1-1.56,0l-5.278-3.975a.8.8,0,0,1,.481-1.439h11.2A.8.8,0,0,1,318.6,140.066Z"
                                                transform="translate(-304.5 -136.625)" fill="url(#linear-gradient)" />
                                        </svg>
                                        info@cedimmo.be
                                    </a>
                                </div>
                            </div>
                            <div class="col-footer">
                                <div class="footer-text-container">
                                    <a href="https://goo.gl/maps/KX1wsrAKmCA2" target="_blank" class="heading">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="12.422" height="20.519"
                                            viewBox="0 0 12.422 20.519">
                                            <defs>
                                                <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5"
                                                    gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ff5c00" />
                                                    <stop offset="1" stop-color="#ff8500" />
                                                </linearGradient>
                                            </defs>
                                            <path id="location-icon"
                                                d="M313.1,131.441q-.294-.027-.6-.027t-.6.027a6.409,6.409,0,0,0-5.28,8.469h0a25.833,25.833,0,0,0,1.58,3.738l4.3,8.285,4.433-8.55a22.06,22.06,0,0,0,1.347-3.19l.1-.283A6.409,6.409,0,0,0,313.1,131.441Zm-.6,7.973a2,2,0,1,1,2-2A2,2,0,0,1,312.5,139.414Z"
                                                transform="translate(-306.289 -131.414)" fill="url(#linear-gradient)" />
                                        </svg>

                                        Agence de BRAINE-L'ALLEUD
                                    </a>
                                    <a href="https://goo.gl/maps/KX1wsrAKmCA2" target="_blank" class="sub-text">
                                        <span>Avenue Alphonse Allard 288 </span>
                                        <span>1420 <strong style="font-weight: bold">Braine-l'Alleud</strong></span>
                                    </a>
                                    <p class="heading">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16.424" height="18"
                                            viewBox="0 0 16.424 18">
                                            <defs>
                                                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                    gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ff5c00" />
                                                    <stop offset="1" stop-color="#ff8500" />
                                                </linearGradient>
                                            </defs>
                                            <g id="phone-icon" transform="translate(-41.131 -30.169)">
                                                <path id="Path_319" data-name="Path 319"
                                                    d="M160.7,164.5c-.168.224-.365.482-.56.752C160.249,165.1,160.427,164.863,160.7,164.5Z"
                                                    transform="translate(-114.301 -129.057)"
                                                    fill="url(#linear-gradient)" />
                                                <path id="Path_320" data-name="Path 320"
                                                    d="M57.234,44.013c-.417-.511-.855-1.014-1.28-1.518-.147-.176-.286-.364-.446-.528a1.3,1.3,0,0,0-1.771-.045c-.25.2-.491.413-.736.618-.147.123-.295.25-.442.372-.045.037-.086.074-.131.11l-.048.039c-.054.035-.109.067-.165.1-.015,0-.03.011-.045.015-.057.016-.115.033-.172.045a.24.24,0,0,1-.053.008l-.009,0c-.038,0-.076.006-.114.006h-.16c-.033,0-.172-.012-.143-.008a4.156,4.156,0,0,1-1.354-.487,9.358,9.358,0,0,1-3.027-2.79,8.548,8.548,0,0,1-1-1.779,6.464,6.464,0,0,1-.274-.867,2.981,2.981,0,0,1-.094-.712c0-.11,0-.221.012-.327a.579.579,0,0,1,.016-.082c.012-.057.025-.115.041-.172.012-.041.029-.086.045-.127h0c.01-.019.018-.039.029-.057a.926.926,0,0,1,.065-.106l.012-.018a.535.535,0,0,1,.037-.039c.192-.188.409-.356.614-.532.274-.233.552-.462.826-.7a1.292,1.292,0,0,0,.323-1.575,3.449,3.449,0,0,0-.5-.642l-.8-.945c-.184-.221-.368-.442-.552-.659a1.294,1.294,0,0,0-1.587-.295,4.109,4.109,0,0,0-.646.515l-.937.789A4.317,4.317,0,0,0,41.5,33a4.9,4.9,0,0,0-.278,2.9,11.792,11.792,0,0,0,1.235,3.526,19.556,19.556,0,0,0,5.731,6.717,11.686,11.686,0,0,0,3.166,1.71,4.8,4.8,0,0,0,2.733.2,2.855,2.855,0,0,0,1.084-.573l.006-.006c.486-.409.972-.821,1.458-1.23.168-.143.34-.278.5-.425A1.294,1.294,0,0,0,57.234,44.013ZM46,35.695l.023-.031Z"
                                                    transform="translate(0 0)" fill="url(#linear-gradient)" />
                                            </g>
                                        </svg>
                                        <a href="tel:+32 2 385 02 65" class="footer-link">+32 2 385 02 65</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-footer">
                                <div class="footer-text-container">
                                    <a href="https://www.google.com/maps/place/Cedimmo+Real+Estate+-+Agence+immobilière+de+Genappe/@50.5947024,4.4556111,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x47c3d351cbde48fb:0xe28d35e9e0d7e4c!2sChaussée+de+Bruxelles+2,+1470+Genappe!3b1!8m2!3d50.600103!4d4.4581324!3m4!1s0x47c3d3dc8c9d0ddd:0x681fb822ec7189e2!8m2!3d50.5947024!4d4.4577998"
                                        target="_blank" class="heading">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="12.422" height="20.519"
                                            viewBox="0 0 12.422 20.519">
                                            <defs>
                                                <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5"
                                                    gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ff5c00" />
                                                    <stop offset="1" stop-color="#ff8500" />
                                                </linearGradient>
                                            </defs>
                                            <path id="location-icon"
                                                d="M313.1,131.441q-.294-.027-.6-.027t-.6.027a6.409,6.409,0,0,0-5.28,8.469h0a25.833,25.833,0,0,0,1.58,3.738l4.3,8.285,4.433-8.55a22.06,22.06,0,0,0,1.347-3.19l.1-.283A6.409,6.409,0,0,0,313.1,131.441Zm-.6,7.973a2,2,0,1,1,2-2A2,2,0,0,1,312.5,139.414Z"
                                                transform="translate(-306.289 -131.414)" fill="url(#linear-gradient)" />
                                        </svg>
                                        AGENCE DE GENAPPE
                                    </a>
                                    <a href="https://www.google.com/maps/place/Cedimmo+Real+Estate+-+Agence+immobilière+de+Genappe/@50.5947024,4.4556111,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x47c3d351cbde48fb:0xe28d35e9e0d7e4c!2sChaussée+de+Bruxelles+2,+1470+Genappe!3b1!8m2!3d50.600103!4d4.4581324!3m4!1s0x47c3d3dc8c9d0ddd:0x681fb822ec7189e2!8m2!3d50.5947024!4d4.4577998"
                                        target="_blank" class="sub-text">
                                        <span>Chaussée de Bruxelles 2 </span>
                                        <span>1470 Genappe</span>
                                    </a>
                                    <p class="heading">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16.424" height="18"
                                            viewBox="0 0 16.424 18">
                                            <defs>
                                                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                    gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ff5c00" />
                                                    <stop offset="1" stop-color="#ff8500" />
                                                </linearGradient>
                                            </defs>
                                            <g id="phone-icon" transform="translate(-41.131 -30.169)">
                                                <path id="Path_319" data-name="Path 319"
                                                    d="M160.7,164.5c-.168.224-.365.482-.56.752C160.249,165.1,160.427,164.863,160.7,164.5Z"
                                                    transform="translate(-114.301 -129.057)"
                                                    fill="url(#linear-gradient)" />
                                                <path id="Path_320" data-name="Path 320"
                                                    d="M57.234,44.013c-.417-.511-.855-1.014-1.28-1.518-.147-.176-.286-.364-.446-.528a1.3,1.3,0,0,0-1.771-.045c-.25.2-.491.413-.736.618-.147.123-.295.25-.442.372-.045.037-.086.074-.131.11l-.048.039c-.054.035-.109.067-.165.1-.015,0-.03.011-.045.015-.057.016-.115.033-.172.045a.24.24,0,0,1-.053.008l-.009,0c-.038,0-.076.006-.114.006h-.16c-.033,0-.172-.012-.143-.008a4.156,4.156,0,0,1-1.354-.487,9.358,9.358,0,0,1-3.027-2.79,8.548,8.548,0,0,1-1-1.779,6.464,6.464,0,0,1-.274-.867,2.981,2.981,0,0,1-.094-.712c0-.11,0-.221.012-.327a.579.579,0,0,1,.016-.082c.012-.057.025-.115.041-.172.012-.041.029-.086.045-.127h0c.01-.019.018-.039.029-.057a.926.926,0,0,1,.065-.106l.012-.018a.535.535,0,0,1,.037-.039c.192-.188.409-.356.614-.532.274-.233.552-.462.826-.7a1.292,1.292,0,0,0,.323-1.575,3.449,3.449,0,0,0-.5-.642l-.8-.945c-.184-.221-.368-.442-.552-.659a1.294,1.294,0,0,0-1.587-.295,4.109,4.109,0,0,0-.646.515l-.937.789A4.317,4.317,0,0,0,41.5,33a4.9,4.9,0,0,0-.278,2.9,11.792,11.792,0,0,0,1.235,3.526,19.556,19.556,0,0,0,5.731,6.717,11.686,11.686,0,0,0,3.166,1.71,4.8,4.8,0,0,0,2.733.2,2.855,2.855,0,0,0,1.084-.573l.006-.006c.486-.409.972-.821,1.458-1.23.168-.143.34-.278.5-.425A1.294,1.294,0,0,0,57.234,44.013ZM46,35.695l.023-.031Z"
                                                    transform="translate(0 0)" fill="url(#linear-gradient)" />
                                            </g>
                                        </svg>
                                        <a href="tel:+32 67 70 07 79" class="footer-link">+32 67 70 07 79</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-footer">
                                <div class="footer-text-container">
                                    <a href="https://goo.gl/maps/m1uijGnvmm32" target="_blank" class="heading">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="12.422" height="20.519"
                                            viewBox="0 0 12.422 20.519">
                                            <defs>
                                                <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5"
                                                    gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ff5c00" />
                                                    <stop offset="1" stop-color="#ff8500" />
                                                </linearGradient>
                                            </defs>
                                            <path id="location-icon"
                                                d="M313.1,131.441q-.294-.027-.6-.027t-.6.027a6.409,6.409,0,0,0-5.28,8.469h0a25.833,25.833,0,0,0,1.58,3.738l4.3,8.285,4.433-8.55a22.06,22.06,0,0,0,1.347-3.19l.1-.283A6.409,6.409,0,0,0,313.1,131.441Zm-.6,7.973a2,2,0,1,1,2-2A2,2,0,0,1,312.5,139.414Z"
                                                transform="translate(-306.289 -131.414)" fill="url(#linear-gradient)" />
                                        </svg>
                                        Agence de braine-lE-CHATEAU
                                    </a>
                                    <a href="https://goo.gl/maps/m1uijGnvmm32" target="_blank" class="sub-text">
                                        <span>Rue du Tubize 5 bte2 </span>
                                        <span>1440 Braine-Le-Château</span>
                                    </a>
                                    <p class="heading">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16.424" height="18"
                                            viewBox="0 0 16.424 18">
                                            <defs>
                                                <linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1"
                                                    gradientUnits="objectBoundingBox">
                                                    <stop offset="0" stop-color="#ff5c00" />
                                                    <stop offset="1" stop-color="#ff8500" />
                                                </linearGradient>
                                            </defs>
                                            <g id="phone-icon" transform="translate(-41.131 -30.169)">
                                                <path id="Path_319" data-name="Path 319"
                                                    d="M160.7,164.5c-.168.224-.365.482-.56.752C160.249,165.1,160.427,164.863,160.7,164.5Z"
                                                    transform="translate(-114.301 -129.057)"
                                                    fill="url(#linear-gradient)" />
                                                <path id="Path_320" data-name="Path 320"
                                                    d="M57.234,44.013c-.417-.511-.855-1.014-1.28-1.518-.147-.176-.286-.364-.446-.528a1.3,1.3,0,0,0-1.771-.045c-.25.2-.491.413-.736.618-.147.123-.295.25-.442.372-.045.037-.086.074-.131.11l-.048.039c-.054.035-.109.067-.165.1-.015,0-.03.011-.045.015-.057.016-.115.033-.172.045a.24.24,0,0,1-.053.008l-.009,0c-.038,0-.076.006-.114.006h-.16c-.033,0-.172-.012-.143-.008a4.156,4.156,0,0,1-1.354-.487,9.358,9.358,0,0,1-3.027-2.79,8.548,8.548,0,0,1-1-1.779,6.464,6.464,0,0,1-.274-.867,2.981,2.981,0,0,1-.094-.712c0-.11,0-.221.012-.327a.579.579,0,0,1,.016-.082c.012-.057.025-.115.041-.172.012-.041.029-.086.045-.127h0c.01-.019.018-.039.029-.057a.926.926,0,0,1,.065-.106l.012-.018a.535.535,0,0,1,.037-.039c.192-.188.409-.356.614-.532.274-.233.552-.462.826-.7a1.292,1.292,0,0,0,.323-1.575,3.449,3.449,0,0,0-.5-.642l-.8-.945c-.184-.221-.368-.442-.552-.659a1.294,1.294,0,0,0-1.587-.295,4.109,4.109,0,0,0-.646.515l-.937.789A4.317,4.317,0,0,0,41.5,33a4.9,4.9,0,0,0-.278,2.9,11.792,11.792,0,0,0,1.235,3.526,19.556,19.556,0,0,0,5.731,6.717,11.686,11.686,0,0,0,3.166,1.71,4.8,4.8,0,0,0,2.733.2,2.855,2.855,0,0,0,1.084-.573l.006-.006c.486-.409.972-.821,1.458-1.23.168-.143.34-.278.5-.425A1.294,1.294,0,0,0,57.234,44.013ZM46,35.695l.023-.031Z"
                                                    transform="translate(0 0)" fill="url(#linear-gradient)" />
                                            </g>
                                        </svg>
                                        <a href="tel:+32 2 385 02 65" class="footer-link">+32 2 385 02 65</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="sub-footer-bar">

                            <div class="social-icon-bar">
                                <ul class="social-links">
                                    <li class="link-item">
                                        <a href="https://www.youtube.com/channel/UCshlcSuagJs6PhmD7m9ozfw"
                                            target="_blank" class="link">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -77 512.00213 512"
                                                width="32" height="32">
                                                <path
                                                    d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0"
                                                    fill="#f00" />
                                                <path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0"
                                                    fill="#fff" /></svg>

                                        </a>
                                    </li>
                                    <li class="link-item">
                                        <a href="https://www.facebook.com/Cedimmo/" target="_blank" class="link">
                                            <svg id="facebook-icon" xmlns="http://www.w3.org/2000/svg" width="32"
                                                height="32" viewBox="0 0 32 32">
                                                <path id="Path_152" data-name="Path 152"
                                                    d="M30.234,32A1.766,1.766,0,0,0,32,30.234V1.766A1.766,1.766,0,0,0,30.234,0H1.766A1.766,1.766,0,0,0,0,1.766V30.234A1.766,1.766,0,0,0,1.766,32H30.234"
                                                    fill="#1977f3" />
                                                <path id="Path_153" data-name="Path 153"
                                                    d="M112.533,65.832V53.44h4.16l.623-4.829h-4.782V45.527c0-1.4.388-2.351,2.394-2.351h2.557V38.855a34.185,34.185,0,0,0-3.727-.19c-3.687,0-6.212,2.251-6.212,6.384V48.61h-4.17V53.44h4.17V65.832h4.987"
                                                    transform="translate(-90.454 -33.832)" fill="#fff" />
                                            </svg>
                                        </a>
                                    </li>

                                    <li class="link-item">
                                        <a href="https://www.instagram.com/cedimmo_realestate/" target="_blank"
                                            class="link">
                                            <img src="assets/front/app/assets/images/instagram-icon.png" alt=""
                                                class="img-responsive">
                                        </a>
                                    </li>

                                    <li class="link-item">
                                        <a href="https://www.linkedin.com/company/cedimmorealestate/?originalSubdomain=be"
                                            target="_blank" class="link">
                                            <svg id="linkedin-icon" xmlns="http://www.w3.org/2000/svg" width="32"
                                                height="32" viewBox="0 0 32 32">
                                                <g id="Social-Icons---Rounded">
                                                    <g id="Linkedin">
                                                        <path id="Rounded"
                                                            d="M3.556,32H28.444A3.556,3.556,0,0,0,32,28.444V3.556A3.556,3.556,0,0,0,28.444,0H3.556A3.556,3.556,0,0,0,0,3.556V28.444A3.556,3.556,0,0,0,3.556,32Z"
                                                            fill="#007ebb" fill-rule="evenodd" />
                                                        <path id="Path_154" data-name="Path 154"
                                                            d="M33.111,33.111H28.362V25.023c0-2.217-.843-3.457-2.6-3.457-1.909,0-2.907,1.29-2.907,3.457v8.088H18.281V17.7h4.576v2.075A5.375,5.375,0,0,1,27.5,17.233c3.268,0,5.608,2,5.608,6.123ZM12.822,15.686a2.843,2.843,0,1,1,2.821-2.843A2.832,2.832,0,0,1,12.822,15.686ZM10.459,33.111h4.772V17.7H10.459Z"
                                                            transform="translate(-5.556 -5.556)" fill="#fff"
                                                            fill-rule="evenodd" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>

                                <ul class="footer-links">
                                    <li><a href="nos-biens/a-vendre.html">A Vendre</a></li>
                                    <li><a href="nos-biens/a-louer.html">A Louer</a></li>
                                    <li><a href="immobilier-neuf.html">Immobilier Neuf</a></li>
                                    <li><a href="estimation.blade.php">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-text-wrapper">
                    <p>Agent immobilier agréé IPI sous le numéro 507.347 - N° entreprise : BE-0807.787.987 - rpm
                        Bruxelles - Instance de contrôle: BIV, rue du Luxemburg 16B, 1000 Bruxelles - Soumis au code
                        déontologique de l’ IPI: <a href="https://www.ipi.be/">www.IPI.be</a>. Cedimmo Real Estate -
                        Cydex immo SPRL - Adresse Siège Social : Rue des Cattys 3 à 1440 Braine-Le-Château - Compte
                        tiers IBAN numéro BE65 8601 1993 2596 (BIC: NICABEBB) - Assuré auprès de AXA police n°730393159
                    </p>
                    <ul class="bottom-menu">
                        <li><a href="ViePrivee.html">Charte de protection de la vie privée</a></li>
                        <li><a href="ConditionsGenerales.html">Conditions d’utilisation</a></li>
                        <li><a href="Cookies.html">Cookies</a></li>
                    </ul>
                    <div class="footer-brand-logo">
                        <img src="assets/front/app/assets/images/review-center.png" alt="" class="img-responsive">
                    </div>
                </div>

                <div class="copywrite-container">
                    <p>&copy; 2021 <a href="#">CEDIMMO</a>. All rights reserved.</p>

                    <p>Website carefully crafted by <a href="https://www.ergonomic.be/">ergonomic</a></p>
                </div>
            </div>
        </div>
    </footer>

    <div style="display: none;">
    </div>

    <div class="popup-container">
        <!-- The Contact Us Modal -->
        <div class="modal modal-xlarge fade" id="contactForm">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <form action="https://cedimmo.be/saveContact" class="cs-form" method="post">

                        <div class="modal-header">
                            <div class="header-wrapper">
                                <h4 class="modal-title">Contactez-nous ou prenez rendez-vous</h4>
                                <p class="modal-sub-title">Remplissez ce formulaire ou <a href="tel:+32 2 385 02 65"
                                        data-fn-toggleslide=".contactTogglerPopup"
                                        class="btn btn-outlined-danger btn-text-primary btnContactToggler">Appelez-nous</a>
                                </p>
                                <p class="contactTogglerPopup" style="display:none"><a href="tel:+32 2 385 02 65">BRAINE
                                        L'ALLEUD: +32 2 385 02 65</a> | <a href="tel:+32 67 70 07 79">GENAPPE: +32 67 70
                                        07 79</a> | <a href="tel:+32 2 385 02 65">BRAINE-LE-CHATEAU: +32 2 385 02 65</a>
                                </p>
                            </div>
                            <button type="button" class="close" data-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.387" height="18.385"
                                    viewBox="0 0 18.387 18.385">
                                    <g id="x-icon" transform="translate(-77.807 -144.808)">
                                        <rect id="Rectangle_244" data-name="Rectangle 244" width="24" height="2"
                                            transform="translate(77.807 161.778) rotate(-45)" fill="#fff" />
                                        <rect id="Rectangle_245" data-name="Rectangle 245" width="24" height="2"
                                            transform="translate(79.223 144.808) rotate(45)" fill="#fff" />
                                    </g>
                                </svg>
                            </button>
                        </div>

                        <div class="modal-body">

                            <div class="row">
                                <div class="cs-col col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="last_name" name="last_name" required
                                            placeholder="Nom">
                                    </div>
                                </div>
                                <div class="cs-col col-md-6">
                                    <div class="form-group">
                                        <input type="name" class="form-control" id="first_name" name="first_name"
                                            required placeholder="Prénom">
                                    </div>
                                </div>

                                <div class="cs-col col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" required
                                            placeholder="Téléphone">
                                    </div>
                                </div>
                                <div class="cs-col col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" required
                                            placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="concerne" name="concerne" required
                                            placeholder="Concerne">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea type="name" class="form-control" id="message" name="message" required
                                            placeholder="Votre  message..." rows="6"></textarea>
                                    </div>
                                </div>

                                <div class="agreement-wrapper">

                                    <div class="col-sm-12">
                                        <label class="item-toggle">
                                            <span class="toggle custom toggle-checkbox">
                                                <input type="checkbox" name="tnc" class="toggle-input" />
                                                <span class="toggle-icon"></span>
                                            </span>
                                            <span class="toggle-text">J'accepte de recevoir des informations par email
                                                de l’agence. Ce choix est nécessaire si vous souhaitez, par exemple,
                                                recevoir les nouveautés par email.</span>
                                        </label>
                                    </div>

                                    <div class="col-sm-12">
                                        <label class="item-toggle">
                                            <span class="toggle custom toggle-checkbox">
                                                <input type="checkbox" name="agreement" class="toggle-input" />
                                                <span class="toggle-icon"></span>
                                            </span>
                                            <span class="toggle-text">En cochant la case, je déclare accepter que mes
                                                données complétées dans ce formulaire soient utilisées pour les buts
                                                mentionnés ci-dessus par Cedimmo ; et ce, en accord avec la <a
                                                    href="ViePrivee.html">charte de protection de la vie privée</a> du
                                                site. Je peux à tout moment retirer mon consentement en introduisant une
                                                demande écrite à l’adresse <a href="#">info@cedimmo.be</a>. J’ai
                                                également pris connaissance des <a
                                                    href="ConditionsGenerales.html">conditions d’utilisation du
                                                    site</a> et <a href="Cookies.html">des cookies</a> et les
                                                accepte</span>
                                        </label>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <input type="hidden" name="_token" value="U3erqabZeElQ4hMEd8Bmm5LuJKybm3OLbcamsQTD">
                        <input type="hidden" name="propertyId" id="propertyId">

                        <input type="hidden" id="contactRecaptchaToken" name="recaptchaToken" value="">
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-theme-gray">Envoyer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Propery Modal -->
        <div class="modal modal-xlarge fade" id="propertyForm">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <form action="https://cedimmo.be/saveProperty" class="cs-form" method="post">

                        <div class="modal-header">
                            <div class="header-wrapper">
                                <h4 class="modal-title">Estimez votre bien</h4>
                                <p class="modal-sub-title">Remplissez ce formulaire pour obtenir une estimation de votre
                                    bien</p>
                            </div>
                            <button type="button" class="close" data-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.387" height="18.385"
                                    viewBox="0 0 18.387 18.385">
                                    <g id="x-icon" transform="translate(-77.807 -144.808)">
                                        <rect id="Rectangle_244" data-name="Rectangle 244" width="24" height="2"
                                            transform="translate(77.807 161.778) rotate(-45)" fill="#fff" />
                                        <rect id="Rectangle_245" data-name="Rectangle 245" width="24" height="2"
                                            transform="translate(79.223 144.808) rotate(45)" fill="#fff" />
                                    </g>
                                </svg>
                            </button>
                        </div>

                        <div class="modal-body">

                            <fieldset>
                                <legend align="center">Informations personnelles</legend>

                                <div class="row">
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" name="last_name" required
                                                placeholder="Nom">
                                        </div>
                                    </div>
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="name" class="form-control" id="name" name="first_name" required
                                                placeholder="Prénom">
                                        </div>
                                    </div>

                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" required
                                                placeholder="Téléphone">
                                        </div>
                                    </div>
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" required
                                                placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend align="center">DÉTAILS DU BIEN</legend>

                                <div class="row">
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="objective" id="objective">
                                                <option selected disabled>Objectif</option>
                                                <option value="sale">A vendre</option>
                                                <option value="let">A louer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="property_type"
                                                id="property_type">
                                                <option selected disabled>Type de bien</option>
                                                <option value="house">Maison</option>
                                                <option value="apartment">Appartement</option>
                                                <option value="commercial">Commerce</option>
                                                <option value="land">Terrain</option>
                                                <option value="office">Bureau</option>
                                                <option value="parking">Garages / Parkings</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Adresse du bien">
                                        </div>
                                    </div>

                                    <div class="agreement-wrapper">

                                        <div class="col-sm-12">
                                            <label class="item-toggle">
                                                <span class="toggle custom toggle-checkbox">
                                                    <input type="checkbox" name="tnc" class="toggle-input" />
                                                    <span class="toggle-icon"></span>
                                                </span>
                                                <span class="toggle-text">J'accepte de recevoir des informations par
                                                    email de l’agence. Ce choix est nécessaire si vous souhaitez, par
                                                    exemple, recevoir les nouveautés par email.</span>
                                            </label>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="item-toggle">
                                                <span class="toggle custom toggle-checkbox">
                                                    <input type="checkbox" name="agreement" class="toggle-input" />
                                                    <span class="toggle-icon"></span>
                                                </span>
                                                <span class="toggle-text">En cochant la case, je déclare accepter que
                                                    mes données complétées dans ce formulaire soient utilisées pour les
                                                    buts mentionnés ci-dessus par Cedimmo ; et ce, en accord avec la <a
                                                        href="ViePrivee.html">charte de protection de la vie
                                                        privée</a> du site. Je peux à tout moment retirer mon
                                                    consentement en introduisant une demande écrite à l’adresse <a
                                                        href="#">info@cedimmo.be</a>. J’ai également pris connaissance
                                                    des <a href="ConditionsGenerales.html">conditions d’utilisation du
                                                        site</a> et <a href="Cookies.html">des cookies</a> et les
                                                    accepte</span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>

                        </div>

                        <input type="hidden" name="_token" value="U3erqabZeElQ4hMEd8Bmm5LuJKybm3OLbcamsQTD">
                        <input type="hidden" id="propertyRecaptchaToken" name="recaptchaToken" value="">
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-theme-gray">Envoyer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- Registration Modal -->
        <div class="modal modal-xlarge fade" id="registrationForm">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <form action="https://cedimmo.be/saveRegistration" class="cs-form" method="post">

                        <div class="modal-header">
                            <div class="header-wrapper">
                                <h4 class="modal-title">Inscrivez vous</h4>
                                <p class="modal-sub-title">Inscrivez vous et recevez une alerte pour les nouveaux biens
                                </p>
                            </div>
                            <button type="button" class="close" data-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.387" height="18.385"
                                    viewBox="0 0 18.387 18.385">
                                    <g id="x-icon" transform="translate(-77.807 -144.808)">
                                        <rect id="Rectangle_244" data-name="Rectangle 244" width="24" height="2"
                                            transform="translate(77.807 161.778) rotate(-45)" fill="#fff" />
                                        <rect id="Rectangle_245" data-name="Rectangle 245" width="24" height="2"
                                            transform="translate(79.223 144.808) rotate(45)" fill="#fff" />
                                    </g>
                                </svg>
                            </button>
                        </div>

                        <div class="modal-body">

                            <fieldset>
                                <legend align="center">Informations personnelles</legend>

                                <div class="row">
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                required placeholder="Prénom">
                                        </div>
                                    </div>
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                required placeholder="Nom">
                                        </div>
                                    </div>

                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" required
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone" name="phone" required
                                                placeholder="Téléphone">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend align="center">Détail de la recherche</legend>

                                <div class="row">
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="objective"
                                                id="registrationObjective" required>
                                                <option selected disabled>Objectif</option>
                                                <option value="sale">A vendre</option>
                                                <option value="let">A louer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="zipcode" name="zipcode"
                                                placeholder="Code postal: 1420, 1440, 1470">
                                        </div>
                                    </div>
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="property_type" id="type">
                                                <option selected disabled>Type de bien</option>
                                                <option value="house">Maison</option>
                                                <option value="apartment">Appartement</option>
                                                <option value="commercial">Commerce</option>
                                                <option value="land">Terrain</option>
                                                <option value="office">Bureau</option>
                                                <option value="parking">Garages / Parkings</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="cs-col col-md-6">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="no_of_chambers"
                                                id="chambers">
                                                <option selected disabled>Nombre de chambres</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="info-bar-wrapper">
                                            <div class="info-bar">
                                                <div class="info-label label-wrapper">
                                                    <p class="info-bar-text">Budget (€)</p>
                                                    <span class="sep">|</span>
                                                </div>
                                                <div class="label-wrapper">
                                                    <div class="form-group">
                                                        <select
                                                            class="form-control registrationBudgetSelect registrationBudgetSelectMin selectpicker"
                                                            title="Min" name="budgetmin" id="budgetmin">
                                                            <option selected disabled>Min</option>
                                                            <option>0</option>
                                                            <option>50.000</option>
                                                            <option>100.000</option>
                                                            <option>150.000</option>
                                                            <option>200.000</option>
                                                            <option>250.000</option>
                                                            <option>300.000</option>
                                                            <option>350.000</option>
                                                            <option>400.000</option>
                                                            <option>450.000</option>
                                                            <option>500.000</option>
                                                            <option>550.000</option>
                                                            <option>600.000</option>
                                                            <option>650.000</option>
                                                            <option>700.000</option>
                                                            <option>800.000</option>
                                                            <option>900.000</option>
                                                            <option>1.000.000</option>
                                                            <option>2.000.000</option>
                                                            <option>3.000.000</option>
                                                            <option>4.000.000</option>
                                                            <option>5.000.000</option>
                                                            <option>6.000.000</option>
                                                            <option>7.000.000</option>
                                                            <option>8.000.000</option>
                                                            <option>9.000.000</option>
                                                            <option>10.000.000</option>
                                                            <option>11.000.000</option>
                                                            <option>12.000.000</option>
                                                        </select>
                                                    </div>
                                                    <span class="sep">---</span>
                                                    <div class="form-group">
                                                        <select
                                                            class="form-control registrationBudgetSelect registrationBudgetSelectMax selectpicker"
                                                            title="Max" name="budgetmax" id="budgetmax">
                                                            <option selected disabled>Max</option>
                                                            <option>0</option>
                                                            <option>50.000</option>
                                                            <option>100.000</option>
                                                            <option>150.000</option>
                                                            <option>200.000</option>
                                                            <option>250.000</option>
                                                            <option>300.000</option>
                                                            <option>350.000</option>
                                                            <option>400.000</option>
                                                            <option>450.000</option>
                                                            <option>500.000</option>
                                                            <option>550.000</option>
                                                            <option>600.000</option>
                                                            <option>650.000</option>
                                                            <option>700.000</option>
                                                            <option>800.000</option>
                                                            <option>900.000</option>
                                                            <option>1.000.000</option>
                                                            <option>2.000.000</option>
                                                            <option>3.000.000</option>
                                                            <option>4.000.000</option>
                                                            <option>5.000.000</option>
                                                            <option>6.000.000</option>
                                                            <option>7.000.000</option>
                                                            <option>8.000.000</option>
                                                            <option>9.000.000</option>
                                                            <option>10.000.000</option>
                                                            <option>11.000.000</option>
                                                            <option>12.000.000</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="agreement-wrapper">

                                        <div class="col-sm-12">
                                            <label class="item-toggle">
                                                <span class="toggle custom toggle-checkbox">
                                                    <input type="checkbox" name="tnc" class="toggle-input" required />
                                                    <span class="toggle-icon"></span>
                                                </span>
                                                <span class="toggle-text">J'accepte de recevoir des informations par
                                                    email de l’agence. Ce choix est nécessaire si vous souhaitez, par
                                                    exemple, recevoir les nouveautés par email.</span>
                                            </label>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="item-toggle">
                                                <span class="toggle custom toggle-checkbox">
                                                    <input type="checkbox" name="agreement" class="toggle-input"
                                                        required />
                                                    <span class="toggle-icon"></span>
                                                </span>
                                                <span class="toggle-text">Je souhaite recevoir les newsletters.</span>
                                            </label>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="item-toggle">
                                                <span class="toggle custom toggle-checkbox">
                                                    <input type="checkbox" name="agreement2" class="toggle-input"
                                                        required />
                                                    <span class="toggle-icon"></span>
                                                </span>
                                                <span class="toggle-text">En cochant la case, je déclare accepter que
                                                    mes données complétées dans ce formulaire soient utilisées pour les
                                                    buts mentionnés ci-dessus par Cedimmo ; et ce, en accord avec la <a
                                                        href="ViePrivee.html">charte de protection de la vie
                                                        privée</a> du site. Je peux à tout moment retirer mon
                                                    consentement en introduisant une demande écrite à l’adresse <a
                                                        href="#">info@cedimmo.be</a>. J’ai également pris connaissance
                                                    des <a href="ConditionsGenerales.html">conditions d’utilisation du
                                                        site</a> et <a href="Cookies.html">des cookies</a> et les
                                                    accepte</span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </fieldset>

                        </div>

                        <!-- Modal footer -->
                        <input type="hidden" name="_token" value="U3erqabZeElQ4hMEd8Bmm5LuJKybm3OLbcamsQTD">
                        <input type="hidden" id="registrationRecaptchaToken" name="recaptchaToken" value="">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-theme-gray">Envoyer</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <!-- Rent Modal -->
        <div class="modal fade rentModal" id="rentModalOld">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <form action="#">

                        <div class="modal-header">
                            <div class="header-wrapper">
                                <h4 class="modal-title">LES RÉSIDENCES DU PARC DU LION</h4>
                            </div>
                            <button type="button" class="close" data-dismiss="modal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.387" height="18.385"
                                    viewBox="0 0 18.387 18.385">
                                    <g id="x-icon" transform="translate(-77.807 -144.808)">
                                        <rect id="Rectangle_244" data-name="Rectangle 244" width="24" height="2"
                                            transform="translate(77.807 161.778) rotate(-45)" fill="#fff" />
                                        <rect id="Rectangle_245" data-name="Rectangle 245" width="24" height="2"
                                            transform="translate(79.223 144.808) rotate(45)" fill="#fff" />
                                    </g>
                                </svg>
                            </button>
                        </div>

                        <div class="modal-body">

                            <div class="hero-wrapper">
                                <img src="assets/front/app/assets/images/rent-modal-bg-new.jpg" alt=""
                                    class="img-responsive img-fullwidth">
                            </div>

                            <div class="row row-0">
                                <div class="cs-col col-lg-7">
                                    <div class="logo-wrapper">
                                        <img src="assets/front/app/assets/images/logo-large.png" alt=""
                                            class="img-responsive">
                                    </div>
                                </div>
                                <div class="cs-col col-lg-5">
                                    <div class="modal-text-wrapper">
                                        <p class="date">05 SEP</p>
                                        <p class="time">10H-12H</p>

                                        <div class="location-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="12.422"
                                                height="20.519" viewBox="0 0 12.422 20.519">
                                                <defs>
                                                    <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5"
                                                        gradientUnits="objectBoundingBox">
                                                        <stop offset="0" stop-color="#ff5c00" />
                                                        <stop offset="1" stop-color="#ff8500" />
                                                    </linearGradient>
                                                </defs>
                                                <path id="location-icon"
                                                    d="M313.1,131.441q-.294-.027-.6-.027t-.6.027a6.409,6.409,0,0,0-5.28,8.469h0a25.833,25.833,0,0,0,1.58,3.738l4.3,8.285,4.433-8.55a22.06,22.06,0,0,0,1.347-3.19l.1-.283A6.409,6.409,0,0,0,313.1,131.441Zm-.6,7.973a2,2,0,1,1,2-2A2,2,0,0,1,312.5,139.414Z"
                                                    transform="translate(-306.289 -131.414)"
                                                    fill="url(#linear-gradient)" />
                                            </svg>
                                            <p class="location">
                                                Chaussee de Nivelles 222, <br>
                                                1420 Braine-l'Alleud
                                            </p>
                                        </div>

                                        <a href="immobilier-neuf.html" class="btn btn-outlined-danger">Voir Le Bien</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
        </div>


        <!-- OPen Days Modal -->
        <div class="modal fade rentModal openDayModal" id="rentModal">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.387" height="18.385"
                            viewBox="0 0 18.387 18.385">
                            <g id="x-icon" transform="translate(-77.807 -144.808)">
                                <rect id="Rectangle_244" data-name="Rectangle 244" width="24" height="2"
                                    transform="translate(77.807 161.778) rotate(-45)" fill="#fff" />
                                <rect id="Rectangle_245" data-name="Rectangle 245" width="24" height="2"
                                    transform="translate(79.223 144.808) rotate(45)" fill="#fff" />
                            </g>
                        </svg>
                    </button>
                    <img src="assets/front/app/assets/images/open-days.jpg" alt="" class="img-responsive img-fullwidth">
                </div>
            </div>
        </div>


        <div class="modal fade visit-video-modal" id="visitVideoModal" tabindex="-1" role="dialog"
            aria-labelledby="visitVideoModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="embed-responsive embed-responsive-1by1">
                        <video class="embed-responsive-item" id="visitVideo" width="100%" height="100%" frameborder="0"
                            allowfullscreen="" loop="" controls="true">
                            <source src="{{asset('user/visite_3d_cedimmo.mp4')}}" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade video-modal" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe frameborder="0" allowfullscreen="1"
                            allow="accelerometer; encrypted-media; gyroscope; picture-in-picture"
                            title="YouTube video player" class="embed-responsive-item" src="#" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /site -->
    <script type="text/javascript">
        var g = {
            base_url: 'https://cedimmo.be',
            lang_url: 'https://cedimmo.be'
        };
    </script>
    <!-- Scripts -->
    <!-- Vendors -->
    <script src="{{asset('user/assets/front/app/assets/vendors/vendors.min.js')}}" type="text/javascript"></script>

    <!-- Util -->
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"
        type="text/javascript"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js" type="text/javascript"></script>
    <script src="{{asset('user/assets/util/js/util.js')}}" type="text/javascript"></script>
    <script src="{{asset('user/assets/util/js/util-ui.js')}}" type="text/javascript"></script>
    <script src="{{asset('user/assets/util/js/util-functions.js')}}" type="text/javascript"></script>
    <script src="{{asset('user/assets/util/js/util-jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('user/assets/util/js/util-globals.js')}}" type="text/javascript"></script>
    <script src="{{asset('user/assets/util/js/util-uploader.js')}}" type="text/javascript"></script>

    <!-- App Scripts -->
    <script src="{{asset('user/assets/front/app/assets/js/app.min.js')}}" type="text/javascript"></script>
    <script src="../www.google.com/recaptcha/apif62b.js?render=6LddbO8UAAAAANTvZFTOB3rnvTPNe8EuIuQ-SMgc"></script>
    <script src="{{asset('user/assets/util/plugins/jquery.cookie.js')}}"></script>



    <script type="text/javascript">
        grecaptcha.ready(function () {
            grecaptcha.execute("6LddbO8UAAAAANTvZFTOB3rnvTPNe8EuIuQ-SMgc", {
                action: 'popupRegistration'
            }).then(function (token) {
                // console.log('popupRegistration', token);
                if (token) {
                    document.getElementById('registrationRecaptchaToken').value = token;
                }
            });
        });
        grecaptcha.ready(function () {
            grecaptcha.execute("6LddbO8UAAAAANTvZFTOB3rnvTPNe8EuIuQ-SMgc", {
                action: 'popupProperty'
            }).then(function (token) {
                // console.log('popupProperty', token);
                if (token) {
                    document.getElementById('propertyRecaptchaToken').value = token;
                }
            });
        });
        grecaptcha.ready(function () {
            grecaptcha.execute("6LddbO8UAAAAANTvZFTOB3rnvTPNe8EuIuQ-SMgc", {
                action: 'popupContact'
            }).then(function (token) {
                // console.log('popupContact', token);
                if (token) {
                    document.getElementById('contactRecaptchaToken').value = token;
                }
            });
        });

        $("document").ready(function () {
            var propertyPopup = $("#propertyForm");
            var popupHash = window.location.hash;
            console.log(popupHash);
            if (popupHash === '#estimer-mon-bien' && propertyPopup.length) {
                $("#propertyForm").modal();
            }
        });

        $(document).ready(function () {
            initRegistrationSelect();

            $('#registrationForm').on('show.bs.modal', function () {

            });
        });

        function initRegistrationSelect() {
            var saleBudgets = ["0", "50.000", "100.000", "150.000", "200.000", "250.000", "300.000", "350.000",
                "400.000", "450.000", "500.000", "550.000", "600.000", "650.000", "700.000", "800.000", "900.000",
                "1.000.000", "2.000.000", "3.000.000", "4.000.000", "5.000.000", "6.000.000", "7.000.000",
                "8.000.000", "9.000.000", "10.000.000", "11.000.000", "12.000.000"
            ];
            var rentBudgets = ["0", "50", "100", "150", "200", "250", "300", "350", "400", "450", "500", "550", "600",
                "650", "700", "800", "900", "1.000", "2.000", "3.000", "4.000", "5.000", "6.000", "7.000", "8.000",
                "9.000", "10.000", "11.000", "12.000"
            ];
            $('#registrationObjective').on('changed.bs.select', function () {
                console.log($(this).val());

                $(".registrationBudgetSelect select").html("");
                $(".registrationBudgetSelectMin select").append('<option selected disabled>Min</option>');
                $(".registrationBudgetSelectMax select").append('<option selected disabled>Max</option>');
                if ($(this).val() == 'sale') {
                    for (var index = 0; index < saleBudgets.length; index++) {
                        var element = saleBudgets[index];
                        $(".registrationBudgetSelect select").append('<option>' + element + '</option>');
                    }
                } else if ($(this).val() == 'let') {
                    for (var index = 0; index < rentBudgets.length; index++) {
                        var element = rentBudgets[index];
                        $(".registrationBudgetSelect select").append('<option>' + element + '</option>');
                    }
                }
                $('.selectpicker').selectpicker('refresh');
            });
        }
    </script>

    <script type="text/javascript">
        var visitVideo = document.getElementById("visitVideo");
        $("document").ready(function () {
            // $("header").addClass("navbar-absolute");
            $(".navbar-container").addClass("navbar-absolute");
            autoPlayYouTubeModal();
            // $(".twentytwenty-container").twentytwenty({default_offset_pct: 0.7});

            $('.visitVideo, .visitMobileVideo').on('click', function (event) {
                event.preventDefault();
                $('#visitVideoModal').modal('show');
                if (visitVideo.paused)
                    visitVideo.play();
                else
                    visitVideo.pause();
            });

            $('#visitVideoModal').on('hidden.bs.modal', function (e) {
                visitVideo.pause();
            });

            // loadRentModal();
        });

        function loadRentModal() {
            setTimeout(function () {
                if ($.cookie('rentmodal_shown') == null) {
                    $.cookie('rentmodal_shown', 'yes', {
                        expires: 7,
                        path: '/'
                    });
                    $('#rentModal').modal();
                }
            }, 3000);
        }

        function autoPlayYouTubeModal() {
            var trigger = $("body").find('.videoModalToggler');
            trigger.click(function () {
                var theModal = $(this).data("target"),
                    videoSRC = $(this).attr("data-theVideo"),
                    videoSRCauto = videoSRC + "?allowfullscreen=1&autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function () {
                    $(theModal + ' iframe').attr('src', videoSRC);
                });
            });

            $('#videoModal').on('hidden.bs.modal', function (e) {
                console.log('Hello');
                $(this).find('iframe').attr('src', '');
            })
        }
    </script>
</body>

</html>
