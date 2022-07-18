<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href= "{{url('/css/bootstrap.rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{url('/css/all.css')}}">
</head>

<body>
<div class="container-fluid">
    <nav class="navbar sticky-top navbar-expand-lg  navbar-light bg-light ">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" >
                <a class="navbar-brand" href="#">
                    <img src="images/Logo/logo.svg" alt="لوگو دیجیکالا" height="24">

                </a>
                <form class="d-flex ">
                    <input class="form-control me-2 mt-2 border-0  " type="search"  id="search" placeholder="Search "
                           aria-label="Search" >
                </form>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                <i class="far fa-user"></i>

                ورود به حساب کاربری
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>


            </div>
            <button type="button" class="btn btn-outline-danger ms-3 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" fill="currentColor"
                     class="bi bi-cart" viewBox="0 0 16 16">
                    <path
                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg></button>

        </div>
    </nav>

    <nav class="navbar navbar-expand-lg  navbar-light bg-light ">
        <div class="container-fluid">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#"> <i class="bi bi-justify"></i> دسته بندی
                            کالا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="bi bi-basket"></i> سوپر مارکت </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> <i class="bi bi-percent"></i> تخفیف ها و پیشنهادات </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دیجی کالا من </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دیجی پلاس </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دیجی کلاب </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">دیجی پی </a>
                    </li>


                </ul>
            </div>

            <p> لطفا شهر و استان خود را انتخاب کنید <span class="bi bi-geo-alt-fill"></span></p>

        </div>
    </nav>
