<!DOCTYPE html>
<html  @if(LaravelLocalization::getCurrentLocale() == 'ar') dir="rtl" @else dir="ltr" @endif>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" type="image/x-icon">
    <title>@yield('title') - {{__('admin/home.home') }}</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Harmattan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Font Awesome-->
    @includeIf('layouts.admin.partials.css')
</head>
<body class="@if(LaravelLocalization::getCurrentLocale() == 'ar') rtl @else ltr @endif {{ $theme}}">
<div class="customizer-links">
    <div class="nav flex-column nac-pills" id="c-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link" id="c-pills-home-tab" data-bs-toggle="pill" href="#c-pills-home">
            <div class="settings"><i class="icofont icofont-ui-settings"></i></div>
            <span>Sidebar Type</span>
        </a>
        <a class="nav-link" id="c-pills-home-tab1" data-bs-toggle="pill" href="#c-pills-profile">
            <div class="settings color-settings"><i class="icofont icofont-color-bucket"></i></div>
            <span>Color Picker</span>
        </a>
    </div>
    <div class="customizer-contain">
        <div class="tab-content" id="c-pills-tabContent">
            <div class="customizer-body custom-scrollbar">
                <div class="tab-pane fade" id="c-pills-home"><h6>Layout Type</h6>
                    <ul class="main-layout layout-grid">
                        <li class="active" data-attr="ltr">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-light sidebar"></li>
                                    <li class="bg-light body"><span class="badge badge-primary">LTR</span></li>
                                </ul>
                            </div>
                        </li>
                        <li data-attr="rtl">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-light body"><span class="badge badge-primary">RTL</span></li>
                                    <li class="bg-light sidebar"></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                    <h6>Sidebar Typedd</h6>
                    <ul class="sidebar-type layout-grid">
                        <li data-attr="normal-sidebar">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-dark sidebar"></li>
                                    <li class="bg-light body"></li>
                                </ul>
                            </div>
                        </li>
                        <li data-attr="compact-sidebar">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-dark sidebar compact"></li>
                                    <li class="bg-light body"></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="c-pills-profile"><h6>Light layout</h6>
                    <ul class="layout-grid customizer-color">
                        <li class="color-layout" data-attr="color-1" data-primary="#24695c" data-secondary="#ba895d">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-2" data-primary="#d97f3d" data-secondary="#f25f4c">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-3" data-primary="#168eea" data-secondary="#90b4cd">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-4" data-primary="#665ed5" data-secondary="#d1d1e9">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-5" data-primary="#3a9aa8" data-secondary="#984ff3">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-6" data-primary="#7951aa" data-secondary="#72757D">
                            <div></div>
                        </li>
                    </ul>
                    <h6>Dark Layout</h6>
                    <ul class="layout-grid customizer-color dark">
                        <li class="color-layout" data-attr="color-1" data-primary="#24695c" data-secondary="#ba895d">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-2" data-primary="#d97f3d" data-secondary="#f25f4c">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-3" data-primary="#168eea" data-secondary="#90b4cd">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-4" data-primary="#665ed5" data-secondary="#d1d1e9">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-5" data-primary="#3a9aa8" data-secondary="#984ff3">
                            <div></div>
                        </li>
                        <li class="color-layout" data-attr="color-6" data-primary="#7951aa" data-secondary="#72757D">
                            <div></div>
                        </li>
                    </ul>
                    <h6>Mix Layout</h6>
                    <ul class="layout-grid customizer-mix">
                        <li class="color-layout active" data-attr="light-only">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-light sidebar"></li>
                                    <li class="bg-light body"></li>
                                </ul>
                            </div>
                        </li>
                        <li class="color-layout" data-attr="dark-sidebar">
                            <div class="header bg-light">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-dark sidebar"></li>
                                    <li class="bg-light body"></li>
                                </ul>
                            </div>
                        </li>
                        <li class="color-layout" data-attr="dark-only">
                            <div class="header bg-dark">
                                <ul>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="body">
                                <ul>
                                    <li class="bg-dark sidebar"></li>
                                    <li class="bg-dark body"></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="theme-loader"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-sidebar" id="pageWrapper">
    <!-- Page Header Start-->
@includeIf('layouts.admin.partials.header')
<!-- Page Header Ends -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
    @includeIf('layouts.admin.partials.sidebar')
    <!-- Page Sidebar Ends-->
        <div class="page-body">
            <!-- Container-fluid starts-->
        @yield('content')
        <!-- Container-fluid Ends-->
        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright {{date('Y')}}-{{date('y', strtotime('+1 year'))}} © viho All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with <i class="fa fa-heart font-secondary"></i></p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- latest jquery-->
@includeIf('layouts.admin.partials.js')
<script>
    $(document).ready(function(){
        var form = $('#alert-form'),
            original = form.serialize()

        form.submit(function(){
            window.onbeforeunload = null
        })

        window.onbeforeunload = function(){
            if (form.serialize() != original)
                return '{{__('admin/home.alert_form')}}'
        }
    })

    var toggle_icon = document.getElementById('dark-only');
    var body = document.getElementsByTagName('body')[0];
    var dark_theme_class = 'dark-only';

    toggle_icon.addEventListener('click', function() {
        if (body.classList.contains(dark_theme_class)) {

            body.classList.remove(dark_theme_class);

            setCookie('theme', 'empty');

        } else {
            body.classList.add(dark_theme_class);

            setCookie('theme', 'dark-only');

        }
    });

    function setCookie(name, value) {
        var d = new Date();
        d.setTime(d.getTime() + (365*24*60*60*1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

</script>
</body>
</html>
