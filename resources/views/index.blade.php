@extends('template')
@section('title')
    خانه | صفحه اصلی فروشگاه سجاد شاپ
@endsection
@section('content')

<div class="container">
    <div class="row mt-2">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <img src="images/Slide/head-gif1.gif" class="img-fluid rounded-3" alt="...">

        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-2">
        <div class=" col-lg-8 col-md-12 col-sm-12">
            <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active " aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/Slide/slide-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Slide/slide-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Slide/slide-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Slide/slide-4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Slide/slide-gif.gif" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>

        <div class=" col-lg-4 col-md-8 col-sm-12  ">
            <div class="row mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <img src="images/Slide/slide-mini-1.jpg" class="img-fluid rounded-3" alt="...">

            </div>
            <div class="row mt-2 ">
                <img src="images/Slide/slide-mini-2.jpg" class="img-fluid rounded-3" alt="...">

            </div>
        </div>
    </div>
</div>

<!-- پیشنهاد شگفت انگیز -->
<div class="container-fluid bg-danger mt-4">
    <div class="container">
        <div class="row mt-2 py-3  ">
            <div class="col d-none d-lg-block d-xl-block ">
                <img src="images/Card/1.png" class="img-fluid w-75" alt="...">
                <button type="button" class="btn btn-outline-light mt-5">مشاهده همه </button>


            </div>

            <div class="col-lg col-md col-sm">
                <div class="card ">
                    <img src="images/Card/card-4.jpg" class="card-img-top p-4" alt="نیم بوت مردانه ">
                    <div class="card-body">
                        <h6 class="card-title">نیم بوت مردانه </h6>
                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 850.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">48%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 439.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-3.jpg" class="card-img-top p-4" alt="ساعت مچی دیجیتال زنانه کاسیو">
                    <div class="card-body">
                        <h6 class="card-title">ساعت مچی  زنانه کاسیو</h6>

                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 2.517.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">28%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 1.980.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-2.jpg" class="card-img-top p-4" alt="اسپیکر بلوتوثی قابل حمل انکر">
                    <div class="card-body">
                        <h6 class="card-title">اسپیکر بلوتوثی انکر</h6>

                    </div>

                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 1.199.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">21%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 1.080.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-1.jpg" class="card-img-top p-4" alt="همزن صنعتی باس توربو">
                    <div class="card-body">
                        <h6 class="card-title">همزن صنعتی باس توربو</h6>

                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 3.799.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">49%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 1.889.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- تبلیغات -->

<div class="container">
    <div class="row mt-3">
        <div class=" col-lg-3 col-md-6 col-sm-12">
            <a href="">
                <img src="images/Ad/ad-4.jpg" class="img-fluid rounded-3" alt="...">
            </a>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <a href="">
                <img src="images/Ad/ad-3.jpg" class="img-fluid rounded-3" alt="...">
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12   mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <a href="">
                <img src="images/Ad/ad-2.jpg" class="img-fluid rounded-3" alt="...">
            </a>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12   mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <a href="">
                <img src="images/Ad/ad-1.jpg" class="img-fluid rounded-3" alt="...">
            </a>
        </div>
    </div>
</div>

