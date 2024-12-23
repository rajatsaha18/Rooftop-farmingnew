<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from validthemes.net/site-template/agrul/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 03:14:33 GMT -->

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agrul - Organic Farm Agriculture Template">

    <!-- ========== Page Title ========== -->
    <title>@yield('title')</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('public/website/assets/img/favicon.png') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('public/website/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/flaticon-set.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/shop.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/website/assets/css/unit-test.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ========== End Stylesheet ========== -->
    <style>
        .member_button {
            background: #F7C35F !important;
            color: black !important;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.7);
        }

        .login-form h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-primary {
            width: 100%;
        }

        .btn {
            display: inline-block;
            font-weight: 700;
            text-transform: capitalize;
            transition: all 0.35s ease-in-out;
            overflow: hidden;
            border-radius: 6px;
            border: 2px solid transparent;
            box-shadow: none !important;
            font-size: 16px;
            letter-spacing: 0;
            padding: 13px 30px;
            position: relative;
            z-index: 1;
        }

        #button_edit {
            background-color: skyblue;
        }

        #button_delete {
            background-color: red;
        }

        .custom_button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .custom_button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: rgba(255, 255, 255, 0.3);
            transition: width 0.5s ease, height 0.5s ease, top 0.5s ease, left 0.5s ease;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        .custom_button:hover::before {
            width: 0;
            height: 0;
            top: 50%;
            left: 50%;
        }

        .custom_button:hover {
            background-color: #45a049;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .custom_button:active {
            background-color: #3e8e41;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            transform: translateY(2px);
        }

        .custom_button span {
            position: relative;
            z-index: 1;
        }
    </style>

</head>

<body>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader Start -->
    {{-- <div class="se-pre-con"></div> --}}
    <!-- Preloader Ends -->

    <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-9 mt-2 mb-2">
                    <div class="flex-item left">
                        <p>
                            <form action="{{ route('forum.access') }}" method="POST">
                                @csrf
                                <li>
                                    <input type="submit" class="btn member_button" value="Community Forum"/>
                                </li>
                            </form>
                        </p>
                        <ul>
                            <li>
                                <a href="{{ route('member') }}" class="btn member_button">Member</a>
                            </li>
                            @auth
                                <li>
                                    <a href="{{ route('member.logout') }}" class="btn member_button">Logout</a>
                                </li>

                            @endauth
                            @guest
                                <li>
                                    <a href="{{ route('member.login') }}" class="btn member_button">Login</a>
                                </li>

                            @endguest




                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 text-end">
                    <div class="">
                        <ul>
                            @auth
                            <li>
                                <a href="{{ route('member.dashboard') }}" class="btn member_button">{{ Auth::user()->name }}</a>
                            </li>
                            @endauth

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        @include('website.layouts.header')
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    @yield('content')
    <!-- Start Footer
    ============================================= -->
    @include('website.layouts.footer')

    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('public/website/assets/js/jquery-3.6.0.min.js') }}') }}"></script>
    <script src="{{ asset('public/website/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/jquery.scrolla.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/loopcounter.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('public/website/assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @if (Session::has('message'))
        <script>
            toastr.success("{{ Session::get('message') }}");
        </script>
    @endif


</body>

</html>
