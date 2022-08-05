
@include("admin_header")

<div class="authentication-bg d-flex align-items-center min-vh-100 py-5">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center">
                <a href="index.html" class="d-block auth-logo">
                    <img src="/images/logo-dark.png" alt="" height="24" class="logo logo-dark mx-auto">
                    <img src="/images/logo-light.png" alt="" height="24" class="logo logo-light mx-auto">
                </a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="p-4">
                <div class="card overflow-hidden mt-2">
                    <div class="auth-logo text-center bg-primary position-relative">
                        <div class="img-overlay"></div>
                        <div class="position-relative pt-4 py-5 mb-1">
                            <h5 class="text-white">خوش آمدید</h5>
                            <p class="text-white-50 mb-0">لطفا برای ادامه همکاری وارد شوید</p>
                        </div>
                    </div>
                    <div class="card-body position-relative">
                        <div class="p-4 mt-n5 card rounded">
                            <form class="form-horizontal" method="post" action="{{ url("/admin/login") }}">

                                <div class="mb-3">
                                    <label for="username" class="form-label">ایمیل یا موبایل</label>
                                    <input type="text" name="email" class="form-control" id="username" placeholder="ایمیل یا موبایل خود را وارد کنید">
                                </div>

                                <div class="mb-3">
                                    <label for="userpassword">گذرواژه</label>
                                    <input type="password" name="password" class="form-control" id="userpassword" placeholder="گذرواژه خود را وارد کنید">
                                </div>

                                <div class="form-check mt-3">
                                    <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                    <label class="form-check-label" for="auth-remember-check">یادآوری</label>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">ورود</button>
                                </div>

                                <input type="hidden" name="_token" value="{{csrf_token()}}" >


                                <div class="mt-4 text-center">
                                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i>  گذرواژه خود را فراموش کردید ؟</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

</div>

@include("admin_footer")

