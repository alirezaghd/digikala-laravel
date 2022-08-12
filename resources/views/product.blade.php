@extends('template')

@section('title')
    {{ $product->name}}
@endsection


@section('content')


{{--<div class="container-fluid ">--}}
{{--    <div class="row mt-3 product_bg" >--}}
{{--        <div class="col-lg-4 ">--}}
{{--            <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">--}}
{{--                <div class="carousel-indicators">--}}
{{--                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--                </div>--}}
{{--                <div class="carousel-inner">--}}
{{--                    <div class="carousel-item active">--}}
{{--                        <img src="{{url($product->images->first()->url)}}" class=" img-fluid " alt="...">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img src="{{url('/images/products/iphone13-go.jpg')}}" class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                    <div class="carousel-item">--}}
{{--                        <img src="{{url('/images/products/iphone13-gray.jpg')}}" class="d-block w-100" alt="...">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">--}}
{{--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                    <span class="visually-hidden">Previous</span>--}}
{{--                </button>--}}
{{--                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">--}}
{{--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                    <span class="visually-hidden">Next</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-5 ">--}}
{{--            <div class="card mb-3 bg-transparent border-0 h-100">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">{{$product->name}} </h5>--}}

{{--                    <ul class="list-group list-group-flush mt-5">--}}
{{--                        <li class="list-group-item fw-bold">ویژگی‌ها--}}

{{--                        </li>--}}
{{--                        <li class="list-group-item">فناوری صفحه‌نمایش :--}}
{{--                            Super Retina XDR OLED</li>--}}
{{--                        <li class="list-group-item">اندازه :--}}

{{--                            6.7</li>--}}
{{--                        <li class="list-group-item">شبکه های ارتباطی :--}}

{{--                            2G، 3G، 4G، 5G</li>--}}
{{--                        <li class="list-group-item">حافظه داخلی :--}}

{{--                            256 گیگابایت</li>--}}
{{--                        <li class="list-group-item">نسخه سیستم عامل :--}}

{{--                            iOS 15</li>--}}
{{--                    </ul>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <div class="col-lg-3 ">--}}
{{--            <div class="card mb-3 h-100 product_price">--}}
{{--                <div class="card-header">--}}
{{--                    <p class=" fw-bold">فروشنده--}}

{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="card-body ">--}}
{{--                    <ul class="list-group list-group-flush  mt-5 ">--}}
{{--                        <li class="list-group-item">--}}
{{--                            دیجیکالا--}}

{{--                           </li>--}}

{{--                        <li class="list-group-item ">گارانتی ۱۸ ماهه عمران تل(نیک مهر عمرانی)--}}


{{--                        </li>--}}

{{--                        <li class="list-group-item">موجود در انبار دیجیکالا--}}

{{--                       </li>--}}
{{--                        <li class="list-group-item">--}}

{{--                            150 امتیاز دیجی کلاب</li>--}}

{{--                    </ul>--}}

{{--                </div>--}}
{{--                <div class="card-footer  text-center">--}}
{{--                    <h6>قیمت : {{$product->price}} تومان</h6>--}}
{{--                    <button class="btn btn-danger">  افزودن به سبد خرید</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row mt-3 product_bg ">--}}
{{--        <div class="col-12">--}}
{{--            <p class="text-dark lh-base p-5">--}}
{{--                {{$product->description}}--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<main>
    <!-- Breadcrumb -->
    <div class="py-3 bg-gray-100">
    </div>
    <!-- End Breadcrumb -->

    <!-- Product Details -->
    <section class="product-details py-6">
        <div class="container">
            <div class="row align-items-start">

                <!-- Product Gallery -->

                <div class="col-lg-4 lightbox-gallery product-gallery sticky-lg-top sticky-lg-top-header"
                     style="top: 114.137px;">
                    <div
                        class="swiper swiper_gallery swiper-fade swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-9724d3fbfdd9e713" aria-live="polite">
                            <div class="swiper-slide swiper-slide-visible swiper-slide-active" role="group"
                                 aria-label="1 / 6"
                                 style="width: 416px; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                                <div class="pd-gallery-slide">
                                    <a class="gallery-link" href=" /img/fashion/product-x-1.jpg">
                                        <i class="bi bi-arrows-fullscreen"></i></a>
                                    <img src="{{url($product->images->first()->url)}}" class="img-fluid" title="" alt="">
                                </div>
                            </div>
{{--                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 6"--}}
{{--                                 style="width: 416px; opacity: 0; transform: translate3d(-416px, 0px, 0px);">--}}
{{--                                <div class="pd-gallery-slide"><a class="gallery-link"--}}
{{--                                                                 href=" /img/fashion/product-x-2.jpg"><i--}}
{{--                                            class="bi bi-arrows-fullscreen"></i></a> <img--}}
{{--                                        src=" /img/fashion/product-x-2.jpg" class="img-fluid" title=""--}}
{{--                                        alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide" role="group" aria-label="3 / 6"--}}
{{--                                 style="width: 416px; opacity: 0; transform: translate3d(-832px, 0px, 0px);">--}}
{{--                                <div class="pd-gallery-slide"><a class="gallery-link"--}}
{{--                                                                 href=" /img/fashion/product-x-3.jpg"><i--}}
{{--                                            class="bi bi-arrows-fullscreen"></i></a> <img--}}
{{--                                        src=" /img/fashion/product-x-3.jpg" class="img-fluid" title=""--}}
{{--                                        alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide" role="group" aria-label="4 / 6"--}}
{{--                                 style="width: 416px; opacity: 0; transform: translate3d(-1248px, 0px, 0px);">--}}
{{--                                <div class="pd-gallery-slide"><a class="gallery-link"--}}
{{--                                                                 href=" /img/fashion/product-x-4.jpg"><i--}}
{{--                                            class="bi bi-arrows-fullscreen"></i></a> <img--}}
{{--                                        src=" /img/fashion/product-x-4.jpg" class="img-fluid" title=""--}}
{{--                                        alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide" role="group" aria-label="5 / 6"--}}
{{--                                 style="width: 416px; opacity: 0; transform: translate3d(-1664px, 0px, 0px);">--}}
{{--                                <div class="pd-gallery-slide"><a class="gallery-link"--}}
{{--                                                                 href=" /img/fashion/product-x-5.jpg"><i--}}
{{--                                            class="bi bi-arrows-fullscreen"></i></a> <img--}}
{{--                                        src=" /img/fashion/product-x-5.jpg" class="img-fluid" title=""--}}
{{--                                        alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide" role="group" aria-label="6 / 6"--}}
{{--                                 style="width: 416px; opacity: 0; transform: translate3d(-2080px, 0px, 0px);">--}}
{{--                                <div class="pd-gallery-slide"><a class="gallery-link"--}}
{{--                                                                 href=" /img/fashion/product-x-6.jpg"><i--}}
{{--                                            class="bi bi-arrows-fullscreen"></i></a> <img--}}
{{--                                        src=" /img/fashion/product-x-6.jpg" class="img-fluid" title=""--}}
{{--                                        alt=""></div>--}}
{{--                            </div>--}}
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
{{--                    <div--}}
{{--                        class="swiper swiper_thumb_gallery product-thumb swiper-initialized swiper-horizontal swiper-pointer-events swiper-free-mode swiper-backface-hidden swiper-thumbs">--}}
{{--                        <div class="swiper-wrapper" id="swiper-wrapper-2149161032c10b6265" aria-live="polite"--}}
{{--                             style="transform: translate3d(0px, 0px, 0px);">--}}
{{--                            <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active"--}}
{{--                                 role="group" aria-label="1 / 6" style="width: 75.2px; margin-right: 10px;">--}}
{{--                                <div class="pd-gallery-slide-thumb"><img src=" /img/fashion/product-x-1.jpg"--}}
{{--                                                                         class="img-fluid" title="" alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group"--}}
{{--                                 aria-label="2 / 6" style="width: 75.2px; margin-right: 10px;">--}}
{{--                                <div class="pd-gallery-slide-thumb"><img src=" /img/fashion/product-x-2.jpg"--}}
{{--                                                                         class="img-fluid" title="" alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3 / 6"--}}
{{--                                 style="width: 75.2px; margin-right: 10px;">--}}
{{--                                <div class="pd-gallery-slide-thumb"><img src=" /img/fashion/product-x-3.jpg"--}}
{{--                                                                         class="img-fluid" title="" alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide swiper-slide-visible" role="group" aria-label="4 / 6"--}}
{{--                                 style="width: 75.2px; margin-right: 10px;">--}}
{{--                                <div class="pd-gallery-slide-thumb"><img src=" /img/fashion/product-x-4.jpg"--}}
{{--                                                                         class="img-fluid" title="" alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide swiper-slide-visible" role="group" aria-label="5 / 6"--}}
{{--                                 style="width: 75.2px; margin-right: 10px;">--}}
{{--                                <div class="pd-gallery-slide-thumb"><img src=" /img/fashion/product-x-5.jpg"--}}
{{--                                                                         class="img-fluid" title="" alt=""></div>--}}
{{--                            </div>--}}
{{--                            <div class="swiper-slide" role="group" aria-label="6 / 6"--}}
{{--                                 style="width: 75.2px; margin-right: 10px;">--}}
{{--                                <div class="pd-gallery-slide-thumb"><img src=" /img/fashion/product-x-6.jpg"--}}
{{--                                                                         class="img-fluid" title="" alt=""></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-arrow-style-03 swiper-next swiper-next-pd-details_thumb" tabindex="0"--}}
{{--                             role="button" aria-label="Next slide" aria-controls="swiper-wrapper-2149161032c10b6265"--}}
{{--                             aria-disabled="false"><i class="bi bi-chevron-right"></i></div>--}}
{{--                        <div--}}
{{--                            class="swiper-arrow-style-03 swiper-prev swiper-prev-pd-details_thumb swiper-button-disabled"--}}
{{--                            tabindex="-1" role="button" aria-label="Previous slide"--}}
{{--                            aria-controls="swiper-wrapper-2149161032c10b6265" aria-disabled="true"><i--}}
{{--                                class="bi bi-chevron-left"></i></div>--}}
{{--                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>--}}
                </div>
                <!-- End Product Gallery -->

                <!-- Product Details -->
                <div class="col-md-7 col-lg-5 ps-lg-5 mt-5 mt-lg-0">
                    <div class="product-detail">
                        <div class="products-brand pb-2"><span>Brand name</span></div>
                        <div class="products-title mb-2"><h4 class="h4">{{$product->name}}</h4></div>
                        <div class="rating-star text small pb-4"><i class="bi bi-star-fill active"></i> <i
                                class="bi bi-star-fill active"></i> <i class="bi bi-star-fill active"></i> <i
                                class="bi bi-star-fill active"></i> <i class="bi bi-star"></i> <small>(4 Reviews
                                )</small></div>
                        <div class="product-description"><p>



                            </p></div>
{{--                        <div class="product-attribute"><label class="fs-6 text-dark pb-2 fw-500">Size</label>--}}
{{--                            <div class="nav-thumbs nav mb-3">--}}
{{--                                <div class="form-check radio-text form-check-inline me-2"><input--}}
{{--                                        class="form-check-input" type="radio" name="size_d3" id="xs_2" checked="">--}}
{{--                                    <label class="radio-text-label" for="xs_2">XS</label></div>--}}
{{--                                <div class="form-check radio-text form-check-inline me-2"><input--}}
{{--                                        class="form-check-input" type="radio" name="size_d3" id="s_2"> <label--}}
{{--                                        class="radio-text-label" for="s_2">S</label></div>--}}
{{--                                <div class="form-check radio-text form-check-inline me-2"><input--}}
{{--                                        class="form-check-input" type="radio" name="size_d3" id="m_2"> <label--}}
{{--                                        class="radio-text-label" for="m_2">M</label></div>--}}
{{--                                <div class="form-check radio-text form-check-inline me-2"><input--}}
{{--                                        class="form-check-input" type="radio" name="size_d3" id="l_2"> <label--}}
{{--                                        class="radio-text-label" for="l_2">L</label></div>--}}
{{--                            </div>--}}
{{--                            <label class="fs-6 text-dark pb-2 fw-500">Color</label>--}}
{{--                            <div class="nav-thumbs nav mb-3">--}}
{{--                                <div class="form-check radio-color large form-check-inline me-2"><input--}}
{{--                                        class="form-check-input" type="radio" name="color_1" id="color_01" checked="">--}}
{{--                                    <label class="radio-color-label" for="color_01"><span--}}
{{--                                            style="background-color: #126532;"></span></label></div>--}}
{{--                                <div class="form-check radio-color large form-check-inline me-2"><input--}}
{{--                                        class="form-check-input" type="radio" name="color_1" id="color_2"> <label--}}
{{--                                        class="radio-color-label" for="color_2"><span--}}
{{--                                            style="background-color: #ff9922;"></span></label></div>--}}
{{--                                <div class="form-check radio-color large form-check-inline me-2"><input--}}
{{--                                        class="form-check-input" type="radio" name="color_1" id="color_3"> <label--}}
{{--                                        class="radio-color-label" for="color_3"><span--}}
{{--                                            style="background-color: #326598;"></span></label></div>--}}
{{--                                <div class="form-check radio-color large form-check-inline me-2"><input--}}
{{--                                        class="form-check-input" type="radio" name="color_1" id="color_4"> <label--}}
{{--                                        class="radio-color-label" for="color_4"><span--}}
{{--                                            style="background-color: #126578;"></span></label></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="product-price fs-3 fw-500 mb-2">
{{--                            <del class="text-muted fs-6">$38.<small>50</small></del>--}}
                            <span class="text-primary ">{{$product->price}}<small class="mx-2" >تومان</small></span></div>
                        <div class="product-detail-actions d-flex flex-wrap pt-3">
                            <div class="cart-qty me-3 mb-3">
                                <div class="dec qty-btn qty_btn">-</div>
                                <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                <div class="inc qty-btn qty_btn">+</div>
                            </div>
                            <div class="cart-button mb-3 d-flex">
                                <button class="btn btn-danger me-3"><i class="fi-shopping-cart"></i> اضافه به سبد خرید</button>
                                <button class="btn btn-outline-danger me-3"><i class="fi-heart"></i></button>
                                <button class="btn btn-outline-danger"><i class="fi-repeat"></i></button>
                            </div>
                        </div>
{{--                        <div class="product-info-buttons nav pt-4">--}}
{{--                            <a href="#" class="me-3" data-bs-toggle="modal"--}}
{{--                                                                      data-bs-target="#px_size_chart_modal"><i--}}
{{--                                    class="bi bi-scissors"></i>Size guide</a> --}}
{{--                            <a href="#" class=""--}}
{{--                                                                                 data-bs-toggle="modal"--}}
{{--                                                                                 data-bs-target="#px_shipping_modal"><i--}}
{{--                                    class="bi bi-truck me-2"></i>Shipping</a> <a href="#" class="ms-auto"--}}
{{--                                                                                 data-bs-toggle="modal"--}}
{{--                                                                                 data-bs-target="#px_ask_modal"><i--}}
{{--                                    class="bi bi-envelope ms-auto"></i>Ask about product</a></div>--}}
                        <div class="pt-3 border-top mt-3 small"><p class="theme-link mb-2"><label class="m-0 text-dark">دسته بندی:</label>
{{--                                <a href="#">Sunglasses</a>, <a href="#">Winter</a>, <a href="#">Shorts</a>, <a href="#">Cool</a>--}}
                            </p>
                            <p class="theme-link mb-2"><label class="m-0 text-dark">تگ:</label>
{{--                                <a href="#">Fashion</a>, <a href="#">Women</a>, <a href="#">Winter</a></p>--}}
                            <p class="theme-link m-0"><label class="m-0 text-dark">اشتراک گذاری:</label> <a
                                    class="icon icon-sm icon-secondary me-2" href="#"><i class="bi bi-facebook"></i>
                                </a><a class="icon icon-sm icon-secondary me-2" href="#"><i class="bi bi-twitter"></i>
                                </a><a class="icon icon-sm icon-secondary me-2" href="#"><i class="bi bi-instagram"></i>
                                </a><a class="icon icon-sm icon-secondary me-2" href="#"><i class="bi bi-linkedin"></i></a>
                            </p></div>
                    </div>
                </div><!-- End Product Details -->
                <!-- Sidebar -->
                <div class="col-md-5 col-lg-3 mt-5 mt-lg-0">
                    <div class="border p-3">
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="fs-1 text-primary"><i class="bi bi-truck"></i></div>
                            <div class="col ps-3"><h6 class="mb-1">ارسال رایگان
                                </h6>
                                <p class="m-0">برای سفارش‌ بالای ۵۰۰ هزار تومان

                                </p></div>
                        </div>
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="fs-1 text-primary"><i class="bi bi-box-arrow-in-left"></i></div>
                            <div class="col ps-3"><h6 class="mb-1">7 رزو ضمانت  بازگشت کالا</h6>
                                <p class="m-0">بدون قید و شرط</p></div>
                        </div>
                        <div class="d-flex">
                            <div class="fs-1 text-primary"><i class="bi bi-headphones"></i></div>
                            <div class="col ps-3"><h6 class="mb-1">24 ساعته 7 روز هفته</h6>
                                <p class="m-0">پاسخ گوی شما هستیم</p></div>
                        </div>
                    </div>
                </div><!-- End Sidebar --></div>
        </div>
    </section>
    <!-- End Product Details -->

    <!-- Product Tabs -->
    <section class="pb-6 py-md-6 pb-lg-10 pt-lg-5">
        <div class="container">
            <div class="product-tabs">
                <ul class="nav product-nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link" id="pd_description_tab"
                                                                data-bs-toggle="tab" data-bs-target="#pd_description"
                                                                role="tab" aria-controls="pd_description"
                                                                aria-selected="false" tabindex="-1">توضیحات</a></li>
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link" id="pd_information_tab"
                                                                data-bs-toggle="tab" data-bs-target="#px_information"
                                                                role="tab" aria-controls="px_information"
                                                                aria-selected="false" tabindex="-1">بررسی</a></li>
                    <li class="nav-item" role="presentation"><a href="#" class="nav-link active" id="pd_reviews_tab"
                                                                data-bs-toggle="tab" data-bs-target="#pd_reviews"
                                                                role="tab" aria-controls="pd_reviews"
                                                                aria-selected="true">نظرات</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="pd_description" role="tabpanel" aria-labelledby="pd_description_tab">
                        <div class="row">
                            <div class="col-lg-7 pe-lg-10"><h5>معرفی</h5>
                                {{$product->description}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="px_information" role="tabpanel" aria-labelledby="pd_information_tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <table class="table text-sm">
                                    <tbody>
                                    <tr>
                                        <th class="fw-500 text-dark">Product #</th>
                                        <td class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisic elit
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="fw-500 text-dark">Available packaging</th>
                                        <td class="text-muted">consectetur adipisic elit eiusm tempor</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-500 text-dark">Weight</th>
                                        <td class="text-muted">Ut enim ad minim venialo quis nostrud</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-500 text-dark">Sunt in culpa qui</th>
                                        <td class="text-muted">labore et dolore magna aliqua.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="table text-sm">
                                    <tbody>
                                    <tr>
                                        <th class="fw-500 text-dark">Weight</th>
                                        <td class="text-muted">dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-500 text-dark">Sunt in culpa qui</th>
                                        <td class="text-muted">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-500 text-dark">Product #</th>
                                        <td class="text-muted">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                    <tr>
                                        <th class="fw-500 text-dark">Available packaging</th>
                                        <td class="text-muted">Lorem ipsum dolor sit amet</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active show" id="pd_reviews" role="tabpanel"
                         aria-labelledby="pd_reviews_tab">
                        <div class="row">
                            <div class="col-lg-8 pe-lg-8" id="listcomments-{{$product->id}}">
{{--                                <div class="row align-items-end">--}}
{{--                                    <div class="col-sm-6"><h5 class="m-0">نظرات</h5>--}}
{{--                                        <div class="rating-star small"><i class="bi small bi-star-fill active"></i> <i--}}
{{--                                                class="bi small bi-star-fill active"></i> <i--}}
{{--                                                class="bi small bi-star-fill active"></i> <i--}}
{{--                                                class="bi small bi-star-fill active"></i> <i--}}
{{--                                                class="bi small bi-star"></i> <span>4.85/5 (400 نظر)</span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                                @foreach($product->comments as $comment)

                                <div class="d-flex review-box border-top mt-4 pt-4">

                                    <div>
{{--                                        <div class="review-image">--}}
{{--                                            <img class="img-fluid" src="/img/fashion/product-1.jpg" title="" alt="">--}}
{{--                                        </div>--}}
                                    </div>
                                    <div class="col ps-3">
                                        <h6>{{$comment->user->name}}</h6>
                                        <div class="rating-star small">
                                            <i class="bi small bi-star-fill active"></i>
                                            <i class="bi small bi-star-fill active"></i>
                                            <i class="bi small bi-star-fill active"></i>
                                            <i class="bi small bi-star-fill active"></i>
                                            <i class="bi small bi-star"></i>

                                            <span>{{$comment->created_at}}</span></div>
                                        <p class="m-0 pt-3">
                                            {{$comment->text}}
                                        </p>
                                    </div>
                                </div>

                            @endforeach
                            </div>

                        @auth()
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <div class="border p-4 sticky-lg-top review-form"><h5 class="mb-3 pb-3 border-bottom">
                                       نظرات خود را بنویسید</h5>
                                    <form id="form-comment-{{ $product->id }}">
                                        <div class="row g-2">
{{--                                            <div class="col-sm-6"><label class="form-label">نام</label>--}}
{{--                                                <input type="text" name="name" value="" class="form-control form-control-sm"></div>--}}
{{--                                            <div class="col-sm-6"><label class="form-label">ایمیل</label>--}}
{{--                                                <input type="text" name="email" class="form-control form-control-sm">--}}
{{--                                            </div>--}}

                                               <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                            <div class="col-sm-12">
                                                <label
                                                    class="form-label m-0 pe-3 w-100">میزان رضایت</label>
                                                <div class="rating-star"><i class="bi small bi-star-fill"></i> <i
                                                        class="bi small bi-star-fill"></i> <i
                                                        class="bi small bi-star-fill"></i> <i
                                                        class="bi small bi-star-fill"></i> <i
                                                        class="bi small bi-star-fill"></i></div>
                                            </div>
{{--                                            <div class="col-sm-12">--}}
{{--                                                <label class="form-label">عنوان نظر</label> --}}
{{--                                                <input--}}
{{--                                                    type="text"  class="form-control form-control-sm">--}}
{{--                                            </div>--}}
                                            <div class="col-sm-12"><label class="form-label"> متن </label>
                                                <textarea rows="5" name="text" class="form-control"></textarea>
                                            </div>
                                            <div class="col-sm-12 pt-2">

                                                <button class="btn btn-outline-danger" type="button" onclick='send_comment({{$product->id}})'>ثبت دیدگاه</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Tabs -->


</main>

<script>
    function send_comment(productid){
        let form = document.getElementById("form-comment-"+productid);
        let form_data = new FormData(form);


        fetch("{{url('/send-comment')}}" , {
            method:"post",
            body:form_data
        }).then(result =>{
            let comments = document.getElementById("listcomments-" + productid);

            let div = document.createElement("DIV");
            div.className = "d-flex review-box border-top mt-4 pt-4";

            let div1 = document.createElement("DIV");
            div1.className = "col ps-3";

            let h6 = document.createElement("H6");
            h6.innerHTML = "{{$product->comments->first()->user->name}}";



            // let small = document.createElement("SMALL");
            // small.innerHTML = " هم اکنون"

            let p = document.createElement("P");
            p.className = "m-0 pt-3";
            p.innerHTML = form_data.get("text");


            div.appendChild(div1);
            div1.appendChild(h6);
            div1.appendChild(p);
            comments.appendChild(div)

        }).catch(error=>{
            alert(error);
        });


    }
</script>


@endsection

