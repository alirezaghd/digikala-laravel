@extends('template')

@section('content')

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                <form method="post" action="{{ url("/login") }}">--}}
{{--                    <div class="mb-3">--}}
{{--                        <label  class="form-label">ایمیل یا موبایل</label>--}}
{{--                        <input type="text" name="email" class="form-control" >--}}

{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <label  class="form-label">گذرواژه</label>--}}
{{--                        <input type="password" name="password" class="form-control" >--}}
{{--                    </div>--}}
{{--                    <div class="mb-3 form-check">--}}
{{--                        <input type="checkbox" class="form-check-input" name="remember_me" id="exampleCheck1">--}}
{{--                        <label class="form-check-label"  for="exampleCheck1">Check me out</label>--}}
{{--                    </div>--}}


{{--                    <button type="submit" class="btn btn-primary">ورود</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="section">
        <div class="container">
            <div class="justify-content-center row">
                <div class="col-lg-5 col-xxl-4">
                    <div class="card">
                        <div class="card-header bg-transparent py-3"><h3 class="h4 mb-0">ورود به صفحه کاربری</h3></div>
                        <div class="card-body">
                            <form class="" method="post" action="{{ url("/login") }}">
                                <div class="form-group mb-3">
                                    <label for="email_1" class="form-label">ایمیل یا موبایل<span class="text-danger">*</span></label>
                                    <input type="text" id="email_1" name="email" class="form-control" placeholder="ایمیل یا موبایل"></div>
                                <div class="form-group mb-3">
                                    <div class="row align-items-center">
                                        <label class="form-label col" for="exampleInputPassword01">گذرواژه<span class="text-danger">*</span>
                                        </label>
                                        <span class="col ms-auto small text-end">
                                            <a href="#!">فراموشی گذرواژه</a>
                                        </span>
                                    </div>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword01" placeholder="*********"></div>
                                <!-- Checkbox -->
                                <input type="hidden" name="_token" value="{{csrf_token()}}" >

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="form2Example3" >
                                    <label class="form-check-label" for="form2Example3">یاد آوری</label></div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary w-100">ورود</button>
                                </div>
                            </form>
                            <div class="text-center pt-4 pb-5" style=""><span
                                    class="px-3 bg-white d-inline-block align-top lh-sm">OR</span>
                                <div class="border-bottom mt-n3"></div>
                            </div>
                            <div class="row g-2">
                                <div class="col">
                                    <button class="btn w-100 btn-dark" type="button"><i class="bi bi-facebook me-2"></i>
                                        Facebook
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn w-100 btn-dark" type="button"><i class="bi bi-twitter me-2"></i>
                                        Twitter
                                    </button>
                                </div>
                            </div>
                            <div class="pt-4 text-center"><span class="text-muted">Don't have an account? <a
                                        href="sign-up.html">Signup here</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