<!-- سوپر مارکتی پیشنهاد شگفت انگیز -->
<div class="container-fluid bg-success mt-4">
    <div class="container">
        <div class="row mt-2 py-3 ">
            <div class="col d-none d-lg-block d-xl-block">
                <img src="images/Card/2.png" class="img-fluid w-75" alt="...">
                <button type="button" class="btn btn-outline-light mt-5">مشاهده همه </button>


            </div>

            <div class="col-lg col-md col-sm">
                <div class="card ">
                    <img src="images/Card/card-11.jpg" class="card-img-top p-4" alt="پنير فتا پر چرب هراز ">
                    <div class="card-body">
                        <h6 class="card-title">پنير فتا پر چرب هراز </h6>
                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 47.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">26%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 36.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-33.jpg" class="card-img-top p-4"
                         alt="چای سیاه گلستان مدل ممتاز هندوستان">
                    <div class="card-body">
                        <h6 class="card-title">چای سیاه گلستان هندوستان</h6>

                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 144.900 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">22%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 108.000 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-22.jpg" class="card-img-top p-4" alt=" شکلات پذیرایی مخروطی سوربن">
                    <div class="card-body">
                        <h6 class="card-title">شکلات  مخروطی سوربن </h6>

                    </div>

                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 60.000 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">30%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 41.900 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg col-md col-sm  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
                <div class="card">
                    <img src="images/Card/card-44.jpg" class="card-img-top p-4" alt="خرمای مضافتی بم نقره ای ساغر">
                    <div class="card-body">
                        <h6 class="card-title">خرمای مضافتی بم  ساغر</h6>

                    </div>
                    <ul class="list-group mt-5 border-0 ">
                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder text-decoration-line-through text-secondary me-2 "> 58.500 </p>
                            <span class="position-relative  badge bg-danger rounded-pill">29%</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 34.500 تومان </p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- بنر -->

<div class="container">
    <div class="row mt-3">
        <div class=" col-lg-6 col-md-6 col-sm-12  ">
            <img src="images/Ad/ad-5.jpg" class="img-fluid rounded-3" alt="...">

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <img src="images/Ad/ad-6.jpg" class="img-fluid rounded-3" alt="...">

        </div>
    </div>
</div>

<!-- موبایل -->

<div class="container">
    <div class="row mt-3">
        <div class="col-10">
            <div class="card">
                <div class="card-header bg-light border-bottom border-secondary">
                    <h5>گوشی موبایل</h5>
                    <p>بر اساس بازدید شما</p>
                </div>

                <div class="row p-4 ">
                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-1.jpg" class="card-img-top p-3"
                                 alt="iPhone 13 Pro Max ">
                            <div class="card-body">
                                <p class="card-text"> گوشی موبایل اپل مدل iPhone 13 Pro Max دو سیم‌ کارت
                                </p>
                            </div>
                            <ul class="list-group border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0 ">
                                    <p class="fw-bolder"> 41.489.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm ">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-2.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل سامسونگ ">
                            <div class="card-body">
                                <p class="card-text"> گوشی موبایل سامسونگ مدل Galaxy A12 Nacho
                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 3.780.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-3.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل سامسونگ ">
                            <div class="card-body">
                                <p class="card-text">
                                    گوشی موبایل سامسونگ مدل A52s 5G دو سیم‌کارت و
                                </p>
                            </div>
                            <ul class="list-group border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 10.560.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm ">
                        <div class="card border-0 ">
                            <img src="images/mobile/mobile-4.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل شیائومی مدل POCO X3 Pro ">
                            <div class="card-body">
                                <p class="card-text">
                                    گوشی موبایل شیائومی مدل POCO X3 Pro دو سیم‌ کارت و 8
                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 6.650.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-5.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل اپل مدل iPhone 13 A2634  ">
                            <div class="card-body">
                                <p class="card-text fs-6"> گوشی موبایل اپل مدل iPhone 13 دو سیم‌ کارت

                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 26.400.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-12">
            <div class="cart">
                <div class="card-header bg-light border-bottom border-secondary">
                    <h6>پیشنهادهای لحظه‌ای</h6>
                    <p class="pb-1">برای شما</p>
                </div>

                <div class="card border-0  pt-5">
                    <img src="images/Card/3.png" class="card-img-top "
                         alt=" کتاب زبان Oxford Word Skills Advanced ">
                    <div class="card-body">
                        <p class="card-text fs-6"> کتاب زبان Oxford Word Skills Advanced

                        </p>
                    </div>
                    <ul class="list-group  border-0 ">


                        <li class="list-group-item d-flex justify-content-end align-items-center border-0">
                            <p class="fw-bolder"> 68.000 تومان </p>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- category -->

