@include("admin_header")

<body data-topbar="dark">

<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="/images/logo-sm.png" alt="" height="22">
                            </span>
                        <span class="logo-lg">
                                <img src="/images/logo-dark.png" alt="" height="20">
                            </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="/images/logo-sm-light.png" alt="" height="22">
                            </span>
                        <span class="logo-lg">
                                <img src="/images/logo-light.png" alt="" height="20">
                            </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="ri-search-line"></span>
                    </div>
                </form>

            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-search-line"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="mb-3 m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ...">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/images/flags/us.jpg" alt="Header Language" height="16">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                        <i class="ri-fullscreen-line"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-notification-3-line"></i>
                        <span class="noti-dot"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs me-3 mt-1">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="ri-shopping-cart-line"></i>
                                                </span>
                                        <div class="noti-top-icon">
                                            <i class="mdi mdi-heart text-white bg-danger"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mt-0 mb-1">Order placed <span
                                                class="mb-1 text-muted fw-normal">If several languages the
                                                        grammar</span></h6>
                                        <p class="mb-0 font-size-12"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <div class="mt-1">
                                        <img src="/images/users/avatar-3.jpg"
                                             class="me-3 rounded-circle avatar-xs mt-1" alt="user-pic">
                                        <div class="noti-top-icon">
                                            <i class="mdi mdi-circle text-white bg-success"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mt-0 mb-1">James Lemire <span
                                                class="mb-1 text-muted fw-normal">It will seem like simplified
                                                        English.</span></h6>
                                        <p class="mb-0 font-size-12"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs me-3 mt-1">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="ri-checkbox-circle-line"></i>
                                                </span>
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mt-0 mb-1">Your item is shipped <span
                                                class="mb-1 text-muted fw-normal">If several languages coalesce the
                                                        grammar.</span></h6>
                                        <p class="mb-0 font-size-12"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <div class="mt-1">
                                        <img src="/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs"
                                             alt="user-pic">
                                        <div class="noti-top-icon">
                                            <i class="mdi mdi-heart text-white bg-danger"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mt-0 mb-1">Salena Layfield <span
                                                class="mb-1 text-muted fw-normal">As a skeptical Cambridge friend
                                                        of mine occidental.</span></h6>
                                        <p class="mb-0 font-size-12"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </a>

                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <img src="/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs"
                                         alt="user-pic">
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mt-0 mb-1">Jonathon Joseph <span
                                                class="mb-1 text-muted fw-normal">Friend of mine occidental.</span>
                                        </h6>
                                        <p class="mb-0 font-size-12"><i class="mdi mdi-clock-outline"></i> 5 min ago</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top">
                            <div class="d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="/images/users/avatar-2.jpg"
                             alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> علیرضا غلامرضایی </h6>
                                </div>
                                <div class="col-auto">
{{--                                    <a href="#!" class="small"> Available</a>--}}
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <!-- item-->
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs me-3 mt-1">
                                            <span class="avatar-title bg-soft-primary rounded-circle font-size-16">
                                                <i class="ri-user-line text-primary font-size-16"></i>
                                            </span>
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mb-1">مشخصات</h6>
{{--                                        <p class="mb-0 font-size-12">View personal profile details.</p>--}}
                                    </div>
                                </div>
                            </a>
                            <!-- item-->
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs me-3 mt-1">
                                            <span class="avatar-title bg-soft-warning rounded-circle font-size-16">
                                                <i class="ri-wallet-2-line text-warning font-size-16"></i>
                                            </span>
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mb-1">کیف پول</h6>
{{--                                        <p class="mb-0 font-size-12">Modify your personal details.</p>--}}
                                    </div>
                                </div>
                            </a>
                            <!-- item-->
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs me-3 mt-1">
                                            <span class="avatar-title bg-soft-secondary rounded-circle font-size-16">
                                                <i class="ri-settings-2-line text-secondary"></i>
                                            </span>
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mb-1">تنظیمات <span class="badge bg-success float-end mt-1">11</span></h6>
{{--                                        <p class="mb-0 font-size-12">Manage your account parameters.</p>--}}
                                    </div>
                                </div>
                            </a>
                            <!-- item-->
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-xs me-3 mt-1">
                                            <span class="avatar-title bg-soft-primary rounded-circle font-size-16">
                                                <i class="ri-lock-unlock-line text-primary"></i>
                                            </span>
                                    </div>
                                    <div class="flex-grow-1 text-truncate">
                                        <h6 class="mb-1">قفل صفحه </h6>
{{--                                        <p class="mb-0 font-size-12">Control your privacy parameters..</p>--}}
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- item-->
                        <div class="pt-2 border-top">
                            <div class="d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="{{ url("admin/logout") }}">
                                    <i class="ri-shut-down-line align-middle me-1"></i> خروج از حساب کاربری
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </header>


    @include("sidebar")



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

            @if(session('message'))
                <div class="col-sm-4">
                    <div class="alert alert-{{session('message_type')}}  alert-dismissible fade show " role="alert">
                        {{session('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>

            @endif

            @yield('content')

        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <script>document.write(new Date().getFullYear())</script> © Copy Right
                    </div>
{{--                    <div class="col-sm-6">--}}
{{--                        <div class="text-sm-end d-none d-sm-block">--}}

{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </footer>

    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
{{--<div class="right-bar">--}}
{{--    <div data-simplebar class="h-100">--}}
{{--        <div class="rightbar-title d-flex align-items-center px-3 py-4">--}}

{{--            <h5 class="m-0 me-2">Settings</h5>--}}

{{--            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">--}}
{{--                <i class="mdi mdi-close noti-icon"></i>--}}
{{--            </a>--}}
{{--        </div>--}}

{{--        <!-- Settings -->--}}
{{--        <hr class="mt-0" />--}}
{{--        <h6 class="text-center mb-0">Choose Layouts</h6>--}}

{{--        <div class="p-4">--}}
{{--            <div class="mb-2">--}}
{{--                <img src="/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">--}}
{{--            </div>--}}

{{--            <div class="form-check form-switch mb-3">--}}
{{--                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>--}}
{{--                <label class="form-check-label" for="light-mode-switch">Light Mode</label>--}}
{{--            </div>--}}

{{--            <div class="mb-2">--}}
{{--                <img src="/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">--}}
{{--            </div>--}}
{{--            <div class="form-check form-switch mb-3">--}}
{{--                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="/css/bootstrap-dark.min.css" data-appStyle="/css/app-dark.min.css">--}}
{{--                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>--}}
{{--            </div>--}}

{{--            <div class="mb-2">--}}
{{--                <img src="/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">--}}
{{--            </div>--}}
{{--            <div class="form-check form-switch mb-5">--}}
{{--                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="/css/app-rtl.min.css">--}}
{{--                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>--}}
{{--            </div>--}}


{{--        </div>--}}

{{--    </div> <!-- end slimscroll-menu-->--}}
{{--</div>--}}
<!-- /Right-bar -->

<!-- Right bar overlay-->
{{--<div class="rightbar-overlay"></div>--}}

@include("admin_footer")
</body>

</html>
