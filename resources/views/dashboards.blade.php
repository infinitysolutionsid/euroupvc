<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard ::. @yield('titledash')</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="{!!asset('dashboard/favicon.ico')!!}">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="{!!asset('dashboard/favicon.ico')!!}">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="{!!asset('dashboard/favicon.ico')!!}">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="{!!asset('dashboard/favicon.ico')!!}">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="{!!asset('dashboard/favicon.ico')!!}">

    <!-- Styles -->
    <link href="{!!asset('dashboard/assets/css/lib/weather-icons.css')!!}" rel="stylesheet" />
    <link href="{!!asset('dashboard/assets/css/lib/owl.carousel.min.css')!!}" rel="stylesheet" />
    <link href="{!!asset('dashboard/assets/css/lib/owl.theme.default.min.css')!!}" rel="stylesheet" />
    <link href="{!!asset('dashboard/assets/css/lib/font-awesome.min.css')!!}" rel="stylesheet">
    <link href="{!!asset('dashboard/assets/css/lib/themify-icons.css')!!}" rel="stylesheet">
    <link href="{!!asset('dashboard/assets/css/lib/menubar/sidebar.css')!!}" rel="stylesheet">
    <link href="{!!asset('dashboard/assets/css/lib/bootstrap.min.css')!!}" rel="stylesheet">

    <link href="{!!asset('dashboard/assets/css/lib/helper.css')!!}" rel="stylesheet">
    <link href="{!!asset('dashboard/assets/css/style.css')!!}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bf3b9c3659.js" crossorigin="anonymous"></script>

    {{-- Datatables --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/r-2.2.5/datatables.min.css" />

    {{-- tiny mce --}}
    <script src="https://cdn.tiny.cloud/1/8ll77vzod9z7cah153mxwug6wu868fhxsr291kw3tqtbu9om/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo"><a href="/admin/dashboard">
                        <span>UPVC
                            SYS</span></a></div>
                <ul>
                    <li class="label">Main</li>
                    <li class="@yield('activedashboard')"><a href="/admin/dashboard"><i class="ti-home"></i> Dashboard
                        </a>
                    </li>
                    <?php $getRole = session()->get('role');?>
                    @if($getRole=='Developer')
                    <li class="@yield('activeannounce')"><a href="/admin/announcement"><i class="ti-bell"></i>
                            Announcement</a></li>
                    @endif
                    @if($getRole=='Admin' || $getRole=='Developer')
                    <li class="@yield('activeuser')"><a class="sidebar-sub-toggle"><i class="ti-lock"></i> Credentials
                            <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/admin/user">User Managements</a></li>
                        </ul>
                    </li>
                    @endif
                    <li class="label">Store Needs</li>
                    <li class="@yield('activeblog')"><a href="/admin/blog"><i class="ti-folder"></i> Project Blog </a>
                    </li>
                    <li class="@yield('activeproducts')"><a href="/admin/products"><i class="ti-bag"></i> Products </a>
                    </li>
                    <li class="@yield('activegallery')"><a href="/admin/gallery"><i class="ti-gallery"></i> Gallery </a>
                    </li>
                    <li class="@yield('activepartner')"><a href="/admin/partner"><i class="ti-link"></i> Partner </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <ul>
                            <li class="header-icon dib"><a href="/admin/emails"><i class="ti-email f-s-15"></i></a>
                            </li>
                            <li class="header-icon dib"><a href="/" target="_blank"><i class="ti-world f-s-15"></i></a>
                            </li>
                            <li class="header-icon dib"><span class="user-avatar">{!!session()->get('name')!!} <i
                                        class="ti-angle-down f-s-10"></i></span>
                                <div class="drop-down dropdown-profile">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                            <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                                            <li><a href="/logout"><i class="ti-power-off"></i> <span>Logout</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello {!!session()->get('name')!!},</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">@yield('titledash')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
            </div>
            @yield('contents')
            <div class="row">
                <div class="col-lg-6 text-left">
                    <div class="footer">
                        <?php $y = Date('Y') ?>
                        <p>©{{$y}} CV. EURO UPVC - All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer">
                        <p style="text-align: right !important;">{!!session()->get('role')!!} Level Authority.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="{!!asset('dashboard/assets/js/lib/jquery.min.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/jquery.nanoscroller.min.js')!!}"></script>
    <!-- nano scroller -->
    <script src="{!!asset('dashboard/assets/js/lib/menubar/sidebar.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/preloader/pace.min.js')!!}"></script>
    <!-- sidebar -->
    <script src="{!!asset('dashboard/assets/js/lib/bootstrap.min.js')!!}"></script>

    <!-- bootstrap -->

    <script src="{!!asset('dashboard/assets/js/lib/circle-progress/circle-progress.min.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/circle-progress/circle-progress-init.js')!!}"></script>

    <script src="{!!asset('dashboard/assets/js/lib/morris-chart/raphael-min.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/morris-chart/morris.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/morris-chart/morris-init.js')!!}"></script>

    <!--  flot-chart js -->
    <script src="{!!asset('dashboard/assets/js/lib/flot-chart/jquery.flot.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/flot-chart/jquery.flot.resize.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/flot-chart/flot-chart-init.js')!!}"></script>
    <!-- // flot-chart js -->


    <script src="{!!asset('dashboard/assets/js/lib/vector-map/jquery.vmap.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/jquery.vmap.min.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/jquery.vmap.sampledata.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.world.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.algeria.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.argentina.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.brazil.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.france.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.germany.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.greece.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.iran.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.iraq.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.russia.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.tunisia.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.europe.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/country/jquery.vmap.usa.js')!!}"></script>
    <!-- scripit init-->
    <script src="{!!asset('dashboard/assets/js/lib/vector-map/vector.init.js')!!}"></script>

    <script src="{!!asset('dashboard/assets/js/lib/weather/jquery.simpleWeather.min.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/weather/weather-init.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/owl-carousel/owl.carousel.min.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/lib/owl-carousel/owl.carousel-init.js')!!}"></script>
    <script src="{!!asset('dashboard/assets/js/scripts.js')!!}"></script>
    <!-- scripit init-->

    {{-- Datatables --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.21/b-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/r-2.2.5/datatables.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#tablehover').DataTable();
        });

    </script>
    <script>
        var Pass = document.getElementById('password');
        var Confirm_pass = document.getElementById('verpassword')

        function validatePassword() {
            if (Pass.value != Confirm_pass.value) {
                Confirm_pass.setCustomValidity("Password tidak sama. Ulangi kembali password kamu.");
            } else {
                Confirm_pass.setCustomValidity("");
            }
        }
        Pass.onchange = validatePassword;
        Confirm_pass.onkeyup = validatePassword;

    </script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            branding: false,
        });

    </script>
</body>

</html>