<div class="container ">
    <div class="row mt-3 bg-light">
        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-tv fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">کالای دیجیتال</p>
            <p class="text-primary mt-3">+990000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-wrench fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">ابزار و تجهیزات </p>
            <p class="text-primary mt-3">+179000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-file-zip fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">پوشاک</p>
            <p class="text-primary mt-3">+135000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-piggy-bank fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">کودک و نوزاد</p>
            <p class="text-primary mt-3">+121000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-basket2 fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">سوپر مارکتی</p>
            <p class="text-primary mt-3">+721000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-suit-heart fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">زیبایی و سلامت</p>
            <p class="text-primary mt-3">+21000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-house fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">خانه و آشپزخانه</p>
            <p class="text-primary mt-3">+231000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-pen fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">لوازم و تحریر</p>
            <p class="text-primary mt-3">+121000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-yin-yang fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">ورزش و سفر</p>
            <p class="text-primary mt-3">+421000 کالا</p>

        </div>

        <div class="col-lg col-md col-sm text-center  mt-3">
            <a href=""><span class="bi bi-gem fs-1 text-primery"></span></a>
            <p class="text-dark mt-3">بومی</p>
            <p class="text-primary mt-3">+81000 کالا</p>

        </div>


    </div>
</div>

<!-- تبلیغات -->

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <img src="images/Ad/ad-11.jpg" class="img-fluid rounded-3" alt="...">

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <img src="images/Ad/ad-22.jpg" class="img-fluid rounded-3" alt="...">

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <img src="images/Ad/ad-33.jpg" class="img-fluid rounded-3" alt="...">

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <img src="images/Ad/ad-44.jpg" class="img-fluid rounded-3" alt="...">

        </div>
    </div>
</div>


<!-- موبایل -->

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-light border-bottom border-secondary">
                    <h5>گوشی موبایل</h5>
                    <p>بر اساس بازدید شما</p>
                </div>

                <div class="row p-4 ">
                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-1.jpg" class="card-img-top p-3"
                                 alt="iPhone 13 Pro Max ">
                            <div class="card-body">
                                <p class="card-text"> گوشی موبایل اپل مدل iPhone 13 Pro Max دو سیم‌ کارت
                                </p>
                            </div>
                            <ul class="list-group border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0 ">
                                    <p class="fw-bolder"> 41.489.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-2.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل سامسونگ ">
                            <div class="card-body">
                                <p class="card-text"> گوشی موبایل سامسونگ مدل Galaxy A12 Nacho
                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 3.780.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-3.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل سامسونگ ">
                            <div class="card-body">
                                <p class="card-text">
                                    گوشی موبایل سامسونگ مدل A52s 5G دو سیم‌کارت و
                                </p>
                            </div>
                            <ul class="list-group border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 10.560.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm ">
                        <div class="card border-0 ">
                            <img src="images/mobile/mobile-4.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل شیائومی مدل POCO X3 Pro ">
                            <div class="card-body">
                                <p class="card-text">
                                    گوشی موبایل شیائومی مدل POCO X3 Pro دو سیم‌ کارت </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 6.650.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg col-md col-sm">
                        <div class="card border-0">
                            <img src="images/mobile/mobile-5.jpg" class="card-img-top p-3"
                                 alt="گوشی موبایل اپل مدل iPhone 13 A2634  ">
                            <div class="card-body">
                                <p class="card-text fs-6"> گوشی موبایل اپل مدل iPhone 13 دو سیم‌ کارت

                                </p>
                            </div>
                            <ul class="list-group  border-0 ">


                                <li
                                    class="list-group-item d-flex justify-content-end align-items-center border-0">
                                    <p class="fw-bolder"> 26.400.000 تومان </p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>
</div>

<!-- تبلیغات -->

<div class="container">
    <div class="row mt-3">
        <div class="col-lg-6 col-md-6 col-sm-12 ">
            <img src="images/Ad/ad-55.jpg" class="img-fluid rounded-3" alt="...">

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12  mt-2  mt-sm-2 mt-md-2 mt-lg-0">
            <img src="images/Ad/ad-66.jpg" class="img-fluid rounded-3" alt="...">

        </div>


    </div>
</div>

@endsection
