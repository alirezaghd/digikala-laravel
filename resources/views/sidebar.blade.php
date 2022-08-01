


            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="/admin" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="/images/logo-sm-light.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/images/logo-dark.png" alt="" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="/images/logo-sm-light.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="/images/logo-light.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="/admin" class="waves-effect">
                                    <i class="ri-home-gear-line"></i>
                                    <span>صفحه اصلی</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-store-2-line"></i>
                                    <span>محصولات</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ url('/admin/productsList') }}">لیست محصولات</a></li>
                                    <li><a href="{{ url('/admin/product/add') }}">افزودن محصول</a></li>
                                    <li><a href="{{ url('/admin/orderList') }}">سفارشات</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="#" class=" waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>کاربران</span>
                                </a>

                            </li>


                            <li>
                                <a href="{{ url('/admin/cities') }}" class=" waves-effect">
                                    <i class="ri-map-pin-line"></i>
                                    <span>شهرها</span>
                                </a>
                            </li>





                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
