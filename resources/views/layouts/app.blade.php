{{-- 
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>Posty</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    >
</head>

<body class="bg-gray-200">
    <nav class="mb-6 flex justify-between bg-white p-6">
        <ul class="flex items-center">
            <li>
                <a
                    href="/"
                    class="p-3"
                >Home</a>
            </li>
            <li>
                <a
                    href="{{ route('dashboard') }}"
                    class="p-3"
                >Dashboard</a>
            </li>
            <li>
                <a
                    href=""
                    class="p-3"
                >Posts</a>
            </li>
        </ul>

        <ul class="flex items-center">

            @auth
                <li>
                    <a
                        href=""
                        class="p-3"
                    >{{ auth()->user()->name}}</a>
                </li>

                <li>
                    <form
                        action="{{ route('logout') }}"
                        method="post"
                        class="inline"
                    >
                        @csrf
                        <button
                            type="submit"
                            href="{{ route('logout') }}"
                        >Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a
                        href="{{ route('login') }}"
                        class="p-3"
                    >Login</a>
                </li>
                <li>
                    <a
                        href="{{ route('register') }}"
                        class="p-3"
                    >Register</a>
                </li>
            @endguest

        </ul>

    </nav>
    @yield('content')
</body>

</html>
 --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >
    <title>Ecuda - Education & Online Courses HTML Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta
        name="description"
        content=""
    >
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <!-- favicon.ico Place in the root directory -->
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="{{ asset('images/favicon.png') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    >
    <!-- CSS here -->
    <link
        rel="stylesheet"
        href="{{ asset('css/bootstrap.min.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/animate.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/slick.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/nice-select.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/meanmenu.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/all.min.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/backtotop.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/magnific-popup.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/spacing.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/responsive.css') }}"
    >
</head>

<body>
    <!-- pre-loader-area-start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div
                    class="object"
                    id="object_one"
                ></div>
                <div
                    class="object"
                    id="object_two"
                ></div>
                <div
                    class="object"
                    id="object_three"
                ></div>
                <div
                    class="object"
                    id="object_four"
                ></div>
                <div
                    class="object"
                    id="object_five"
                ></div>
                <div
                    class="object"
                    id="object_six"
                ></div>
                <div
                    class="object"
                    id="object_seven"
                ></div>
                <div
                    class="object"
                    id="object_eight"
                ></div>
                <div
                    class="object"
                    id="object_nine"
                ></div>
            </div>
        </div>
    </div>
    <!-- pre-loader-area-end -->
    <!-- back-to-top-start -->
    <div class="progress-wrap">
        <svg
            class="progress-circle svg-content"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102"
        >
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back-to-top-end -->
    <!-- search-box-start -->
    <div class="tp-search-box">
        <div class="tp-search-form">
            <div class="tp-close-btn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input
                    type="text"
                    placeholder="Search here"
                >
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!-- search-box-end -->
    <!-- header-area-start -->
    <header class="header-area">
        <div class="header-top-area d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="header-top-left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>info@yourmail.com</li>
                                <li><i class="fa-solid fa-phone-volume"></i>Phone: (126) 5800 04490</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="header-top-right">
                            <div class="header-top-social">
                                <span class="follow-link">Follow Social</span>
                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>

                            <div class="header-top-login">
                                <ul>
                                    @auth
                                        <li>
                                            {{-- <a href="">{{ auth()->user()->firstname }}&nbsp;{{ auth()->user()->lastname }}</a> --}}
                                            <a href="/">{{ auth()->user()->username }}</a>
                                        </li>

                                        <li>
                                            <form
                                                action="{{ route('logout') }}"
                                                method="post"
                                                class="inline"
                                            >
                                                @csrf
                                                <button
                                                    class="plain-button"
                                                    type="submit"
                                                    href="{{ route('logout') }}"
                                                >
                                                    <p class="color-on-hover">Logout</p>
                                                </button>
                                            </form>
                                        </li>
                                    @endauth
                                    @guest
                                        <li>
                                            <a href="{{ route('login') }}">Login</a>
                                        </li>
                                        {{-- <li><a href="login.html">Login</a></li> --}}
                                        <li> <a href="{{ route('register') }}">Register</a></li>
                                    @endguest
                                    {{-- <li class="info-bar"><a href="#"><i class="fa fa-bars font-24"></i></a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="extra-info">
            <div class="close-icon">
                <button><i class="fa-regular fa-circle-xmark"></i></button>
            </div>
            <h2>Instructor</h2>
            <div class="course-photo-gallery fix">
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member1.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member1.jpg') }}"
                        alt=""
                    ></a>
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member2.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member2.jpg') }}"
                        alt=""
                    ></a>
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member3.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member3.jpg') }}"
                        alt=""
                    ></a>
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member4.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member4.jpg') }}"
                        alt=""
                    ></a>
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member5.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member5.jpg') }}"
                        alt=""
                    ></a>
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member6.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member6.jpg') }}"
                        alt=""
                    ></a>
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member7.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member7.jpg') }}"
                        alt=""
                    ></a>
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member8.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member8.jpg') }}"
                        alt=""
                    ></a>
                <a
                    class="img-popup-1"
                    href="{{ asset('images/instructor/single/member9.jpg') }}"
                ><img
                        src="{{ asset('images/instructor/single/member9.jpg') }}"
                        alt=""
                    ></a>
            </div>
            <div class="extra-info-btn mt-20">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div id="header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-5">
                        <div class="logo">
                            <a href="index.html"><img
                                    src="{{ asset('images/logo/logo.png') }}"
                                    alt=""
                                ></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-7 d-flex align-items-center justify-content-between">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index-2.html">Home 02</a></li>
                                            <li><a href="index-3.html">Home 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a>
                                        <ul class="submenu">
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="course.html">Courses</a>
                                        <ul class="submenu">
                                            <li><a href="course.html">Course</a></li>
                                            <li><a href="singl-course.html">Course Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li><a href="gallery.html">Gallery</a>
                                                <ul class="submenu">
                                                    <li><a href="gallery.html">Gallery 01</a></li>
                                                    <li><a href="gallery-2.html">Gallery 02</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop.html">Shop</a>
                                                <ul class="submenu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="single-shop.html">Shop Single</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="pricing-plan.html">Pricing</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="error.html">404 Page</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="registration.html">Register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single-blog.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="teacher.html">Teachers</a>
                                        <ul class="submenu">
                                            <li><a href="teacher.html">Teachers</a></li>
                                            <li><a href="teacher-2.html">Teachers 02</a></li>
                                            <li><a href="teacher-details.html">Teachers Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('events') }}">Event</a>
                                        {{-- <ul class="submenu">
                                            <li><a href="event.html">Event 01</a></li>
                                            <li><a href="event-2.html">Event 02</a></li>
                                            <li><a href="event-3.html">Event 03</a></li>
                                        </ul> --}}
                                    </li>
                                    <li><a href="contact.html">Contact</a>
                                        <ul class="submenu">
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="main-menu-icon d-none d-xl-block">
                            <ul>
                                <li><a
                                        href="javascript:void(0)"
                                        id="search"
                                    ><i class="fa fa-search"></i></a></li>
                                <li class="shopping-cart"><a href="#"><i
                                            class="fa fa-shopping-bag"></i><span>0</span></a></li>
                                <li><a href="#">Try To Free</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area-end -->
    <!-- hero-area-start -->
    <div class="hero-area">
        @yield('content')
    </div>

    <!-- footer-area-start -->
    <footer class="footer-area pt-110 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-30">
                        <div class="footer-widget-logo">
                            <a href="#"><img
                                    src="{{ asset('images/logo/logo-2.png') }}"
                                    alt=""
                                ></a>
                        </div>
                        <p>Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id
                            elit. Duis sed odio sit amet nibh vulputate.</p>
                        <div class="footer-social-info">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6">
                    <div class="footer-widget mb-30">
                        <h2 class="footer-widget-title">Company</h2>
                        <ul class="f-angle">
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i>Home</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i>About Us</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i>Course</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i>Event</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i>Blog</a></li>
                            <li><a href="#"><i class="fa-solid fa-angles-right"></i>Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-widget mb-30">
                        <h2 class="footer-widget-title">Recent Post</h2>
                        <ul class="f-post">
                            <li>
                                <div class="f-post-thumb">
                                    <img
                                        src="{{ asset('images/blog/blog-f1.jpg') }}"
                                        alt=""
                                    >
                                </div>
                                <div class="f-post-cont">
                                    <h3><a href="#">Learn Webs Applications Development from Experts</a></h3>
                                    <span>october 10, 2022</span>
                                </div>
                            </li>
                            <li>
                                <div class="f-post-thumb">
                                    <img
                                        src="{{ asset('images/blog/blog-f2.jpg') }}"
                                        alt=""
                                    >
                                </div>
                                <div class="f-post-cont">
                                    <h3><a href="#">Learn Marn Stack Applications Development from Experts</a>
                                    </h3>
                                    <span>october 1, 2022</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-30">
                        <h2 class="footer-widget-title">Contact Us</h2>
                        <ul class="f-cont">
                            <li><i class="fa fa-home"></i>355 William S Canning Blvd, River MA 6950, USA</li>
                            <li><i class="fa fa-map-marker"></i>259/A Oval Street, Mount View, London, United Kingdom
                            </li>
                            <li><i class="fa fa-phone"></i>+88 12345 85960</li>
                            <li><i class="fa fa-envelope"></i>support@example.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="{{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/counterup.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.js') }}"></script>
    <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('js/backtotop.js') }}"></script>
    <script src="{{ asset('js/countdown.js') }}"></script>
    <script src="{{ asset('js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
