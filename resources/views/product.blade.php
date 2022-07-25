@extends('template')

@section('title')
    کامیون اسبا بازی مسسخره گرووون 559 تومنی
@endsection


@section('content')


<div class="container-fluid ">
    <div class="row mt-3 product_bg" >
        <div class="col-lg-4 ">
            <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{url($products->url)}}" class=" img-fluid " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/images/products/iphone13-go.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{url('/images/products/iphone13-gray.jpg')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-lg-5 ">
            <div class="card mb-3 bg-transparent border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title">{{$products->name}} </h5>

                    <ul class="list-group list-group-flush mt-5">
                        <li class="list-group-item fw-bold">ویژگی‌ها

                        </li>
                        <li class="list-group-item">فناوری صفحه‌نمایش :
                            Super Retina XDR OLED</li>
                        <li class="list-group-item">اندازه :

                            6.7</li>
                        <li class="list-group-item">شبکه های ارتباطی :

                            2G، 3G، 4G، 5G</li>
                        <li class="list-group-item">حافظه داخلی :

                            256 گیگابایت</li>
                        <li class="list-group-item">نسخه سیستم عامل :

                            iOS 15</li>
                    </ul>

                </div>
            </div>

        </div>

        <div class="col-lg-3 ">
            <div class="card mb-3 h-100 product_price">
                <div class="card-header">
                    <p class=" fw-bold">فروشنده

                    </p>
                </div>
                <div class="card-body ">
                    <ul class="list-group list-group-flush  mt-5 ">
                        <li class="list-group-item">
                            دیجیکالا

                           </li>

                        <li class="list-group-item ">گارانتی ۱۸ ماهه عمران تل(نیک مهر عمرانی)


                        </li>

                        <li class="list-group-item">موجود در انبار دیجیکالا

                       </li>
                        <li class="list-group-item">

                            150 امتیاز دیجی کلاب</li>

                    </ul>

                </div>
                <div class="card-footer  text-center">
                    <h6>قیمت : {{$products->price}} تومان</h6>
                    <button class="btn btn-danger">  افزودن به سبد خرید</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 product_bg ">
        <div class="col-12">
            <p class="text-dark lh-base p-5">
                {{$products->description}}
            </p>
        </div>
    </div>
</div>

@endsection
