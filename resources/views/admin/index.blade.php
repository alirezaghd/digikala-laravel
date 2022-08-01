@extends('admintemplate')

@section('content')


    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">صفحه اصلی</h4>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-8">
                <div class="row h-100">
                    <div class="col-md-6 col-xl-4">
                        <div class="card overflow-hidden card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="font-size-15 text-uppercase mb-0">Customers</h5>
                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded bg-soft-primary font-size-20 mini-stat-icon">
                                                            <i class="ri-user-line text-primary"></i>
                                                        </span>
                                    </div>
                                </div>
                                <h3 class="font-size-24">26.46% <span
                                        class="text-success fw-normal font-size-14 ms-2">+8.34%</span></h3>
                                <p class="text-muted mb-0">Total Users World wide</p>
                            </div><!-- end card-body -->

                            <!-- Project chart -->
                            <div id="project-chart"></div>
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-md-6 col-xl-4">
                        <div class="card overflow-hidden card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="font-size-15 text-uppercase mb-0">Profit</h5>
                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded bg-soft-success font-size-20 mini-stat-icon">
                                                            <i class="ri-wallet-3-line text-success"></i>
                                                        </span>
                                    </div>
                                </div>
                                <h3 class="font-size-24">46,562
                                    <span class="text-danger fw-normal font-size-14 ms-2">+3.16%</span>
                                </h3>
                                <p class="text-muted mb-0">Total Users World wide</p>
                            </div><!-- end card-body -->

                            <!-- user chart -->
                            <div id="user-chart"></div>
                        </div><!-- end card -->
                    </div><!-- end col-->

                    <div class="col-xl-4">
                        <div class="card overflow-hidden card-h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="font-size-15 text-uppercase mb-0">Orders</h5>
                                    <div class="avatar-xs">
                                                        <span class="avatar-title rounded bg-soft-danger font-size-20 mini-stat-icon">
                                                            <i class="ri-shopping-cart-line text-danger"></i>
                                                        </span>
                                    </div>
                                </div>
                                <h3 class="font-size-24">2048<span
                                        class="text-danger fw-normal font-size-14 ms-2">+3.16%</span></h3>
                                <p class="text-muted mb-0">Total Users World wide</p>
                            </div><!-- end card-body -->

                            <!-- order chart -->
                            <div id="order-chart"></div>
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card congo-widget overflow-hidden">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div>
                                    <h4 class="font-size-24 text-white text-truncate">Best Employee Shonen</h4>
                                    <p class="text-white-50 mt-3">Thanks For begin such in our Medroc. You have done <b
                                            class="text-white">57.6%</b> more sales today</p>
                                    <h1 class="text-white mt-3 mb-0">4.3k</h1>
                                </div>
                            </div>

                            <div class="col-4">
                                <div>
                                    <img src="/images/sales-img-2.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-->
        </div><!-- end row-->

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sales Analytics</h4>

                        <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div id="analytics-chart" class="apex-charts"></div>
                            </div><!-- end col -->

                            <div class="col-xl-4">
                                <h3 class="mt-2">$3,536.65</h3>
                                <p class="text-muted">Curabitur lacinia eleifend justo eget
                                    lobortis ipsum feugiat ornare.
                                </p>
                                <div class="mt-3">
                                    <div class="border-bottom py-3">
                                        <div class="d-flex align-items-center">
                                            <div id="mini-1" class="apex-charts"></div>
                                            <div class="flex-grow-1 ms-2">
                                                <h4 class="mb-1 font-size-17">24,523</h4>
                                                <span class="text-muted font-size-14">Total User</span>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                                <span
                                                                    class="badge rounded-pill badge-soft-success font-size-12 fw-medium mb-1"><i
                                                                        class="mdi mdi-arrow-up-bold me-2"></i>2.65%</span>
                                                <p class="text-muted font-size-14 mb-0">June 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-bottom py-3">
                                        <div class="d-flex align-items-center">
                                            <div id="mini-2" class="apex-charts"></div>
                                            <div class="flex-grow-1 ms-2">
                                                <h4 class="mb-1 font-size-17">235M</h4>
                                                <span class="text-muted font-size-14">Avarage sale</span>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                                <span
                                                                    class="badge rounded-pill badge-soft-success font-size-12 fw-medium mb-1"><i
                                                                        class="mdi mdi-arrow-up-bold me-2"></i>350k</span>
                                                <p class="text-muted font-size-14 mb-0">June 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="py-3">
                                        <div class="d-flex align-items-center">
                                            <div id="mini-3" class="apex-charts"></div>
                                            <div class="flex-grow-1 ms-1">
                                                <h4 class="mb-1 font-size-17">7,854</h4>
                                                <span class="text-muted font-size-14">Annual income</span>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                                <span
                                                                    class="badge rounded-pill badge-soft-danger font-size-12 fw-medium mb-1"><i
                                                                        class="mdi mdi-arrow-down-bold me-2"></i>$38,580</span>
                                                <p class="text-muted font-size-14 mb-0">June 2021</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Sales Reports</h4>
                        <div class="mt-3">
                            <div id="sales-reports" class="apex-carts"></div>
                        </div>

                        <div class="row mt-1">
                            <div class="col border-end">
                                <div class="text-center py-2">
                                    <p class="text-uppercase mb-0 text-muted"><i
                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i>Online Sales
                                    </p>
                                    <h4 class="mt-2 mb-0">65M</h4>
                                </div>
                            </div><!-- end col -->
                            <div class="col">
                                <div class="text-center py-2">
                                    <p class="text-uppercase mb-0 text-muted"><i
                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-danger"></i>Offline Sales
                                    </p>
                                    <h4 class="mt-2 mb-0">125K</h4>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end card-body -->
                </div><!-- end card -->

            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sales By Social Source</h4>
                        <div id="social-sales" class="apex-charts"></div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Customer Review</h4>
                        <div id="carouselExampleInterval" class="carousel slide review-carousel" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="d-flex mt-4">
                                        <div class="text-center">
                                            <img class="rounded-circle header-profile-user avatar-sm"
                                                 src="/images/users/avatar-2.jpg" alt="Header Avatar">
                                            <div class="mt-n4">
                                                <i class="ri-double-quotes-r text-primary h1"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-muted">“I feel confident imposing change on myself. It's a lot more
                                                fun
                                                progressing than looking back. That's why I need to throw curve balls.”</p>
                                            <h5 class="font-size-15">Nicholas Morris</h5>
                                            <ul class="list-inline mb-1 ps-0">
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="d-flex mt-4">
                                        <div class="text-center">
                                            <img class="rounded-circle header-profile-user avatar-sm"
                                                 src="/images/users/avatar-3.jpg" alt="Header Avatar">
                                            <div class="mt-n4">
                                                <i class="ri-double-quotes-r text-primary h1"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-muted">“Our task must be to free ourselves by widening our circle of
                                                compassion to embrace
                                                all living creatures and the whole of nature and its beauty.”</p>
                                            <h5 class="font-size-15">Sandra Hornbeck</h5>
                                            <ul class="list-inline mb-1 ps-0">
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex mt-4">
                                        <div class="text-center">
                                            <img class="rounded-circle header-profile-user avatar-sm"
                                                 src="/images/users/avatar-4.jpg" alt="Header Avatar">
                                            <div class="mt-n4">
                                                <i class="ri-double-quotes-r text-primary h1"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <p class="text-muted">“I've learned that people will forget what you said, people
                                                will forget what you did, but
                                                people will never forget how you made them feel.”</p>
                                            <h5 class="font-size-15">Douglas Swaney</h5>
                                            <ul class="list-inline mb-1 ps-0">
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                                <li class="list-inline-item me-0"><i class="ri-star-s-fill text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                                    data-bs-slide="prev">
                                <i class="mdi mdi-chevron-left carousel-control-icon"></i>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                                    data-bs-slide="next">
                                <i class="mdi mdi-chevron-right carousel-control-icon"></i>
                            </button>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Monthly Profits</h4>
                        <div class="my-1">
                            <p class="mb-2">This Month <span class="float-end">75%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%"
                                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                </div>
                            </div>

                            <p class="mt-4 mb-2">Last Month <span class="float-end">55%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 55%"
                                     aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                                </div>
                            </div>

                            <p class="mt-4 mb-2">This Year <span class="float-end">52%</span></p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 52%"
                                     aria-valuenow="52" aria-valuemin="0" aria-valuemax="52">
                                </div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Web Analytics</h4>

                        <div data-simplebar style="max-height: 400px;">
                            <ol class="activity-feed mb-0 ps-3 mt-4 pt-2 pb-0">
                                <li class="feed-item">
                                    <div class="feed-item-list">
                                        <p class="text-muted mb-1">Now</p>
                                        <p class="mt-0 mb-0">Andrei Coman magna sed porta finibus, risus
                                            posted a new article: <span class="text-primary">Forget UX
                                                                Rowland</span></p>
                                    </div>
                                </li>
                                <li class="feed-item">
                                    <p class="text-muted mb-1">2:30PM</p>
                                    <p class="mt-0 mb-0">Andrei Coman posted a new article <span class="text-primary"> Designer
                                                            Alex</span></p>
                                </li>
                                <li class="feed-item">
                                    <p class="text-muted mb-1">5:48 PM</p>
                                    <p class="mt-0 mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace Commented <span
                                            class="text-primary">Developer Moreno</span></p>
                                </li>
                                <li class="feed-item">
                                    <p class="text-muted mb-1">12:48 PM</p>
                                    <p class="mt-0 mb-0">Zack Wetass, Chris combined Commented <span class="text-primary">UX
                                                            Murphy</span></p>
                                </li>
                                <li class="feed-item pb-1">
                                    <p class="text-muted mb-1">Yesterday</p>
                                    <p class="mt-0 mb-0">Andrei Coman posted a new article: <span class="text-primary">Designer
                                                            Alex</span></p>
                                </li>
                            </ol>
                        </div>

                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Top Selling Product</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Sold Product</th>
                                    <th>Total Sale</th>
                                    <th>Stutas</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs">
                                                                    <span
                                                                        class="avatar-title rounded bg-dark text-light font-size-20 mini-stat-icon">
                                                                        <i class="mdi mdi-apple"></i>
                                                                    </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div>I Phone 12 Max Pro</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td> 6,758 Pcs</td>
                                    <td>$120.00</td>
                                    <td><span class="badge rounded-pill badge-soft-success font-size-12">In Stock</span>
                                    </td>
                                    <td><a href="" class="btn btn-outline-secondary btn-sm">View Details</a></td>
                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs">
                                                                    <span class="avatar-title rounded bg-primary font-size-20 mini-stat-icon">
                                                                        <i class="mdi mdi-camera"></i>
                                                                    </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div>Canon 20MP Digital Camera </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td> 558 Pcs</td>
                                    <td>$60.00</td>
                                    <td><span class="badge rounded-pill badge-soft-success font-size-12">In Stock</span>
                                    </td>
                                    <td><a href="" class="btn btn-outline-secondary btn-sm">View Details</a></td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs">
                                                                    <span class="avatar-title rounded bg-primary font-size-20 mini-stat-icon">
                                                                        <i class="mdi mdi-desktop-mac"></i>
                                                                    </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div>Apple MacBook Pro Core i9</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>1200 Pcs</td>
                                    <td>$650.00</td>
                                    <td><span class="badge rounded-pill badge-soft-danger font-size-12">Out Of Stock</span>
                                    </td>
                                    <td><a href="" class="btn btn-outline-secondary btn-sm">View Details</a></td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs">
                                                                    <span
                                                                        class="avatar-title rounded bg-dark text-light font-size-20 mini-stat-icon">
                                                                        <i class="mdi mdi-watch-variant"></i>
                                                                    </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div>Apple Watch Series 6 (Pro) </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>924 Pcs</td>
                                    <td>$40.00</td>
                                    <td><span class="badge rounded-pill badge-soft-success font-size-12">In Stock</span>
                                    </td>
                                    <td><a href="" class="btn btn-outline-secondary btn-sm">View Details</a></td>

                                </tr>

                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-xs">
                                                                    <span class="avatar-title rounded bg-primary font-size-20 mini-stat-icon">
                                                                        <i class="mdi mdi-tablet-ipad"></i>
                                                                    </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div>Apple iPad (8th Gen) </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>3,254 Pcs</td>
                                    <td>$320.00</td>
                                    <td><span class="badge rounded-pill badge-soft-danger font-size-12">Out Of Stock</span>
                                    </td>
                                    <td><a href="" class="btn btn-outline-secondary btn-sm">View Details</a></td>

                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Most Sales In Countries</h4>

                        <div id="usa-vectormap" style="height: 196px"></div>

                        <div class="mt-4 pt-3 mt-sm-0 px-3">

                            <div class="d-flex py-3">
                                <div class="flex-grow-1">
                                    <p class="mb-2 text-muted">North Dakota</p>
                                    <h5 class="mb-0">17,235</h5>
                                </div>
                                <div>
                                    2.52 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                </div>
                            </div>
                            <div class="d-flex pt-3 border-top">
                                <div class="flex-grow-1">
                                    <p class="mb-2 text-muted">New Maxico</p>
                                    <h5 class="mb-0">$ 1,853</h5>
                                </div>
                                <div>
                                    1.26 % <i class="mdi mdi-arrow-up text-success ms-1"></i>
                                </div>
                            </div>
                        </div>

                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->

        </div><!-- end col -->

    </div>


@endsection
