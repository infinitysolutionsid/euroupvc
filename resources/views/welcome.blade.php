<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Bintang Tobing" />
    <meta name="description" content="@yield('deschomepage')">
    <meta name="keywords"
        content="upvc murah medan, upvc terbaik di medan, upvc kualitas terbaik, euro upvc, euroupvc, upvc termurah, upvc terkuat, upvc medan, upvc jakarta, upvc berkualitas, upvc desain custom">
    <link rel="shortcut icon" href="{!!asset('images/favicon.ico')!!}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('titlepage')</title>

    <link href="{!!asset('css/plugins.css')!!}" rel="stylesheet">
    <link href="{!!asset('css/style.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!!asset('css/custom.css')!!}">
    <link rel="stylesheet" href="{!!asset('css/media-query.css')!!}">
    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>
    <link href="{!!asset('css/color-variations/green.css')!!}" rel="stylesheet" type="text/css" media="screen">

    <link rel="stylesheet" type="text/css" href="homepages/real-estate/{!!asset('css/real-estate-style.css')!!}"
        media="screen" />
</head>

<body>

    <div class="body-inner">
        <div id="topbar" class="d-none d-xl-block d-lg-block topbar-fullwidth">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-menu">
                            <li><a href="/about-us">About us</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header id="header" data-transparent="true" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <div id="logo">
                        <a href="/">
                            <span class="logo-default"><img class="img-fluid"
                                    src="{!!asset('homepages/real-estate/images/logo.png')!!}"
                                    alt="Logo Euro UPVC png"></span>
                            <span class="logo-dark"><img class="img-fluid"
                                    src="{!!asset('homepages/real-estate/images/logo.png')!!}"
                                    alt="Logo Euro UPVC png"></span>
                        </a>
                    </div>
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>

                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/projects">Projects</a></li>
                                    <li class="dropdown"> <a href="#">Product</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Door</a>
                                            </li>
                                            <li><a href="#">Sliding Door</a></li>
                                            <li><a href="#">Casement Window</a></li>
                                            <li><a href="#">Sliding Window</a></li>
                                            <li><a href="#">Partition</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="/contact-us">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        {{-- Content Yield --}}
        @yield('content')
        <section class="p-t-50 p-b-50"
            style="background-image:url(homepages/branding/images/background-4.png); background-position:71% 22%;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-text heading-section">
                                    <h2>Hubungi Kami</h2>
                                </div>
                            </div>
                            <div class="col-lg-6 m-b-30">
                                <address>
                                    <strong>Showroom:</strong><br>
                                    Jl Gatot Subroto No.106 <br>
                                    at Plaza Bangunan Home Smart <br>
                                    Medan - Sumatera Utara 20114 <br>
                                </address>
                                <strong>Phone:</strong> <a
                                    href="https://api.whatsapp.com/send?phone=6282267673000">(+62) 822 6767 3000</a>
                                <br>
                                <strong>Email:</strong> <a href="mailto:info@euroupvc.co.id">info@euroupvc.co.id</a>
                            </div>
                            <div class="col-lg-12 m-b-30">
                                <h4>We are social</h4>
                                <div class="social-icons social-icons-light social-icons-colored-hover">
                                    <ul>
                                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="social-instagram"><a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-1">
                        <form class="" action="/kirim-pesan" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" required name="name"
                                        class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" required name="email"
                                        class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="nohp">No HP</label>
                                    <input type="tel" aria-required="true" required name="nohp"
                                        class="form-control required" placeholder="Enter your phone number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" required name="message" rows="8" class="form-control required"
                                    placeholder="Enter your Message"></textarea>
                            </div>
                            <input type="hidden" name="type" value="Pesan">
                            <div class="form-group">
                                <button class="btn btn-light" type="submit" id="form-submit"><i
                                        class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="copyright-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 text-center">
                            <?php $y = Date('Y') ?>
                            <div class="copyright-text">&copy;{{$y}} - <a href="/">CV. Euro UPVC</a>. All Rights
                                Reserved. <br>Made by
                                &#9829; from <a href="https://infinitysolutions.co.id" target="_blank">Infinity
                                    Solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <a id="scrollTop" class="scroll-to" href="body"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>

    <script src="{!!asset('js/jquery.js')!!}"></script>
    <script src="{!!asset('js/plugins.js')!!}"></script>

    <script src="{!!asset('js/functions.js')!!}"></script>
    <script type='text/javascript' src='//maps.googleapis.com/maps/api/js?key=AIzaSyALboiQYa5WEjbINupUsZ1r0C1u7llRyS8'>
    </script>
    <script type="text/javascript" src="{!!asset('plugins/gmap3/gmap3.min.js')!!}"></script>
    <script type="text/javascript" src="{!!asset('plugins/gmap3/map-styles.js')!!}"></script>
</body>

</html>
