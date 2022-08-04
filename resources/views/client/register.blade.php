@extends('template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="{{ url("/register") }}">
                    <div class="mb-3">
                        <label  class="form-label">نام</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">موبایل</label>
                        <input type="text" name="mobile" class="form-control" >

                    </div>

                    <div class="mb-3">
                        <label  class="form-label">ایمیل</label>
                        <input type="text" name="email" class="form-control">

                    </div>

                    <div class="mb-3">
                        <label  class="form-label">نام کاربری</label>
                        <input type="text" name="username" class="form-control" >

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">گذرواژه</label>
                        <input type="password" name="password" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">تکرار گذرواژه</label>
                        <input type="password" name="password2" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">شهر محل سکونت</label>
                        <select class="form-select" name="city" aria-label="Default select example">
                            @foreach($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="mb-3">
                        <label  class="form-label">آدرس </label>
                        <textarea class="form-control" name="address"  rows="3"></textarea>

                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}" >

                    <button type="submit" class="btn btn-primary">ثبت نام  </button>
                </form>
            </div>
        </div>
    </div>

@endsection
